<?php

class Branch extends Model\data\Data {

    public function __construct()
    {
        parent::__construct([]);
        $this->ext === $this->getSettingsExtension() ? $this->_panel() : $this->_basic();
    }

    private function _panel()
    {
        http_response_code(404);
        new Panel\core\Router($this->getModel());
    }

    private function _basic()
    {
        new \Basic\View($this->getModel());
    }

}
