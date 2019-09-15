<?php

namespace Model\root;

class Date extends \DateTime {

    protected $timestamp;

    public function __construct(array $param = [])
    {
        parent::__construct();
        $this->timestamp = $param['timestamp'] ?? parent::getTimestamp();
    }

    protected function getDate()
    {
        return[
            'timestamp' => $this->timestamp
        ];
    }

}
