<?php
get_header();
?>

<!-- LANDING -->
<main class="landing">
    <header class="landing__content">
        <h1 class="landing__header">
            Jakiś nagłówek
        </h1>
        <p class="landing__text">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
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
        <img class="aboutUs__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/about-us.png'; ?>" alt="um-oss" />
        <div class="aboutUs__desc">
            <h4 class="aboutUs__header">
                Lorem ipsum
            </h4>
            <p class="aboutUs__text">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
            </p>
            <p class="aboutUs__text">
                At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
            </p>
            </p>
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
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
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
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
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
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
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
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
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
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
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
            for($i=0; $i<8; $i++) {
                ?>
                <div class="portfolio__item">
                    <img class="portfolio__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/ferrari.png'; ?>" alt="portfolio-img" />

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

        <form class="contact__form">
            <label>
                <input class="contact__form__input"
                       placeholder="Name"
                />
                <div class="contact__form__imgWrapper">
                    <img class="contact__form__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/user_square.svg?n=1'; ?>" alt="name" />
                </div>
            </label>
            <label>
                <input class="contact__form__input"
                       placeholder="Phone number"
                />
                <div class="contact__form__imgWrapper">
                    <img class="contact__form__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/phone-call.svg?n=1'; ?>" alt="phone" />
                </div>
            </label>
            <label>
                <input class="contact__form__input"
                       placeholder="Email"
                />
                <div class="contact__form__imgWrapper">
                    <img class="contact__form__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/assets/img/mail.svg?n=1'; ?>" alt="mail" />
                </div>
            </label>
            <label>
                <textarea class="contact__form__input"
                          placeholder="Melding"
                ></textarea>
            </label>

            <button class="contact__form__btn" type="submit">
                Send melding
            </button>
        </form>
    </div>
</section>


<?php
get_footer();
?>
