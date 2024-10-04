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
         'NationalNumberPattern' => '(?:2|7\\d\\d|90)\\d{4}',
         'PossibleLength' =>
          [
              0 => 5,
              1 => 6,
              2 => 7,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'fixedLine' =>
     [
         'NationalNumberPattern' => '2[02-9]\\d{3}',
         'ExampleNumber' => '20123',
         'PossibleLength' =>
          [
              0 => 5,
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'mobile' =>
     [
         'NationalNumberPattern' => '(?:7[01]\\d|90)\\d{4}',
         'ExampleNumber' => '901234',
         'PossibleLength' =>
          [
              0 => 6,
              1 => 7,
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
    'id' => 'TV',
    'countryCode' => 688,
    'internationalPrefix' => '00',
    'sameMobileAndFixedLinePattern' => false,
    'numberFormat' =>
     [
         0 =>
          [
              'pattern' => '(\\d{2})(\\d{3})',
              'format' => '$1 $2',
              'leadingDigitsPatterns' =>
               [
                   0 => '2',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         1 =>
          [
              'pattern' => '(\\d{2})(\\d{4})',
              'format' => '$1 $2',
              'leadingDigitsPatterns' =>
               [
                   0 => '90',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         2 =>
          [
              'pattern' => '(\\d{2})(\\d{5})',
              'format' => '$1 $2',
              'leadingDigitsPatterns' =>
               [
                   0 => '7',
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
