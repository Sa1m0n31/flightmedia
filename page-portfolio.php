<?php
get_header();
?>

 CATEGORY MAIN
<main class="categoryMain">
    <h2 class="categoryMain__title">
        Portfolio
    </h2>
    <menu class="portfolio__menu">
        <ul class="portfolio__menu__list">
            <li class="portfolio__menu__item portfolio__menu__item--active" onclick="changePortfolio(1)">
                Alle
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
        $args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => 8
        );

        $portfolioQuery = new WP_Query($args);

        if($portfolioQuery->have_posts()) {
            while($portfolioQuery->have_posts()) {
                $portfolioQuery->the_post();
                ?>
                <div class="portfolio__item">
                    <img class="portfolio__img" src="<?php echo get_field('zdjecie'); ?>" alt="<?php echo get_field('kategoria'); ?>" />

                    <div class="portfolio__item__desc">
                        <h5 class="portfolio__item__title">
                            <?php
                            if(get_field('naglowek')) {
                                echo get_field('naglowek');
                            }
                            ?>
                        </h5>
                        <p class="portfolio__item__text">
                            <?php
                            if(get_field('opis')) {
                                echo get_field('opis');
                            }
                            ?>
                        </p>
                    </div>
                </div>


                <?php
            }
        }
        ?>

    </main>
</main>

<?php
get_footer();
?>
