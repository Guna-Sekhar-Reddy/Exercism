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

function encode(string $input): string
{
    $length = strlen($input);
    if ($length === 0) {
        return '';
    }

    $count = 1;
    $res = '';
    
    for ($i = 1; $i < $length; $i++) {
        if ($input[$i] === $input[$i - 1]) {
            $count++;
        } else {
            if ($count > 1) {
                $res .= $count;
            }
            $res .= $input[$i - 1];
            $count = 1;
        }
    }
    
    if ($count > 1) {
        $res .= $count;
    }
    $res .= $input[$length - 1]; 
    return $res;
}

function decode(string $input): string
{
    $length = strlen($input);
    $res = '';
    $count = '';

    for ($i = 0; $i < $length; $i++) {
        if (is_numeric($input[$i])) {
            $count .= $input[$i];
        } else {
            $repeat_count = ($count === '') ? 1 : (int)$count;
            $res .= str_repeat($input[$i], $repeat_count);
            $count = '';
        }
    }
    
    return $res;
}

?>
