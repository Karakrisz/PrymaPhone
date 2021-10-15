<audio id="beep__active" src="http://freesound.org/data/previews/263/263133_2064400-lq.mp3"></audio>

<!--BANNER START-->
<div class="homer-banner" id="about">
    <div class="homer-banner-img-box">
        <img class="homer-banner-img-box__img" src="phone-shop/img/slider-bg-3.jpg" alt="PrymaPhone">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6 col-lg-7 d-flex justify-content-center align-items-center text-center text-lg-left">
                <div class="banner-description animate two bounce">
                    <button id="mobile-registration-btn" class="position-relative btn green-color-yellow-gradient-btn nav-item__btn nav-item__btn--mobile-view-formating" data-toggle="modal" data-target="#modalLRForm">Regisztráció </button>
                    <button id="mobile-cookie-settings" class="position-relative btn green-color-yellow-gradient-btn nav-item__btn nav-item__btn--mobile-view-formating" data-toggle="modal" data-target="#CookieModal">Regisztráció beállítások</button>
                    <span class="banner-description__span small-heading animated fadeInRight delay-1s">#KÖVESS
                        MINKET</span>
                    <h1 class="banner-description__h1 w-sm-100 w-md-100 w-lg-25 animate one fadeInLeft">
                        Folyamatos<span class="c-red">havi akciók</span>
                    </h1>
                    <!-- <a href="phone-shop/product-listing.html" class="btn animated fadeInLeft delay-1s">SHOP NOW </a> -->
                    <p class="banner-description__p"> Ha értesülni szeretnél havi akcióinkról, vagy termékeink
                        újítását kísérnéd figyelemmel,
                        akkor kövess minket. Folyamatosan bővül kínáltunk, legkorszerűbb termékeket láthatod a
                        legkedvezőbb áron! <br> <br> <strong class="c-red">Ha kérdésed merül fel, érdeklődj
                            telefonon</strong></p>
                    <a href="tel:06709488777" class="btn green-color-yellow-gradient-btn">HÍVÁS MOST</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--BANNER END-->

<!--START LATEST ARRIVALS-->
<div class="lastest_arrivals">
    <div class="container">
        <h1>Kiemelt készülékeink</h1>

        <div class="lastest_arrivals__phone-box">
            <div class="lastest_arrivals__phone-box__div">
                <!-- <a href="phone-shop/product-detail.html" class="lastest-addto-cart"><i
                                    class="fa fa-shopping-cart"></i></a> -->
                <div class="lastest_arrivals__phone-box__div__card lastest_arrivals__phone-box__div__card--d-flex">
                    <?php foreach ($phones as $phone) : ?>
                        <div class="image-holder">
                            <!-- <a href="karaKrisz/img/silicon-case/silicon-case.jpg" data-fancybox="lastest_product" data-title="Shirt Name"> -->
                            <?php echo "<img class='card-img-top' alt='" . $phone['brand'] . "' src='data:image/jpeg;base64," . base64_encode($phone['image']) . "'>"; ?>
                            <!-- <img src="karaKrisz/img/silicon-case/silicon-case.jpg" class="card-img-top" alt="Lastest Arrivals 1"> -->
                            </a>
                            <p>
                            <h5 class="card-title"><?php esc($phone['brand'] .=  ' ' . $phone['type']) ?></h5>
                            </p>
                            <p class="card-text"> <?php esc($phone['price']) ?> </p>
                            <a href="/phone<?php esc($phone['id']) ?>" class="btn green-color-yellow-gradient-btn">További információ</a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a href="/allmobile" class="btn green-color-yellow-gradient-btn lastest_arrivals__phone-box__div__link">Összes készülék megtekintése</a>
            </div>
        </div>
    </div>
</div>
<!--END LATEST ARRIVALS-->


<!-- START PORTOLIO SECTION -->
<div class="portfolio-section">
    <div class="container">
        <div class="row">

            <!-- START PORTFOLIO HEADING -->
            <div class="col-12">
                <div class="portfolioHeading text-center" id="galeria">
                    <h1 class="high-lighted-heading">Galéria</h1>
                    <p>A legkorszerűbb <strong class="c-red">PrymaPhone</strong> termékeink</p>
                </div>
            </div>
            <!-- END PORTFOLIO HEADING -->

            <!-- START FILTERS -->
            <div class="col-12">
                <div class="clearfix d-flex justify-content-center">
                    <div id="js-filters-blog-posts" class="cbp-l-filters-button cbp-1-filters-alignCenter">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">Összes </div>
                        <div data-filter=".Mobile" class="cbp-filter-item">Mobiletelefon</div>
                        <div data-filter=".Silicon" class="cbp-filter-item">Szilikon tokok</div>
                        <div data-filter=".SecCAse" class="cbp-filter-item">Biztonsági tokok</div>
                        <div data-filter=".PremiumCase" class="cbp-filter-item">Prémium tokok</div>
                        <div data-filter=".BookCase" class="cbp-filter-item">Könyv tokok</div>
                        <div data-filter=".SmartCase" class="cbp-filter-item">Okostokok</div>
                        <div data-filter=".Glass" class="cbp-filter-item">Üvegfóliák</div>
                        <div data-filter=".3Dglass" class="cbp-filter-item">3D üvegfóliák</div>
                    </div>
                </div>
            </div>
            <!-- END FILTERS -->

            <!-- START PORTFOLIO IMAGES -->
            <div class="col-12">
                <div id="js-grid-blog-posts" class="cbp">

                    <div class="cbp-item Mobile Silicon">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/silicon-case/silicon-case.jpg" class="cbp-caption" data-fancybox="gallery1" data-title="Book 1"><img src="karaKrisz/img/silicon-case/silicon-case.jpg" alt="Book 1"></a></div>
                            <div class="item"> <a href="karaKrisz/img/silicon-case/silicon-case.jpg" class="cbp-caption" data-fancybox="gallery1" data-title="Book 1"><img src="karaKrisz/img/silicon-case/silicon-case.jpg" alt="PrymaPhone"></a></div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Szilikon tok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">1500 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item Mobile Silicon">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/silicon-case/silicon-case-2.jpg" class="cbp-caption" data-fancybox="gallery2" data-title="Book2"> <img src="karaKrisz/img/silicon-case/silicon-case-2.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/silicon-case/silicon-case-2.jpg" class="cbp-caption" data-fancybox="gallery2" data-title="Book2"><img src="karaKrisz/img/silicon-case/silicon-case-2.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Szilikon tok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">1500 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item Silicon">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/silicon-case/silicon-case-3.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/silicon-case/silicon-case-3.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/silicon-case/silicon-case-3.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/silicon-case/silicon-case-3.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Szilikon tok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">1500 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item Silicon">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/silicon-case/silicon-case-4.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/silicon-case/silicon-case-4.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/silicon-case/silicon-case-4.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/silicon-case/silicon-case-4.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Szilikon tok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">1500 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item Silicon">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/silicon-case/silicon-case-5.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/silicon-case/silicon-case-5.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/silicon-case/silicon-case-5.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/silicon-case/silicon-case-5.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Szilikon tok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">1500 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item Silicon">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/silicon-case/silicon-case-6.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/silicon-case/silicon-case-6.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/silicon-case/silicon-case-6.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/silicon-case/silicon-case-6.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Szilikon tok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">1500 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item Silicon">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/silicon-case/silicon-case-7.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/silicon-case/silicon-case-7.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/silicon-case/silicon-case-7.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/silicon-case/silicon-case-7.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Szilikon tok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">1500 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item SecCAse">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/security-case/security-cases.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/security-case/security-cases.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/security-case/security-cases.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/security-case/security-cases.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Biztonsági tokok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">2000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item SecCAse">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/security-case/security-cases-2.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/security-case/security-cases-2.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/security-case/security-cases-2.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/security-case/security-cases-2.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Biztonsági tokok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">2000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item SecCAse">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/security-case/security-cases-3.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/security-case/security-cases-3.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/security-case/security-cases-3.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/security-case/security-cases-3.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Biztonsági tokok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">2000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item SecCAse">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/security-case/security-cases-4.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/security-case/security-cases-4.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/security-case/security-cases-4.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/security-case/security-cases-4.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Biztonsági tokok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">2000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item BookCase">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/book-case/book_case.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/book-case/book_case.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/book-case/book_case.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/book-case/book_case.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Könyv tokok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">2000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item BookCase">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/book-case/book_case-2.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/book-case/book_case-2.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/book-case/book-case-2.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/book-case/book_case-2.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Könyv tokok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">2000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item BookCase">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/book-case/book-case-3.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/book-case/book-case-3.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/book-case/book-case-3.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/book-case/book_case-3.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Könyv tokok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">2000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item BookCase">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/book-case/book-case-4.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/book-case/book-case-4.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/book-case/book-case-4.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/book-case/book-case-4.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Könyv tokok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">2000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item SmartCase">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/smart-case/smart-cover.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/smart-case/smart-cover.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/smart-case/smart-cover.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/smart-case/smart-cover.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Okostokok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">2000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item SmartCase">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/smart-case/smart-cover-2.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/smart-case/smart-cover-2.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/smart-case/smart-cover-2.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/smart-case/smart-cover-2.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Okostokok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">2000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item SmartCase">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/smart-case/smart-cover-3.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/smart-case/smart-cover-3.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/smart-case/smart-cover-3.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/smart-case/smart-cover-3.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Okostokok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">2000 Ft-tól</div>
                            </div>
                        </div>
                    </div>


                    <div class="cbp-item PremiumCase">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/premium-case/guess.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/premium-case/guess.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/premium-case/guess.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/premium-case/guess.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Prémium tokok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">3000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item PremiumCase">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/premium-case/karl.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/premium-case/karl.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/premium-case/karl.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/premium-case/karl.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Prémium tokok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">3000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item PremiumCase">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/premium-case/adidas.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/premium-case/adidas.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/premium-case/adidas.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/premium-case/adidas.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Prémium tokok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">3000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item PremiumCase">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/premium-case/spigen.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/premium-case/spigen.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/premium-case/spigen.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/premium-case/spigen.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Prémium tokok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">3000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item PremiumCase">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/premium-case/bmw.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/premium-case/bmw.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/premium-case/bmw.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/premium-case/bmw.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Prémium tokok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">3000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item PremiumCase">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/premium-case/disney.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/premium-case/disney.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/premium-case/disney.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/premium-case/disney.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Prémium tokok</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">3000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item Glass">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/mobile-glass/mobile-glass.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/mobile-glass/mobile-glass.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/mobile-glass/mobile-glass.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/mobile-glass/mobile-glass.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Üvegfóliák</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">2000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item Glass">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/mobile-glass/mobile-glass-2.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/mobile-glass/mobile-glass-2.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/mobile-glass/mobile-glass-2.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/mobile-glass/mobile-glass-2.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Üvegfóliák</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">2000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item Glass">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/mobile-glass/mobile-glass-3.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/mobile-glass/mobile-glass-3.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/mobile-glass/mobile-glass-3.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/mobile-glass/mobile-glass-3.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Üvegfóliák</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">2000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item Glass">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/mobile-glass/mobile-glass-4.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/mobile-glass/mobile-glass-4.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/mobile-glass/mobile-glass-4.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/mobile-glass/mobile-glass-4.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">Üvegfóliák</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">2000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item 3Dglass">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/3D-glass/mobile-3d-glass.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/3D-glass/mobile-3d-glass.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/3D-glass/mobile-3d-glass.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/3D-glass/mobile-3d-glass.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">3D üvegfóliák</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">3000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item 3Dglass">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/3D-glass/mobile-3d-glass-2.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/3D-glass/mobile-3d-glass-2.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/3D-glass/mobile-3d-glass-2.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/3D-glass/mobile-3d-glass-2.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">3D üvegfóliák</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">3000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item 3Dglass">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/3D-glass/mobile-3d-glass-3.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/3D-glass/mobile-3d-glass-3.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/3D-glass/mobile-3d-glass-3.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/3D-glass/mobile-3d-glass-3.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">3D üvegfóliák</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">3000 Ft-tól</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item 3Dglass">
                        <!-- <a class="portfolio-circle-cart" href="phone-shop/shop-cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a> -->
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="karaKrisz/img/3D-glass/mobile-3d-glass-4.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"> <img src="karaKrisz/img/3D-glass/mobile-3d-glass-4.jpg" alt=""></a></div>
                            <div class="item"> <a href="karaKrisz/img/3D-glass/mobile-3d-glass-4.jpg" class="cbp-caption" data-fancybox="gallery3" data-title="Shirt Name"><img src="karaKrisz/img/3D-glass/mobile-3d-glass-4.jpg" alt="PrymaPhone"></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="#" target="_blank" class="portfolio-title">3D üvegfóliák</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">3000 Ft-tól</div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- END PORTFOLIO IMAGES -->

        </div>
    </div>
</div>
<!-- END PORTOLIO SECTION -->

<!--START BANNER SECTION-->
<div class="banner-section" id="szerviz">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 text-center text-lg-left">
                <div class="banner-content-wrapper animate one fadeInLeft">
                    <span class="banner-content-wrapper__span">A PrymaPhone azonnali gyorsszervizt kínál a legnépszerűbb okostelefon és táblagép típusoknál, egy piacvezető cégtől.</span>
                    <h1 class="banner-content-wrapper__h1"><span>Pryma<strong class="c-red">Phone</strong></span>
                    </h1>
                    <p class="banner-content-wrapper__p">Ha kérdésed merül fel, érdeklődj telefonon</p>
                    <p class="banner-content-wrapper__p">Nálunk kiválaszthatod milyen minőségű alkatrész kerüljön beépítésre. Kedvező áron kínálunk új, bontott, utángyártott, gyári felújított, és gyári új alkatrészeket is, így mindenki megtalálhatja a pénztárcájához, lehetőségeihez legjobban illeszkedő javítási konstrukciót!</p>
                    <a href="tel:06709488777" class="btn green-color-yellow-gradient-btn">HÍVÁS MOST</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-center text-lg-left">
                <div class="banner-content-wrapper banner-content-wrapper--bg-formating banner-content-wrapper--padding-formating animate one fadeInLeft">
                    <div class="banner-content-wrapper__box">
                        <div class="banner-content-wrapper__box__div">
                            <i class='fas fa-clock banner-content-wrapper__box__h1__icon'></i>
                            <h1 class="banner-content-wrapper__box__h1">Azonnal</h1>
                        </div>
                    </div>
                    <div class="banner-content-wrapper__box">
                        <div class="banner-content-wrapper__box__div">
                            <i class=' fas fa-money-bill-alt banner-content-wrapper__box__h1__icon'></i>
                            <h1 class="banner-content-wrapper__box__h1">Versenyképes árak</h1>
                        </div>
                        <i>Versenyképes árakkal dolgozunk, a gyorsaság nem jár felárral! Kijelzőinken nem látsz különbséget sem színben, sem felbontásban, sem pedig érzékenységben.</i>
                    </div>
                    <div class="banner-content-wrapper__box">
                        <div class="banner-content-wrapper__box__div">
                            <i class='far fa-thumbs-up banner-content-wrapper__box__h1__icon'></i>
                            <h1 class="banner-content-wrapper__box__h1">Prémium minőség</h1>
                        </div>
                        <i>A prémium márkák főbb típusait azonnal javítjuk, szinte mindig 1 órán belül. Amíg iszol egy kávét és körülnézel egy kicsit a plázában, elkészül a javításod. Mobiltelefon szerviz gyorsan és precízen.</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END BANNER SECTION-->
<!--START OUR SERVICES-->
<div class="our-services">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
                <div class="service">
                    <div class="media">
                        <div class="service-card">
                            <i class="fas fa-hands-helping mr-3"></i>
                            <div class="media-body">
                                <h5 class="mt-0">20 év tapasztalat</h5>
                                <span>Több 100 elégedett Ügyfél</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
                <div class="service">
                    <div class="media">
                        <div class="service-card">
                            <i class="fas fa-cogs mr-3"></i>
                            <div class="media-body">
                                <h5 class="mt-0">Mobiletelefon szerviz</h5>
                                <span>Gyors és megbízható</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
                <div class="service">
                    <div class="media">
                        <div class="service-card">
                            <i class="fas fa-thumbs-up mr-3"></i>
                            <div class="media-body">
                                <h5 class="mt-0">Kiegészítők</h5>
                                <span>Széles választékban</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
                <div class="service">
                    <div class="media">
                        <div class="service-card">
                            <i class="fas fa-diagnoses mr-3"></i>
                            <div class="media-body">
                                <h5 class="mt-0">Okos pont</h5>
                                <span>Kérdezz, Mi segítünk!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END OUR SERVICES-->


<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                            Bejelentkezés</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                            Regisztráció</a>
                    </li>
                </ul>
                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <!-- <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                        <div class="modal-body mb-1">
                            <form method="POST" action="/login">
                                <div class="md-form form-sm mb-2">
                                    <i class="fas fa-envelope prefix"></i>
                                    <input type="email" name="email" id="email" class="form-control form-control-sm validate" required>
                                    <label data-error="wrong" data-success="right" for="modalLRInput10">Email címe</label>
                                </div>

                                <div class="md-form form-sm mb-2">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" name="password" id="password" class="form-control form-control-sm validate" required>
                                    <label data-error="wrong" data-success="right" for="modalLRInput11">Jelszava</label>
                                </div>
                                <div class="text-center mt-2">
                                    <button type="submit" class="btn login-btn">Bejelentkezés <i class="fas fa-sign-in ml-1"></i></button>
                                </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger waves-effect ml-auto" data-dismiss="modal">Bezárás</button>
                        </div>
                    </div> tab-pane fade ezt vissza tenni ha van bejelentkezés -->
                    <!--/.Panel 7-->
                    <!--Panel 8-->
                    <div class="tab-pane fade in show active" id="panel8" role="tabpanel">
                        <div class="modal-body">
                            <form id="registration_form_ID" method="POST" action="/registration">
                                <div class="md-form form-sm mb-2">
                                    <i class="fas fa-user prefix"></i>
                                    <input name="register_name" id="register_name" class="form-control form-control-sm validate" required>
                                    <label data-error="wrong" data-success="right" for="modalLRInput12">Az Ön neve</label>
                                </div>
                                <div class="md-form form-sm mb-2">
                                    <i class="fas fa-envelope prefix"></i>
                                    <input type="email" name="register_email" id="register_email" class="form-control form-control-sm validate" required>
                                    <label data-error="wrong" data-success="right" for="modalLRInput12">Az email címe</label>
                                </div>
                                <div class="md-form form-sm mb-2">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" name="register_password" id="register_password" class="form-control form-control-sm validate" required>
                                    <label data-error="wrong" data-success="right" for="modalLRInput13">A jelszava</label>
                                </div>
                                <div class="md-form form-sm mb-2">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" name="register_password_2" id="register_password_2" class="form-control form-control-sm validate" required>
                                    <label data-error="wrong" data-success="right" for="modalLRInput14">Jelszó újra</label>
                                </div>
                                <div class="alert alert-danger inserted-alert-danger login-alert">
                                    <p id="incorrect_password">
                                    </p>
                                </div>
                                <div class="alert alert-success inserted-alert-success login-alert">
                                    <p id="inserted">
                                    </p>
                                </div>
                                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                                <div class="text-center form-sm mt-2">
                                    <!-- <input type="hidden" name="robot-event" id="robot-event" value="robotCheck"> -->
                                    <input type="hidden" name="event" id="event" value="sendemail">
                                    <button type="submit" class="btn login-btn g-recaptcha">Regisztráció <i class="fas fa-sign-in ml-1"></i></button>
                                </div>
                            </form>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger waves-effect ml-auto" data-dismiss="modal">Bezárás</button>
                        </div>
                        <!--Body-->
                    </div>
                    <!--/.Panel 8-->
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>