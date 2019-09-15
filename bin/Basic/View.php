<?php

namespace Basic;

class View extends \Model\data\Data {

    private $extension;

    public function __construct($param)
    {
        parent::__construct($param);
        $this->extension = $this->getSettingsExtension();
        $this->lt = require 'lang.php';
        require 'view.main.php';
    }

}
