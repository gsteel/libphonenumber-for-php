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


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '[15]\\d{6,9}|2\\d{4,9}|3\\d{5,9}|4\\d{7,10}|[67]\\d{7,9}|8\\d{7,8}',
    'PossibleLength' => 
    array (
      0 => 5,
      1 => 6,
      2 => 7,
      3 => 8,
      4 => 9,
      5 => 10,
      6 => 11,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '18[1-8]\\d{4,6}',
    'ExampleNumber' => '181234567',
    'PossibleLength' => 
    array (
      0 => 7,
      1 => 8,
      2 => 9,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '4(?:[0-8]\\d{6,8}|9\\d{9})|50\\d{6,8}',
    'ExampleNumber' => '412345678',
    'PossibleLength' => 
    array (
      0 => 8,
      1 => 9,
      2 => 10,
      3 => 11,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '800\\d{5,6}',
    'ExampleNumber' => '800123456',
    'PossibleLength' => 
    array (
      0 => 8,
      1 => 9,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '[67]00\\d{5,6}',
    'ExampleNumber' => '600123456',
    'PossibleLength' => 
    array (
      0 => 8,
      1 => 9,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'sharedCost' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'personalNumber' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'voip' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'pager' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'uan' => 
  array (
    'NationalNumberPattern' => '10(?:0\\d{4,6}|[1-9]\\d{5,7})|2(?:0(?:0\\d{4,6}|[13-8]\\d{5,7}|2(?:[023]\\d{4,5}|[14-9]\\d{4,6})|9(?:[0-7]\\d{4,6}|[89]\\d{1,6}))|9\\d{5,8})|3(?:0(?:0\\d{3,7}|[1-57-9]\\d{5,7}|6(?:\\d{3}|\\d{5,7}))|93\\d{5,7})|60(?:[12]\\d{5,6}|6\\d{7})|7(?:1\\d{7}|3\\d{8}|5[03-9]\\d{5,6})',
    'ExampleNumber' => '10112345',
    'PossibleLength' => 
    array (
      0 => 5,
      1 => 6,
      2 => 7,
      3 => 8,
      4 => 9,
      5 => 10,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'voicemail' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => '100\\d{4,6}|20(?:0\\d{4,6}|2[023]\\d{4,5}|9[89]\\d{1,6})|300\\d{3,7}|60(?:[12]\\d{5,6}|6\\d{7})|7(?:1\\d{7}|3\\d{8}|5[03-9]\\d{5,6})',
    'ExampleNumber' => '1001234',
    'PossibleLength' => 
    array (
      0 => 5,
      1 => 6,
      2 => 7,
      3 => 8,
      4 => 9,
      5 => 10,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'id' => 'AX',
  'countryCode' => 358,
  'internationalPrefix' => '00|99(?:[02469]|5(?:11|33|5[59]|88|9[09]))',
  'preferredInternationalPrefix' => '00',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => 
  array (
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
);
