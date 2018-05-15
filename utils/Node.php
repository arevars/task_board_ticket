<?php

namespace Utils;

class Node {

// stores added item
    public $data;

// stores address to next node
    public $next;

// Node constructor
    function __construct($item = FALSE){

        $this->data = $item;
        $this->next = NULL;
    }

// returns item
    public function getData(){
        return $this->data;
    }
}

?>