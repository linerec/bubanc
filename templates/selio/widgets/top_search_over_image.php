<?php
/*
Widget-title: Search over image
Widget-preview-image: /assets/img/widgets_preview/top_search_over_image.webp
 */
?>
<section class="banner widget_edit_enabled">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content">
                    <h2 class="banner-main"><?php echo lang_check('Discover best properties in one place');?></h2>
                </div>
            </div>
            <div class="offset-lg-2 col-lg-8">
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
                        <a href="#" class="btn btn-outline-primary sw-search-start">
                            <i class="la la-search"></i>
                            <span><?php echo lang_check('Search');?></span>
                            <i class="fa fa-spinner fa-spin fa-ajax-indicator hidden"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>