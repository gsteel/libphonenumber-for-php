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
         'NationalNumberPattern' => '4\\d{5}(?:\\d{2})?|8\\d{7,8}',
         'PossibleLength' =>
          [
              0 => 6,
              1 => 8,
              2 => 9,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'fixedLine' =>
     [
         'NationalNumberPattern' => '4(?:0[4-689]|9[4-68])\\d{5}',
         'ExampleNumber' => '40412345',
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
         'NationalNumberPattern' => '8[7-9]\\d{6}',
         'ExampleNumber' => '87123456',
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
         'NationalNumberPattern' => '80[0-5]\\d{6}',
         'ExampleNumber' => '800012345',
         'PossibleLength' =>
          [
              0 => 9,
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
         'NationalNumberPattern' => '499\\d{5}',
         'ExampleNumber' => '49901234',
         'PossibleLength' =>
          [
              0 => 8,
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
         'NationalNumberPattern' => '44\\d{4}',
         'ExampleNumber' => '440123',
         'PossibleLength' =>
          [
              0 => 6,
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
         'NationalNumberPattern' => '44\\d{4}',
         'PossibleLength' =>
          [
              0 => 6,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'id' => 'PF',
    'countryCode' => 689,
    'internationalPrefix' => '00',
    'sameMobileAndFixedLinePattern' => false,
    'numberFormat' =>
     [
         0 =>
          [
              'pattern' => '(\\d{2})(\\d{2})(\\d{2})',
              'format' => '$1 $2 $3',
              'leadingDigitsPatterns' =>
               [
                   0 => '44',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         1 =>
          [
              'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d{2})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '4|8[7-9]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         2 =>
          [
              'pattern' => '(\\d{3})(\\d{2})(\\d{2})(\\d{2})',
              'format' => '$1 $2 $3 $4',
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
     ],
    'mainCountryForCode' => false,
    'mobileNumberPortableRegion' => false,
];
