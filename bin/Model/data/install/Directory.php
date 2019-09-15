<?php

namespace Model\data\install;

class Directory {

    protected $settings;
    protected $panel;
    protected $mail;
    protected $user;

    public function __construct(array $param = [])
    {
        $this->settings = $param['settings'];
        $this->panel = $param['panel'];
        $this->mail = $param['mail'];
        $this->user = $param['user'];
        $this->_mkdir();
    }

    private function _mkdir()
    {
        file_exists($this->settings) ?: mkdir($this->settings);
        file_exists($this->panel) ?: mkdir($this->panel);
        file_exists($this->mail) ?: mkdir($this->mail);
        file_exists($this->user) ?: mkdir($this->user);
    }

}
