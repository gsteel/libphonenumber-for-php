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
         'NationalNumberPattern' => '(?:[3489]|6\\d)\\d{7}',
         'PossibleLength' =>
          [
              0 => 8,
              1 => 9,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'fixedLine' =>
     [
         'NationalNumberPattern' => '(?:870|9[2-47-9]\\d)\\d{5}',
         'ExampleNumber' => '99123456',
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
         'NationalNumberPattern' => '4(?:[469]\\d|5[1-9])\\d{5}|(?:3|6\\d)\\d{7}',
         'ExampleNumber' => '612345678',
         'PossibleLength' =>
          [
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'tollFree' =>
     [
         'NationalNumberPattern' => '(?:800|90\\d)\\d{5}',
         'ExampleNumber' => '90123456',
         'PossibleLength' =>
          [
              0 => 8,
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
         'NationalNumberPattern' => '8[07]0\\d{5}',
         'PossibleLength' =>
          [
              0 => 8,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'id' => 'MC',
    'countryCode' => 377,
    'internationalPrefix' => '00',
    'nationalPrefix' => '0',
    'nationalPrefixForParsing' => '0',
    'sameMobileAndFixedLinePattern' => false,
    'numberFormat' =>
     [
         0 =>
          [
              'pattern' => '(\\d{3})(\\d{3})(\\d{2})',
              'format' => '$1 $2 $3',
              'leadingDigitsPatterns' =>
               [
                   0 => '87',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         1 =>
          [
              'pattern' => '(\\d{2})(\\d{3})(\\d{3})',
              'format' => '$1 $2 $3',
              'leadingDigitsPatterns' =>
               [
                   0 => '4',
               ],
              'nationalPrefixFormattingRule' => '0$1',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         2 =>
          [
              'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d{2})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '[389]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         3 =>
          [
              'pattern' => '(\\d)(\\d{2})(\\d{2})(\\d{2})(\\d{2})',
              'format' => '$1 $2 $3 $4 $5',
              'leadingDigitsPatterns' =>
               [
                   0 => '6',
               ],
              'nationalPrefixFormattingRule' => '0$1',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
     ],
    'intlNumberFormat' =>
     [
         0 =>
          [
              'pattern' => '(\\d{2})(\\d{3})(\\d{3})',
              'format' => '$1 $2 $3',
              'leadingDigitsPatterns' =>
               [
                   0 => '4',
               ],
              'nationalPrefixFormattingRule' => '0$1',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         1 =>
          [
              'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d{2})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '[389]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         2 =>
          [
              'pattern' => '(\\d)(\\d{2})(\\d{2})(\\d{2})(\\d{2})',
              'format' => '$1 $2 $3 $4 $5',
              'leadingDigitsPatterns' =>
               [
                   0 => '6',
               ],
              'nationalPrefixFormattingRule' => '0$1',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
     ],
    'mainCountryForCode' => false,
    'mobileNumberPortableRegion' => false,
];
