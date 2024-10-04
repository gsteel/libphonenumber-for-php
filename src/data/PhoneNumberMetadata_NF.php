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
         'NationalNumberPattern' => '[13]\\d{5}',
         'PossibleLength' =>
          [
              0 => 6,
          ],
         'PossibleLengthLocalOnly' =>
          [
              0 => 5,
          ],
     ],
    'fixedLine' =>
     [
         'NationalNumberPattern' => '(?:1(?:06|17|28|39)|3[0-2]\\d)\\d{3}',
         'ExampleNumber' => '106609',
         'PossibleLength' =>
          [
          ],
         'PossibleLengthLocalOnly' =>
          [
              0 => 5,
          ],
     ],
    'mobile' =>
     [
         'NationalNumberPattern' => '(?:14|3[58])\\d{4}',
         'ExampleNumber' => '381234',
         'PossibleLength' =>
          [
          ],
         'PossibleLengthLocalOnly' =>
          [
              0 => 5,
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
    'id' => 'NF',
    'countryCode' => 672,
    'internationalPrefix' => '00',
    'nationalPrefixForParsing' => '([0-258]\\d{4})$',
    'nationalPrefixTransformRule' => '3$1',
    'sameMobileAndFixedLinePattern' => false,
    'numberFormat' =>
     [
         0 =>
          [
              'pattern' => '(\\d{2})(\\d{4})',
              'format' => '$1 $2',
              'leadingDigitsPatterns' =>
               [
                   0 => '1[0-3]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         1 =>
          [
              'pattern' => '(\\d)(\\d{5})',
              'format' => '$1 $2',
              'leadingDigitsPatterns' =>
               [
                   0 => '[13]',
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
