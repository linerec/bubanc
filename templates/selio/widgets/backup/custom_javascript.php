<?php _widget('custom_popup');?>
<div class="se-pre-con"></div>

<!-- Start JS MAP  -->
<?php load_map_api(config_db_item('map_version'), $lang_code);?>

<?php cache_file('big_js_footer.js', NULL, true); ?>
<?php cache_file('big_js_orig.js', NULL); ?>

<?php
//_generate_js('_generate_custom_javascript_'.md5(current_url()), 'widgets/_generate_custom_javascript.php');

sw_add_script('page_js_'.md5(current_url()), 'widgets/_generate_custom_javascript.php');
sw_add_script('page_js_'.md5(current_url()), 'widgets/_generate_calendar_js.php');
sw_add_script('page_js_'.md5(current_url()), 'widgets/_generate_dependentfields.php');

sw_add_script('page_js_'.md5(current_url()), NULL);

?>
