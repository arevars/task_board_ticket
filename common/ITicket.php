<?php

namespace common;

interface ITicket
{
    public function getType();
    public function getData();
    public function setData($key,$value);
}

?>