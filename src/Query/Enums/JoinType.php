<?php

namespace Tinderbox\ClickhouseBuilder\Query\Enums;

use MyCLabs\Enum\Enum;

/**
 * Join types.
 */
final class JoinType extends Enum
{
    const INNER = 'INNER';
    const LEFT = 'LEFT';
}
