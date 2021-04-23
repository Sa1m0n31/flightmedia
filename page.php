<?php
get_header();
?>

<!-- CATEGORY MAIN -->
<main class="categoryMain">
    <header class="categoryMain__header">
        <h1 class="categoryMain__title">
            <?php echo the_title(); ?>
        </h1>
        <p class="categoryMain__text">
            <?php echo get_the_content(); ?>
        </p>
        <button class="categoryMain__btn">
            <a href="<?php echo get_page_link(get_page_by_title('Portfolio')->ID); ?>">
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