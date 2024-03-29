<div class="list-products">
    <?php foreach($results as $key=>$item): ?>
    <div class="card">
        <a href="<?php echo $item['url']; ?>" title="<?php echo _ch($item['option_10']); ?>">
            <div class="img-block">
                <div class="overlay"></div>
                <?php if(_ch($item['option_38'], false) && _ch($item['option_38'], false) !='empty'):?>
                <?php
                    // check for version with category related marker
                    $badge=_ch($item['option_38'], false);
                    $badge=strtolower($badge);
                    $badge=str_replace(' ','_',$badge);
                    echo "<span class='listing_badge badge-".($badge)."'><span class='lab'>"._ch($item['option_38'], false)."</span></span>";
                ?>
                <?php endif;?>
                <img src="<?php echo _simg($item['thumbnail_url'], '851x678', true); ?>" alt="<?php echo _ch($item['option_10']); ?>" class="img-fluid">
                <div class="rate-info">
                    <?php if(!empty($item['option_36']) || !empty($item['option_37'])): ?>
                    <h5>
                    <?php if(!empty($item['option_36']) || !empty($item['option_37'])): ?>
                        <?php if(_ch($item['option_4'], false) && stripos($item['option_4'], lang_check('Rent'))!==FAlSE):?>
                            <?php 
                                if(!empty($item['option_37']))echo ' '.$options_prefix_37.price_format($item['option_37'], $lang_id).$options_suffix_37;
                                if(!empty($item['option_36']))echo $options_prefix_36.price_format($item['option_36'], $lang_id).$options_suffix_36;
                            ?>
                        <?php else:?>
                            <?php 
                                if(!empty($item['option_36']))echo $options_prefix_36.price_format($item['option_36'], $lang_id).$options_suffix_36;
                                if(!empty($item['option_37']))echo ' '.$options_prefix_37.price_format($item['option_37'], $lang_id).$options_suffix_37;
                            ?>
                        <?php endif;?>
                    <?php endif; ?>
                    </h5>
                    <?php endif; ?>
                    <?php if(_ch($item['option_4'], false)):?>
                    <span class="purpose-<?php $a='';$a=strtolower($item['option_4']);echo str_replace(' ','_',$a); ?>"><?php echo _ch($item['option_4'], ''); ?></span>
                    <?php endif;?>
                </div>
            </div>
        </a>
        <div class="card_bod_full">
            <div class="card-body">
                <a href="<?php echo $item['url']; ?>" title="<?php echo _ch($item['option_10']); ?>">
                    <h3><?php echo _ch($item['option_10']); ?></h3>
                    <p><i class="la la-map-marker"></i><?php _che($item['address']); ?></p>
                </a>
                <ul>
                    <?php
                        $custom_elements = _get_custom_items();
                        $i=0;
                        if(sw_count($custom_elements) > 0):
                        foreach($custom_elements as $key=>$elem):

                        if(!empty($item['option_'.$elem->f_id]) && $i++<3)
                        if($elem->type == 'DROPDOWN' || $elem->type == 'INPUTBOX'):
                         ?>
                            <li class=""><i class="fa <?php _che($elem->f_class); ?>"></i><small><?php echo _ch($item['option_'.$elem->f_id], '-'); ?> <?php echo _ch(${"options_suffix_$elem->f_id"}, ''); ?> <span style="<?php _che($elem->f_style); ?>"><?php echo _ch(${"optionssw_name_$elem->f_id"}, '-'); ?></span></li>
                         <?php 
                        elseif($elem->type == 'CHECKBOX'):
                         ?>
                            <li class=""><i class="fa <?php _che($elem->f_class); ?>"></i><span class="<?php echo (!empty($item['option_'.$elem->f_id])) ? 'glyphicon glyphicon-ok':'glyphicon glyphicon-remove';  ?>"></span> <?php echo _ch(${"optionssw_name_$elem->f_id"}, '-'); ?></li>
                         <?php 
                        endif;                    
                        endforeach;  
                        else:
                    ?>
                    <li class=""><?php echo _ch($options_name_19, '-'); ?> <?php echo _ch($item['option_19'], '-'); ?></li>
                    <li class=""><?php echo _ch($options_name_20, '-'); ?> <?php echo _ch($item['option_20'], '-'); ?></li>
                    <li class=""><?php echo _ch($options_name_57, '-'); ?> <?php echo _ch($item['option_57'], '-'); ?><?php echo _ch($options_suffix_57, '-'); ?></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="card-footer">
                <div class="crd-links">
                    <span class="favorites-actions pull-left">
                        <a href="#" data-id="<?php echo _ch($item['id']); ?>" class="add-to-favorites" style="<?php echo ($item['is_favorite'])?'display:none;':''; ?>">
                            <i class="la la-heart-o"></i>
                        </a>
                        <a href="#" data-id="<?php echo _ch($item['id']); ?>" class="remove-from-favorites" style="<?php echo (!$item['is_favorite'])?'display:none;':''; ?>">
                            <i class="la la-heart-o"></i>
                        </a>
                        <i class="fa fa-spinner fa-spin fa-custom-ajax-indicator"></i>
                    </span>
                    <a href="#" class="plf" title='<?php echo _ch($item['date']); ?>'>
                        <i class="la la-calendar-check-o"></i> 
                        <?php 
                            $date_modified = $item['date'];
                            $date_modified_str = strtotime($date_modified);
                            echo human_time_diff($date_modified_str);
                        ?>
                    </a>
                </div><!--crd-links end-->
                <a href="<?php echo $item['url']; ?>" title="<?php echo _ch($item['option_10']); ?>" class="btn-default"><?php echo lang_check('View Details');?></a>
            </div>
        </div><!--card_bod_full end-->
        <a href="<?php echo $item['url']; ?>" title="<?php echo _ch($item['option_10']); ?>" class="ext-link"></a>
    </div><!--card end-->
    <?php endforeach;?>
</div><!-- list-products end-->
