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
         'NationalNumberPattern' => '[0189]\\d\\d(?:\\d{2})?',
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
         'NationalNumberPattern' => '(?:0[167]|81)\\d{3}|[19]99',
         'ExampleNumber' => '199',
         'PossibleLength' =>
          [
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'premiumRate' =>
     [
         'NationalNumberPattern' => '9[148]\\d{3}',
         'ExampleNumber' => '91000',
         'PossibleLength' =>
          [
              0 => 5,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'emergency' =>
     [
         'NationalNumberPattern' => '[19]99',
         'ExampleNumber' => '199',
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
         'NationalNumberPattern' => '1(?:[02]\\d|12|4[01]|51|8[18]|9[169])|99[02489]|(?:0[167]|8[158]|9[148])\\d{3}',
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
         'NationalNumberPattern' => '0[67]\\d{3}|88000|98555',
         'ExampleNumber' => '06000',
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
         'NationalNumberPattern' => '88000|98555',
         'ExampleNumber' => '88000',
         'PossibleLength' =>
          [
              0 => 5,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'id' => 'BH',
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
