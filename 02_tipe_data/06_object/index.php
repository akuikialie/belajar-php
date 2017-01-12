<?php

class laptop{
    function laptop(){
        $this->model = "metalblack";
    }
}

$asus = new laptop();

echo $asus->model;
