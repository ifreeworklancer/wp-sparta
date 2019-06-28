

<?php get_header('secondary'); ?>





<section class="team-page" data-color="dark">

    <div class="container">
        <div class="row align-items-center justify-content-center">

            <div class="col-xl-4">
                <div class="team-single-img">
                    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">
                </div>
            </div>

            <div class="col-xl-5 offset-xl-1">
                <div class="team-single-content">
                    <h2 class="text-dark mb-4"><?php the_title(); ?></h2>
                    <h3 class="text-dark mb-4"><?= get_field('position'); ?></h3>
                    <p class="text-dark"><?= wp_strip_all_tags(get_the_content()); ?></p>
                </div>
            </div>
            
        </div>
    </div>

</section>



    
<?php get_footer(); ?>