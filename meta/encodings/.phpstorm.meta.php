<?php

namespace PHPSTORM_META {
    registerArgumentsSet('encodings',
                         "BASE64",
                         "UUENCODE",
                         "HTML-ENTITIES",
                         "Quoted-Printable",
                         "7bit",
                         "8bit",
                         "UCS-4",
                         "UCS-4BE",
                         "UCS-4LE",
                         "UCS-2",
                         "UCS-2BE",
                         "UCS-2LE",
                         "UTF-32",
                         "UTF-32BE",
                         "UTF-32LE",
                         "UTF-16",
                         "UTF-16BE",
                         "UTF-16LE",
                         "UTF-8",
                         "UTF-7",
                         "UTF7-IMAP",
                         "ASCII",
                         "EUC-JP",
                         "SJIS",
                         "eucJP-win",
                         "EUC-JP-2004",
                         "SJIS-Mobile#DOCOMO",
                         "SJIS-Mobile#KDDI",
                         "SJIS-Mobile#SOFTBANK",
                         "SJIS-mac",
                         "SJIS-2004",
                         "UTF-8-Mobile#DOCOMO",
                         "UTF-8-Mobile#KDDI-A",
                         "UTF-8-Mobile#KDDI-B",
                         "UTF-8-Mobile#SOFTBANK",
                         "CP932",
                         "CP51932",
                         "JIS",
                         "ISO-2022-JP",
                         "ISO-2022-JP-MS",
                         "GB18030",
                         "Windows-1252",
                         "Windows-1254",
                         "ISO-8859-1",
                         "ISO-8859-2",
                         "ISO-8859-3",
                         "ISO-8859-4",
                         "ISO-8859-5",
                         "ISO-8859-6",
                         "ISO-8859-7",
                         "ISO-8859-8",
                         "ISO-8859-9",
                         "ISO-8859-10",
                         "ISO-8859-13",
                         "ISO-8859-14",
                         "ISO-8859-15",
                         "ISO-8859-16",
                         "EUC-CN",
                         "CP936",
                         "HZ",
                         "EUC-TW",
                         "BIG-5",
                         "CP950",
                         "EUC-KR",
                         "UHC",
                         "ISO-2022-KR",
                         "Windows-1251",
                         "CP866",
                         "KOI8-R",
                         "KOI8-U",
                         "ArmSCII-8",
                         "CP850",
                         "ISO-2022-JP-2004",
                         "ISO-2022-JP-MOBILE#KDDI",
                         "CP50220",
                         "CP50221",
                         "CP50222",
    );

    registerArgumentsSet('encodings_aliases',
                         "HTML",
                         "html",
                         "qprint",
                         "binary",
                         "ISO-10646-UCS-4",
                         "UCS4",
                         "byte4be",
                         "byte4le",
                         "ISO-10646-UCS-2",
                         "UCS2",
                         "UNICODE",
                         "byte2be",
                         "byte2le",
                         "utf32",
                         "utf16",
                         "utf8",
                         "utf7",
                         "mUTF-7",
                         "ANSI_X3.4-1968",
                         "iso-ir-6",
                         "ANSI_X3.4-1986",
                         "ISO_646.irv:1991",
                         "US-ASCII",
                         "ISO646-US",
                         "us",
                         "IBM367",
                         "IBM-367",
                         "cp367",
                         "csASCII",
                         "EUC",
                         "EUC_JP",
                         "eucJP",
                         "x-euc-jp",
                         "x-sjis",
                         "SHIFT-JIS",
                         "eucJP-open",
                         "eucJP-ms",
                         "EUC_JP-2004",
                         "SJIS-DOCOMO",
                         "shift_jis-imode",
                         "x-sjis-emoji-docomo",
                         "SJIS-KDDI",
                         "shift_jis-kddi",
                         "x-sjis-emoji-kddi",
                         "SJIS-SOFTBANK",
                         "shift_jis-softbank",
                         "x-sjis-emoji-softbank",
                         "MacJapanese",
                         "x-Mac-Japanese",
                         "SJIS2004",
                         "Shift_JIS-2004",
                         "UTF-8-DOCOMO",
                         "UTF8-DOCOMO",
                         "UTF-8-Mobile#KDDI",
                         "UTF-8-KDDI",
                         "UTF8-KDDI",
                         "UTF-8-SOFTBANK",
                         "UTF8-SOFTBANK",
                         "MS932",
                         "Windows-31J",
                         "MS_Kanji",
                         "SJIS-win",
                         "SJIS-ms",
                         "SJIS-open",
                         "cp51932",
                         "ISO2022JPMS",
                         "gb-18030",
                         "gb-18030-2000",
                         "cp1252",
                         "CP1254",
                         "CP-1254",
                         "WINDOWS-1254",
                         "ISO8859-1",
                         "latin1",
                         "ISO8859-2",
                         "latin2",
                         "ISO8859-3",
                         "latin3",
                         "ISO8859-4",
                         "latin4",
                         "ISO8859-5",
                         "cyrillic",
                         "ISO8859-6",
                         "arabic",
                         "ISO8859-7",
                         "greek",
                         "ISO8859-8",
                         "hebrew",
                         "ISO8859-9",
                         "latin5",
                         "ISO8859-10",
                         "latin6",
                         "ISO8859-13",
                         "ISO8859-14",
                         "latin8",
                         "ISO8859-15",
                         "ISO8859-16",
                         "CN-GB",
                         "EUC_CN",
                         "eucCN",
                         "x-euc-cn",
                         "gb2312",
                         "CP-936",
                         "GBK",
                         "EUC_TW",
                         "eucTW",
                         "x-euc-tw",
                         "CN-BIG5",
                         "BIG-FIVE",
                         "BIGFIVE",
                         "EUC_KR",
                         "eucKR",
                         "x-euc-kr",
                         "CP949",
                         "CP1251",
                         "CP-1251",
                         "WINDOWS-1251",
                         "CP-866",
                         "IBM866",
                         "IBM-866",
                         "KOI8R",
                         "KOI8U",
                         "ArmSCII8",
                         "ARMSCII-8",
                         "ARMSCII8",
                         "CP-850",
                         "IBM850",
                         "IBM-850",
                         "ISO-2022-JP-KDDI",
                         "cp50220raw",
                         "cp50220-raw",
                         "JIS-ms");

    expectedArguments(\mb_encoding_aliases(), 0, argumentsSet('encodings'));

    expectedArguments(\mb_convert_case(), 2, argumentsSet('encodings'));
    expectedArguments(\mb_convert_case(), 2, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_strtoupper(), 1, argumentsSet('encodings'));
    expectedArguments(\mb_strtoupper(), 1, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_strtolower(), 1, argumentsSet('encodings'));
    expectedArguments(\mb_strtolower(), 1, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_internal_encoding(), 0, argumentsSet('encodings'));
    expectedArguments(\mb_internal_encoding(), 0, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_http_output(), 0, argumentsSet('encodings'));
    expectedArguments(\mb_http_output(), 0, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_detect_order(), 0, argumentsSet('encodings'));
    expectedArguments(\mb_detect_order(), 0, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_preferred_mime_name(), 0, argumentsSet('encodings'));
    expectedArguments(\mb_preferred_mime_name(), 0, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_strlen(), 1, argumentsSet('encodings'));
    expectedArguments(\mb_strlen(), 1, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_strpos(), 3, argumentsSet('encodings'));
    expectedArguments(\mb_strpos(), 3, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_strrpos(), 3, argumentsSet('encodings'));
    expectedArguments(\mb_strrpos(), 3, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_stripos(), 3, argumentsSet('encodings'));
    expectedArguments(\mb_stripos(), 3, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_strstr(), 3, argumentsSet('encodings'));
    expectedArguments(\mb_strstr(), 3, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_strrchr(), 3, argumentsSet('encodings'));
    expectedArguments(\mb_strrchr(), 3, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_stristr(), 3, argumentsSet('encodings'));
    expectedArguments(\mb_stristr(), 3, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_strrichr(), 3, argumentsSet('encodings'));
    expectedArguments(\mb_strrichr(), 3, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_substr_count(), 2, argumentsSet('encodings'));
    expectedArguments(\mb_substr_count(), 2, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_substr(), 3, argumentsSet('encodings'));
    expectedArguments(\mb_substr(), 3, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_strcut(), 3, argumentsSet('encodings'));
    expectedArguments(\mb_strcut(), 3, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_strwidth(), 1, argumentsSet('encodings'));
    expectedArguments(\mb_strwidth(), 1, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_detect_encoding(), 1, argumentsSet('encodings'));
    expectedArguments(\mb_detect_encoding(), 1, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_convert_kana(), 2, argumentsSet('encodings'));
    expectedArguments(\mb_convert_kana(), 2, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_encode_numericentity(), 2, argumentsSet('encodings'));
    expectedArguments(\mb_encode_numericentity(), 2, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_decode_numericentity(), 2, argumentsSet('encodings'));
    expectedArguments(\mb_decode_numericentity(), 2, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_check_encoding(), 1, argumentsSet('encodings'));
    expectedArguments(\mb_check_encoding(), 1, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_regex_encoding(), 0, argumentsSet('encodings'));
    expectedArguments(\mb_regex_encoding(), 0, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_chr(), 1, argumentsSet('encodings'));
    expectedArguments(\mb_chr(), 1, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_ord(), 1, argumentsSet('encodings'));
    expectedArguments(\mb_ord(), 1, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_scrub(), 1, argumentsSet('encodings'));
    expectedArguments(\mb_scrub(), 1, argumentsSet('encodings_aliases'));

    expectedArguments(\mb_str_split(), 2, argumentsSet('encodings'));
    expectedArguments(\mb_str_split(), 2, argumentsSet('encodings_aliases'));

    expectedArguments(\htmlspecialchars(), 2, argumentsSet('encodings'));
    expectedArguments(\htmlspecialchars(), 2, argumentsSet('encodings_aliases'));

    expectedArguments(\htmlentities(), 2, argumentsSet('encodings'));
    expectedArguments(\htmlentities(), 2, argumentsSet('encodings_aliases'));

    expectedArguments(\html_entity_decode(), 2, argumentsSet('encodings'));
    expectedArguments(\html_entity_decode(), 2, argumentsSet('encodings_aliases'));

    expectedArguments(\get_html_translation_table(), 2, argumentsSet('encodings'));
    expectedArguments(\get_html_translation_table(), 2, argumentsSet('encodings_aliases'));
}