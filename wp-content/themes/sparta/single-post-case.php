<?php get_header('secondary'); ?>





<section class="case-page" data-color="dark">

    <div class="container-fluid">
        <div class="row justify-content-end">

            <div class="col-sm-10 p-0">
                <div class="case-page-item">

                    <?php
                    $case_images = get_field('galery_case')
                    ?>
                    <div class="case-single-slider">
                        <?php foreach ($case_images as $case_image) : ?>
                            <div class="case-single-slider__item" style="background-image: url(<?php echo $case_image['url'] ?>);"></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="case-page-item-description">
        <div class="case-page-item-description__title">
            <?php the_title(); ?>
        </div>
        <div class="case-page-item-description-content">
            <div class="case-page-item-description-content-item">
                <?php the_content(); ?>
            </div>
        </div>
    </div>

    <div class="case-slider-nav slider-nav-arrow d-flex justify-content-end align-items-center ">
        <div class="slider-nav-arrow-item slider-nav-arrow-item--prev slider-nav-arrow-item--side case-single--prev">
            <svg width="20" height="40">
                <use xlink:href="#arrow-prev"></use>
            </svg>
        </div>
        <div class="slider-nav-arrow-item slider-nav-arrow-item--next slider-nav-arrow-item--side case-single--next">
            <svg width="20" height="40">
                <use xlink:href="#arrow-next"></use>
            </svg>
        </div>
    </div>

</section>




<?php get_footer(); ?>