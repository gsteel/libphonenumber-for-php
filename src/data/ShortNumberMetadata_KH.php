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
         'NationalNumberPattern' => '[146]\\d\\d(?:\\d{2})?',
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
         'NationalNumberPattern' => '11[7-9]|666',
         'ExampleNumber' => '117',
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
         'NationalNumberPattern' => '11[7-9]|666',
         'ExampleNumber' => '117',
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
         'NationalNumberPattern' => '11[7-9]|40404|666',
         'ExampleNumber' => '117',
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
    'id' => 'KH',
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
