<?php

class PluginOrder_ActionOrders extends ActionPlugin
{

    /**
     * Текущий пользователь
     * @var null
     */
    protected $oUserCurrent = null;

    /**
     *
     */
    public function Init()
    {

        /**
         * получение пользователя
         */
        $this->oUserCurrent = $this->User_GetUserCurrent();

        $this->SetDefaultEvent('index');
    }

    /**
     * Регистрируем евенты
     *
     */
    protected function RegisterEvent()
    {
        $this->AddEvent('index', 'EventIndex');
        $this->AddEventPreg('/^(page([1-9]\d{0,5}))?$/i', 'EventIndex');
    }

    /**
    * Экшен главной страницы плагигна
    *
    */
    protected function EventIndex()
    {

        if ($this->oUserCurrent->isAdministrator()) {

            $this->Viewer_AppendScript(Plugin::GetTemplatePath(__CLASS__) . '/assets/js/script.admin.js');
        }

        $iPage = $this->GetEventMatch(2) ? $this->GetEventMatch(2) : 1;
        $iPerPage = Config::Get('plugin.order.per_page');

        $aFilter = [
            '#page' => [
                $iPage, $iPerPage
            ],
            '#order' => [
                'date_create' => 'DESC'
            ],
        ];

        $aResult = $this->PluginOrder_Order_GetOrderItemsByFilter($aFilter);

        /**
         * Формируем постраничность
         */
        $aPaging = $this->Viewer_MakePaging($aResult['count'], $iPage, $iPerPage, Config::Get('pagination.pages.count'), Router::GetPath('orders'));

        /**
         * передает данные в шаблон
         */
        $this->Viewer_Assign('orders', $aResult['collection']);
        $this->Viewer_Assign('pagination', $aPaging);

        /**
         * Загружаем в шаблон JS текстовки
         */
        $this->Lang_AddLangJs(array(
            'plugin.order.delete_confirm'
        ));

        /**
        * объявляет шаблон для вывода
        */
        $this->SetTemplateAction('index');

    }

}