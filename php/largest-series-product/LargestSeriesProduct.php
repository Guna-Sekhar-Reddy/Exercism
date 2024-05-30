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

class Series
{
    public $input1;
    
    public function __construct(string $input)
    {
        $this->input1 = $input;
    }

    public function largestProduct(int $span): int
    {
        $string_val = $this->input1;

    
        if ($span <= 0 || $span > strlen($string_val) ) {
            throw new InvalidArgumentException("Span must be greater than 0 and less than or equal to the length of the input string.");
        }

        if (preg_match('/[a-zA-Z]/', $string_val)) {
            throw new InvalidArgumentException("Input must be a string containing only digits.");
        }
            

        $max = 0;
        $length = strlen($string_val);

        for ($i = 0; $i <= $length - $span; $i++) {
            $product = 1;
            for ($j = 0; $j < $span; $j++) {
                $product *= (int)$string_val[$i + $j];
            }
            if ($product > $max) {
                $max = $product;
            }
        }

        return $max;
    }
}


