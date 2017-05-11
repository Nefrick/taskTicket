<?php



class Order extends Ticket
{

    public function __construct($eventId)
    {
        $this->idEvent = $eventId;

        $this->type = $this->getTypeEvent($eventId);

        $this->idTicket = Ticket::reserveTicket();

        $this->printCreateObj($eventId);

        $this->printTicketReserve();

        $this->createOrder();

    }

    public function createOrder()
    {
        $this->idOrder = Ticket::genOrderId();

        echo '[' . $this->type . '] | orderId #'. $this->idOrder . ' created'.PHP_EOL;

        $this->sandAdminNotification();

        return true;
    }

    public function sandAdminNotification()
    {
        echo '[' . $this->type . '] | Sanding admin notification: Order #'. $this->idOrder . ' created for event #'. $this->idEvent . PHP_EOL;
    }

}