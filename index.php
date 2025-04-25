<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/swiper-bundle.css">
    <title>Belalea - Экологические продукты</title>
</head>

<!-- START navbar -->
<nav class="navbar">
    <div class="navbar-wrapper">
        <a href="/"><img src="./img/Logo.svg" alt="логотип" class="logo-img" width="244" height="74"></a>
        <ul class="navbar-list">
            <li class="item-navbar">
                <a href="./about.php" class="link-navbar">О нас </a>
            </li>
            <li class="item-navbar">
                <a href="#" class="link-navbar">Каталог</a>
            </li>
            <li class="item-navbar">
                <a href="#" class="link-navbar">Диллерам</a>
            </li>
            <li class="item-navbar">
                <a href="#" class="link-navbar">Новости</a>
            </li>
            <li class="item-navbar">
                <a href="#" class="link-navbar">Вход</a>
            </li>
        </ul>
        <div class="navbar-actions">
            <!-- <img src="./img/icon/Search_Icon.svg" alt="поиск" class="action-search" width="56" height="56">
            <span class="action-contact">Контакты</span> -->
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Поиск..." aria-label="Поле поиска">
                <img src="./img/icon/Search_Icon.svg" alt="Поиск" class="action-search" width="56" height="56" id="searchTrigger">
            </div>
            <span class="action-contact" data-phone="+7 (999) 123-45-67">
                <span class="contact-text">Контакты</span>
            </span>
        </div>
    </div>
</nav>


<!-- START Header -->
<header class="header">
    <div class="hero">
        <div class="container">
            <div class="hero-info">
                <p class="remark-title-header animate-item">100% натурально</p>
                <h1 class="header-title animate-item">Масла и мука из фермерского сырья</h1>
                <a href="#" class="link link-secondary animate-item">
                    В Каталог
                    <img src="./img/icon/Aerrow.svg" alt="стрелка" width="19" height="19">
                </a>
            </div>
        </div>
    </div>

</header>


<!-- START Section Promo -->
<section class="section promo-section">
    <div class="container">
        <div class="promo-wrapper">
            <div class="card-promo">
                <img src="./img/promo-card/Image-card.jpg" alt="Новинки" class="promo-image" width="682" height="367">
                <div class="promo-descr-box">
                    <h2 class="promo-title" style="color: #ffffff;">Новинки</h2>
                    <p class="promo-text" style="color: #ffffff;">Свежайшее
                        штирийское
                        масло</p>
                </div>
            </div>
            <div class="card-promo">
                <img src="./img/promo-card/Image-card2.jpg" alt="Новинки" class="promo-image" width="682" height="367">
                <div class="promo-descr-box">
                    <h2 class="promo-title">Скидки</h2>
                    <p class="promo-text">Скидка 20% за подписку</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- START Section Legend -->
<section class="section section-about">
    <div class="about-bg">
        <div class="container">
            <div class="about-wrapper">
                <h2 class="about-title">О нас</h2>
                <p class="about-descr">
                    Мы работаем только с качественным сырьём от местных фермеров
                </p>
                <p class="about-text">
                    Работа с местными фермерами приносит производственным компаниям преимущество в виде
                    высококачественного сырья, укрепляет местное сообщество, снижает экологический след и способствует
                    устойчивости цепочки поставок, обеспечивая надежность и прозрачность.
                </p>
                <div class="about-descr-wrapper">
                    <img src="./img/icon/Icon-product.jpg" alt="продукция" width="101" height="101" class="about-descr-image">

                    <div class="about-descr-content">
                        <h3 class="about-descr-content-tilte">Только натуральная продукция</h3>
                        <p class="about-text">Полагаясь на природу, мы предлагаем продукты без искусственных
                            добавок,
                            гарантируя вам чистоту и качество.
                        </p>
                    </div>

                </div>
                <div class="about-descr-wrapper">
                    <img src="./img/icon/Icon-standart.jpg" alt="продукция" width="101" height="101" class="about-descr-image">

                    <div class="about-descr-content">
                        <h3 class="about-descr-content-tilte">Высокие стандарты качества</h3>
                        <p class="about-text">На каждом этапе производства мы стремимся к совершенству, чтобы вы
                            могли
                            наслаждаться продуктами с превосходным качеством и вкусом.
                        </p>
                    </div>

                </div>
                <a href="#" class="link link-primary">Подробнее <img src="./img/icon/Aerrow.svg" alt="стрелка" width="19" height="19" /> </a>
            </div>
        </div>
    </div>
</section>


<section class="section section-product">
    <div class="container">
        <h2 class="section section-product-title">Категории</h2>
        <p class="section-product-remark">Наши продукты</p>
        <div class="product-wrapper">
            <div class="product-card">
                <span class="badge-product">Масла</span>
                <img src="./img/product/image1.jpg" alt="масло" width="292" height="361">
                <h3 class="card-product-title">Масло тыквенное, 250мл</h3>
            </div>
            <div class="product-card">
                <span class="badge-product">Масла</span>
                <img src="./img/product/image1.jpg" alt="масло" width="292" height="361">
                <h3 class="card-product-title">Масло тыквенное, 250мл</h3>
            </div>
            <div class="product-card">
                <span class="badge-product">Масла</span>
                <img src="./img/product/image1.jpg" alt="масло" width="292" height="361">
                <h3 class="card-product-title">Масло тыквенное, 250мл</h3>
            </div>
            <div class="product-card">
                <span class="badge-product">Масла</span>
                <img src="./img/product/image1.jpg" alt="масло" width="292" height="361">
                <h3 class="card-product-title">Масло тыквенное, 250мл</h3>
            </div>
        </div>

        <div class="product-wrapper">
            <div class="product-card">
                <span class="badge-product">Масла</span>
                <img src="./img/product/image2.jpg" alt="масло" width="292" height="361">
                <h3 class="card-product-title">Масло тыквенное, 250мл</h3>
            </div>
            <div class="product-card">
                <span class="badge-product">Масла</span>
                <img src="./img/product/image2.jpg" alt="масло" width="292" height="361">
                <h3 class="card-product-title">Масло тыквенное, 250мл</h3>
            </div>
            <div class="product-card">
                <span class="badge-product">Масла</span>
                <img src="./img/product/image2.jpg" alt="масло" width="292" height="361">
                <h3 class="card-product-title">Масло тыквенное, 250мл</h3>
            </div>
            <div class="product-card">
                <span class="badge-product">Масла</span>
                <img src="./img/product/image2.jpg" alt="масло" width="292" height="361">
                <h3 class="card-product-title">Масло тыквенное, 250мл</h3>
            </div>
        </div>

        <a href="#" class="link link-primary link-product-page">Смотреть всё <img src="./img/icon/Aerrow.svg" alt="смотреть все" width="19" height="19" /></a>

    </div>

</section>

<!-- START Section reviews -->
<section class="section setion-reviews">
    <div class="reviews-bg">
        <div class="container">
            <div class="reviews-wrapper">
                <h2 class="reviews-title">Отзывы</h2>
                <p class="reviews-remark">Что говорят наши покупатели?</p>







                <!-- START Slider -->

                <!-- END Slider -->


                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="reviews-slider-wrapper">
                                <img src="./img/reviews/avatar.jpg" alt="аватар" class="reviews-avatar" width="115" height="115">
                                <span class="reviews-rayting">
                                    <img src="./img/icon/Star 7.svg" alt="рейтинг" width="28" height="26.7">
                                    <img src="./img/icon/Star 7.svg" alt="рейтинг" width="28" height="26.7">
                                    <img src="./img/icon/Star 7.svg" alt="рейтинг" width="28" height="26.7">
                                    <img src="./img/icon/Star 7.svg" alt="рейтинг" width="28" height="26.7">
                                    <img src="./img/icon/Star 7.svg" alt="рейтинг" width="28" height="26.7">
                                </span>
                                <p class="reviews-text">
                                    Simply dummy text of&nbsp;the printing and typesetting industry. Lorem Ipsum simply
                                    dummy text
                                    of&nbsp;the printing and typesetting industry. Lorem Ipsum has been.
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="reviews-slider-wrapper">
                                <img src="./img/reviews/avatar.jpg" alt="аватар" class="reviews-avatar" width="115" height="115">
                                <span class="reviews-rayting">
                                    <img src="./img/icon/Star 7.svg" alt="рейтинг" width="28" height="26.7">
                                    <img src="./img/icon/Star 7.svg" alt="рейтинг" width="28" height="26.7">
                                    <img src="./img/icon/Star 7.svg" alt="рейтинг" width="28" height="26.7">
                                    <img src="./img/icon/Star 7.svg" alt="рейтинг" width="28" height="26.7">
                                    <img src="./img/icon/Star 7.svg" alt="рейтинг" width="28" height="26.7">
                                </span>
                                <p class="reviews-text">
                                    Simply dummy text of&nbsp;the printing and typesetting industry. Lorem Ipsum simply
                                    dummy text
                                    of&nbsp;the printing and typesetting industry. Lorem Ipsum has been.
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="reviews-slider-wrapper">
                                <img src="./img/reviews/avatar.jpg" alt="аватар" class="reviews-avatar" width="115" height="115">
                                <span class="reviews-rayting">
                                    <img src="./img/icon/Star 7.svg" alt="рейтинг" width="28" height="26.7">
                                    <img src="./img/icon/Star 7.svg" alt="рейтинг" width="28" height="26.7">
                                    <img src="./img/icon/Star 7.svg" alt="рейтинг" width="28" height="26.7">
                                    <img src="./img/icon/Star 7.svg" alt="рейтинг" width="28" height="26.7">
                                    <img src="./img/icon/Star 7.svg" alt="рейтинг" width="28" height="26.7">
                                </span>
                                <p class="reviews-text">
                                    Simply dummy text of&nbsp;the printing and typesetting industry. Lorem Ipsum simply
                                    dummy text
                                    of&nbsp;the printing and typesetting industry. Lorem Ipsum has been.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination swiper-pagination-reviews"></div>
                </div>



            </div>
            <div class="rivews-usp-wrapper">
                <div class="usp-reyting">
                    <span class="usp-reyting-title">100%</span>
                    <span class="usp-reyting-text">Органически</span>
                </div>
                <div class="usp-reyting">
                    <span class="usp-reyting-title">15</span>
                    <span class="usp-reyting-text">Продуктов <br> на рынке</span>
                </div>
                <div class="usp-reyting">
                    <span class="usp-reyting-title">150+</span>
                    <span class="usp-reyting-text">Торгорвых точек</span>
                </div>
                <div class="usp-reyting">
                    <span class="usp-reyting-title">5+</span>
                    <span class="usp-reyting-text">Лет на рынке</span>
                </div>

            </div>
        </div>
    </div>
</section>

<!--  START Section Best-offers -->
<section class="setion section-best-offers">
    <div class="best-offers-bg">
        <div class="container">
            <div class="best-offer-action">
                <h2 class="best-offer-title">Лучшие предложения месяца</h2>
                <a href="#" class="link best-offer-link link-secondary">Смотреть все <img src="./img/icon/Aerrow.svg" alt="смотреть все" width="19" height="19" />
                </a>
            </div>
            <div class="product-wrapper">
                <div class="product-card">
                    <span class="badge-product">Масла</span>
                    <img src="./img/product/image1.jpg" alt="масло" width="292" height="361">
                    <h3 class="card-product-title">Масло тыквенное, 250мл</h3>
                </div>
                <div class="product-card">
                    <span class="badge-product">Масла</span>
                    <img src="./img/product/image1.jpg" alt="масло" width="292" height="361">
                    <h3 class="card-product-title">Масло тыквенное, 250мл</h3>
                </div>
                <div class="product-card">
                    <span class="badge-product">Масла</span>
                    <img src="./img/product/image1.jpg" alt="масло" width="292" height="361">
                    <h3 class="card-product-title">Масло тыквенное, 250мл</h3>
                </div>
                <div class="product-card">
                    <span class="badge-product">Масла</span>
                    <img src="./img/product/image1.jpg" alt="масло" width="292" height="361">
                    <h3 class="card-product-title">Масло тыквенное, 250мл</h3>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- START Section Eco-friendly -->
<section class="section section-eco-friendly">
    <div class="eco-friendly-content">
        <div class="eco-friendly-wrapper">
            <img src="./img/friendly/friendly-imag.jpg" alt="Друзья фермеры" class="ecof-friendly-image-left" width="952" height="931">
            <div class="eco-friendly-content-legend">
                <h2 class="eco-friendly-content-legend-title">Eco Friendly</h2>
                <div class="eco-friendly-content-legend-title-remark">Создаём здоровое будущее </div>
                <div class="eco-friendly-content-box">
                    <h3 class="eco-friendly-content-box-title">Современное сельское хозяйство</h3>
                    <p class="eco-friendly-content-box-text">Sed ut perspiciatis unde omnis iste natus error sit
                        voluptat accusantium doloremque laudantium. Sed ut perspiciatis.
                    </p>
                </div>
                <div class="eco-friendly-content-box">
                    <h3 class="eco-friendly-content-box-title">Технологичный подход в производстве</h3>
                    <p class="eco-friendly-content-box-text">Sed ut perspiciatis unde omnis iste natus error sit
                        voluptat accusantium doloremque laudantium. Sed ut perspiciatis.
                    </p>
                </div>
                <div class="eco-friendly-content-box">
                    <h3 class="eco-friendly-content-box-title">Популяризация натуральных продуктов</h3>
                    <p class="eco-friendly-content-box-text">Sed ut perspiciatis unde omnis iste natus error sit
                        voluptat accusantium doloremque laudantium. Sed ut perspiciatis.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- START Section Category-Product -->
<section class="section section-category-product">
    <div class="section-category-product-bg">
        <div class="section-category-product-wrapper">
            <div class="section-category-product-card">
                <img src="./img/category-card/Image1.jpg" alt="" class="category-product-image">
                <a href="#" class="category-product-link">Натуральные масла</a>
            </div>
            <div class="section-category-product-card">
                <img src="./img/category-card/Image2.jpg" alt="" class="category-product-image">
                <a href="#" class="category-product-link">Натуральные масла</a>
            </div>
            <div class="section-category-product-card">
                <img src="./img/category-card/Image3.jpg" alt="" class="category-product-image">
                <a href="#" class="category-product-link">Натуральные масла</a>
            </div>
        </div>
    </div>
</section>

<!-- SATRT Section News -->
<section class="section section-blog">
    <div class="container">
        <div class="blog-action-wrapper">
            <div class="blog-action">
                <h2 class="section-blog-title">Новости</h2>
                <p class="section-blog-title-remark">Новости об органических продуктах и многом другом</p>
            </div>
            <a href="" class="link section-blog-link">Больше новостей <img src="./img/icon/Aerrow.svg" alt="иконка" width="19" height="19"></a>
        </div>
        <div class="blog-content">
            <div class="blog-post-wrapper">
                <div class="blog-post-content">
                    <img src="./img/blog/Image.png" alt="пост о витаминах" class="blog-post-content-image">
                    <span class="date-post">25 <br> Авг.</span>
                    <div class="blog-PostPreview">
                        <h3 class="blog-post-title">Витаминная заправка для летнего салата</h3>
                        <p class="blog-post-text">Simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum</p>
                        <a href="#" class="link link-secondary">Подробнее <img src="./img/icon/Aerrow.svg" alt="стрелка" width="19" height="19"></a>
                    </div>
                </div>

                <div class="blog-post-content">
                    <img src="./img/blog/Image2.png" alt="пост о витаминах" class="blog-post-content-image">
                    <span class="date-post">25 <br> Авг.</span>
                    <div class="blog-PostPreview">
                        <h3 class="blog-post-title">Каих витаминов не хватает осенью?</h3>
                        <p class="blog-post-text">Simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum</p>
                        <a href="#" class="link link-secondary">Подробнее <img src="./img/icon/Aerrow.svg" alt="стрелка" width="19" height="19"></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<!-- START Footer -->

<footer class="footer">
    <div class="container">
        <div class="footer-bg">
            <div class="footer-cta">
                <h2>Узнайте первыми о новых акциях!</h2>
                <form action="./subscribe.php" method="POST" class="form-cta">
                    <input type="email" name="email" placeholder="Введите e-mail" required class="form-cta-input">
                    <button type="submit" class="btn btn-cta">Подписаться</button>
                </form>
            </div>

            <!-- Подключим модальное окно -->
            <?php include './includes/modal.php'; ?>
        </div>


        <!-- START Footer menu -->
        <div class="footer-menu">
            <div class="footer-menu-wrapper">


                <!-- Общий контейнер для всех контактов -->
                <div class="footer-contacts">
                    <h3 class="footer-menu-title">Contact Us</h3>
                    <!-- Группа "Email" -->
                    <div class="footer-contact-group">
                        <h4 class="footer-contact-title">Email</h4>
                        <a href="mailto:needhelp@Organia.com" class="footer-contact-link">needhelp@Organia.com</a>
                    </div>

                    <!-- Группа "Phone" -->
                    <div class="footer-contact-group">
                        <h4 class="footer-contact-title">Phone</h4>
                        <a href="tel:666888888" class="footer-contact-link">666 888 888</a>
                    </div>

                    <!-- Группа "Address" -->
                    <div class="footer-contact-group">
                        <h4 class="footer-contact-title">Address</h4>
                        <address class="footer-contact-link">88 road, borklyn street, USA</address>
                    </div>
                </div>

                <!-- Контейнер социальных сетей -->
                <div class="footer-social-company">
                    <div class="footer-social-company-wrapper">
                        <img src="./img/Logo.svg" alt="логотип" class="logo-img" width="244" height="74">
                        <p class="footer-social-company-text">Следите за новостями и акциями <br>
                            в наших социальных сетях, подпишитесь!</p>
                        <div class="footer-social-icons">
                            <img src="./img/social/1.svg" alt="insta" class="footer-social-icon" width="60" height="60">
                            <img src="./img/social/2.svg" alt="fb" class="footer-social-icon" width="60" height="60">
                            <img src="./img/social/3.svg" alt="telegramm" class="footer-social-icon" width="60" height="60">
                            <img src="./img/social/4.svg" alt="vk" class="footer-social-icon" width="60" height="60">
                        </div>
                    </div>
                </div>

                <div class="footer-partners-link">
                    <h3 class="footer-menu-title">Partners</h3>
                    <ul class="footer-partners-list">
                        <li class="footer-partners-item">Style Guide</li>
                        <li class="footer-partners-item">404 Not Found</li>
                        <li class="footer-partners-item">Password Protected</li>
                        <li class="footer-partners-item">Licences</li>

                    </ul>
                </div>

            </div>
        </div>

    </div>

</footer>


<script src="./js/swiper-bundle.min.js"></script>
<script src="./js/main.js"></script>
</body>

</html>