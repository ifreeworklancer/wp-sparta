

<?php 
    $posts = get_posts( array(
        'numberposts' => 0,
        'category_name'    => 'case-category',
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'post',
        'suppress_filters' => true,
    ) );
?>
<section data-color="dark" class="side-section">
    <div class="container-fluid text-dark">
        <div class="row justify-content-end">
            <div class="col-xl-4">
                <h2 class="section-title section-title--side section-title--end case-main-title">
                    <span class="section-title__first-letter">
                        Н
                    </span>
                        аши работы
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 p-0">
                <div class="side-slider case-slider">

                    <?php foreach($posts as $post) : 
                    $case_galery = get_field('galery_case', $post->ID );
                    ?>

                        <div class="case-slider__item">
                            <div class="row no-gutters">
                                <div class="col-xl-8">
                                    <div class="case-thubnail" style="background-image: url(<?= $case_galery[0]['url']; ?>)"></div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="case-content h-100 d-flex flex-column justify-content-center">
                                        <h3><?= the_title();?></h3>
                                        <p class="side-item-text">
                                        <?php 
                                            $content = $post->post_content;
                                            $content_excerpt = wp_trim_words( $content, 60, '...' );
                                            echo $content_excerpt;
                                        ?>
                                        </p>

                                        <a href="<?= the_permalink(); ?>" class="btn btn--dark">
                                            <div class="decor"></div>
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>

                <div class="case-slider-nav slider-nav-arrow d-flex justify-content-end align-items-center ">
                    <div class="slider-nav-arrow-item slider-nav-arrow-item--prev slider-nav-arrow-item--side case--prev">
                        <svg width="20" height="40">
                            <use xlink:href="#arrow-prev"></use>
                        </svg>
                    </div>
                    <div class="slider-nav-arrow-item slider-nav-arrow-item--next slider-nav-arrow-item--side case--next">
                        <svg width="20" height="40">
                            <use xlink:href="#arrow-next"></use>
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<?php wp_reset_postdata(); ?>
