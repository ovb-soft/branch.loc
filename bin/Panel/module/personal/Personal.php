<?php

namespace Panel\module\personal;

class Personal extends \Panel\core\view\Main {

    public function __construct($param)
    {
        parent::__construct($param);
        parent::setMain([
            'content' => 'Personal'
        ]);
    }

}
