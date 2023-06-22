<?php

class PluginOrder_ModuleOrder_EntityOrder extends EntityORM
{
    /**
     * Объявление переменной для валидации полей
     *
     * @var array
     */
    protected $aValidateRules = [];

    public function Init()
    {
        parent::Init();
        /**
         * Правила валидации полей
         */
        $this->aValidateRules[] = ['title', 'string', 'allowEmpty' => false, 'min' => Config::Get('plugin.order.validate.title.min'), 'max' => Config::Get('plugin.order.validate.title.max'), 'label' => $this->Lang_Get('plugin.order.label_title')];
        $this->aValidateRules[] = ['text_source', 'string', 'allowEmpty' => false, 'min' => Config::Get('plugin.order.validate.text.min'), 'max' => Config::Get('plugin.order.validate.text.max'), 'label' => $this->Lang_Get('plugin.order.label_text')];
    }

    public function getUrl()
    {
        return Router::GetPath('order') . $this->getId();
    }

    public function getUrlEdit()
    {
        return Router::GetPath('order/edit') . $this->getId();
    }

}