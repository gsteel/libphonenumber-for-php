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
class ShortNumberMetadata_BZ extends PhoneMetadata
{
    protected const ID = 'BZ';
    protected const COUNTRY_CODE = 0;

    protected ?string $internationalPrefix = '';

    public function __construct()
    {
        $this->generalDesc = (new PhoneNumberDesc())
            ->setNationalNumberPattern('9\d\d?')
            ->setPossibleLength([2, 3]);
        $this->premiumRate = PhoneNumberDesc::empty();
        $this->tollFree = (new PhoneNumberDesc())
            ->setNationalNumberPattern('9(?:0|11|22|66|77|9[09])')
            ->setExampleNumber('90');
        $this->emergency = (new PhoneNumberDesc())
            ->setNationalNumberPattern('9(?:0|11|90)')
            ->setExampleNumber('90');
        $this->short_code = (new PhoneNumberDesc())
            ->setNationalNumberPattern('9(?:0|11|22|66|77|9[09])')
            ->setExampleNumber('90');
        $this->standard_rate = PhoneNumberDesc::empty();
        $this->carrierSpecific = PhoneNumberDesc::empty();
        $this->smsServices = PhoneNumberDesc::empty();
    }
}
