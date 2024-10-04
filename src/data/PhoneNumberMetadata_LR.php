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
         'NationalNumberPattern' => '(?:[245]\\d|33|77|88)\\d{7}|(?:2\\d|[4-6])\\d{6}',
         'PossibleLength' =>
          [
              0 => 7,
              1 => 8,
              2 => 9,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'fixedLine' =>
     [
         'NationalNumberPattern' => '2\\d{7}',
         'ExampleNumber' => '21234567',
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
         'NationalNumberPattern' => '(?:(?:(?:22|33)0|555|(?:77|88)\\d)\\d|4(?:240|[67]))\\d{5}|[56]\\d{6}',
         'ExampleNumber' => '770123456',
         'PossibleLength' =>
          [
              0 => 7,
              1 => 9,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'tollFree' =>
     [
         'PossibleLength' =>
          [
              0 => -1,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'premiumRate' =>
     [
         'NationalNumberPattern' => '332(?:02|[34]\\d)\\d{4}',
         'ExampleNumber' => '332021234',
         'PossibleLength' =>
          [
              0 => 9,
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
    'id' => 'LR',
    'countryCode' => 231,
    'internationalPrefix' => '00',
    'nationalPrefix' => '0',
    'nationalPrefixForParsing' => '0',
    'sameMobileAndFixedLinePattern' => false,
    'numberFormat' =>
     [
         0 =>
          [
              'pattern' => '(\\d)(\\d{3})(\\d{3})',
              'format' => '$1 $2 $3',
              'leadingDigitsPatterns' =>
               [
                   0 => '4[67]|[56]',
               ],
              'nationalPrefixFormattingRule' => '0$1',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         1 =>
          [
              'pattern' => '(\\d{2})(\\d{3})(\\d{3})',
              'format' => '$1 $2 $3',
              'leadingDigitsPatterns' =>
               [
                   0 => '2',
               ],
              'nationalPrefixFormattingRule' => '0$1',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         2 =>
          [
              'pattern' => '(\\d{2})(\\d{3})(\\d{4})',
              'format' => '$1 $2 $3',
              'leadingDigitsPatterns' =>
               [
                   0 => '[2-578]',
               ],
              'nationalPrefixFormattingRule' => '0$1',
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
