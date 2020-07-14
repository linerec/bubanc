
<?php
    $f_id = $field->id;
    $placeholder = _ch(${'options_name_'.$f_id});
    $direction = $field->direction;
    if($direction == 'NONE'){
        $direction = '';
    }
    else
    {
        $placeholder = lang_check($direction);
        $direction=strtolower('_'.$direction);
    }
    
    
    $f_id = $field->id;
    $class_add = $field->class;
?>

<div class="form_field <?php echo $class_add; ?>" style="<?php _che($field->style); ?>">
    <div class="form-group">
        <?php echo form_treefield('search_option_'.$f_id, 'treefield_m', search_value($f_id), 'value', $lang_id, 'field_search_', true, $placeholder, $f_id, 'class="form-control locationautocomplete"','value_path');?>
    </div><!-- /.select-wrapper -->
</div><!-- /.form-group -->