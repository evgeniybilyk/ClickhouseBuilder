<?php

namespace Tinderbox\ClickhouseBuilder\Query\Enums;

use MyCLabs\Enum\Enum;

/**
 * Formats.
 */
final class Format extends Enum
{
    const BLOCK_TAB_SEPARATED = 'BlockTabSeparated';
    const CSV = 'CSV';
    const CSV_WITH_NAMES = 'CSVWithNames';
    const JSON = 'JSON';
    const JSON_COMPACT = 'JSONCompact';
    const JSON_EACH_ROW = 'JSONEachRow';
    const NATIVE = 'Native';
    const NULL = 'Null';
    const PRETTY = 'Pretty';
    const PRETTY_COMPACT = 'PrettyCompact';
    const PRETTY_COMPACT_MONO_BLOCK = 'PrettyCompactMonoBlock';
    const PRETTY_NO_ESCAPES = 'PrettyNoEscapes';
    const PRETTY_COMPACT_NO_ESCAPES = 'PrettyCompactNoEscapes';
    const PRETTY_SPACE_NO_ESCAPES = 'PrettySpaceNoEscapes';
    const PRETTY_SPACE = 'PrettySpace';
    const ROW_BINARY = 'RowBinary';
    const TAB_SEPARATED = 'TabSeparated';
    const TAB_SEPARATED_RAW = 'TabSeparatedRaw';
    const TAB_SEPARATED_WITH_NAMES = 'TabSeparatedWithNames';
    const TAB_SEPARATED_WITH_NAMES_AND_TYPES = 'TabSeparatedWithNamesAndTypes';
    const TSKV = 'TSKV';
    const VALUES = 'Values';
    const VERTICAL = 'Vertical';
    const XML = 'XML';
}
