<?php

namespace Model\data;

class Settings extends \Model\root\Request {

    public function __construct($param)
    {
        parent::__construct($param);
    }

    protected function getSettings()
    {
        return __DIR__ . '/settings/';
    }

    protected function getSettingsRoot()
    {
        return unserialize(file_get_contents(__DIR__ . '/settings/root.sz'));
    }

    protected function getSettingsExtension()
    {
        return unserialize(file_get_contents(__DIR__ . '/settings/extension.sz'));
    }

    protected function getSettingsDate()
    {
        return unserialize(file_get_contents(__DIR__ . '/settings/date.sz'));
    }

    protected function getSettingsPanelLangs()
    {
        return unserialize(file_get_contents(__DIR__ . '/settings/panel.langs.sz'));
    }

    protected function getSettingsPanelUsers()
    {
        return unserialize(file_get_contents(__DIR__ . '/settings/panel.users.sz'));
    }

}
