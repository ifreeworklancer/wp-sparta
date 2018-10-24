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
            </div>
            <div class="col-12 col-lg-11 col-xl-9">
                <div class="teams-content d-flex flex-column flex-lg-row align-items-center">

                    <?php 
                        $teams_fields = get_field('teams', $teams->ID);
                        $count = 0;
                    ?>
                    <?php foreach($teams_fields as $teams_field) :
                        $count++;
                        if ($count == 1) :
                    ?>
                        <div class="teams-content-row teams-content-row--main">
                            <div class="teams-item teams-item--main">
                                <div class="teams-item-img" style="background-image: url(<?php echo $teams_field['teams_images']['url'] ?>);"></div>
                                <div class="teams-item-description">
                                    <h4 class="teams-item-description-name">
                                        <?php echo $teams_field['teams_name']?>
                                    </h4>
                                    <div class="teams-item-description-position">
                                        <?php echo $teams_field['teams_position']?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="teams-content-row teams-content-row--secondary d-flex flex-column justify-content-center">
                            <div class="teams-content-row-cell teams-content-row-cell--top d-flex justify-content-center align-items-end">
                            
                                <?php elseif($count == 2): ?>
                                <div class="teams-item teams-item--height">
                                    <div class="teams-item-img" style="background-image: url(<?php echo $teams_field['teams_images']['url'] ?>);"></div>
                                    <div class="teams-item-description">
                                        <h4 class="teams-item-description-name">
                                            <?php echo $teams_field['teams_name']?>
                                        </h4>
                                        <div class="teams-item-description-position">
                                            <?php echo $teams_field['teams_position']?>
                                        </div>
                                    </div>
                                </div>

                                <?php elseif($count == 3): ?>
                                <div class="teams-item teams-item--normal">
                                    <div class="teams-item-img" style="background-image: url(<?php echo $teams_field['teams_images']['url'] ?>);"></div>
                                    <div class="teams-item-description">
                                        <h4 class="teams-item-description-name">
                                            <?php echo $teams_field['teams_name']?>
                                        </h4>
                                        <div class="teams-item-description-position">
                                            <?php echo $teams_field['teams_position']?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="teams-content-row-cell teams-content-row-cell--bottom d-flex justify-content-center align-items-start">
                            
                                <?php elseif($count == 4): ?>
                                <div class="teams-item teams-item--normal">
                                    <div class="teams-item-img" style="background-image: url(<?php echo $teams_field['teams_images']['url'] ?>);"></div>
                                    <div class="teams-item-description">
                                        <h4 class="teams-item-description-name">
                                            <?php echo $teams_field['teams_name']?>
                                        </h4>
                                        <div class="teams-item-description-position">
                                            <?php echo $teams_field['teams_position']?>
                                        </div>
                                    </div>
                                </div>

                                <?php elseif($count == 5): ?>
                                <div class="teams-item teams-item--height">
                                    <div class="teams-item-img" style="background-image: url(<?php echo $teams_field['teams_images']['url'] ?>);"></div>
                                    <div class="teams-item-description">
                                        <h4 class="teams-item-description-name">
                                            <?php echo $teams_field['teams_name']?>
                                        </h4>
                                        <div class="teams-item-description-position">
                                            <?php echo $teams_field['teams_position']?>
                                        </div>
                                    </div>
                                </div>

                                
                                <?php elseif($count == 6): ?>
                                <div class="teams-item teams-item--normal">
                                    <div class="teams-item-img" style="background-image: url(<?php echo $teams_field['teams_images']['url'] ?>);"></div>
                                    <div class="teams-item-description">
                                        <h4 class="teams-item-description-name">
                                            <?php echo $teams_field['teams_name']?>
                                        </h4>
                                        <div class="teams-item-description-position">
                                            <?php echo $teams_field['teams_position']?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endif; endforeach; ?>
                        
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8 p-0">
                <div class="teams-section-description d-flex flex-column flex-sm-row justify-content-between align-items-center">
                    <p class="teams-section-description-text">
                        Наша команда высокослассных специалистов.
                    </p>
                    <a href="#" class="btn btn--dark">
                        <div class="decor"></div>
                        Связаться с нами
                    </a>
                </div>
            </div>
        </div>
</section>