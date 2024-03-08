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

    class MetalBox extends Box {
    public $material = 'Metal';
    public $weight;

    public function volume(){
        return $this->width * $this->height * $this->lenght;
    }
}

$metalBox1 = new MetalBox();
var_dump($metalBox1);
$metalBox1 = new MetalBox();
var_dump($metalBox1);