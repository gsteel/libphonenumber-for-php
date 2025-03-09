<?php

/**
 * libphonenumber-for-php data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

declare(strict_types=1);

namespace libphonenumber\data;

use libphonenumber\PhoneMetadata;
use libphonenumber\PhoneNumberDesc;

/**
 * @internal
 */
class ShortNumberMetadata_JO extends PhoneMetadata
{
    protected const ID = 'JO';
    protected const COUNTRY_CODE = 0;

    protected ?string $internationalPrefix = '';

    public function __construct()
    {
        $this->generalDesc = (new PhoneNumberDesc())
            ->setNationalNumberPattern('[19]\d\d(?:\d{2})?')
            ->setPossibleLength([3, 5]);
        $this->premiumRate = (new PhoneNumberDesc())
            ->setNationalNumberPattern('9[0-4689]\d{3}')
            ->setExampleNumber('90000')
            ->setPossibleLength([5]);
        $this->tollFree = (new PhoneNumberDesc())
            ->setNationalNumberPattern('1(?:0[235]|1[2-6]|9[127])|911')
            ->setExampleNumber('102')
            ->setPossibleLength([3]);
        $this->emergency = (new PhoneNumberDesc())
            ->setNationalNumberPattern('1(?:12|9[127])|911')
            ->setExampleNumber('112')
            ->setPossibleLength([3]);
        $this->short_code = (new PhoneNumberDesc())
            ->setNationalNumberPattern('1(?:0[2359]|1[0-68]|9[0-24-79])|9[0-4689]\d{3}|911')
            ->setExampleNumber('102');
        $this->standard_rate = PhoneNumberDesc::empty();
        $this->carrierSpecific = (new PhoneNumberDesc())
            ->setNationalNumberPattern('9[0-4689]\d{3}')
            ->setExampleNumber('90000')
            ->setPossibleLength([5]);
        $this->smsServices = (new PhoneNumberDesc())
            ->setNationalNumberPattern('9[0-4689]\d{3}')
            ->setExampleNumber('90000')
            ->setPossibleLength([5]);
    }
}
