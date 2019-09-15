<?php

namespace Panel\core\model;

class View extends Parse {

    protected $html;
    protected $head;
    protected $logo;
    protected $lang;
    protected $langs;
    protected $lt;
    protected $lp;
    protected $lm;
    protected $le;

    public function __construct($param)
    {
        parent::__construct($param);
    }

    protected function setView($param)
    {
        $this->html = $param['html'];
        $this->head = (
                file_exists(dirname(__DIR__, 4) . '/panel/' . $this->exp[0] . '.css')
                ) ? $this->html['css'] : '';
        $this->logo = $this->path === 'main' ? $this->html['logo'] : $this->html['a-logo'];
        $this->_lang($param['lang']);
    }

    private function _lang($param)
    {
        $lang = new corp\Lang($this->getSettingsPanelLangs(), $this->html['lang']);
        $this->lang = $lang->lang;
        $this->langs = $lang->langs;
        $this->lt = require $param . $this->lang . '.php';
        $file = $this->module . 'lang/' . $this->lang . '.php';
        if (file_exists($file)) {
            $lang = require $file;
            !isset($lang['lp']) ?: $this->lp = $lang['lp'];
            !isset($lang['lm']) ?: $this->lm = $lang['lm'];
            !isset($lang['le']) ?: $this->le = $lang['le'];
        }
    }

}
