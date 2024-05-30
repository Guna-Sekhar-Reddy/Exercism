<?php

class ProgramWindow
{
    public $x,$y,$width,$height;

    public function __construct(){
        $this->x=0;
             $this->y=0;
          $this->width=800;
        $this->height=600;
    }

    public function resize($size){
        $this->height=$size->height;
        $this->width=$size->width;
    }

    public function move(Position $position){
            $this->y=$position->y;
        $this->x=$position->x;
    
    }
}

//$window=new ProgramWindow();
//$window->resize($size);
//$window->move($position);

?>