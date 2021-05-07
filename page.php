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

        <img class="categoryMain__img" src="<?php echo get_field('zdjecie_kategorii'); ?>" alt="category-img" />

    </header>
</main>
<section class="categoryPortfolio">
    <div class="categoryPortfolio__inner">
        <?php
        $args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => 3,
            'meta_key' => 'kategoria',
            'meta_value' => get_the_title()
        );

        $portfolioQuery = new WP_Query($args);

        if($portfolioQuery->have_posts()) {
            ?>
            <h2 class="categoryPortfolio__header">
                Nylige prosjekter
            </h2>

        <?php
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
    </div>
</section>

<?php
get_footer();
?>