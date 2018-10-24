<!-- Header-banner -->
<section id="header-banner" data-color="light">
    <video data-bg_src="<?php echo get_theme_file_uri('video/video.mp4')?>" muted autoplay loop class="intro-video"></video>
    <div class="container-fluid h-100 p-0 pb-5 d-flex d-flex justify-content-start align-items-end">
        <div class="col-sm-8 col-xl-6 p-0">
            <div class="header-banner-item">
            <?php $arch = get_post(19); ?>
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