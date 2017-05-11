<?php


class EventManager {

    const LOCAL   = 'local';
    const PARTNER = 'partnerApi';
    const API     = ' VIA PARTNER API CALL';

    /*
    * take eventId  int
    * return string 'local' or 'partnerApi'
    */
    public function getTypeEvent($eventId)
    {
        return ( $eventId % 2 == 0 ) ? self::LOCAL : self::PARTNER;
    }

}


