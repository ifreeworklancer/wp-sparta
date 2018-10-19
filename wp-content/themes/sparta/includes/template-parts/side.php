<!-- Side-banner -->
<section id="side" data-color="dark">
    <?php $side = get_post(23); ?>
    <div class="container-fluid text-dark d-flex flex-column justify-content-between">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title section-title--side section-title--end justify-content-center">
                    <span class="section-title__first-letter">
                        <?php echo mb_substr ($side->post_title, 0, 1) ?>
                    </span>
                        <?php echo mb_substr ($side->post_title, 1); ?>
                </h2>
            </div>
        </div>

        <?php 
            $images = get_field('gallery', $side->ID);

            if (count($images)) :
        ?>

        <div class="row">
            <div class="col-sm-10 ml-auto mr-0 p-0">
                <div class="side-slider">
                <?php foreach($images as $image) : ?>
                    <div class="side-slider-item">
                        <div class="side-slider-item-img" style="background-image: url(<?php echo $image['url'] ?>)"></div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>

        <?php endif; ?>
        <div class="row">
            <div class="side-content d-flex justify-content-between align-items-end">
                <div class="col-sm-7 col-xl-12">
                    <div class="side-item">
                        <p class="side-item-text">
                            <?= $side->post_content ?>
                        </p>
                    </div>

                    <div class="slider-nav-arrow d-flex justify-content-center align-items-center">
                        <div class="slider-nav-arrow-item slider-nav-arrow-item--prev slider-nav-arrow-item--side">
                            <svg width="20" height="40">
                                <use xlink:href="#arrow-prev"></use>
                            </svg>
                        </div>
                        <div class="slider-nav-arrow-item slider-nav-arrow-item--next slider-nav-arrow-item--side">
                            <svg width="20" height="40">
                                <use xlink:href="#arrow-next"></use>
                            </svg>
                        </div>
                    </div>

                </div>
                <div class="col-sm-3">
                    <div class="slider-nav-num align-items-end">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>