<?php
get_header();
?>

<!-- CATEGORY MAIN -->
<main class="categoryMain">
    <h2 class="categoryMain__title">
        Portfolio
    </h2>
    <menu class="portfolio__menu">
        <ul class="portfolio__menu__list">
            <li class="portfolio__menu__item portfolio__menu__item--active" onclick="changePortfolio(1)">
                Wszystkie
            </li>
            <li class="portfolio__menu__item" onclick="changePortfolio(2)">
                Luftfoto
            </li>
            <li class="portfolio__menu__item" onclick="changePortfolio(3)">
                Bedrifts reklamer
            </li>
            <li class="portfolio__menu__item" onclick="changePortfolio(4)">
                Eiendom
            </li>
            <li class="portfolio__menu__item" onclick="changePortfolio(5)">
                Bryllup
            </li>
            <li class="portfolio__menu__item" onclick="changePortfolio(6)">
                Droneinspeksjon
            </li>
        </ul>
    </menu>
    <main class="portfolio__main">
        <span class="portfolio__overlay"></span>
        <?php
            for($i=0; $i<24; $i++) {
                ?>

                <div class="portfolio__item">
                    <img class="portfolio__img" src="<?php get_bloginfo('stylesheet_directory') . '/assets/img/ferrari.png'; ?>" alt="Luftfoto" />

                    <div class="portfolio__item__desc">
                        <h5 class="portfolio__item__title">
                            Tytuł pracy
                        </h5>
                        <p class="portfolio__item__text">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                        </p>
                    </div>
                </div>

        <?php
            }
        ?>

    </main>
</main>

<?php
get_footer();
?>
