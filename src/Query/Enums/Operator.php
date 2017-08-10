<?php

namespace Tinderbox\ClickhouseBuilder\Query\Enums;

use MyCLabs\Enum\Enum;

/**
 * Operators.
 */
final class Operator extends Enum
{
    const EQUALS = '=';
    const NOT_EQUALS = '!=';
    const LESS_OR_EQUALS = '<=';
    const GREATER_OR_EQUALS = '>=';
    const LESS = '<';
    const GREATER = '>';
    const LIKE = 'LIKE';
    const NOT_LIKE = 'NOT LIKE';
    const BETWEEN = 'BETWEEN';
    const NOT_BETWEEN = 'NOT BETWEEN';
    const IN = 'IN';
    const NOT_IN = 'NOT IN';
    const GLOBAL_IN = 'GLOBAL IN';
    const GLOBAL_NOT_IN = 'GLOBAL NOT IN';
    const AND = 'AND';
    const OR = 'OR';
    const CONCAT = '||';
    const LAMBDA = '->';
    const DIVIDE = '/';
    const MODULO = '%';
    const MULTIPLE = '*';
    const PLUS = '+';
    const MINUS = '-';
}
