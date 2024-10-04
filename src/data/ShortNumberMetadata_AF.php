<?php
/**
 * This file has been @generated by a phing task by {@link BuildMetadataPHPFromXml}.
 * See [README.md](README.md#generating-data) for more information.
 *
 * Pull requests changing data in these files will not be accepted. See the
 * [FAQ in the README](README.md#problems-with-invalid-numbers] on how to make
 * metadata changes.
 *
 * Do not modify this file directly!
 */


return  [
    'generalDesc' =>
     [
         'NationalNumberPattern' => '[14]\\d\\d(?:\\d{2})?',
         'PossibleLength' =>
          [
              0 => 3,
              1 => 5,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'tollFree' =>
     [
         'NationalNumberPattern' => '1(?:0[02]|19)',
         'ExampleNumber' => '100',
         'PossibleLength' =>
          [
              0 => 3,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'premiumRate' =>
     [
         'PossibleLength' =>
          [
              0 => -1,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'emergency' =>
     [
         'NationalNumberPattern' => '1(?:0[02]|19)',
         'ExampleNumber' => '100',
         'PossibleLength' =>
          [
              0 => 3,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'shortCode' =>
     [
         'NationalNumberPattern' => '1(?:0[02]|19)|40404',
         'ExampleNumber' => '100',
         'PossibleLength' =>
          [
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'standardRate' =>
     [
         'PossibleLength' =>
          [
              0 => -1,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'carrierSpecific' =>
     [
         'NationalNumberPattern' => '404\\d\\d',
         'ExampleNumber' => '40400',
         'PossibleLength' =>
          [
              0 => 5,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'smsServices' =>
     [
         'NationalNumberPattern' => '404\\d\\d',
         'ExampleNumber' => '40400',
         'PossibleLength' =>
          [
              0 => 5,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'id' => 'AF',
    'countryCode' => 0,
    'internationalPrefix' => '',
    'sameMobileAndFixedLinePattern' => false,
    'numberFormat' =>
     [
     ],
    'intlNumberFormat' =>
     [
     ],
    'mainCountryForCode' => false,
    'mobileNumberPortableRegion' => false,
];
