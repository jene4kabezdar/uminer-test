{extends "layouts/layout.base.tpl"}

{block 'layout_options' append}
    {$tagPageTitle = 'h3'}
    {$layoutHideBreadcrumb = false}
{/block}

{block 'layout_page_breadcrumb'}
    <li class="breadcrumb-item"><a href="{router page="orders"}"
                                   class="breadcrumbs__link">{lang 'plugin.order.breadcrumbs'}</a></li>
    <li class="breadcrumb-item active"><span class="breadcrumbs__current">{$order->getTitle()}</span></li>
{/block}

{block 'layout_page_title' append}
    {lang 'plugin.order.page_order_title'}: {$order->getTitle()}
{/block}

{block 'layout_content'}
    <div class="container pluginator mb-3">


        {$items = [
            [ 'icon' => 'edit', 'url' => $order->getUrlEdit(), 'text' => $aLang.common.edit ],
            [ 'icon' => 'trash', 'url' => "#", 'text' => $aLang.common.remove, 'classes' => 'ls-button--danger js-order-list-item-delete' ]
        ]}
        {component 'actionbar' classes="order-actions" items=[[ 'buttons' => $items ]]}

        <div class="h3">{lang 'plugin.order.view_label_text'}</div>
            <form action="" method="post" enctype="multipart/form-data" class="syn-form-panel js-form-order"
                  data-action="update">
                <input type="hidden" name="id" value="{$order->getId()}">
                <div class="ls-field ls-field--checkbox  ls-clearfix form-check mb-3">
                    <div class="ls-field-holder">
                        <input type="checkbox" class="ls-field-input  form-check-input" name="active"
                               id="order-active" {($order->getStatus()) ? 'checked':''}>
                    </div>
                    <label class="ls-field-label form-check-label" for="order-active">
                        {lang 'plugin.order.label_active'}
                    </label>
                    <div class="ls-field-note js-ls-field-note"><small class="text-secondary">{lang 'plugin.order.note_active'}</small></div>
                </div>
                <div class="text-center">
                    <a href="#"
                       class="ls-button ls-button--primary js-form-order-submit">{lang 'plugin.order.button_submit'}</a>
                </div>
            </form>
        <div class="pluginator-view my-3">
            {$order->getText()}
        </div>

    </div>
{/block}