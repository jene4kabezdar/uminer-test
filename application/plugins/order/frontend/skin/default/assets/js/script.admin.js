jQuery(document).ready(function($){
    /**
     * Сохранение заказа
     */
    $('.js-form-order-submit').click(function () {

        /* получение формы */
        var form =$('.js-form-order');

        /* получение экшена из атрибута формы  */
        var action = form.data('action');

        /* формирует ajax url */
        var url = aRouter.order + 'ajax/' + action;

        /* передает данные в метод отправки формы */
        ls.ajax.submit(url, form, function (result) {
            /* если возвращен результат без ошибок */
            if (!result.bStateError) {
                /* делаем редирект на возвращенный url*/
                window.location = result.urlRedirect;
            }
        });

        return false;

    });


    /**
     * Удаление заказа
     */
    $('.js-order-list-item-delete').click(function() {
        /* вывод подтверждение на удаление */
        if (!confirm(ls.lang.get( 'plugin.order.delete_confirm'))) return false;

        /* получение id записи */
        var id = $(this).data('id');

        /* формирует ajax url */
        var url = aRouter.order + 'ajax/remove';

        /* передает данные в метод отправки формы */
        ls.ajax.load(url, {id: id}, function (result) {
            /* если возвращен результат без ошибок */
            if (!result.bStateError) {
                /* делаем редирект на возвращенный url*/
                window.location = result.urlRedirect;
            }
        });

        return false;
    });
});