<?php

/**
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
    die('Hacking attempt!');
}

class PluginOrder extends Plugin
{

    public function Init()
    {
        $this->Viewer_AppendStyle(Plugin::GetTemplatePath(__CLASS__) . '/assets/css/style.css');
    }

    public function Activate()
    {
        return true;
    }

}