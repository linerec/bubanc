<?php
/*
Widget-title: Magazines
Widget-preview-image: /assets/img/widgets_preview/top_locations.webp
 */
?>
<?php
$treefields = generate_treefields_list(79);

$defaul_icons = array('la la-home', 'la la-hand-pointer-o', 'la la-unlock', 'la la-star-o');

if (empty($treefields)) {
    echo '<div class="container"><p class="alert alert-info">' . lang_check("Any categories are missing, please check Categories list, #widget top_categories_icons") . '</p></div><br/>';
    return  false;
}
?>

<section class="popular-cities magazine-section hp7 section-popular-cities-flexbox widget_edit_enabled">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <p><?php echo lang_check('Magazine Subtitle'); ?></p>
                <div class="section-heading">
                    <span><?php echo lang_check('Magazine Title'); ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row d-none d-sm-block">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://cdn.flipsnack.com/widget/v2/widget.html?hash=ciwt44spma&t=1621010913" width="100%" height="100%" seamless="seamless" scrolling="no" frameBorder="0" allowFullScreen style="overflow:hidden;height:100%;width:100%"></iframe>
            </div>
        </div>
        <div class="row d-block d-sm-none">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe src="https://cdn.flipsnack.com/widget/v2/widget.html?hash=ciwt44spma&t=1621010913" width="100%" height="100%" seamless="seamless" scrolling="no" frameBorder="0" allowFullScreen style="overflow:hidden;height:100%;width:100%"></iframe>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-3 col-md-3 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="0">
                <a href="https://cdn.flipsnack.com/widget/v2/widget.html?hash=1nsrf0qjiq&t=1618837838" target="_blank">
                    <img src="https://d1dhn91mufybwl.cloudfront.net/collections/items/3aaf2437461f9b195a9f0ei118916885/covers/page_1/small" class="img-thumbnail" alt="bubanc-202104">
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="100">
                <a href="https://cdn.flipsnack.com/widget/v2/widget.html?hash=x90ol58hp8&t=1615908114" target="_blank">
                    <img src="https://d1dhn91mufybwl.cloudfront.net/collections/items/5882edc36ba15a4420db61i117639279/covers/page_1/small" class="img-thumbnail" alt="bubanc-202104">

                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="200">
                <a href="https://cdn.flipsnack.com/widget/v2/widget.html?hash=7c94m33xu3&t=1613492496" target="_blank">
                    <img src="https://d1dhn91mufybwl.cloudfront.net/collections/items/093699d2083cfb32e47fb7i116500781/covers/page_1/small" class="img-thumbnail" alt="bubanc-202104">
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="300">
                <a href="https://cdn.flipsnack.com/widget/v2/widget.html?hash=xpsb80apma&t=1610827777" target="_blank">

                    <img src="https://d1dhn91mufybwl.cloudfront.net/collections/items/1cc82cc18b88bf7acd5792i115334452/covers/page_1/small" class="img-thumbnail" alt="bubanc-202104">

                </a>
            </div>
        </div>
        <div class="container hidden">
            <div class="row">
                <div class="col-xl-6">
                    <p><?php echo lang_check('Magazine Subtitle'); ?></p>
                    <div class="section-heading">
                        <h3><?php echo lang_check('Magazine Title'); ?></h3>
                    </div>
                </div>
            </div>
            <div class="row row-cities-flexbox">
                <div class="col-lg-6">
                    <?php $item = $treefields[0]; ?>
                    <a href="https://bit.ly/3aYXOEg" target="_blank">
                        <div class="card cities-flexbox-1">
                            <div class="overlay"></div>
                            <div class="overlay-stick"></div>
                            <img src="assets/img/magazine_covers/202105.jpg" alt="Latest Magazine" class="img-fluid">
                            <div class="card-body">
                                <h4><?php echo lang_check('Magazine Latest'); ?></h4>
                                <i class="fa fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php $item = $treefields[1]; ?>
                            <a href='<?php _che($item['url']); ?>'>
                                <div class="card cities-flexbox-2">
                                    <div class="overlay"></div>
                                    <div class="overlay-stick"></div>
                                    <img src="assets/img/magazine_covers/magazines.jpg" alt="Magazines" class="img-fluid">
                                    <div class="card-body">
                                        <h4><?php echo lang_check('Magazine List'); ?></h4>
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-12">
                            <?php $item = $treefields[1]; ?>
                            <a href="https://www.youtube.com/channel/UCVgNGRjmyzOGplorFAWeU7g/videos" target="_blank">
                                <div class="card cities-flexbox-2">
                                    <div class="overlay"></div>
                                    <div class="overlay-stick"></div>
                                    <img src="assets/img/magazine_covers/youtube.jpg" alt="Youtube Channel" class="img-fluid">
                                    <div class="card-body">
                                        <h4><?php echo lang_check('Youtube List'); ?></h4>
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <?php $item = $treefields[2]; ?>
                            <a href='<?php _che($item['url']); ?>'>
                                <div class="card cities-flexbox-3">
                                    <div class="overlay"></div>
                                    <div class="overlay-stick"></div>
                                    <img src="<?php _che($item['image_url'], 'assets/images/resources/pl-img3.webp'); ?>" alt="<?php _che($item['title']); ?>" class="img-fluid">
                                    <div class="card-body">
                                        <h4><?php _che($item['title']); ?></h4>
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <?php $item = $treefields[3]; ?>
                            <a href='<?php _che($item['url']); ?>'>
                                <div class="card cities-flexbox-4">
                                    <div class="overlay"></div>
                                    <div class="overlay-stick"></div>
                                    <img src="<?php _che($item['image_url'], 'assets/images/resources/pl-img4.webp'); ?>" alt="<?php _che($item['title']); ?>" class="img-fluid">
                                    <div class="card-body">
                                        <h4><?php _che($item['title']); ?></h4>
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>