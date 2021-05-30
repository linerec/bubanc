<?php
/*
Widget-title: Search form
Widget-preview-image: /assets/img/widgets_preview/top_search2.webp
*/
?>
<section class="form_sec widget_edit_enabled">
    <h3 class="vis-hid">Invisible</h3>
    <div class="container">
        <form action="#" class="row banner-search search-form top-search">
            {is_logged_other}
            <?php if ($this->session->userdata('type') == 'ADMIN'): ?>
            <div class="widget-controls-panel widget_controls_panel" data-widgetfilename="right_filterform">
                <a href="<?php echo site_url('admin/forms/edit/7');?>" target="_blunk" class="btn btn-edit"><i class="ion-edit"></i></a>
            </div>
            <?php endif;?>
            {/is_logged_other}
            <?php  _search_form_primary(7); ?>
            <div class="form_field srch-btn">
                <a href="#" class="btn btn-outline-primary sw-search-start sw-search-start-slim">
                    <i class="fa fa-spinner fa-spin fa-ajax-indicator hidden"></i>
                    <i class="la la-search"></i>
                </a>
            </div>
        </form>
    </div>
</section><!--form_sec end-->