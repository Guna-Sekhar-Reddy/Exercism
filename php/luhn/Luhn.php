<?php

/*
 * By adding type hints and enabling strict type checking, code can become
 * easier to read, self-documenting and reduce the number of potential bugs.
 * By default, type declarations are non-strict, which means they will attempt
 * to change the original type to match the type specified by the
 * type-declaration.
 *
 * In other words, if you pass a string to a function requiring a float,
 * it will attempt to convert the string value to a float.
 *
 * To enable strict mode, a single declare directive must be placed at the top
 * of the file.
 * This means that the strictness of typing is configured on a per-file basis.
 * This directive not only affects the type declarations of parameters, but also
 * a function's return type.
 *
 * For more info review the Concept on strict type checking in the PHP track
 * <link>.
 *
 * To disable strict typing, comment out the directive below.
 */



declare(strict_types=1);

function isValid(string $number): bool
{
    if (!preg_match('/^[0-9 ]+$/', $number)) {
        return false;
    }

    $number = str_replace(' ', '', $number);

    if (strlen($number) <= 1) {
        return false;
    }

    $values = array_reverse(str_split($number));

    array_walk($values, function(&$value, $key) {
        $value = (int) $value;

        if (0 === $key % 2) {
            return;
        }

        $value = $value * 2;

        if ($value > 9) {
            $value -= 9;
        }
    });

    return 0 === array_sum($values) % 10;
}