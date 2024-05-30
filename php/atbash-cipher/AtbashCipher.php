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

function encode(string $text): string
{
    $trimmedString = preg_replace('/[ ,.]/','',$text);
    $trimmedString=strtolower($trimmedString);
    $res = '';
    $count=0;
  
    for ($i = 0; $i < strlen($trimmedString); $i++) {
        $char = $trimmedString[$i];
        $asc = ord($char); 
        
        if ($asc >= 65 && $asc <= 90) {
           
            $ind = 90 - ($asc - 65);
        }
  
        else if ($asc >= 97 && $asc <= 122) {
        
            $ind = 122 - ($asc - 97);
        }
        else {
            $ind = $asc;
        }
        if($count==5){
            $res .=' ';
            $count=0;
            $i--;
        }else{
            $res .= chr($ind);
            $count++;
        }
       
    }
    
    return $res;
}
