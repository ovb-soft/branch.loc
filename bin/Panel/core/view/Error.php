<?php

namespace Panel\core\view;

class Error extends \Panel\core\model\View {

    private $title;
    private $content;

    public function __construct($param)
    {
        parent::__construct($param);
        parent::setView([
            'html' => require 'html.php',
            'lang' => __DIR__ . '/lang/error/',
        ]);
        $this->title = ' » ' . $this->lt[$this->error]['title'];
        $this->content = str_replace('{ E }', $this->lt[$this->error]['content'], $this->html['id-error']);
        require 'template/error.php';
    }

}
