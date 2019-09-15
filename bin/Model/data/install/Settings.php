<?php

namespace Model\data\install;

class Settings extends Directory {

    public function __construct($param)
    {
        parent::__construct($param);
        $this->_root();
    }

    private function _root()
    {
        file_put_contents($this->settings . 'root.sz', serialize(false));
        $this->_extension();
    }

    private function _extension()
    {
        file_put_contents($this->settings . 'extension.sz', serialize('.ww'));
        $this->_date();
    }

    private function _date()
    {
        file_put_contents($this->settings . 'date.sz', serialize([
            'time_zone' => 'Europe/Moscow',
            'region' => 'europe'
        ]));
        $this->_langs();
    }

    private function _langs()
    {
        file_put_contents($this->settings . 'panel.langs.sz', serialize([
            'lang' => 'ru',
            'langs' => [
                'en' => 'English',
                'ru' => 'Русский'
            ],
            'multilang' => false
        ]));
        $this->_users();
    }

    private function _users()
    {
        file_put_contents($this->settings . 'panel.users.sz', serialize([
            'block' => 2,
            'timer' => 1800,
            'panel' => $this->panel,
            'mail' => $this->mail,
            'user' => $this->user
        ]));
        $this->_header();
    }

    private function _header()
    {
        header('Location: /');
        exit;
    }

}
