<?php

require_once 'boot.php';

use PHPUnit\Framework\TestCase;
use Models\TicketManager;


class TicketManagerTest extends TestCase
{
    public function testGetSortedList() {
        $b = new \stdClass();
        $b->id = 263;
        $b->from = 32;
        $b->to = 21;
        $b->type = 1;
        $b->train = "75A";
        $b->seat = "45B";

        $c = new \stdClass();
        $c->id = 86;
        $c->from = 21;
        $c->to = 93;
        $c->type = 3;
        $b->busNumber = "75A";
        $c->seat = null;

        $a = new \stdClass();
        $a->id = 26;
        $a->from = 93;
        $a->to = 452;
        $a->type = 2;
        $a->flightNumber = 'SK455';
        $a->gate = '45B';
        $a->seat = '3A';
        $a->baggageNumber = 343;

        $d = new \stdClass();
        $d->id = 26;
        $d->from = 452;
        $d->to = 34;
        $d->type = 2;
        $d->flightNumber = 'SK22';
        $d->gate = 22;
        $d->seat = '7B';
        $d->baggageNumber = null;

        $ticketData = json_encode([$c,$b,$a,$d]);

        $ticketManager = new TicketManager($ticketData);
        $data = $ticketManager->getSortedList();

        $this->assertEquals(32, $data[0]->from);
        $this->assertEquals(21, $data[0]->to);

        $this->assertEquals(21, $data[1]->from);
        $this->assertEquals(93, $data[1]->to);

        $this->assertEquals(93, $data[2]->from);
        $this->assertEquals(452, $data[2]->to);

        $this->assertEquals(452, $data[3]->from);
        $this->assertEquals(34, $data[3]->to);
    }
}