<?php

namespace Model\data;

class Data extends Settings {

    public function __construct($param)
    {
        if (!file_exists(__DIR__ . '/settings/')) {
            new install\Install(
                    $this->_settings() +
                    $this->_users()
            );
        }
        parent::__construct($param);
    }

    private function _settings()
    {
        return[
            'settings' => __DIR__ . '/settings/'
        ];
    }

    private function _users()
    {
        return[
            'panel' => __DIR__ . '/panel/',
            'mail' => __DIR__ . '/panel/mail/',
            'user' => __DIR__ . '/panel/user/'
        ];
    }

    protected function getModel()
    {
        return
                $this->getDate() +
                $this->getRequest();
    }

}
