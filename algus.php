<?php

class Box {
    public $width;
    public $height;
    public $lenght;
    public $material;

    public function describe (){
        echo ' $width: ' . $this->width . ' height: ' . $this->height . ' lenght: ' . $this->lenght;
    }
}

$box1 = new Box();
$box1->width = 1;
$box1->height = 2;
$box1->lenght = 3;
$box1->material = "Wood";
var_dump($box1);

$box2 = new Box();
$box2->width = 6;
$box2->height = 11;
$box2->lenght = 4;
$box2->material = "Metal";
var_dump($box2);
var_dump($box1);