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
         'NationalNumberPattern' => '(?:[256]\\d\\d|800)\\d{5}',
         'PossibleLength' =>
          [
              0 => 8,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'fixedLine' =>
     [
         'NationalNumberPattern' => '2\\d{7}',
         'ExampleNumber' => '22123456',
         'PossibleLength' =>
          [
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'mobile' =>
     [
         'NationalNumberPattern' => '[56]\\d{7}',
         'ExampleNumber' => '50123456',
         'PossibleLength' =>
          [
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'tollFree' =>
     [
         'NationalNumberPattern' => '800[1256]\\d{4}',
         'ExampleNumber' => '80021234',
         'PossibleLength' =>
          [
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
    'sharedCost' =>
     [
         'PossibleLength' =>
          [
              0 => -1,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'personalNumber' =>
     [
         'PossibleLength' =>
          [
              0 => -1,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'voip' =>
     [
         'PossibleLength' =>
          [
              0 => -1,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'pager' =>
     [
         'PossibleLength' =>
          [
              0 => -1,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'uan' =>
     [
         'PossibleLength' =>
          [
              0 => -1,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'voicemail' =>
     [
         'PossibleLength' =>
          [
              0 => -1,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'noInternationalDialling' =>
     [
         'PossibleLength' =>
          [
              0 => -1,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'id' => 'LS',
    'countryCode' => 266,
    'internationalPrefix' => '00',
    'sameMobileAndFixedLinePattern' => false,
    'numberFormat' =>
     [
         0 =>
          [
              'pattern' => '(\\d{4})(\\d{4})',
              'format' => '$1 $2',
              'leadingDigitsPatterns' =>
               [
                   0 => '[2568]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
     ],
    'intlNumberFormat' =>
     [
     ],
    'mainCountryForCode' => false,
    'mobileNumberPortableRegion' => false,
];
