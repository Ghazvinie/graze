<?php

class View {

    protected $file;

    public function renderView(){
        require $this->file;
    }
};