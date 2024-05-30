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

class ResistorColorTrio
{
    public function label(array $colors): string
    {
        $res=0;
        $allColors= ['black'=>0,'brown'=>1,'red'=>2,'orange'=>3,'yellow'=>4,'green'=>5,'blue'=>6,'violet'=>7,'grey'=>8,'white'=>9];
        
        $res=10*$allColors[$colors[0]];
        $res=$res+$allColors[$colors[1]];
        $str='';
        $zeros=$allColors[$colors[2]];
        if($zeros<3){
            $res=$res*pow(10,$zeros);
            $str=(string)$res . ' ohms';
        }

        else if($zeros>=3 && $zeros<6){
            $res=$res*pow(10,($zeros%3)); 
            $str=(string)$res . ' kiloohms';
        } 
        else if($zeros>=6 && $zeros<9){
            $res=$res*10*pow(10,($zeros%6));
            $str=(string)$res . ' megaohms';
        }
        else{
            $str=(string)$res . ' gigaohms';
        }
    return $str;
    }
   
}
            */


declare(strict_types=1);
class ResistorColorTrio
{
    public function label(array $colors): string
    {
        $colors1 = [
            "black", 
            "brown",
            "red",
            "orange",
            "yellow",
            "green",
            "blue",
            "violet",
            "grey", 
            "white",
        ];
        $ohms = [0 => "", 1 => "", 2 => "", 3 => "kilo", 4 => "", 5 => "", 6 => "mega", 7 => "", 8 => "", 9 => "giga",];
        $rez = (array_search($colors[0],$colors1)*10+array_search($colors[1],$colors1))*pow(10,array_search($colors[2],$colors1));
        $nr0=0;
        while($rez>0&&$rez%1000==0){
            $rez/=1000;
            $nr0++;
        }
        echo $nr0;
        $rez.=" {$ohms[$nr0*3]}ohms";
        return $rez;
    }
}
