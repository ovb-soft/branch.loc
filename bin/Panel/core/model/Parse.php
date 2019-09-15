<?php

namespace Panel\core\model;

class Parse extends \Model\data\Data {

    protected $exp;
    protected $class;
    protected $module;

    public function __construct($param)
    {
        parent::__construct($this->_parse($param));
    }

    private function _parse($param)
    {
        $this->exp = $param['exp'] ?? explode('/', $param['path']);
        $this->class = $param['class'] ?? mb_convert_case(end($this->exp), MB_CASE_TITLE);
        $this->module = $param['module'] ?? dirname(__DIR__, 2) . '/module/' . $param['path'] . '/';
        $param['error'] = ($param['error'] ? $param['error'] : !file_exists($this->module . $this->class . '.php')) ? '404' : false;
        return $param;
    }

    protected function getParam()
    {
        return[
            'exp' => $this->exp,
            'class' => $this->class,
            'module' => $this->module
                ] + $this->getModel();
    }

}
