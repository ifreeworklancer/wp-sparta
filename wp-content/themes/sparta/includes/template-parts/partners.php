<!-- Partners-banner -->
<section id="partners" data-color="light">
    <?php $partners = get_post(75); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-4">
                <div class="partners-description-content">
                    <h2 class="section-title section-title--partners section-title--start mb-5">
                        <span class="section-title__first-letter">
                            <?php echo mb_substr($partners->post_title, 0, 1) ?>
                        </span>
                        <?php echo mb_substr($partners->post_title, 1) ?>
                    </h2>
                    <div class="partners-description">
                        <p class="partners-description__text">
                            <?= $partners->post_content ?>
                        </p>
                        <!-- <a href="#" class="partners-description__more-info text-white">
                            Узнать больше
                        </a> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="partners-video-slider">
                    <?php
                    $partners_fields = get_field('partners_slider', $partners->ID);
                    ?>
                    <?php foreach ($partners_fields as $partners_field) : ?>
                        <div class="partners-video-slider-item" data-src="<?php echo $partners_field['partners_slider_link'] ?>">
                            <div class="partners-video-slider-item-img" style="background-image: url(<?php echo $partners_field['partners_slider_images']['url'] ?>)"></div>
                            <div class="partners-video-slider-item-icon">
                                <svg width="55" height="40">
                                    <use xlink:href="#youtube-icon"></use>
                                </svg>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-11 mx-auto">
                <div class="partners-slider">
                    <?php
                    $partners_asNavFor_fields = get_field('partners_slider_asNavFor', $partners->ID);
                    ?>
                    <?php foreach ($partners_asNavFor_fields as $partners_asNavFor_field) : ?>
                        <div class="partners-slider-item">
                            <div class="partners-slider-item-img">
                                <img src="<?php echo $partners_asNavFor_field['url'] ?>" alt="">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-12 p-0">
                <div class="slider-nav-arrow slider-nav-arrow--partners d-flex justify-content-between align-items-center">
                    <div class="slider-nav-arrow-item slider-nav-arrow-item--prev slider-nav-arrow-item--prev-partners">
                        <svg width="30" height="50">
                            <use xlink:href="#arrow-prev"></use>
                        </svg>
                    </div>
                    <div class="slider-nav-arrow-item slider-nav-arrow-item--next slider-nav-arrow-item--next-partners">
                        <svg width="30" height="50">
                            <use xlink:href="#arrow-next"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php wp_reset_postdata(); ?>