<!--

Widget-preview-category-path: <?php _che($option_79); ?>

-->

<div class="infobox map-box">
    <a href="<?php _che($url, ''); ?>" class="listing-img-container">
        <div class="infoBox-close"><i class="fa fa-times"></i>
        </div><img src="<?php echo (_simg($thumbnail_url, '575x700', true)); ?>" alt="<?php _che($option_10, ''); ?>">
        <div class="rate-info">
        <?php if(!empty($option_36) || !empty($option_37)): ?>
            <h5>
            <?php if(!empty($option_36) || !empty($option_37)): ?>
                <?php if(_ch($option_4, false) && stripos($option_4, lang_check('Rent'))!==FAlSE):?>
                    <?php 
                        if(!empty($option_37))echo ' '.$options_prefix_37.price_format($option_37, $lang_id).$options_suffix_37;
                        if(!empty($option_36))echo $options_prefix_36.price_format($option_36, $lang_id).$options_suffix_36;
                    ?>
                <?php else:?>
                    <?php 
                        if(!empty($option_36))echo $options_prefix_36.price_format($option_36, $lang_id).$options_suffix_36;
                        if(!empty($option_37))echo ' '.$options_prefix_37.price_format($option_37, $lang_id).$options_suffix_37;
                    ?>
                <?php endif;?>
            <?php endif; ?>
            </h5>
        <?php endif; ?>
            <span class="purpose-<?php echo url_title(_che($option_4, ''), '-', TRUE); ?>">
                <?php echo _che($option_4, ''); ?>
            </span> 
        </div>
        <div class="listing-item-content">
            <h3><?php _che($option_10, ''); ?></h3>
            <span><i class="la la-map-marker"></i><?php echo _ch($address); ?></span>
        </div>
    </a>
</div>