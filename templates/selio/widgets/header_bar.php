<?php
/*
Widget-title: Header bar
Widget-preview-image: /assets/img/widgets_preview/header_bar.webp
 */
?>
<?php echo _widget('custom_palette');?>
<?php
 $lang_array = $this->language_m->get_array_by(array('is_frontend'=>1));
?> 
<div class="top-header widget_edit_enabled">
    <div class="container">
        <div class="row justify-content-between">
            {not_logged}
            <div class="col-xl-7 col-md-7 col-sm-12">
            {/not_logged}  
            {is_logged_user}
            <div class="col-xl-10">
            {/is_logged_user}
            {is_logged_other}
            <div class="col-xl-10 col-md-10 col-xs-10">
            {/is_logged_other}
                <div class="header-address">
                    {not_logged}
                        <?php 
                            $justNums = preg_replace("/[^0-9]/", '',  _ch($settings_phone,'#'));
                        ?>
                        <a href="tel://<?php echo $justNums;?>">
                            <i class="la la-phone-square"></i>
                            <span> {settings_phone}</span>
                        </a>
                        <a href="mailto:{settings_email}">
                            <i class="la la-envelope-o"></i>
                            <span>{settings_email}</span>
                        </a>
                        <?php if(config_db_item('property_subm_disabled')==FALSE):  ?>
                        <a href="{front_login_url}#content" class="login_popup_enabled"><i class="la la-user"></i> <span>{lang_Login}</span></a>
                        <?php endif;?>
                    {/not_logged}

                    {is_logged_user}
                        <?php if(file_exists(APPPATH.'controllers/admin/booking.php')):?>
                        <a href="{myreservations_url}#content"><i class="fa fa-shopping-cart"></i><span> <?php _l('Myreservations');?></span></a>
                        <?php endif; ?>
                             <a href="{myproperties_url}#content"><i class="fa fa-list"></i> <span><?php _l('Myproperties');?></span></a>
                        <?php if(file_exists(APPPATH.'controllers/admin/savesearch.php')): ?>
                        <a href="{myresearch_url}#content"><i class="fa fa-filter"></i><span> <?php _l('Myresearch');?></span></a>  
                        <?php endif; ?>
                        <?php if(file_exists(APPPATH.'controllers/admin/favorites.php')):?>
                        <a href="{myfavorites_url}#content"><i class="fa fa-star"></i> <span><?php _l('Myfavorites');?></span></a>
                        <?php endif; ?>
                        <a href="<?php _che($mymessages_url); ?>#content"><i class="fa fa-envelope"></i> <span><?php _l('My messages'); ?></span></a>
                        <a href="{myprofile_url}#content"><i class="fa fa-user"></i> <span><?php _l('Myprofile');?></span></a>
                        <a href="{logout_url}"><i class="fa fa-power-off"></i><span> <?php _l('Logout');?></span></a>
                        <?php if(isset($page_edit_url)&&!empty($page_edit_url)):?>
                        <a href="{page_edit_url}"><i class="fa fa-edit"></i><span>  <?php echo _l('edit page');?></span></a>
                        <?php endif;?>
                    </ul>
                    {/is_logged_user}
                    {is_logged_other}
                        <a href="{login_url}"><i class="fa fa-wrench"></i> <span><?php _l('Admininterface');?></span></a>
                        <a href="{logout_url}"><i class="fa fa-power-off"></i><span> <?php _l('Logout');?></span></a>
                        <?php if(isset($page_edit_url)&&!empty($page_edit_url)):?>
                        <a href="{page_edit_url}"><i class="fa fa-edit"></i><span> <?php echo _l('edit page');?></span></a>
                        <?php endif;?>
                        <?php if(isset($category_edit_url)&&!empty($category_edit_url)) :?>
                        <a href="{category_edit_url}"><i class="fa fa-edit"></i> <span><?php echo _l('edit category');?></span></a>
                        <?php endif;?>
                        <?php if($this->session->userdata('type') == 'ADMIN'): ?>
                            <?php
                            $CI = &get_instance();
                            if($CI->uri->segment(1) == $listing_uri && false):?>
                                <a href="<?php echo site_url('admin/estate/options');?>"><i class="fa fa-edit"></i><span> <?php echo lang_check('edit fields');?></span></a>
                            <?php endif; ?>
                            <?php if($CI->uri->segment(1) != $listing_uri && isset($page_template) && substr($page_template, 0, 7) == 'custom_'): $template_id = substr($page_template, 7);?>
                                <a href="<?php echo site_url('admin/templates/edit/'.$template_id);?>"><i class="fa fa-edit"></i> <span><?php echo lang_check('Designer editing');?></span></a>
                            <?php endif;?>
                        <?php endif;?>
                    {/is_logged_other}
                </div>
            </div>
            {not_logged}
            <?php if(sw_count($lang_array) > 1):?> 
            <div class="col-xl-3 col-lg-2 col-md-2 col-sm-6 col-6">
            <?php else:?>
            <div class="col-xl-3 col-md-5 col-sm-12">
            <?php endif;?>
                <div class="header-social">
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>
            {/not_logged}  
            {is_logged_other}
            <?php if(sw_count($lang_array) > 1):?> 
            <?php else:?>
            <div class="col-xl-3 col-md-5 col-sm-12">
                <div class="header-social">
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>
            <?php endif;?>
            {/is_logged_other}
            <?php if(sw_count($lang_array) > 1):?> 
            <div class="resp-grid">
                <?php _widget('custom_langmenu');?>
            </div>
            <?php endif;?>
        </div>
    </div>
</div>