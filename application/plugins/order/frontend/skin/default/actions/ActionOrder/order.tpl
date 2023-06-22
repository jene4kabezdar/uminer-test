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
        <div class="pluginator-view my-3">
            {$order->getText()}
        </div>

    </div>
{/block}