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
/*
declare(strict_types=1);

function isIsogram(string $word): bool
{
    // Remove hyphens
    $word1 = str_replace('-', '', $word);
    // Trim spaces from the beginning and end of the string
    $trimmedWord = trim($word1, " ");
    // Convert to lowercase to handle case insensitivity
    $lowercaseWord = strtolower($trimmedWord);
    
    // Get the length of the processed word
    $length = strlen($lowercaseWord);
    // Loop through each character in the word
    for ($i = 0; $i < $length; $i++) {
        // Compare the current character with all subsequent characters
        for ($j = $i + 1; $j < $length; $j++) {
            // If any characters match, it's not an isogram
            if ($lowercaseWord[$i] === $lowercaseWord[$j]) {
                return false;
            }
        }
    }
    // If no matches were found, it is an isogram
    return true;
}
            */



declare(strict_types=1);
function isIsogram(string $word): bool
{
    $str=mb_strtolower($word);
    $w = str_replace(' ', '', str_replace('-', '',$str));
    return count(array_unique(mb_str_split($w))) == mb_strlen($w);
}
