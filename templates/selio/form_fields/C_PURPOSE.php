<?php
    $values_arr = ${'options_values_arr_4'};
    $f_id = 4;
    $val = search_value($f_id);

    if(in_array($page_title,$values_arr)!== FALSE){
        global $_GET;
        $val = $page_title;
    }
    
    $CI = &get_instance();
    function _get_purpose($CI)
    {
        if(isset($CI->select_tab_by_title))
        if($CI->select_tab_by_title != '')
        {
            $CI->data['purpose_defined'] = $CI->select_tab_by_title;
            return $CI->select_tab_by_title;
        }
        
        if(isset($CI->data['is_purpose_sale'][0]['count']))
        {
            $CI->data['purpose_defined'] = lang('Sale');
            return lang('Sale');
        }
        
        if(isset($CI->data['is_purpose_rent'][0]['count']))
        {
            $CI->data['purpose_defined'] = lang('Rent');
            return lang('Rent');
        }
        
        if(config_item('all_results_default') === TRUE)
        {
            $CI->data['purpose_defined'] = '';
            return '';
        }
        
        $CI->data['purpose_defined'] = lang('Sale');
        return lang('Sale');
    }
    
    $purpose = _get_purpose($CI);
    $purpose = array_search(strtolower($purpose), array_map('strtolower', $values_arr));
    if($purpose !== FALSE) {
        $val =$values_arr[$purpose];
    }
?>

<div class="form_field ">
    <div class="form-group  field_search_<?php echo _ch($f_id); ?>">

        <div class="drop-menu">
            <div class="select">
                <?php reset($values_arr); if(key($values_arr)=='' && key($values_arr) !=0):?>
                    <span><?php echo current($values_arr);?></span>
                <?php else:?>
                    <span><?php echo ${'options_name_4'};?></span>
                <?php endif;?>
                <i class="fa fa-angle-down"></i>
            </div>
            <input type="hidden" id="search_option_<?php echo _ch($f_id); ?>" name="search_option_<?php echo _ch($f_id); ?>" value="<?php echo $val;?>" />
            <ul class="dropeddown">
                <?php reset($values_arr); if(key($values_arr)=='' && key($values_arr) !=0):?>
                    <li><?php echo current($values_arr);?></li>
                <?php else:?>
                    <li><?php echo ${'options_name_4'};?></li>
                <?php endif;?>
                <?php if(sw_count($values_arr)>0) foreach ($values_arr as $key => $value):?>
                    <?php $value = trim($value); if(empty($value)|| (empty($value) && empty($value)!=0))continue;?>
                    <li data-value="<?php echo _ch($value);?>"><?php echo _ch($value);?></li>
                <?php endforeach;?>
            </ul>
        </div>
    </div><!-- /.form-group -->
</div>


