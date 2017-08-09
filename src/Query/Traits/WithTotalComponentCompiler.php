<?php

namespace Tinderbox\ClickhouseBuilder\Query\Traits;

use Tinderbox\ClickhouseBuilder\Query\BaseBuilder as Builder;

trait WithTotalComponentCompiler
{
    /**
     * Compiles groupings to string to pass this string in query.
     *
     * @param Builder $builder
     * @param bool    $withTotal
     * @return string
     * @internal param Column[] $columns
     *
     */
    private function compileWithTotalComponent(Builder $builder, bool $withTotal) : string
    {
        return ($withTotal) ? 'WITH TOTALS' : '';
    }
}
