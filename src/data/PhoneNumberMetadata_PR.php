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
         'NationalNumberPattern' => '(?:[589]\\d\\d|787)\\d{7}',
         'PossibleLength' =>
          [
              0 => 10,
          ],
         'PossibleLengthLocalOnly' =>
          [
              0 => 7,
          ],
     ],
    'fixedLine' =>
     [
         'NationalNumberPattern' => '(?:787|939)[2-9]\\d{6}',
         'ExampleNumber' => '7872345678',
         'PossibleLength' =>
          [
          ],
         'PossibleLengthLocalOnly' =>
          [
              0 => 7,
          ],
     ],
    'mobile' =>
     [
         'NationalNumberPattern' => '(?:787|939)[2-9]\\d{6}',
         'ExampleNumber' => '7872345678',
         'PossibleLength' =>
          [
          ],
         'PossibleLengthLocalOnly' =>
          [
              0 => 7,
          ],
     ],
    'tollFree' =>
     [
         'NationalNumberPattern' => '8(?:00|33|44|55|66|77|88)[2-9]\\d{6}',
         'ExampleNumber' => '8002345678',
         'PossibleLength' =>
          [
          ],
         'PossibleLengthLocalOnly' =>
          [
          ],
     ],
    'premiumRate' =>
     [
         'NationalNumberPattern' => '900[2-9]\\d{6}',
         'ExampleNumber' => '9002345678',
         'PossibleLength' =>
          [
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
         'NationalNumberPattern' => '52(?:3(?:[2-46-9][02-9]\\d|5(?:[02-46-9]\\d|5[0-46-9]))|4(?:[2-478][02-9]\\d|5(?:[034]\\d|2[024-9]|5[0-46-9])|6(?:0[1-9]|[2-9]\\d)|9(?:[05-9]\\d|2[0-5]|49)))\\d{4}|52[34][2-9]1[02-9]\\d{4}|5(?:00|2[125-9]|33|44|66|77|88)[2-9]\\d{6}',
         'ExampleNumber' => '5002345678',
         'PossibleLength' =>
          [
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
    'id' => 'PR',
    'countryCode' => 1,
    'internationalPrefix' => '011',
    'nationalPrefix' => '1',
    'nationalPrefixForParsing' => '1',
    'sameMobileAndFixedLinePattern' => true,
    'numberFormat' =>
     [
     ],
    'intlNumberFormat' =>
     [
     ],
    'mainCountryForCode' => false,
    'leadingDigits' => '787|939',
    'mobileNumberPortableRegion' => true,
];
