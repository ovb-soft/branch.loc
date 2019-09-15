<?php

namespace Panel\core\view;

class Main extends \Panel\core\model\View {

    private $title;
    private $route;
    private $content;

    public function __construct($param)
    {
        parent::__construct($param);
        parent::setView([
            'html' => require 'html.php',
            'lang' => __DIR__ . '/lang/main/',
        ]);
    }

    protected function setMain($param)
    {
        $this->_title($param['title'] ?? false);
        $this->_route($param['route'] ?? false);
        $this->content = $param['content'] ?? '';
        require 'template/main.php';
    }

    private function _title($append)
    {
        $this->title = '';
        if (isset($this->lp)) {
            foreach ($this->exp as $v) {
                $this->title .= ' » ' . $this->lp[$v];
            }
            !$append ?: $this->title .= ' » ' . $append;
        }
    }

    private function _route($append)
    {
        $this->route = '';
        if (isset($this->lp) and ! $this->error) {
            for ($i = 0, $c = count($this->exp), $routes = '', $path = ''; $i < $c; $i++) {
                if ($i === $c - 1) {
                    $routes .= str_replace('{ T }', $this->lp[$this->exp[$i]], $this->html['route']['p']);
                    break;
                }
                $search = ['{ H }', '{ A }'];
                $path .= '/' . $this->exp[$i];
                $replace = [$path, $this->lp[$this->exp[$i]]];
                $routes .= str_replace($search, $replace, $this->html['route']['a']);
            }
            !$append ?: $routes .= isset($append['red']) ?
                            str_replace('{ T }', $append['red'], $this->html['route']['p-red']) :
                            str_replace('{ T }', $append, $this->html['route']['p']);
            $this->route = str_replace('{ R }', $routes, $this->html['route']['div']);
        }
    }

}
