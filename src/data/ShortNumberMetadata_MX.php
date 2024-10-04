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
         'NationalNumberPattern' => '[0579]\\d{2,4}',
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
         'NationalNumberPattern' => '0(?:6[0568]|80)|911',
         'ExampleNumber' => '060',
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
         'NationalNumberPattern' => '(?:530\\d|776)\\d',
         'ExampleNumber' => '7760',
         'PossibleLength' =>
          [
              0 => 4,
              1 => 5,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'emergency' =>
     [
         'NationalNumberPattern' => '0(?:6[0568]|80)|911',
         'ExampleNumber' => '060',
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
         'NationalNumberPattern' => '0[1-9]\\d|53053|7766|911',
         'ExampleNumber' => '010',
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
         'NationalNumberPattern' => '0(?:[249]0|[35][01])',
         'ExampleNumber' => '020',
         'PossibleLength' =>
          [
              0 => 3,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'smsServices' =>
     [
         'PossibleLength' =>
          [
              0 => -1,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'id' => 'MX',
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
