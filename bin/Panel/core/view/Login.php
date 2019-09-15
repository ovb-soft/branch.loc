<?php

namespace Panel\core\view;

class Login extends \Panel\core\model\View {

    private $hl = [
        'mail' => '',
        'pass' => '',
        'wg' => ''
    ];

    public function __construct($param)
    {
        parent::__construct($param);
        parent::setView([
            'html' => require 'html.php',
            'lang' => __DIR__ . '/lang/login/',
        ]);
        $this->_login();
        require 'template/login.php';
    }

    private function _login()
    {
        $this->hl = [
            'mail' => trim(filter_input(0, 'mail')),
            'pass' => '',
            'wg' => $this->_warning()
        ];
    }

    private function _warning()
    {
        switch (0) {
            case 1: $w = $this->lt['incorrect_wg'];
                break;
            case 2: $w = $this->lt['blocked_wg'];
                break;
            case 3: $w = $this->lt['timeout_wg'];
                break;
            case 4: $w = $this->lt['server_wg'];
                break;
            case 5: $w = $this->lt['cookie_wg'];
                break;
        }
        return isset($w) ? str_replace('{ W }', $w, $this->html['wg']) : '';
    }

}
