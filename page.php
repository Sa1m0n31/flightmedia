<?php
get_header();
?>

<!-- CATEGORY MAIN -->
<main class="categoryMain">
    <header class="categoryMain__header">
        <h1 class="categoryMain__title">
            Kategoria
        </h1>
        <p class="categoryMain__text">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet
        </p>
        <button class="categoryMain__btn">
            <a href="./portfolio.html">
                Portfolio
            </a>
        </button>
    </header>
</main>
<section class="categoryPortfolio">
    <h2 class="categoryPortfolio__header">
        Nylige prosjekter
    </h2>

    <div class="categoryPortfolio__inner">
        <?php
            for($i=0; $i<3; $i++) {
                ?>
                <div class="portfolio__item">
                    <img class="portfolio__img" src="<?php get_bloginfo('stylesheet_directory') . '/assets/img/ferrari.png'; ?>" alt="portfolio-img" />

                    <div class="portfolio__item__desc">
                        <h5 class="portfolio__item__title">
                            Tytuł pracy
                        </h5>
                        <p class="portfolio__item__text">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                        </p>
                        <button class="portfolio__item__btn">
                            Więcej
                        </button>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
</section>

<?php
get_footer();
?>