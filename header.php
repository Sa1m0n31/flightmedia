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
        <div class="header__header">
            <a href="<?php echo get_home_url(); ?>">
                <img class="header__logo" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/logo.png'; ?>" alt="logo" />
            </a>
        </div>
        <div class="header__caption">
            <img class="header__caption__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/header-napis.png'; ?>" alt="Vi flyr høyt" />
        </div>

        <menu class="topMenu">
            <ul class="topMenu__mobile">
                <li class="topMenu__item">
                    <img class="topMenu__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/road.svg'; ?>" alt="road" />
                    <a href="<?php echo get_page_link(get_page_by_title('Luftfoto')->ID); ?>">Luftfoto</a>
                </li>
                <li class="topMenu__item">
                    <img class="topMenu__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/aerial-advertising.svg'; ?>" alt="road" />
                    <a href="<?php echo get_page_link(get_page_by_title('Bedrifts reklamer')->ID); ?>">Bedrifts reklamer</a>
                </li>
                <li class="topMenu__item">
                    <img class="topMenu__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/property.svg'; ?>" alt="road" />
                    <a href="<?php echo get_page_link(get_page_by_title('Eiendom')->ID); ?>">Eiendom</a>
                </li>
                <li class="topMenu__item">
                    <img class="topMenu__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/wedding-ring.svg'; ?>" alt="road" />
                    <a href="<?php echo get_page_link(get_page_by_title('Bryllup')->ID); ?>">Bryllup</a>
                </li>
                <li class="topMenu__item">
                    <img class="topMenu__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/drone.svg'; ?>" alt="road" />
                    <a href="<?php echo get_page_link(get_page_by_title('Droneinspeksjon')->ID); ?>">Droneinspeksjon</a>
                </li>
                <li class="topMenu__item">
                    <img class="topMenu__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/road.svg'; ?>" alt="road" />
                    <a href="<?php echo get_page_link(get_page_by_title('Portfolio')->ID); ?>">Portfolio</a>
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
                <li class="topMenu__item">
                    <a href="<?php echo get_home_url() . '/#aboutUs'; ?>">Om oss</a>
                </li>
                <li class="topMenu__item topMenu__item--withDropdown">
                    By pa
                    <img class="topMenu__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/down.svg'; ?>" alt="down" />
                    <ul class="topMenu__dropdown">
                        <li class="topMenu__dropdown__item">
                            <a href="<?php echo get_page_link(get_page_by_title('Luftfoto')->ID); ?>">Luftfoto</a>
                        </li>
                        <li class="topMenu__dropdown__item">
                            <a href="<?php echo get_page_link(get_page_by_title('Bedrifts reklamer')->ID); ?>">Bedrifts reklamer</a>
                        </li>
                        <li class="topMenu__dropdown__item">
                            <a href="<?php echo get_page_link(get_page_by_title('Eiendom')->ID); ?>">Eiendom</a>
                        </li>
                        <li class="topMenu__dropdown__item">
                            <a href="<?php echo get_page_link(get_page_by_title('Bryllup')->ID); ?>">Bryllup</a>
                        </li>
                        <li class="topMenu__dropdown__item">
                            <a href="<?php echo get_page_link(get_page_by_title('Droneinspeksjon')->ID); ?>">Droneinspeksjon</a>
                        </li>
                        <li class="topMenu__dropdown__item">
                            <a href="<?php echo get_page_link(get_page_by_title('Portfolio')->ID); ?>">Portfolio</a>
                        </li>
                    </ul>
                </li>
                <li class="topMenu__item">
                    <a href="<?php echo get_page_link(get_page_by_title('Portfolio')->ID); ?>">
                        Portfolio
                    </a>
                </li>
                <li class="topMenu__item">
                    <a href="<?php echo get_home_url() . '/#contact'; ?>">Kontakt</a>
                </li>
            </ul>
        </menu>
    </header>
