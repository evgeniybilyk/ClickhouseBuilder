<?php

namespace Tinderbox\ClickhouseBuilder\Query\Enums;

use MyCLabs\Enum\Enum;

/**
 * Join strictness.
 */
final class JoinStrict extends Enum
{
    const ALL = 'ALL';
    const ANY = 'ANY';
}
