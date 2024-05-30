<?php

declare(strict_types=1);

class Proverb
{
    public function recite(array $elements): array
    {
        $ans = [];

        if (count($elements) === 0) return $ans;
        
        for ($i = 0; $i < count($elements) - 1; $i++)
        {
            $ans[] = "For want of a " . $elements[$i] . " the " . $elements[$i+1] . " was lost.";           
        }
   
        $ans[] = "And all for the want of a " . $elements[0] . ".";
        return $ans;
    }
        
}
