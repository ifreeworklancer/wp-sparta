</main>

<footer id="app-footer" data-color="light">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-sm-6">
                <h2 class="section-title section-title--end mb-5">
                    <span class="section-title__first-letter">С</span>
                    ВЯЖИТЕСЬ С НАМИ
                </h2>
                <?php echo do_shortcode('[contact-form-7 id="7" title="Свяжитесь с нами"]'); ?>
            </div>
            <div class="col-sm-5">
                <div id="map">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-contacts d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
                    <div class="footer-contacts-item">
                        <a href="#" class="footer-contacts-item__link">
                            +7 012 345 67 89
                        </a>
                    </div>
                    <div class="footer-contacts-item">
                        <a href="#" class="footer-contacts-item__link">
                            +7 012 345 67 89
                        </a>
                    </div>
                    <div class="footer-contacts-item">
                        <a href="#" class="footer-contacts-item__link">
                            info@kbsparta.com
                        </a>
                    </div>
                    <div class="footer-contacts-item">
                        г. Красногорск Ильинское шоссе вл. 1А офис 9АВ
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mx-auto">
                <ul class="footer-social-list list-unstyled d-flex justify-content-center align-items-center">
                    <li class="footer-social-list-item footer-social-list-item--facebook">
                        <a href="#" class="footer-social-list-item__link mr-5">
                            <svg width="25" height="25">
                                <use xlink:href="#facebook-icon"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="footer-social-list-item footer-social-list-item--behance">
                        <a href="#" class="footer-social-list-item__link mr-5">
                            <svg width="25" height="25">
                                <use xlink:href="#behance-icon"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="footer-social-list-item footer-social-list-item--instagram">
                        <a href="#" class="footer-social-list-item__link mr-5">
                            <svg width="25" height="25">
                                <use xlink:href="#instagram-icon"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="footer-social-list-item footer-social-list-item--youtube">
                        <a href="#" class="footer-social-list-item__link">
                            <svg width="25" height="25">
                                <use xlink:href="#youtube-icon"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-12">
                <div class="footer-copyr text-center">
                    <div class="footer-copyr-item mb-3">
                        &copy; KBSPARTA 2018
                    </div>
                    <div class="footer-copyr-item footer-copyr-item--dev">
                        Дизайн и разработка сайта Impressiob Bureau
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Script -->
<script src="https://api-maps.yandex.ru/2.1/?apikey=ac85c1db-1591-4ab4-be66-5f7e5e644630&lang=ru_RU" type="text/javascript"></script>
<?php wp_footer(); ?>

</body>

</html>