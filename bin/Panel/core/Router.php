<?php

namespace Panel\core;

class Router extends model\Parse {

    public function __construct($param)
    {
        parent::__construct($param);
        $this->path === 'logout' ? $this->_logout() : $this->_login();
    }

    private function _logout()
    {
        setcookie('hash', '', 0, '/');
        setcookie('user', '', 0, '/');
        header('Location: /');
    }

    private function _login()
    {
        new view\Login($this->getParam());
//        $this->error ? $this->_error() : $this->_module();
    }

    private function _error()
    {
        new view\Error($this->getParam());
    }

    private function _module()
    {
        $module = '\\Panel\\module\\' . str_replace('/', '\\', $this->path) . '\\' . $this->class;
        new $module($this->getParam());
    }

}
