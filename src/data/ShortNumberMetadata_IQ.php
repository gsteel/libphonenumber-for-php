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
         'NationalNumberPattern' => '[1479]\\d{2,4}',
         'PossibleLength' =>
          [
              0 => 3,
              1 => 4,
              2 => 5,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'tollFree' =>
     [
         'NationalNumberPattern' => '1(?:0[04]|15|22)',
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
         'NationalNumberPattern' => '1(?:0[04]|15|22)',
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
         'NationalNumberPattern' => '1(?:0[04]|15|22)|4432|71117|9988',
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
         'NationalNumberPattern' => '(?:443|711\\d|998)\\d',
         'ExampleNumber' => '4430',
         'PossibleLength' =>
          [
              0 => 4,
              1 => 5,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'smsServices' =>
     [
         'NationalNumberPattern' => '(?:443|711\\d|998)\\d',
         'ExampleNumber' => '4430',
         'PossibleLength' =>
          [
              0 => 4,
              1 => 5,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'id' => 'IQ',
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
