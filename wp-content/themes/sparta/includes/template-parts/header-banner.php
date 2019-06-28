
<?php $arch = get_post(19); ?>

<!-- Header-banner -->
<section id="header-banner" data-color="light">

    <?php $intro_slider = get_field('intro-slider', $arch->ID);?>

    <div class="intro-slider">
        <?php foreach($intro_slider as $intro_slide) : ?>
            <div class="intro-slider__item" style="background-image: url(<?= $intro_slide['intro-slide-img'];?>)">
                <p><?= ($intro_slide['intro-slide-title']);?></p>
            </div>
        <?php endforeach; ?>
    </div>

    
    <div class="container-fluid h-100 p-0 pb-5 d-flex d-flex justify-content-start align-items-end">
        <!-- <div class="col-sm-8 col-xl-6 p-0">
            <h2 class="font-weight-bold text-center mb-3 header-banner-title"></h2> -->
            <div class="header-banner-item">
            
                <div class="decoration"></div>
                <h2 class="section-title section-title--center">
                    <span class="section-title__first-letter font-weight-normal">
                        <?php echo mb_substr ($arch->post_title, 0, 1) ?>
                    </span>
                    <?php echo mb_substr ($arch->post_title, 1); ?>
                </h2>
                <p class="header-banner-item-description">
                    <?= $arch->post_content ?>
                </p>
                <div class="text-right">
                <a href="<?php the_permalink( 102 );?>" class="btn btn--white">
                    <div class="decor"></div>
                    Посмотреть
                </a></div>
            </div>
        </div>
    </div>
</section>