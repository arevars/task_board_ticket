<?php

namespace Common;

abstract class Ticket implements ITicket {

    public $id;
    public $from;
    public $to;
    public $type;

    abstract public function getType();

    public function getData() {
        return $this;
    }

    public function setData($key,$value) {
        $this->$key = $value;
    }
}


