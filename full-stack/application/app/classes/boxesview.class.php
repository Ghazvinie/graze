<?php

class BoxesView 
{
    /**
     * @param data Boxes data
     */

    public $data;

    public function __construct($data){
        $this->data = $data;
    }

    public function getData(){
        return $this->data;
    }

}
