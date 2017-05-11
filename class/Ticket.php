<?php


class Ticket extends EventManager
{
    protected $idEvent;
    protected $idTicket;
    protected $type;
    protected $idOrder;

    public function printTicketReserve()
    {
        echo '[' . $this->type . '] | reserving ticket #' . $this->idTicket . PHP_EOL;

        if (parent::PARTNER == $this->type) echo '[' . $this->type . '] | reserving ticket #' . $this->idTicket . parent::API . PHP_EOL;
    }

    public function printCreateObj($eventId)
    {
        echo '[' . $this->type . '] | creating object for event #'. $eventId . PHP_EOL;
    }

    static function reserveTicket()
    {
        return rand(10000, 99999);
    }

    static function genOrderId()
    {
        return rand(1000, 99999);
    }

    public function reserveRandomTicket($eventId)
    {
        return new Order($eventId);
    }
}