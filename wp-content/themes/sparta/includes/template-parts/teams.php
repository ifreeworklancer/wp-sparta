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
                    
                    <div class="teams-content-row teams-content-row--main">
                        <div class="teams-item teams-item--main">
                            <div class="teams-item-img" style="background-image: url('images/content/teams/teams-item-1.jpg');"></div>
                            <div class="teams-item-description">
                                <h4 class="teams-item-description-name">Александр Иванов</h4>
                                <div class="teams-item-description-position">Директор</div>
                            </div>
                        </div>
                    </div>

                    <div class="teams-content-row teams-content-row--secondary d-flex flex-column justify-content-center">
                        <div class="teams-content-row-cell teams-content-row-cell--top d-flex justify-content-center align-items-end">
                            <div class="teams-item teams-item--height">
                                <div class="teams-item-img" style="background-image: url('images/content/teams/teams-item-2.jpg');"></div>
                                <div class="teams-item-description">
                                    <h4 class="teams-item-description-name">Иван Петров</h4>
                                    <div class="teams-item-description-position">Менеджер</div>
                                </div>
                            </div>
                            <div class="teams-item teams-item--normal">
                                <div class="teams-item-img" style="background-image: url('images/content/teams/teams-item-3.jpg');"></div>
                                <div class="teams-item-description">
                                    <h4 class="teams-item-description-name">Марина Яковлева</h4>
                                    <div class="teams-item-description-position">HR</div>
                                </div>
                            </div>
                        </div>
                        <div class="teams-content-row-cell teams-content-row-cell--bottom d-flex justify-content-between align-items-start">
                            <div class="teams-item teams-item--normal">
                                <div class="teams-item-img" style="background-image: url('images/content/teams/teams-item-4.jpg');"></div>
                                <div class="teams-item-description">
                                    <h4 class="teams-item-description-name">Марго Савельева</h4>
                                    <div class="teams-item-description-position">Менеджер</div>
                                </div>
                            </div>
                            <div class="teams-item teams-item--height">
                                <div class="teams-item-img" style="background-image: url('images/content/teams/teams-item-5.jpg');"></div>
                                <div class="teams-item-description">
                                    <h4 class="teams-item-description-name">Александр Смернов</h4>
                                    <div class="teams-item-description-position">Менеджер</div>
                                </div>
                            </div>
                            <div class="teams-item teams-item--normal">
                                <div class="teams-item-img" style="background-image: url('images/content/teams/teams-item-6.jpg');"></div>
                                <div class="teams-item-description">
                                    <h4 class="teams-item-description-name">Иван Иванов</h4>
                                    <div class="teams-item-description-position">Менеджер</div>
                                </div>
                            </div>
                        </div>
                    </div>
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