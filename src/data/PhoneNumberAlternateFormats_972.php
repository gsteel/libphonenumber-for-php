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
    'id' => '',
    'countryCode' => 972,
    'internationalPrefix' => '',
    'sameMobileAndFixedLinePattern' => false,
    'numberFormat' =>
     [
         0 =>
          [
              'pattern' => '(\\d)(\\d{3})(\\d{2})(\\d{2})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '[2-489]',
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
