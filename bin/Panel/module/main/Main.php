<?php

namespace Panel\module\main;

class Main extends \Panel\core\view\Main {

    public function __construct($param)
    {
        parent::__construct($param);
        parent::setMain([
            'content' => require 'html.php'
        ]);
    }

}
