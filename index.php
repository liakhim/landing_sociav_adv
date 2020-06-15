
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colibrity</title>

    <!--FAVICON-->
    <link rel="apple-touch-icon" sizes="180x180" href="fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
    <link rel="manifest" href="fav/site.webmanifest">
    <link rel="stylesheet" href="css/swiper.min.css">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!--STYLES-->
    <link rel="stylesheet" type="text/css" href="/css/main.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
    <div id="app">
        <header class="header">
            <div class="container">
                <a href="#">
                    <div class="logo">
                        <div class="logo__picture">
                            <img src="img/logo_white.png" alt="">
                        </div>
                        <div class="logo__text">
                            <p>Colibrity Agency</p>
                        </div>
                    </div>
                </a>
                <div class="menu-button">
                    <div class="menu-button__box">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Projets</a></li>
                        <li><a href="#">A propos</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                    <div class="call-button">
                        <div class="call-button__box">
                            <i class="icon-phone"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="box" :style="{background:activeColors[counter]}">
<!--            <div class="wrap">-->
<!--                <div id="slider">-->
<!--                    <transition-group tag="div" :name="transitionName" class="slides-group">-->
<!--                        <div v-if="show" :key="current" class="slide" :class="slides[current].className">-->
<!--                            <img :src="'img/'+counter+'.png'" alt="">-->
<!--                        </div>-->
<!--                    </transition-group>-->
<!--                    <div class="btn btn-prev" aria-label="Previous slide" @click="slide(-1)">-->
<!--                        &#10094;-->
<!--                    </div>-->
<!--                    <div class="btn btn-next" aria-label="Next slide" @click="slide(1)">-->
<!--                        &#10095-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="image" :class="{hideImage : isHide, disactive: isHide}">-->
<!--                <img :src="'img/'+counter+'.png'" alt="" >-->
<!--            </div>-->
<!--            <div class="image" :class="{showImage : isShow, active: isShow}" >-->
<!--                <img :src="'img/'+ (counter+1) +'.png'"alt="">-->
<!--            </div>-->
<!--            <div class="wrap-img">-->
<!--                <div class="wrap-img-screen">-->
<!--                    <div class="wrap-img-screen__box" v-for="item in len">-->
<!--                        <img :src="'img/'+item+'.png'" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <p style="position: fixed; left: 0;top: 100px;z-index: 10000000">{{len}}</p>-->
<!--            <button style="position: fixed; left: 0;top: 200px;z-index: 10000000" @click="clone">Добавить</button>-->
            <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/1.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/2.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/3.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/4.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/5.png" alt="">
                    </div>
                </div>
                <!-- Add Pagination -->
<!--                <div class="swiper-pagination"></div>-->
                <!-- Add Arrows -->
<!--                <div class="swiper-button-next"></div>-->
<!--                <div class="swiper-button-prev"></div>-->
            </div>
            <div class="swiper-container" style="position: fixed;height: 100%;width: 100%;border: 1px solid red;">
                <div class="swiper-wrapper" style="height: 100%;">
                    <div class="swiper-slide">1</div>
                    <div class="swiper-slide">2</div>
                    <div class="swiper-slide">3</div>
                    <div class="swiper-slide">4</div>
                    <div class="swiper-slide">5</div>
                </div>
            </div>
            <div class="top">
                <div class="rails">
                    <h2 class="transparent" :class="{showtext:counter === 1}">Marketing</h2>
                    <h2 class="transparent" :class="{showtext:counter === 2}">Sites</h2>
                    <h2 class="transparent" :class="{showtext:counter === 3}">Applications</h2>
                    <h2 class="transparent" :class="{showtext:counter === 4}">Motion</h2>
                    <h2 class="transparent" :class="{showtext:counter === 5}"></h2>
                </div>
                <div class="rails">
                    <h2 class="full" :class="{showtext:counter === 1}">Social Media</h2>
                    <h2 class="full" :class="{showtext:counter === 2}">internet</h2>
                    <h2 class="full" :class="{showtext:counter === 3}">mobiles</h2>
                    <h2 class="full" :class="{showtext:counter === 4}">design</h2>
                    <h2 class="full" :class="{showtext:counter === 5}">Branding</h2>
                </div>
            </div>
            <div class="center">
                <div class="rails">
                    <p>Vous fixez des objectifs et nous proposons des solutions</p>
                    <p>De quoi a besoin un visiteur ? De l’Information !</p>
                    <p>Collaborons ensemble dès maintenant !</p>
                    <p>L’utilisation du motion design facilitent la communication sur des sujets complexes</p>
                    <p>Une entreprise qui offre quelque chose d'unique et de mémorable</p>
                </div>
            </div>
            <div class="bottom">
                <div class="rails">
                    <h2 class="transparent" :class="{showtext:counter === 1}">Marketing</h2>
                    <h2 class="transparent" :class="{showtext:counter === 2}">Sites</h2>
                    <h2 class="transparent" :class="{showtext:counter === 3}">Applications</h2>
                    <h2 class="transparent" :class="{showtext:counter === 4}">Motion</h2>
                    <h2 class="transparent" :class="{showtext:counter === 5}"></h2>
                </div>
                <div class="rails">
                    <h2 class="full" :class="{showtext:counter === 1}">Social Media</h2>
                    <h2 class="full" :class="{showtext:counter === 2}">internet</h2>
                    <h2 class="full" :class="{showtext:counter === 3}">mobiles</h2>
                    <h2 class="full" :class="{showtext:counter === 4}">design</h2>
                    <h2 class="full" :class="{showtext:counter === 5}">Branding</h2>
                </div>
            </div>
            <div class="navigation">
                <div class="container">
                    <div class="arrows">
                        <button class="arrows__item swiper-button-prev" @click="changeSlide('minus')">
                            <div class="back-pulse">

                            </div>
                            <i class="icon-arrow-left" aria-hidden="true"></i>
                        </button>
                        <button class="arrows__item swiper-button-next" @click="changeSlide('plus')">
                            <div class="back-pulse">

                            </div>
                            <i class="icon-arrow-right" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="pages swiper-pagination">
<!--                        <p>-->
<!--                            <span>{{counter+1}}</span>-->
<!--                            <span>/</span>-->
<!--                            <span>5</span>-->
<!--                        </p>-->
                    </div>
                    <div class="language">
                        <p>En</p>
                    </div>
                </div>
            </div>
            <div class="loader">
                <div class="full-line" :class="{loaderactive:loaderShow == true}">
                </div>
                <div class="full-line" :class="{loaderactivefalse:loaderShow == false}">
                </div>
            </div>
            <button style="z-index:100000000000;position: fixed;bottom:0;left: 0">{{ currentTime }}</button>
            <p style="z-index:100000000000;position: fixed;bottom:0;left: 0">{{message2}}</p>
        </div>
        <div class="modal-menu">
            <header class="header">
                <div class="container">
                    <a href="#">
                        <div class="logo">
                            <div class="logo__picture">
                                <img src="img/logo_black.png" alt="">
                            </div>
                            <div class="logo__text">
                                <p>Colibrity Agency</p>
                            </div>
                        </div>
                    </a>
                    <div class="menu-button">
                        <div class="menu-button__box">
                            <div class="line line-close"></div>
                            <div class="line line-close"></div>
                        </div>
                    </div>
                    <div class="menu">

                    </div>
                </div>
            </header>
            <div class="container">
                <div class="content">
                    <div class="left">
                        <ul>
                            <li><a href="#">A propos</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Projets</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Recrutement</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                    <div class="right">
                        <div class="text">
                            <p>
                                Vous cherchez à être conseillé par votre partenaire en design et en communication,
                                anticiper des problèmes potentiels et les besoins du marché ? Laissez-nous faire le
                                travail que nous aimons tant. Etre dans le futur pour construire le présent
                                d’aujourd’hui... Cette approche permet de vous offrir un accompagnement qui suit les
                                tendances et même d'en devenir auteur. Cela s'est avéré possible grâce à la politique
                                interne de l’entreprise qui base ses conseils sur les statistiques en chiffres et
                                l’expérience de Colibrity team. Colibrity est une agence créative éco-responsable basée
                                en France, spécialisée dans le design graphique et le marketing digital. Si nos valeurs
                                raisonnent en vous, faisons connaissance dès maintenant !
                            </p>
                        </div>
                        <div class="links">
                            <ul>
                                <li>
                                    <a href="#">Instagram</a>
                                    <div class="icon">
                                        <span class="icon-arrow-right"></span>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">Facebook</a>
                                    <div class="icon">
                                        <span class="icon-arrow-right"></span>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">LinkedIn</a>
                                    <div class="icon">
                                        <span class="icon-arrow-right"></span>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">Behance</a>
                                    <div class="icon">
                                        <span class="icon-arrow-right"></span>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">Pinterest</a>
                                    <div class="icon">
                                        <span class="icon-arrow-right"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-phone">
            <div class="modal-phone__box">
                <div class="close">

                </div>
                <div class="title">
                    <h2>Travaillons<br>ensemble</h2>
                </div>
                <div class="contacts">
                    <a href="#">
                        contact@colibrity.com
                    </a>
                    <a href="#">
                        +33 (0) 6 49 16 26 52
                    </a>
                </div>
                <form>
                    <label>
                        <input type="text" name="name" required>
                        <span class="text">
                            Nom, Prenom <sup>*</sup>
                        </span>
                    </label>
                    <label>
                        <input type="tel" name="phone" required>
                        <span class="text">
                            Telephone <sup>*</sup>
                        </span>
                    </label>
                    <label>
                        <input type="email" name="email" required>
                        <span class="text">
                            E-mail <sup>*</sup>
                        </span>
                    </label>
                    <label>
                        <textarea name="message">

                        </textarea>
                        <span class="text">
                            Message <sup>*</sup>
                        </span>
                    </label>
                    <button type="submit">
                        <p>Envoyer</p>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/vue.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script>
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            slidesPerView: 1,
            direction: 'vertical',
            speed: 1000,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 9000,
                disableOnInteraction: false,
            },
        });
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            speed: 1000,
            effect: 'fade',
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        $('button').on('click', function() {
            $(this).prop('disabled', true);
            setTimeout(function() {
                $(this).prop('disabled', false);
            }.bind(this), 1e3);
        });
    </script>
</body>
</html>
