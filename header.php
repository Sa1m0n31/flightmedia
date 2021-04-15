<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container">
    <!-- HEADER -->
    <header class="header">
        <h1 class="header__header">
            <a href="./index.html">LOGO</a>
        </h1>

        <menu class="topMenu">
            <ul class="topMenu__mobile">
                <li class="topMenu__item">
                    <img class="topMenu__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/road.svg'; ?>" alt="road" />
                    <a href="./kategoria.html">Luftfoto</a>
                </li>
                <li class="topMenu__item">
                    <img class="topMenu__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/aerial-advertising.svg'; ?>" alt="road" />
                    <a href="./kategoria.html">Bedrifts reklamer</a>
                </li>
                <li class="topMenu__item">
                    <img class="topMenu__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/property.svg'; ?>" alt="road" />
                    <a href="./kategoria.html">Eiendom</a>
                </li>
                <li class="topMenu__item">
                    <img class="topMenu__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/wedding-ring.svg'; ?>" alt="road" />
                    <a href="./kategoria.html">Bryllup</a>
                </li>
                <li class="topMenu__item">
                    <img class="topMenu__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/drone.svg'; ?>" alt="road" />
                    <a href="./kategoria.html">Droneinspeksjon</a>
                </li>
                <li class="topMenu__item">
                    <img class="topMenu__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/road.svg'; ?>" alt="road" />
                    <a href="./portfolio.html">Portfolio</a>
                </li>
            </ul>
            <div class="topMenu__hamburger" onclick="openMobileMenu()">
                <span class="hamburgerLine"></span>
                <span class="hamburgerLine"></span>
                <span class="hamburgerLine"></span>
            </div>
            <button class="topMenu__close" onclick="closeMobileMenu()">
                <img class="topMenu__close__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/close.png'; ?>" alt="close" />
            </button>

            <ul class="topMenu__list">
                <li class="topMenu__item" onclick="goTo(0)">
                    Om oss
                </li>
                <li class="topMenu__item topMenu__item--withDropdown">
                    By pa
                    <img class="topMenu__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/down.svg'; ?>" alt="down" />
                    <ul class="topMenu__dropdown">
                        <li class="topMenu__dropdown__item">
                            <a href="./kategoria.html">Luftfoto</a>
                        </li>
                        <li class="topMenu__dropdown__item">
                            <a href="./kategoria.html">Bedrifts reklamer</a>
                        </li>
                        <li class="topMenu__dropdown__item">
                            <a href="./kategoria.html">Eiendom</a>
                        </li>
                        <li class="topMenu__dropdown__item">
                            <a href="./kategoria.html">Bryllup</a>
                        </li>
                        <li class="topMenu__dropdown__item">
                            <a href="./kategoria.html">Droneinspeksjon</a>
                        </li>
                        <li class="topMenu__dropdown__item">
                            <a href="./kategoria.html">Portfolio</a>
                        </li>
                    </ul>
                </li>
                <li class="topMenu__item">
                    <a href="portfolio.html">
                        Portfolio
                    </a>
                </li>
                <li class="topMenu__item" onclick="goTo(1)">
                    Kontakt
                </li>
            </ul>
        </menu>
    </header>
