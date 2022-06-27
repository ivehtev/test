<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 * Template Name: Главная
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <section class="hero hero_main">
            <div class="ellipse ellipse_red"></div>
            <div class="ellipse ellipse_yellow ellipse_yellow_small"></div>
            <div class="ellipse ellipse_yellow ellipse_yellow_big"></div>
            <div class="ellipse ellipse_blue ellipse_blue_big"></div>
            <div class="container hero__container">
                <div class="hero__inner">
                    <div class="hero__heading">
                        <h1 class="hero__title">

                            <?php if( get_field("title") ): the_field( "title" ); else : the_title(); endif; ?>

                        </h1>
                        <?php if (get_field('title_art')) { ?>

                        <span class="hero__slogan art-font"><?php the_field('title_art'); ?></span>

                        <?php } ?>
                    </div>
                    <?php if (get_field('title_desc')) { ?>

                    <p class="hero__desc hero__desc_main"><?php the_field('title_desc'); ?></p>

                    <?php } ?>
                    <div class="apps__links row">
                        <a href="<?php echo get_theme_mod('link_google_play'); ?>"
                            class="apps__link btn apps__link_google-play qr-btn" target="_blank">Google Play</a>
                        <a href="<?php echo get_theme_mod('link_app_store'); ?>"
                            class="apps__link btn apps__link_app-store qr-btn" target="_blank">App Store</a>
                        <a href="<?php echo get_theme_mod('link_app_gallery'); ?>"
                            class="apps__link btn apps__link_app-gallery qr-btn" target="_blank">App Gallery</a>
                    </div>
                </div>
            </div>
        </section>

        <?php if( have_rows('slider') ): ?>
        <section class="slider">
            <div class="container slider__container">
                <div class="slider__swiper swiper">
                    <ul class="slider__list swiper-wrapper">
                        <?php while( have_rows('slider') ): the_row(); 

						// переменные
						$image = get_sub_field('slide');
						$txt = get_sub_field('slide_txt');

						?>

                        <li class="slider__item swiper-slide slide">
                            <div class="slide__txt">
                                <p>
                                    <?php echo $txt; ?>
                                </p>
                            </div>
                            <div class="slide__inner">
                                <div class="slide__img" style="background-image: url(<?php echo $image['url']; ?>);">
                                </div>
                            </div>
                        </li>

                        <?php endwhile; ?>
                    </ul>
                    <div class="swiper-pagination slider__pagin"></div>
                </div>
                <span class="slider__art art-font"><?php echo the_field('slider_txt'); ?></span>
            </div>
        </section>

        <?php endif; ?>

        <?php if( have_rows('main_adv') ): ?>
        <section class="advantages">
            <div class="container advantages__container">
                <ul class="advantages__list row">

                    <?php while( have_rows('main_adv') ): the_row(); 

					// переменные
					$adv_title = get_sub_field('adv_caption');
					$adv_desc = get_sub_field('adv_desc');
					$adv_bg = get_sub_field('adv_bg');

					?>

                    <li class="advantages__item adv-item row">
                        <div class="adv-item__bg" style="background-image: url(<?php echo $adv_bg['url']; ?>);"></div>
                        <div class="adv-item__info">
                            <h2 class="adv-item__caption"><?php echo $adv_title; ?></h2>
                            <p class="adv-item__desc"><?php echo $adv_desc; ?></p>
                        </div>
                    </li>

                    <?php endwhile; ?>
                </ul>
            </div>
        </section>

        <?php endif; ?>

        <?php if( have_rows('main_adv_2') ): ?>
        <section class="interest">
            <div class="container interest__container">
                <ul class="interest__list row">

                    <?php while( have_rows('main_adv_2') ): the_row(); 

					// переменные
					$adv_title_2 = get_sub_field('adv_caption_2');
					$adv_desc_2 = get_sub_field('adv_desc_2');

					?>

                    <li class="interest__item interest-item column">
                        <h2 class="interest-item__caption"><?php echo $adv_title_2; ?></h2>
                        <p class="interest-item__desc"><?php echo $adv_desc_2; ?></p>
                    </li>

                    <?php endwhile; ?>
                </ul>
            </div>
        </section>

        <?php endif; ?>

        <?php if( have_rows('faq') ): ?>
        <section class="faq">
            <div class="container faq__container">
                <div class="bussines-header"> <span class="bussines-header--blue">Ответы</span>
                    на частые вопросы</div>
                <ul class="faq__list">

                    <?php while( have_rows('faq') ): the_row(); 

					// переменные
					$faq_title = get_sub_field('question');
					$faq_answer = get_sub_field('answer');

					?>

                    <li class="faq__item faq-item column">
                        <h2 class="faq-item__caption"><?php echo $faq_title; ?></h2>
                        <div class="faq-item__content"><?php echo $faq_answer; ?></div>
                    </li>

                    <?php endwhile; ?>
                </ul>
            </div>
        </section>

        <?php endif; ?>

        <?php if( have_rows('faq') ): ?>

        <section class="cta">

            <div class="container cta__container">
                <div class="cta__inner">

                    <?php while( have_rows('cta') ): the_row(); 

					// переменные
					$cta_title = get_sub_field('cta_title');
					$cta_desc = get_sub_field('cta_desc');			
					?>

                    <h2 class="cta__title"><?php echo $cta_title; ?></h2>

                    <?php endwhile; ?>

                </div>
                <div class="apps__links row">
                    <a href="<?php echo get_theme_mod('link_google_play'); ?>"
                        class="apps__link btn apps__link_google-play qr-btn" target="_blank">Google Play</a>
                    <a href="<?php echo get_theme_mod('link_app_store'); ?>"
                        class="apps__link btn apps__link_app-store qr-btn" target="_blank">App Store</a>
                    <a href="<?php echo get_theme_mod('link_app_gallery'); ?>"
                        class="apps__link btn apps__link_app-gallery qr-btn" target="_blank">App Gallery</a>
                </div>
                <span class="cta__desc art-font"><?php echo $cta_desc; ?></span>
            </div>
        </section>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer(); ?>

<script>
const swiper = new Swiper('.slider__swiper', {
    loop: true,
    speed: 500,
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: 0,
        stretch: 20,
        depth: 200,
        modifier: 1,
        slideShadows: false,
    },
    autoplay: {
        delay: 3000,
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: 'true',
        // 			dynamicBullets: 'true',
        // 			dynamicMainBullets: 1,
    },
});

$(".faq__list").accordion({
    active: false,
    collapsible: true,
    heightStyle: "content",
});
</script>

<?php 