<?php
get_header();
?>

<!-- LANDING -->
<main class="landing">
    <img class="landingBackground" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/landing.jpg'; ?>" alt="flightmedia-crew" />
    <header class="landing__content">
        <h1 class="landing__header">
            <?php echo get_field('naglowek_strony', 116); ?>
        </h1>
        <p class="landing__text">
            <?php echo get_field('tekst_pod_naglowkiem_strony', 116); ?>
        </p>
            <a class="landing__btn" href="#contact">
            Kontakt
        </a>
    </header>
</main>
<!-- O NAS -->
<section class="aboutUs">
    <span id="aboutUs"></span>
    <h3 class="sectionHeader">
        Om oss
    </h3>
    <div class="aboutUs__inner">
        <img class="aboutUs__img" src="<?php echo get_field('zdjecie_kategorii' ,99) ?>" alt="um-oss" />
        <div class="aboutUs__desc">
            <?php
            $page_data = get_page_by_title('Om oss');
            $content = apply_filters('the_content', $page_data->post_content);
            echo $content;
            ?>
        </div>
    </div>
</section>
<!-- KATEGORIE -->
<section class="categories">
    <h3 class="sectionHeader">
        Vårt tilbud
    </h3>

    <div class="categories__inner">
        <div class="categories__item">
            <img class="categories__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/road.svg'; ?>" alt="Luftfoto" />
            <h4 class="categories__title">
                Luftfoto
            </h4>
            <p class="categories__text">
                <?php
                $page_data = get_page_by_title('Luftfoto');
                $content = apply_filters('the_content', $page_data->post_content);
                echo $content;
                ?>
            </p>
            <a class="categories__btn" href="<?php echo get_page_link(get_page_by_title('Luftfoto')->ID); ?>">
                Mer informasjon
            </a>
        </div>

        <div class="categories__item">
            <img class="categories__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/aerial-advertising.svg'; ?>" alt="Luftfoto" />
            <h4 class="categories__title">
                Bedrifts reklamer
            </h4>
            <p class="categories__text">
                <?php
                $page_data = get_page_by_title('Bedrifts reklamer');
                $content = apply_filters('the_content', $page_data->post_content);
                echo $content;
                ?>
            </p>
            <a class="categories__btn" href="<?php echo get_page_link(get_page_by_title('Bedrifts reklamer')->ID); ?>">
                Mer informasjon
            </a>
        </div>

        <div class="categories__item">
            <img class="categories__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/property.svg'; ?>" alt="Luftfoto" />
            <h4 class="categories__title">
                Eiendom
            </h4>
            <p class="categories__text">
                <?php
                $page_data = get_page_by_title('Eiendom');
                $content = apply_filters('the_content', $page_data->post_content);
                echo $content;
                ?>
            </p>
            <a class="categories__btn" href="<?php echo get_page_link(get_page_by_title('Eiendom')->ID); ?>">
                Mer informasjon
            </a>
        </div>

        <div class="categories__item">
            <img class="categories__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/wedding-ring.svg'; ?>" alt="Luftfoto" />
            <h4 class="categories__title">
                Bryllup
            </h4>
            <p class="categories__text">
                <?php
                $page_data = get_page_by_title('Bryllup');
                $content = apply_filters('the_content', $page_data->post_content);
                echo $content;
                ?>
            </p>
            <a class="categories__btn" href="<?php echo get_page_link(get_page_by_title('Bryllup')->ID); ?>">
                Mer informasjon
            </a>
        </div>

        <div class="categories__item">
            <img class="categories__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/drone.svg'; ?>" alt="Luftfoto" />
            <h4 class="categories__title">
                Droneinspeksjon
            </h4>
            <p class="categories__text">
                <?php
                $page_data = get_page_by_title('Droneinspeksjon');
                $content = apply_filters('the_content', $page_data->post_content);
                echo $content;
                ?>
            </p>
            <a class="categories__btn" href="<?php echo get_page_link(get_page_by_title('Droneinspeksjon')->ID); ?>">
                Mer informasjon
            </a>
        </div>
    </div>
</section>
<!-- PORTFOLIO -->
<section class="portfolio">
    <h3 class="sectionHeader">
        Portfolio
    </h3>

    <h4 class="portfolio__subheader">
        Våre siste prosjekter
    </h4>

    <div class="portfolio__inner">

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

    </div>
</section>
<!-- KONTAKT -->
<section class="contact">
    <span id="contact"></span>
    <h3 class="sectionHeader">
        Kontakt
    </h3>
    <div class="contact__inner">
        <h4 class="contact__header">
            Har du noen spørsmål? Kontakt oss direkte eller bruk skjemaet nedenfor.
        </h4>
        <div class="contact__info">
            <h4 class="contact__info__item">
                <span class="contact__info__white">Ring oss:</span> <a href="tel:+4794200726">942 00 726</a>
            </h4>
            <h4 class="contact__info__item">
                <span class="contact__info__white">Skriv til oss:</span> <a href="mailto:Daniel.eikeland91@gmail.com">Daniel.eikeland91@gmail.com</a>
            </h4>
        </div>

        <div class="contact__form">
            <?php echo do_shortcode('[contact-form-7 id="7" title="Formularz 1"]'); ?>
        </div>
    </div>
</section>


<?php
get_footer();
?>
