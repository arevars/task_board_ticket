<?php

namespace common;

use common\ITicket;

abstract class Ticket implements ITicket {

    public $from;
    public $to;

    abstract public function getType();

    public function getData() {
        return $this;
    }

    public function setData($key,$value) {
        $this->$key = $value;
    }
}


