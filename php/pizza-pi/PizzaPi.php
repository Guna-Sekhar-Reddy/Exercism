<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizzas,$people)
    {
         return $pizzas*(($people*20)+200);
    }

    public function calculateSauceRequirement($pizzas,$volume)
    {
        
        return ($pizzas*125)/$volume;
    }

    public function calculateCheeseCubeCoverage($length, $thickness, $diameter)
    {
      $pizzas=round((pow($length,3))/($thickness*(22/7)*$diameter));
        return $pizzas;
    }

    public function calculateLeftOverSlices($pizzas, $friends)
    {
        return ($pizzas*8)%($friends);
    }
}
