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
         'NationalNumberPattern' => '8\\d{10}|[237-9]\\d{7}',
         'PossibleLength' =>
          [
              0 => 8,
              1 => 11,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'fixedLine' =>
     [
         'NationalNumberPattern' => '2(?:2(?:0[0-59]|1[1-9]|[23]\\d|4[02-6]|5[57]|6[245]|7[0135689]|8[01346-9]|9[0-2])|4(?:0[578]|2[3-59]|3[13-9]|4[0-68]|5[1-3589])|5(?:0[2357-9]|1[1-356]|4[03-5]|5\\d|6[014-69]|7[04]|80)|6(?:[056]\\d|17|2[067]|3[047]|4[0-378]|[78][0-8]|9[01])|7(?:0[5-79]|6[46-9]|7[02-9]|8[034]|91)|8(?:79|8[0-357-9]|9[1-57-9]))\\d{4}',
         'ExampleNumber' => '22123456',
         'PossibleLength' =>
          [
              0 => 8,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'mobile' =>
     [
         'NationalNumberPattern' => '[37-9]\\d{7}',
         'ExampleNumber' => '91234567',
         'PossibleLength' =>
          [
              0 => 8,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'tollFree' =>
     [
         'NationalNumberPattern' => '8002\\d{7}',
         'ExampleNumber' => '80021234567',
         'PossibleLength' =>
          [
              0 => 11,
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
         'NationalNumberPattern' => '8002\\d{7}',
         'PossibleLength' =>
          [
              0 => 11,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'id' => 'HN',
    'countryCode' => 504,
    'internationalPrefix' => '00',
    'sameMobileAndFixedLinePattern' => false,
    'numberFormat' =>
     [
         0 =>
          [
              'pattern' => '(\\d{4})(\\d{4})',
              'format' => '$1-$2',
              'leadingDigitsPatterns' =>
               [
                   0 => '[237-9]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         1 =>
          [
              'pattern' => '(\\d{3})(\\d{4})(\\d{4})',
              'format' => '$1 $2 $3',
              'leadingDigitsPatterns' =>
               [
                   0 => '8',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
     ],
    'intlNumberFormat' =>
     [
         0 =>
          [
              'pattern' => '(\\d{4})(\\d{4})',
              'format' => '$1-$2',
              'leadingDigitsPatterns' =>
               [
                   0 => '[237-9]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
     ],
    'mainCountryForCode' => false,
    'mobileNumberPortableRegion' => false,
];
