<?php

declare(strict_types=1);

/**
 * @author joshuag
 * @created: 04/08/2015 09:03
 * @project libphonenumber-for-php
 */

namespace libphonenumber;

use RuntimeException;

/**
 * @internal
 */
class MultiFileMetadataSourceImpl implements MetadataSourceInterface
{
    /**
     * A mapping from a region code to the PhoneMetadata for that region.
     * @var PhoneMetadata[]
     */
    protected array $regionToMetadataMap = [];

    /**
     * A mapping from a country calling code for a non-geographical entity to the PhoneMetadata for
     * that country calling code. Examples of the country calling codes include 800 (International
     * Toll Free Service) and 808 (International Shared Cost Service).
     * @var PhoneMetadata[]
     */
    protected array $countryCodeToNonGeographicalMetadataMap = [];

    /**
     * @param string $currentFilePrefix The prefix of the metadata class names from which region data is loaded
     */
    public function __construct(
        protected readonly string $currentFilePrefix = __NAMESPACE__ . '\data\PhoneNumberMetadata_'
    ) {}

    public function getMetadataForRegion(string $regionCode): PhoneMetadata
    {
        $regionCode = strtoupper($regionCode);

        if (!array_key_exists($regionCode, $this->regionToMetadataMap)) {
            // The regionCode here will be valid and won't be '001', so we don't need to worry about
            // what to pass in for the country calling code.
            $this->loadMetadataFromFile($this->currentFilePrefix, $regionCode, 0);
        }

        return $this->regionToMetadataMap[$regionCode];
    }

    public function getMetadataForNonGeographicalRegion(int $countryCallingCode): PhoneMetadata
    {
        if (!array_key_exists($countryCallingCode, $this->countryCodeToNonGeographicalMetadataMap)) {
            $this->loadMetadataFromFile($this->currentFilePrefix, PhoneNumberUtil::REGION_CODE_FOR_NON_GEO_ENTITY, $countryCallingCode);
        }

        return $this->countryCodeToNonGeographicalMetadataMap[$countryCallingCode];
    }

    /**
     * @throws RuntimeException
     */
    public function loadMetadataFromFile(string $filePrefix, string $regionCode, int $countryCallingCode): void
    {
        $regionCode = strtoupper($regionCode);

        $isNonGeoRegion = PhoneNumberUtil::REGION_CODE_FOR_NON_GEO_ENTITY === $regionCode;


        $class = $filePrefix . ($isNonGeoRegion ? $countryCallingCode : ucfirst($regionCode));

        if (!class_exists($class)) {
            throw new RuntimeException('missing metadata: ' . $class);
        }

        $metadata = new $class();

        if ($isNonGeoRegion) {
            $this->countryCodeToNonGeographicalMetadataMap[$countryCallingCode] = $metadata;
        } else {
            $this->regionToMetadataMap[$regionCode] = $metadata;
        }
    }
}
