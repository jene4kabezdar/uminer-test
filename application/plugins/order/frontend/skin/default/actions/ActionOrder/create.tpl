{extends "layouts/layout.base.tpl"}

{block 'layout_options' append}
    {$tagPageTitle = 'h3'}
    {$layoutHideBreadcrumb = false}
{/block}

{block 'layout_page_breadcrumb'}
    <li class="breadcrumb-item"><a href="{router page="orders"}"
                                   class="breadcrumbs__link">{lang 'plugin.order.breadcrumbs'}</a></li>
    {if $order}
        <li class="breadcrumb-item active"><span class="breadcrumbs__current">{$order->getTitle()}</span></li>
    {else}
        <li class="breadcrumb-item active"><span
                    class="breadcrumbs__current"></span>{lang 'plugin.order.form_title_create'}</li>
    {/if}
{/block}

{block 'layout_page_title' append}
    {if $order}
        {lang 'plugin.order.form_title_update'} {$order->getTitle()}
    {else}
        {lang 'plugin.order.form_title_create'}
    {/if}
{/block}

{block 'layout_content'}
    <div class="container pluginator mb-3">


        <form action="" method="post" enctype="multipart/form-data" class="syn-form-panel js-form-order"
              data-action="{($order) ? 'update':'create'}">
            {if $order}
                <input type="hidden" name="id" value="{($order) ? $order->getId():''}">
            {/if}

            <div class="ls-field  ls-clearfix   mb-3">
                <label class="ls-field-label" for="order-title">{lang 'plugin.order.label_title'}</label>
                <div class="ls-field-holder">
                    <input type="text" name="order[title]" class="ls-field-input  form-control" id="order-title"
                           value="{($order) ? $order->getTitle():''}">
                </div>
                <small class="ls-field-note js-ls-field-note text-danger">{lang 'plugin.order.note_title'}</small>
            </div>

            <div class="mb-3">
                {component 'editor'
                name            = 'order[text_source]'
                value           = (( $order ) ? $order->getTextSource() : '')
                label           = {lang 'plugin.order.label_text'}
                note            = {lang 'plugin.order.note_text'}
                entityField     = 'text_source'
                entity          = 'PluginOrder_ModuleOrder_EntityOrder'
                classes         = 'order-field-text mb-3'
                inputClasses    = 'js-editor-default'
                mediaTargetType = 'topic'
                mediaTargetId   = ( $order ) ? $order->getId() : ''}
            </div>

            {if $fileExist}
                <p>Загружен файл <span>{$fileName}</span></p>
                <a target="_blank" href="/order/deletefile?id={$order->getId()}&filename={$fileName}">Удалить</a>
            {else}
                <p>Файлы не загружены</p>
                <input type="file" name="userfile">
            {/if}

            <div class="ls-field ls-field--checkbox  ls-clearfix   form-check mb-3">
                <div class="ls-field-holder">
                    <input type="checkbox" class="ls-field-input  form-check-input" name="active"
                           id="order-active" {($order && $order->getStatus()) ? 'checked':''}>
                </div>
                <label class="ls-field-label form-check-label" for="order-active">
                    {lang 'plugin.order.label_active'}
                </label>
                <div class="ls-field-note js-ls-field-note"><small
                            class="text-secondary">{lang 'plugin.order.note_active'}</small></div>
            </div>

            <div class="text-center">
                <a href="#"
                   class="ls-button ls-button--primary js-form-order-submit">{lang 'plugin.order.button_submit'}</a>
            </div>

        </form>
    </div>
{/block}