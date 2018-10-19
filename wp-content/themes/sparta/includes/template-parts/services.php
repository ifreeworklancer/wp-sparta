<!-- Services-banner -->
<section id="services" data-color="dark">
    <?php $services = get_post(45); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 col-lg-7 mb-4 mb-sm-0">
                <div class="services-tabs">
                    <div class="services-tabs-content">
                        <?php 
                            $services_fields = get_field('services', $services->ID);
                        ?>
                        <?php foreach($services_fields as $services_field) : ?>
                            <div class="services-tabs-content-img" style="background-image: url(<?php echo $services_field['services_images']['url'] ?>)"></div>
                        <?php endforeach; ?>
                    </div>
                    <div class="services-tabs-nav">
                        <div class="services-tabs-nav-title">
                            При использовании информации о услугах
                        </div>
                        <?php 
                            $counter = 0;
                            $services_fields = get_field('services', $services->ID);
                        ?>
                        <?php foreach($services_fields as $services_field) : ?>
                            <div class="services-tabs-nav-item active" data-value="<?php echo $counter++ ?>">
                                <div class="services-tabs-nav-item-title">
                                    <span class="services-tabs-nav-item-title__value">
                                        <?php echo mb_substr ($services_field['services_title'], 0, 2) ?>    
                                    </span>
                                    <?php echo mb_substr ($services_field['services_title'], 2) ?>    
                                </div>
                                <div class="services-tabs-nav-item-description">
                                <?php echo $services_field['services_text']?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-lg-5 text-dark">
                <div class="services-item h-100 d-flex flex-column justify-content-between">
                    <h2 class="section-title section-title--services section-title--end justify-content-center justify-content-sm-start mb-5">
                        <span class="section-title__first-letter">
                            <?php echo mb_substr ($services->post_title, 0, 1) ?>
                        </span>
                            <?php echo mb_substr ($services->post_title, 1); ?>
                    </h2>
                    <div class="services-item-description">
                        <h4 class="services-item-description__title text-right mb-4">
                            Наш подход
                        </h4>
                        <p class="services-item-description__text mb-4">
                           <?= $services->post_content ?>
                        </p>
                        <div class="text-right">
                            <a href="#" class="btn btn--dark">
                                <div class="decor"></div>
                                Портфолио
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>