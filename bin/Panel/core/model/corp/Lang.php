<?php

namespace Panel\core\model\corp;

class Lang {

    public $lang;
    public $langs;
    private $_langs;
    private $_html;

    public function __construct($langs, $html)
    {
        $this->_langs = $langs;
        $this->lang = $this->_lang();
        $this->_html = $html;
        $this->langs = $this->_langs();
    }

    private function _lang()
    {

        $lang = $this->_langs['lang'];
        if ($this->_langs['multilang']) {
            return $lang;
        }
        if (filter_has_var(0, 'core:lang')) {
            $post = filter_input(0, 'core:lang');
            if (isset($this->_langs['langs'][$post])) {
                setcookie('lang', $post, strtotime('+ 1 year'), '/');
                $lang = $post;
            }
        } elseif (filter_has_var(2, 'lang')) {
            $cookie = filter_input(2, 'lang');
            !isset($this->_langs['langs'][$cookie]) ?: $lang = $cookie;
        }
        return $lang;
    }

    private function _langs()
    {
        if ($this->_langs['multilang']) {
            return '';
        }
        $button = '';
        foreach ($this->_langs['langs'] as $k => $v) {
            if ($k !== $this->lang) {
                $button .= str_replace(
                        ['{ V }', '{ L }', '{ B }'], [$k, $k, $v], $this->_html['button']
                );
            }
        }
        $search = ['{ L }', '{ B }'];
        $replace = [$this->_langs['langs'][$this->lang], $this->_langs_hidden() . $button];
        return str_replace($search, $replace, $this->_html['div']);
    }

    private function _langs_hidden()
    {
        $hidden = '';
        $post = filter_input_array(0);
        if ($post !== null) {
            foreach ($post as $k => $v) {
                if ($k === 'core:lang') {
                    continue;
                }
                $hidden .= ($k === 'login' or $k === 'post') ?
                        str_replace('{ N }', $k, $this->_html['hidden']) :
                        str_replace(['{ N }', '{ V }'], [$k, $v], $this->_html['hidden-value']);
            }
        }
        return $hidden;
    }

}
