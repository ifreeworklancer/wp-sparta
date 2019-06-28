
<!-- Teams-banner -->
<section id="teams" data-color="dark">
    <?php $teams = get_post(41); ?>
    <div class="container-fluid text-dark">
        <div class="row flex-column flex-xl-row align-items-center align-items-xl-end">
            <div class="col-sm-3 p-0">
                <h2 class="section-title section-title--teams section-title--end justify-content-start">
                    <span class="section-title__first-letter">
                        <?php echo mb_substr ($teams->post_title, 0, 1) ?>
                    </span>
                        <?php echo mb_substr ($teams->post_title, 1); ?>
                </h2>

                <div class="teams-section-description d-flex flex-column justify-content-between align-items-start">
                    <p class="teams-section-description-text">
                        <?= $teams->post_content; ?>
                    </p>
                    <a href="#" class="btn btn--dark mb-4">
                        <div class="decor"></div>
                        Связаться с нами
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-11 col-xl-9">
                <div class="teams-content d-flex flex-column flex-lg-row align-items-center">

                    <?php wp_reset_postdata(); ?>

                        <?php 
                            $posts = get_posts( array(
                                'numberposts' => 0,
                                'category_name'    => 'team-category',
                                'orderby'     => 'date',
                                'order'       => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true,
                            ) );
                        ?>

                        <?php foreach($posts as $post) :
                            $post_id = $post->ID;
                            
                            if ($post_id == 165) :
                        ?>
                        <div class="teams-content-row teams-content-row--main">
                            <a href="<?= the_permalink(); ?>" class="teams-item teams-item--main">
                                <div class="teams-item-img" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);"></div>
                                <div class="teams-item-description">
                                    <h4 class="teams-item-description-name">
                                        <?= the_title(); ?>
                                    </h4>
                                    <div class="teams-item-description-position">
                                        <?= get_field('position'); ?>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="teams-content-row teams-content-row--secondary d-flex flex-column justify-content-center">
                            <div class="teams-content-row-cell teams-content-row-cell--top d-flex justify-content-center align-items-end">
                            
                                <?php elseif($post_id == 167): ?>
                                <a href="<?= the_permalink(); ?>" class="teams-item teams-item--height">
                                    <div class="teams-item-img" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);"></div>
                                    <div class="teams-item-description">
                                        <h4 class="teams-item-description-name">
                                            <?= the_title(); ?>
                                        </h4>
                                        <div class="teams-item-description-position">
                                            <?= get_field('position'); ?>
                                        </div>
                                    </div>
                                </a>

                                <?php elseif($post_id == 169): ?>
                                <a href="<?= the_permalink(); ?>" class="teams-item teams-item--normal">
                                    <div class="teams-item-img" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);"></div>
                                    <div class="teams-item-description">
                                        <h4 class="teams-item-description-name">
                                            <?= the_title(); ?>
                                        </h4>
                                        <div class="teams-item-description-position">
                                            <?= get_field('position'); ?>
                                        </div>
                                    </div>
                                </a>

                            </div>
                            <div class="teams-content-row-cell teams-content-row-cell--bottom d-flex justify-content-center align-items-start">
                            
                                <?php elseif($post_id == 171): ?>
                                <a href="<?= the_permalink(); ?>" class="teams-item teams-item--normal">
                                    <div class="teams-item-img" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);"></div>
                                    <div class="teams-item-description">
                                        <h4 class="teams-item-description-name">
                                            <?= the_title(); ?>
                                        </h4>
                                        <div class="teams-item-description-position">
                                            <?= get_field('position'); ?>
                                        </div>
                                    </div>
                                </a>

                                <?php elseif($post_id == 173): ?>
                                <a href="<?= the_permalink(); ?>" class="teams-item teams-item--height">
                                    <div class="teams-item-img" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);"></div>
                                    <div class="teams-item-description">
                                        <h4 class="teams-item-description-name">
                                            <?= the_title(); ?>
                                        </h4>
                                        <div class="teams-item-description-position">
                                            <?= get_field('position'); ?>
                                        </div>
                                    </div>
                                </a>

                                
                                <?php elseif($post_id == 175): ?>
                                <a href="<?= the_permalink(); ?>" class="teams-item teams-item--normal">
                                    <div class="teams-item-img" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);"></div>
                                    <div class="teams-item-description">
                                        <h4 class="teams-item-description-name">
                                            <?= the_title(); ?>
                                        </h4>
                                        <div class="teams-item-description-position">
                                            <?= get_field('position'); ?>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>

                    <?php endif; endforeach; ?>
                        
                </div>
            </div>
        </div>
</section>