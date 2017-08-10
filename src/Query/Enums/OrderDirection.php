<?php

namespace Tinderbox\ClickhouseBuilder\Query\Enums;

use MyCLabs\Enum\Enum;

/**
 * Order directions.
 */
final class OrderDirection extends Enum
{
    const ASC = 'ASC';
    const DESC = 'DESC';
}
