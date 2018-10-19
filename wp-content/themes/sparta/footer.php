</main>

<footer id="app-footer" data-color="light">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-sm-6">
                <h2 class="section-title section-title--end mb-5">
                    <span class="section-title__first-letter">С</span>
                    ВЯЖИТЕСЬ С НАМИ
                </h2>
                <form action="#" id="form-feedback">
                    <div class="form-group position-relative mb-4">
                        <label for="user-name" class="label-placeholder position-absolute">Ваше имя</label>
                        <input type="text" class="form-control position-relative" id="user-name">
                    </div>
                    <div class="form-group position-relative mb-4">
                        <label for="email" class="label-placeholder position-absolute">E-mail</label>
                        <input type="email" class="form-control position-relative" id="email">
                    </div>
                    <div class="form-group position-relative mb-4">
                        <label for="user-phone" class="label-placeholder position-absolute">Телефон</label>
                        <input type="text" class="form-control position-relative" id="user-phone">
                    </div>
                    <div class="form-group form-group--textarea position-relative mb-4">
                        <label for="user-message" class="label-placeholder position-absolute">Сообщение</label>
                        <textarea class="form-control position-relative" id="user-message" rows="1"></textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn btn--white">
                            <div class="decor"></div>
                            Отправить
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-sm-5">
                <div class="footer-map">
                    <!-- <div class="footer-map-img" style="background-image: url('images/content/footer/footer-map.jpg');"></div> -->
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
<?php wp_footer(); ?>
</body>

</html>