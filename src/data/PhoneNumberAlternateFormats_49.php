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
    'countryCode' => 49,
    'internationalPrefix' => '',
    'sameMobileAndFixedLinePattern' => false,
    'numberFormat' =>
     [
         0 =>
          [
              'pattern' => '(\\d{2})(\\d{3})(\\d{3,4})',
              'format' => '$1 $2 $3',
              'leadingDigitsPatterns' =>
               [
                   0 => '3[02]|40|[68]9',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         1 =>
          [
              'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d{2})(\\d{2})',
              'format' => '$1 $2 $3 $4 $5',
              'leadingDigitsPatterns' =>
               [
                   0 => '2(?:0[4-6]|1(?:[035-9]|29)|3[0235-9]|7[2-7])|3(?:0|3(?:0[1-467]|2[127-9]|3[124578]|7[1257-9]|8[1256]|9[145])|4(?:2[135]|4[13578]|9[1346])|5(?:0[14]|2[1-3589]|6[1-4]|7[13468]|8[13568])|6(?:2[1-489]|3[124-6]|6[13]|7[12579]|8[1-356]|9[135])|7(?:2[1-7]|4[145]|6[1-5]|7[1-4])|8(?:21|6|7[1467]|8[136])|9(?:0[12479]|2[1358]|4[134679]|6[1-9]|7[136]|8[147]))|4[01]|50|6[09]|7(?:0|8[02-5]|9[03-7])|8(?:3[02-46-9]|5[03-9]|6[2-8]|8[024-6]|9)|9(?:0[7-9]|7[02-467])|(?:45|84)[02-6]|3(?:83|99)[1468]|3[68]4[1347]|3(?:47|60)[1356]|(?:66|71|80)[2-9]|3(?:3[46]|46|5[49])[1246]|(?:22|47|81)[02-79]|3[4579]3[1357]|(?:28|49|5[79]|7[27]|9[589])[02-7]|(?:2[569]|4[2-48]|5[124-6]|6[1-358]|73|82|9[1-4])[02-9]|(?:24|[49]6|5[38]|6[47]|7[4-6]|87)[02-8]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         2 =>
          [
              'pattern' => '(\\d{2})(\\d{4})(\\d{3,4})',
              'format' => '$1 $2 $3',
              'leadingDigitsPatterns' =>
               [
                   0 => '3[02]|40|[68]9',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         3 =>
          [
              'pattern' => '(\\d{2})(\\d{3})(\\d{2})(\\d{1,2})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '3[02]|40|[68]9',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         4 =>
          [
              'pattern' => '(\\d{2})(\\d{3})(\\d{3})(\\d{2,3})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '3[02]|40|[68]9',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         5 =>
          [
              'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d)(\\d{2})(\\d{2})',
              'format' => '$1 $2 $3 $4 $5 $6',
              'leadingDigitsPatterns' =>
               [
                   0 => '3[02]|40|[68]9',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         6 =>
          [
              'pattern' => '(\\d{3})(\\d{3})(\\d{2,4})',
              'format' => '$1 $2 $3',
              'leadingDigitsPatterns' =>
               [
                   0 => '2(?:0[1-389]|12[0-8])|3(?:[35-9][15]|4[015])|906|2(?:[13][14]|2[18])|(?:2[4-9]|4[2-9]|[579][1-9]|[68][1-8])1',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         7 =>
          [
              'pattern' => '(\\d{3})(\\d{4})(\\d{3,4})',
              'format' => '$1 $2 $3',
              'leadingDigitsPatterns' =>
               [
                   0 => '2(?:0[1-389]|12[0-8])|3(?:[35-9][15]|4[015])|906|2(?:[13][14]|2[18])|(?:2[4-9]|4[2-9]|[579][1-9]|[68][1-8])1',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         8 =>
          [
              'pattern' => '(\\d{3})(\\d{2})(\\d{2})(\\d{1,2})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '2(?:0[1-389]|12[0-8])|3(?:[35-9][15]|4[015])|906|2(?:[13][14]|2[18])|(?:2[4-9]|4[2-9]|[579][1-9]|[68][1-8])1',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         9 =>
          [
              'pattern' => '(\\d{3})(\\d{2})(\\d{2})(\\d{2})(\\d{2})',
              'format' => '$1 $2 $3 $4 $5',
              'leadingDigitsPatterns' =>
               [
                   0 => '2(?:0[1-389]|12[0-8])|3(?:[35-9][15]|4[015])|906|2(?:[13][14]|2[18])|(?:2[4-9]|4[2-9]|[579][1-9]|[68][1-8])1',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         10 =>
          [
              'pattern' => '(\\d{3})(\\d{3})(\\d{2})(\\d{2})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '2(?:0[1-389]|12[0-8])|3(?:[35-9][15]|4[015])|906|2(?:[13][14]|2[18])|(?:2[4-9]|4[2-9]|[579][1-9]|[68][1-8])1',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         11 =>
          [
              'pattern' => '(\\d{3})(\\d{3})(\\d{2})(\\d{2})(\\d)',
              'format' => '$1 $2 $3 $4 $5',
              'leadingDigitsPatterns' =>
               [
                   0 => '2(?:0[1-389]|12[0-8])|3(?:[35-9][15]|4[015])|906|2(?:[13][14]|2[18])|(?:2[4-9]|4[2-9]|[579][1-9]|[68][1-8])1',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         12 =>
          [
              'pattern' => '(\\d{3})(\\d{3})(\\d{3})(\\d{2,3})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '2(?:0[1-389]|12[0-8])|3(?:[35-9][15]|4[015])|906|2(?:[13][14]|2[18])|(?:2[4-9]|4[2-9]|[579][1-9]|[68][1-8])1',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         13 =>
          [
              'pattern' => '(\\d{4})(\\d{3})(\\d{1,4})',
              'format' => '$1 $2 $3',
              'leadingDigitsPatterns' =>
               [
                   0 => '2(?:0[4-6]|1(?:[035-9]|29)|3[0235-9]|7[2-7])|3(?:3(?:0[1-467]|2[127-9]|3[124578]|7[1257-9]|8[1256]|9[145])|4(?:2[135]|4[13578]|9[1346])|5(?:0[14]|2[1-3589]|6[1-4]|7[13468]|8[13568])|6(?:2[1-489]|3[124-6]|6[13]|7[12579]|8[1-356]|9[135])|7(?:2[1-7]|4[145]|6[1-5]|7[1-4])|8(?:21|6|7[1467]|8[136])|9(?:0[12479]|2[1358]|4[134679]|6[1-9]|7[136]|8[147]))|41|[56]0|7(?:0[2-8]|8[02-5]|9[03-7])|8(?:3[02-46-9]|5[03-9]|6[2-8]|8[024-6])|9(?:0[7-9]|7[02-467])|(?:45|84)[02-6]|3(?:83|99)[1468]|3[68]4[1347]|3(?:47|60)[1356]|(?:66|71|80)[2-9]|3(?:3[46]|46|5[49])[1246]|(?:22|47|81)[02-79]|3[4579]3[1357]|(?:28|49|5[79]|7[27]|9[589])[02-7]|(?:2[569]|4[2-48]|5[124-6]|6[1-358]|73|82|9[1-4])[02-9]|(?:24|[49]6|5[38]|6[47]|7[4-6]|87)[02-8]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         14 =>
          [
              'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d{2})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '2(?:0[4-6]|1(?:[035-9]|29)|3[0235-9]|7[2-7])|3(?:3(?:0[1-467]|2[127-9]|3[124578]|7[1257-9]|8[1256]|9[145])|4(?:2[135]|4[13578]|9[1346])|5(?:0[14]|2[1-3589]|6[1-4]|7[13468]|8[13568])|6(?:2[1-489]|3[124-6]|6[13]|7[12579]|8[1-356]|9[135])|7(?:2[1-7]|4[145]|6[1-5]|7[1-4])|8(?:21|6|7[1467]|8[136])|9(?:0[12479]|2[1358]|4[134679]|6[1-9]|7[136]|8[147]))|41|66[2-9]|7(?:1[2-9]|8[02-5]|9[03-7])|8(?:3[02-46-9]|5[03-9]|6[2-8]|8[024-6])|9(?:0[7-9]|7[02-467])|[5-8]0|(?:45|84)[02-6]|3(?:83|99)[1468]|3[68]4[1347]|3(?:47|60)[1356]|3(?:3[46]|46|5[49])[1246]|(?:22|47|81)[02-79]|3[4579]3[1357]|(?:28|49|5[79]|7[27]|9[589])[02-7]|(?:2[569]|4[2-48]|5[124-6]|6[1-358]|73|82|9[1-4])[02-9]|(?:24|[49]6|5[38]|6[47]|7[4-6]|87)[02-8]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         15 =>
          [
              'pattern' => '(\\d{2})(\\d{2})(\\d)(\\d{2})(\\d{2})',
              'format' => '$1 $2 $3 $4 $5',
              'leadingDigitsPatterns' =>
               [
                   0 => '2(?:0[4-6]|1(?:[035-9]|29)|3[0235-9]|7[2-7])|3(?:3(?:0[1-467]|2[127-9]|3[124578]|7[1257-9]|8[1256]|9[145])|4(?:2[135]|4[13578]|9[1346])|5(?:0[14]|2[1-3589]|6[1-4]|7[13468]|8[13568])|6(?:2[1-489]|3[124-6]|6[13]|7[12579]|8[1-356]|9[135])|7(?:2[1-7]|4[145]|6[1-5]|7[1-4])|8(?:21|6|7[1467]|8[136])|9(?:0[12479]|2[1358]|4[134679]|6[1-9]|7[136]|8[147]))|41|66[2-9]|7(?:1[2-9]|8[02-5]|9[03-7])|8(?:3[02-46-9]|5[03-9]|6[2-8]|8[024-6])|9(?:0[7-9]|7[02-467])|[5-8]0|(?:45|84)[02-6]|3(?:83|99)[1468]|3[68]4[1347]|3(?:47|60)[1356]|3(?:3[46]|46|5[49])[1246]|(?:22|47|81)[02-79]|3[4579]3[1357]|(?:28|49|5[79]|7[27]|9[589])[02-7]|(?:2[569]|4[2-48]|5[124-6]|6[1-358]|73|82|9[1-4])[02-9]|(?:24|[49]6|5[38]|6[47]|7[4-6]|87)[02-8]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         16 =>
          [
              'pattern' => '(\\d{2})(\\d{2})(\\d)(\\d{2})(\\d{2})(\\d{2})',
              'format' => '$1 $2 $3 $4 $5 $6',
              'leadingDigitsPatterns' =>
               [
                   0 => '2(?:0[4-6]|1(?:[035-9]|29)|3[0235-9]|7[2-7])|3(?:3(?:0[1-467]|2[127-9]|3[124578]|7[1257-9]|8[1256]|9[145])|4(?:2[135]|4[13578]|9[1346])|5(?:0[14]|2[1-3589]|6[1-4]|7[13468]|8[13568])|6(?:2[1-489]|3[124-6]|6[13]|7[12579]|8[1-356]|9[135])|7(?:2[1-7]|4[145]|6[1-5]|7[1-4])|8(?:21|6|7[1467]|8[136])|9(?:0[12479]|2[1358]|4[134679]|6[1-9]|7[136]|8[147]))|41|[56]0|7(?:0[2-8]|8[02-5]|9[03-7])|8(?:3[02-46-9]|5[03-9]|6[2-8]|8[024-6])|9(?:0[7-9]|7[02-467])|(?:45|84)[02-6]|3(?:83|99)[1468]|3[68]4[1347]|3(?:47|60)[1356]|(?:66|71|80)[2-9]|3(?:3[46]|46|5[49])[1246]|(?:22|47|81)[02-79]|3[4579]3[1357]|(?:28|49|5[79]|7[27]|9[589])[02-7]|(?:2[569]|4[2-48]|5[124-6]|6[1-358]|73|82|9[1-4])[02-9]|(?:24|[49]6|5[38]|6[47]|7[4-6]|87)[02-8]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         17 =>
          [
              'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d{2})(\\d{2})(\\d{2})',
              'format' => '$1 $2 $3 $4 $5 $6',
              'leadingDigitsPatterns' =>
               [
                   0 => '2(?:0[4-6]|1(?:[035-9]|29)|3[0235-9]|7[2-7])|3(?:3(?:0[1-467]|2[127-9]|3[124578]|7[1257-9]|8[1256]|9[145])|4(?:2[135]|4[13578]|9[1346])|5(?:0[14]|2[1-3589]|6[1-4]|7[13468]|8[13568])|6(?:2[1-489]|3[124-6]|6[13]|7[12579]|8[1-356]|9[135])|7(?:2[1-7]|4[145]|6[1-5]|7[1-4])|8(?:21|6|7[1467]|8[136])|9(?:0[12479]|2[1358]|4[134679]|6[1-9]|7[136]|8[147]))|41|7(?:8[02-5]|9[03-7])|8(?:3[02-46-9]|5[03-9]|6[2-8]|8[024-6])|9(?:0[7-9]|7[02-467])|[5-7]0|(?:45|84)[02-6]|3(?:83|99)[1468]|3[68]4[1347]|3(?:47|60)[1356]|(?:66|71|80)[2-9]|3(?:3[46]|46|5[49])[1246]|(?:22|47|81)[02-79]|3[4579]3[1357]|(?:28|49|5[79]|7[27]|9[589])[02-7]|(?:2[569]|4[2-48]|5[124-6]|6[1-358]|73|82|9[1-4])[02-9]|(?:24|[49]6|5[38]|6[47]|7[4-6]|87)[02-8]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         18 =>
          [
              'pattern' => '(\\d{4})(\\d{4})(\\d{1,4})',
              'format' => '$1 $2 $3',
              'leadingDigitsPatterns' =>
               [
                   0 => '2(?:0[4-6]|1(?:[035-9]|29)|3[0235-9]|7[2-7])|3(?:3(?:0[1-467]|2[127-9]|3[124578]|7[1257-9]|8[1256]|9[145])|4(?:2[135]|4[13578]|9[1346])|5(?:0[14]|2[1-3589]|6[1-4]|7[13468]|8[13568])|6(?:2[1-489]|3[124-6]|6[13]|7[12579]|8[1-356]|9[135])|7(?:2[1-7]|4[145]|6[1-5]|7[1-4])|8(?:21|6|7[1467]|8[136])|9(?:0[12479]|2[1358]|4[134679]|6[1-9]|7[136]|8[147]))|41|[56]0|7(?:0[2-8]|8[02-5]|9[03-7])|8(?:3[02-46-9]|5[03-9]|6[2-8]|8[024-6])|9(?:0[7-9]|7[02-467])|(?:45|84)[02-6]|3(?:83|99)[1468]|3[68]4[1347]|3(?:47|60)[1356]|(?:66|71|80)[2-9]|3(?:3[46]|46|5[49])[1246]|(?:22|47|81)[02-79]|3[4579]3[1357]|(?:28|49|5[79]|7[27]|9[589])[02-7]|(?:2[569]|4[2-48]|5[124-6]|6[1-358]|73|82|9[1-4])[02-9]|(?:24|[49]6|5[38]|6[47]|7[4-6]|87)[02-8]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         19 =>
          [
              'pattern' => '(\\d{4})(\\d{3})(\\d{3})(\\d{3})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '2(?:0[4-6]|1(?:[035-9]|29)|3[0235-9]|7[2-7])|3(?:3(?:0[1-467]|2[127-9]|3[124578]|7[1257-9]|8[1256]|9[145])|4(?:2[135]|4[13578]|9[1346])|5(?:0[14]|2[1-3589]|6[1-4]|7[13468]|8[13568])|6(?:2[1-489]|3[124-6]|6[13]|7[12579]|8[1-356]|9[135])|7(?:2[1-7]|4[145]|6[1-5]|7[1-4])|8(?:21|3[1468]|6|7[1467]|8[136])|9(?:0[12479]|2[1358]|4[134679]|6[1-9]|7[136]|8[147]|9[1468]))|4(?:1|5[02-6]|9[2-6])|7(?:8[02-5]|9[03-7])|8(?:3[02-46-9]|4[02-6]|5[03-9]|6[2-8]|8[024-6])|9(?:0[7-9]|7[02-467])|[5-7]0|3[68]4[1347]|3(?:47|60)[1356]|(?:66|71|80)[2-9]|3(?:3[46]|46|5[49])[1246]|(?:22|47|81)[02-79]|3[4579]3[1357]|(?:28|5[79]|7[27]|9[589])[02-7]|(?:2[569]|4[2-48]|5[124-6]|6[1-358]|73|82|9[1-4])[02-9]|(?:24|[49]6|5[38]|6[47]|7[4-6]|87)[02-8]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         20 =>
          [
              'pattern' => '(\\d{4})(\\d{2})(\\d{3})(\\d{2})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '15[1279]|2(?:0[4-6]|1(?:[035-9]|29)|3[0235-9]|7[2-7])|3(?:3(?:0[1-467]|2[127-9]|3[124578]|7[1257-9]|8[1256]|9[145])|4(?:2[135]|4[13578]|9[1346])|5(?:0[14]|2[1-3589]|6[1-4]|7[13468]|8[13568])|6(?:2[1-489]|3[124-6]|6[13]|7[12579]|8[1-356]|9[135])|7(?:2[1-7]|4[145]|6[1-5]|7[1-4])|8(?:21|6|7[1467]|8[136])|9(?:0[12479]|2[1358]|4[134679]|6[1-9]|7[136]|8[147]))|41|[56]0|7(?:0[2-8]|8[02-5]|9[03-7])|8(?:3[02-46-9]|5[03-9]|6[2-8]|8[024-6])|9(?:0[7-9]|7[02-467])|(?:45|84)[02-6]|3(?:83|99)[1468]|3[68]4[1347]|3(?:47|60)[1356]|(?:66|71|80)[2-9]|3(?:3[46]|46|5[49])[1246]|(?:22|47|81)[02-79]|3[4579]3[1357]|(?:28|49|5[79]|7[27]|9[589])[02-7]|(?:2[569]|4[2-48]|5[124-6]|6[1-358]|73|82|9[1-4])[02-9]|(?:24|[49]6|5[38]|6[47]|7[4-6]|87)[02-8]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         21 =>
          [
              'pattern' => '(\\d{4})(\\d{3})(\\d{2})(\\d{2})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '2(?:0[4-6]|1(?:[035-9]|29)|3[0235-9]|7[2-7])|3(?:3(?:0[1-467]|2[127-9]|3[124578]|7[1257-9]|8[1256]|9[145])|4(?:2[135]|4[13578]|9[1346])|5(?:0[14]|2[1-3589]|6[1-4]|7[13468]|8[13568])|6(?:2[1-489]|3[124-6]|6[13]|7[12579]|8[1-356]|9[135])|7(?:2[1-7]|4[145]|6[1-5]|7[1-4])|8(?:21|6|7[1467]|8[136])|9(?:0[12479]|2[1358]|4[134679]|6[1-9]|7[136]|8[147]))|41|[56]0|7(?:0[2-8]|8[02-5]|9[03-7])|8(?:3[02-46-9]|5[03-9]|6[2-8]|8[024-6])|9(?:0[7-9]|7[02-467])|(?:45|84)[02-6]|3(?:83|99)[1468]|3[68]4[1347]|3(?:47|60)[1356]|(?:66|71|80)[2-9]|3(?:3[46]|46|5[49])[1246]|(?:22|47|81)[02-79]|3[4579]3[1357]|(?:28|49|5[79]|7[27]|9[589])[02-7]|(?:2[569]|4[2-48]|5[124-6]|6[1-358]|73|82|9[1-4])[02-9]|(?:24|[49]6|5[38]|6[47]|7[4-6]|87)[02-8]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         22 =>
          [
              'pattern' => '(\\d{4})(\\d{2})(\\d{2})(\\d{2,3})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '2(?:0[4-6]|1(?:[035-9]|29)|3[0235-9]|7[2-7])|3(?:3(?:0[1-467]|2[127-9]|3[124578]|7[1257-9]|8[1256]|9[145])|4(?:2[135]|4[13578]|9[1346])|5(?:0[14]|2[1-3589]|6[1-4]|7[13468]|8[13568])|6(?:2[1-489]|3[124-6]|6[13]|7[12579]|8[1-356]|9[135])|7(?:2[1-7]|4[145]|6[1-5]|7[1-4])|8(?:21|6|7[1467]|8[136])|9(?:0[12479]|2[1358]|4[134679]|6[1-9]|7[136]|8[147]))|41|[56]0|7(?:0[2-8]|8[02-5]|9[03-7])|8(?:3[02-46-9]|5[03-9]|6[2-8]|8[024-6])|9(?:0[7-9]|7[02-467])|(?:45|84)[02-6]|3(?:83|99)[1468]|3[68]4[1347]|3(?:47|60)[1356]|(?:66|71|80)[2-9]|3(?:3[46]|46|5[49])[1246]|(?:22|47|81)[02-79]|3[4579]3[1357]|(?:28|49|5[79]|7[27]|9[589])[02-7]|(?:2[569]|4[2-48]|5[124-6]|6[1-358]|73|82|9[1-4])[02-9]|(?:24|[49]6|5[38]|6[47]|7[4-6]|87)[02-8]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         23 =>
          [
              'pattern' => '(\\d{5})(\\d{3})(\\d{3,4})',
              'format' => '$1 $2 $3',
              'leadingDigitsPatterns' =>
               [
                   0 => '3(?:3(?:0[589]|2[03]|3[369]|4[357]|6[0357]|7[0346]|8[347]|9[236-8])|4(?:4[2469]|6[03579]|9[0257])|5(?:0[235]|2[046]|[49][357]|6[09]|7[2579]|8[2479])|6(?:2[05]|3[37]|6[02459]|7[03468]|8[47]|9[246])|7(?:2[09]|4[236]|60|75)|8(?:2[0239]|3[023579]|7[23589]|8[2457])|9(?:0[03568]|3[24689]|4[0258]|60|7[2457]|8[23568]|9[23579]))|3[68]4[2568]|3(?:47|60)[2478]|3[49]2[02469]|3[457]3[2468]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         24 =>
          [
              'pattern' => '(\\d{5})(\\d{4})(\\d{3,4})',
              'format' => '$1 $2 $3',
              'leadingDigitsPatterns' =>
               [
                   0 => '3(?:3(?:0[589]|2[03]|3[369]|4[357]|6[0357]|7[0346]|8[347]|9[236-8])|4(?:4[2469]|6[03579]|9[0257])|5(?:0[235]|2[046]|[49][357]|6[09]|7[2579]|8[2479])|6(?:2[05]|3[37]|6[02459]|7[03468]|8[47]|9[246])|7(?:2[09]|4[236]|60|75)|8(?:2[0239]|3[023579]|7[23589]|8[2457])|9(?:0[03568]|3[24689]|4[0258]|60|7[2457]|8[23568]|9[23579]))|3[68]4[2568]|3(?:47|60)[2478]|3[49]2[02469]|3[457]3[2468]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         25 =>
          [
              'pattern' => '(\\d{5})(\\d{3})(\\d{3})(\\d{3})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '3(?:3(?:0[589]|2[03]|3[369]|4[357]|6[0357]|7[0346]|8[347]|9[236-8])|4(?:4[2469]|6[03579]|9[0257])|5(?:0[235]|2[046]|[49][357]|6[09]|7[2579]|8[2479])|6(?:2[05]|3[37]|6[02459]|7[03468]|8[47]|9[246])|7(?:2[09]|4[236]|60|75)|8(?:2[0239]|3[023579]|7[23589]|8[2457])|9(?:0[03568]|3[24689]|4[0258]|60|7[2457]|8[23568]|9[23579]))|3[68]4[2568]|3(?:47|60)[2478]|3[49]2[02469]|3[457]3[2468]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         26 =>
          [
              'pattern' => '(\\d{4})(\\d{3})(\\d{4})',
              'format' => '$1 $2 $3',
              'leadingDigitsPatterns' =>
               [
                   0 => '15[1279]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         27 =>
          [
              'pattern' => '(\\d{4})(\\d{4})(\\d{3})',
              'format' => '$1 $2 $3',
              'leadingDigitsPatterns' =>
               [
                   0 => '15[1279]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         28 =>
          [
              'pattern' => '(\\d{3})(\\d{8})',
              'format' => '$1 $2',
              'leadingDigitsPatterns' =>
               [
                   0 => '15[1279]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         29 =>
          [
              'pattern' => '(\\d{3})(\\d{3})(\\d{3})(\\d{2})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '15[1279]',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         30 =>
          [
              'pattern' => '(\\d{3})(\\d{3})(\\d{3})(\\d)',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '1[67]|800',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         31 =>
          [
              'pattern' => '(\\d{3})(\\d{2,3})(\\d{3})(\\d{2})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '1[67]|800',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         32 =>
          [
              'pattern' => '(\\d{3})(\\d{4})(\\d{3})',
              'format' => '$1 $2 $3',
              'leadingDigitsPatterns' =>
               [
                   0 => '800',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         33 =>
          [
              'pattern' => '(\\d{3})(\\d{3})(\\d{2})(\\d{2,3})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '800',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         34 =>
          [
              'pattern' => '(\\d{3})(\\d{6})(\\d{2})(\\d{1,4})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '800',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         35 =>
          [
              'pattern' => '(\\d{3})(\\d)(\\d{3})(\\d{3,4})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '900',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         36 =>
          [
              'pattern' => '(\\d{3})(\\d)(\\d{4})(\\d{3,4})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '900',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         37 =>
          [
              'pattern' => '(\\d{3})(\\d)(\\d{3})(\\d{3})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '180',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         38 =>
          [
              'pattern' => '(\\d{4})(\\d{4,6})',
              'format' => '$1 $2',
              'leadingDigitsPatterns' =>
               [
                   0 => '180',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         39 =>
          [
              'pattern' => '(\\d{4})(\\d{2})(\\d{2})(\\d{2})',
              'format' => '$1 $2 $3 $4',
              'leadingDigitsPatterns' =>
               [
                   0 => '180',
               ],
              'nationalPrefixFormattingRule' => '',
              'domesticCarrierCodeFormattingRule' => '',
              'nationalPrefixOptionalWhenFormatting' => false,
          ],
         40 =>
          [
              'pattern' => '(\\d{4})(\\d{4,10})',
              'format' => '$1 $2',
              'leadingDigitsPatterns' =>
               [
                   0 => '900',
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
