{**
 * Главная/список подсказок
 *}

{extends "layouts/layout.base.tpl"}

{block 'layout_options' append}
    {$tagPageTitle = 'h3'}
    {$layoutHideBreadcrumb = false}
{/block}

{block 'layout_page_breadcrumb'}
    <li class="breadcrumb-item active"><span class="breadcrumbs__current">{lang 'plugin.order.breadcrumbs'}</span></li>
{/block}

{block 'layout_page_title'}
    {lang 'plugin.order.page_index_title'}
{/block}

{block 'layout_content'}


        {if $orders}

            <table class="ls-table table-orders">
                <thead>
                    <tr>
                        <th>{lang 'plugin.order.table_head_id'}</th>
                        <th>{lang 'plugin.order.table_head_title'}</th>
                        <th>{lang 'plugin.order.table_head_date_add'}</th>
                        <th>{lang 'plugin.order.table_head_action'}</th>
                    </tr>
                </thead>
                <tbody></tbody>
                {foreach $orders as $order}
                    <tr >
                        <td>
                            <a href="{$order->getUrl()}">{$order->getId()}</a>
                        </td>
                        <td>
                            <a href="{$order->getUrl()}">{$order->getTitle()|escape}</a>
                        </td>
                        <td>
                            {date_format date=$order->getDateCreate() hours_back="12" minutes_back="60" now="60" day="day H:i" format="j F Y, H:i"}

                        </td>
                        <td>
                            <a href="{$order->getUrlEdit()}" class="ls-button btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="#" class="ls-button ls-button--danger btn btn-danger btn-sm js-order-list-item-delete" data-id="{$order->getId()}"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                {/foreach}
            </table>

            {component 'pagination' total=+$paging.iCountPage current=+$paging.iCurrentPage url="{$paging.sBaseUrl}/page__page__/{$paging.sGetParams}" classes='js-pagination-topics'}

        {else}

            <div class="alert alert-info">
                {lang 'plugin.order.list_empty'}
            </div>

        {/if}


{/block}