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

<div class="form_field c-purpose-form-field">
    <div class="form-group  field_search_<?php echo _ch($f_id); ?>">
        <?php if(sw_count($values_arr)>0) foreach ($values_arr as $key => $value):?>
            <?php $value = trim($value); if(empty($value)|| (empty($value) && empty($value)!=0))continue;?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="search_option_<?php echo _ch($f_id); ?>" id="<?php echo _ch($value);?>" value="<?php echo _ch($value);?>">
                <label class="form-check-label" for="<?php echo _ch($value);?>"><?php echo _ch($value);?></label>
            </div>
        <?php endforeach;?>
    </div><!-- /.form-group -->
</div>
