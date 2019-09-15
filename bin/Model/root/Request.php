<?php

namespace Model\root;

class Request extends Date {

    protected $request;
    protected $error;
    protected $path;
    protected $ext;

    public function __construct($param)
    {
        parent::__construct($param);
        isset($param['request']) ? $this->_param($param) : $this->_request();
    }

    private function _request()
    {
        $this->request = urldecode(filter_input(5, 'REQUEST_URI'));
        $this->path = $this->_parse();
        $this->error = $this->_error();
    }

    private function _parse()
    {
        $query = strrchr($this->request, '?');
        $urn = $query ? substr($this->request, 0, - strlen($query)) : $this->request;
        $this->ext = strrchr($urn, '.');
        return $this->ext ? substr($urn, 1, - strlen($this->ext)) : substr($urn, 1);
    }

    private function _error()
    {
        return (
                preg_match('/^[\w\-\.\/\?\&\=\:\~]+$/iu', $this->request) === 0 or
                preg_match('/\/\//', $this->request) === 1 or
                preg_match('/[\/]$/', $this->path) === 1 or
                $this->ext and empty($this->path)
                ) ? true : false;
    }

    private function _param($param)
    {
        $this->request = $param['request'];
        $this->error = $param['error'];
        $this->path = $param['path'];
        $this->ext = $param['ext'];
    }

    protected function getRequest()
    {
        return[
            'request' => $this->request,
            'error' => $this->error,
            'path' => $this->path,
            'ext' => $this->ext
        ];
    }

}
