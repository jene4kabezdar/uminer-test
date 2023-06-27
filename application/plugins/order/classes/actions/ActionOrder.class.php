<?php

class PluginOrder_ActionOrder extends ActionPlugin
{

    /**
     * Текущий пользователь
     * @var null
     */
    protected $oUserCurrent = null;

    public function Init()
    {

        /**
         * получение пользователя
         */
        $this->oUserCurrent = $this->User_GetUserCurrent();

        if (!$this->oUserCurrent || !$this->oUserCurrent->isAdministrator()) {
            /**
             * выводит сообщение об ошибке автризации
             */
            return $this->Message_AddErrorSingle(Config::Get('plugin.order.error_not_found'));
        }

    }

    /**
     * Регистрируем евенты
     *
     */
    protected function RegisterEvent()
    {
        $this->AddEventPreg('/^\d{1,10}$/i', '/^$/i', 'EventShowOrder'); // эвент для вывода объекта Заказ

        $this->AddEventPreg('/^add$/i', '/^$/i', 'EventAddOrder'); // эвент для вывода страницы добавления объекта Заказ
        $this->AddEventPreg('/^edit$/i', '/^\d{1,10}$/i', '/^$/i', 'EventEditOrder'); // эвент для вывода страницы редактирования объекта Заказ


        $this->AddEventPreg('/^ajax$/i', '/^create$/i', '/^$/i', 'AjaxCreate'); // ajax эвент для сохранения данных объекта заказ
        $this->AddEventPreg('/^ajax$/i', '/^update$/i', '/^$/i', 'AjaxUpdate'); // ajax эвент для обносления данных объекта заказ
        $this->AddEventPreg('/^ajax$/i', '/^remove$/i', '/^$/i', 'AjaxRemove'); // ajax эвент странцы удаления заказа из бд
        $this->AddEventPreg('/^deletefile/i', '/^$/i', 'EventDeleteFile'); // эвент для удаления файла
    }

    /**
     * Удаляет подсказку из БД
     * @return mixed
     */
    protected function AjaxRemove()
    {
        /**
         * Устанавливаем формат ответа
         */
        $this->Viewer_SetResponseAjax('json');

        /**
         * Получение подсказки по переданному id
         */
        if (!($oOrder = $this->PluginOrder_Order_GetOrderById(getRequest('id')))) {
            /**
             * если подсказка не найдена выводим сообщение об ошибке
             */
            return $this->Message_AddErrorSingle($this->Lang_Get('plugin.order.error_not_found'));
        }

        /**
         * Удаляет подсказку
         */
        if ($oOrder->Delete()) {

            /**
             * выводит сообщение об успешном удалении
             */
            $this->Message_AddNotice($this->Lang_Get('plugin.order.order_deleted'), false, true);

            /**
             * возвращает url для редиректа
             */
            $this->Viewer_AssignAjax('urlRedirect', Router::GetPath('orders'));

        } else {

            /**
             * выводит сообщение об ошибке
             */
            $this->Message_AddError($this->Lang_Get('common.error.error'));
        }

    }

    /**
     * Удаляет файл
     */
    protected function EventDeleteFile()
    {
        $fileName = getRequestStr('filename');
        $id = getRequestStr('id');
        $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $id . '/';
        if (unlink($uploaddir . $fileName)) {
            echo 'Файл удалён';
        } else {
            echo 'Ошибка удаления';
        }
    }

    protected function AjaxCreate()
    {
        /**
         * Устанавливаем формат ответа
         */
        $this->Viewer_SetResponseAjax('json');

        $oOrder = Engine::GetEntity('PluginOrder_Order');

        $oOrder->_setData(getRequest('order'));

        $oOrder->setStatus(0);
        if (getRequestStr('active')) {
            $oOrder->setStatus(1);
        }

        /**
         * Установка даты добавления
         */
        $oOrder->setDateCreate(date('Y-m-d H:i:s'));
        /**
         * Валидация полей заказа
         */
        if ($oOrder->_Validate()) {

            /**
             * Прогон через парсер текста заказа
             * формирование тегов, переносов, удаление лишнего и тд
             */
            $oOrder->setText($this->Text_Parser($oOrder->getTextSource()));

            /**
             * сохранение подсказки
             */
            if ($oOrder->Add()) {

                /**
                 * выводит сообщение об успешном сохранении
                 */
                $this->Message_AddNotice('Заказ создан', false, true);

                /**
                 * Загружает файл
                 */
                self::uploadFile($oOrder);

                /**
                 * возвращает url для редиректа
                 */
                $this->Viewer_AssignAjax('urlRedirect', $oOrder->getUrl());

            } else {

                /**
                 * выводит сообщение об ошибке
                 */
                $this->Message_AddError($this->Lang_Get('common.error.error') . ' 333');
            }

        } else {

            /**
             * выводит сообщение об ошибке
             */
            $this->Message_AddError($oOrder->_getValidateError(), $this->Lang_Get('common.error.error'));
        }
    }

    protected function AjaxUpdate()
    {
        /**
         * Устанавливаем формат ответа
         */
        $this->Viewer_SetResponseAjax('json');

        /**
         * Получение плагина по переданному id
         */
        if (!($oOrder = $this->PluginOrder_Order_GetOrderById(getRequestStr('id')))) {
            /**
             *  выводит сообщение что заказ не найден
             */
            return $this->Message_AddErrorSingle(Config::Get('plugin.order.error_not_found'));
        }

        $oOrder->_setData(getRequest('order'));

        $oOrder->setStatus(0);
        if (getRequestStr('active')) {
            $oOrder->setStatus(1);
        }

        /**
         * Установка даты обновления
         */
        $oOrder->setDateUpdate(date('Y-m-d H:i:s'));

        self::uploadFile($oOrder);

        /**
         * Валидация полей заказа
         */
        if ($oOrder->_Validate()) {

            /**
             * Прогон через парсер текста заказа
             * формирование тегов, переносов, удаление лишнего и тд
             */
            $oOrder->setText($this->Text_Parser($oOrder->getTextSource()));

            /**
             * сохранение подсказки
             */
            if ($oOrder->Update()) {

                /**
                 * выводит сообщение об успешном сохранении
                 */
                $this->Message_AddNotice('Заказ сохранен', false, true);

                /**
                 * возвращает url для редиректа
                 */
                $this->Viewer_AssignAjax('urlRedirect', $oOrder->getUrl());

            } else {

                /**
                 * выводит сообщение об ошибке
                 */
                $this->Message_AddError($this->Lang_Get('common.error.error'));
            }

        } else {

            /**
             * выводит сообщение об ошибке
             */
            $this->Message_AddError($oOrder->_getValidateError(), $this->Lang_Get('common.error.error'));
        }
    }


    /**
     * Выводит страницу редактирования объекта Заказ
     * @return string
     */
    protected function EventEditOrder()
    {
        $this->Viewer_AppendScript(Plugin::GetTemplatePath(__CLASS__) . '/assets/js/script.admin.js');

        /**
         * Получение плагина по переданному id
         */
        if (!($oOrder = $this->PluginOrder_Order_GetOrderById($this->GetParam(0)))) {
            /**
             * передаем к экшену "страница не найдена"
             */
            return parent::EventNotFound();
        }

        $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $oOrder->getId() . '/';
        $fileName = basename(glob($uploaddir . '*')[0]);
        $fileExist = false;
        if ($fileName) {
            $uploadfile = $uploaddir . $fileName;
            $fileExist = file_exists($uploadfile);
        }

        /**
         * передает данные в шаблон
         */
        $this->Viewer_Assign('order', $oOrder);
        $this->Viewer_Assign('fileExist', $fileExist);
        $this->Viewer_Assign('fileName', $fileName);

        /**
         * объявляет шаблон для вывода
         */
        $this->SetTemplateAction('create');
    }

    /**
     * Выводит страницу добавления объекта Заказ
     */
    protected function EventAddOrder()
    {
        $this->Viewer_AppendScript(Plugin::GetTemplatePath(__CLASS__) . '/assets/js/script.admin.js');

        $this->SetTemplateAction('create');

    }

    /**
     * Выводит страницу объекта Заказ
     */
    protected function EventShowOrder()
    {

        if ($this->oUserCurrent->isAdministrator()) {

            $this->Viewer_AppendScript(Plugin::GetTemplatePath(__CLASS__) . '/assets/js/script.admin.js');
        }
        /**
         * Получение плагина по переданному id
         */
        if (!($oOrder = $this->PluginOrder_Order_GetOrderById($this->sCurrentEvent))) {
            /**
             * передаем к экшену "страница не найдена"
             */
            return parent::EventNotFound();
        }

        /**
         * передает данные в шаблон
         */
        $this->Viewer_Assign('order', $oOrder);

        /**
         * Загружаем в шаблон JS текстовки
         */
        $this->Lang_AddLangJs(array(
            'plugin.order.delete_confirm'
        ));

        /**
         * объявляет шаблон для вывода
         */
        $this->SetTemplateAction('order');
    }

    private static function uploadFile($oOrder) {
        if (!is_dir( $_SERVER['DOCUMENT_ROOT'] . '/uploads/')) {
            mkdir( $_SERVER['DOCUMENT_ROOT'] . '/uploads/');
        }

        $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $oOrder->getId() . '/';
        if (!is_dir($uploaddir)) {
            mkdir($uploaddir);
        }

        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

        if (!file_exists($uploadfile)) {
            move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
        }
    }
}