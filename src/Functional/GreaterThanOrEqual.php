<?php

/**
 * @package   Functional-php
 * @author    Lars Strojny <lstrojny@php.net>
 * @copyright 2011-2021 Lars Strojny
 * @license   https://opensource.org/licenses/MIT MIT
 * @link      https://github.com/lstrojny/functional-php
 */

namespace Functional;

/**
 * Returns true if $a is greater than or equal to $b.
 *
 * @param mixed $b
 * @return \Closure(mixed)
 * @no-named-arguments
 */
function greater_than_or_equal($b)
{
    return static function ($a) use ($b) {
        return $a >= $b;
    };
}
