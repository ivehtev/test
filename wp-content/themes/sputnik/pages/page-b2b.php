<?php /* Template Name: Страница Бизнес */
get_header();
$bussiness_header = get_field('bussiness_header');
$bussiness_subheader = get_field('bussiness_subheader');
$bussiness_service_blue = get_field('bussiness_service_blue');
$bussiness_service_gray = get_field('bussiness_service_gray');
$bussiness_staff_blue = get_field('bussiness_staff_blue');
$bussiness_staff_gray = get_field('bussiness_staff_gray');
$bussiness_sale_link = get_field('bussiness_sale_link');
$bussiness_app_header = get_field('bussiness_app_header');
$bussiness_app_subheader = get_field('bussiness_app_subheader');
$bussiness_demo_link = get_field('bussiness_demo_link');
$bussiness_more_about = get_field('bussiness_more_about');
$bussiness_news_blue = get_field('bussiness_news_blue');
$bussiness_news_gray = get_field('bussiness_news_gray');
$bussiness_faq_blue = get_field('bussiness_faq_blue');
$bussiness_faq_gray = get_field('bussiness_faq_gray');
?>
<div class="main main--b2b">
    <div class="greeting-section">
        <div class="container-bordering">
            <div class="greeting-section__header"><?=$bussiness_header?></div>
            <div class="greeting-section__subheader"><?=$bussiness_subheader?></div>
            <div class="greeting-section__button modal-button" href="#">Узнать
                подробнее</div>
        </div>
    </div>

    <div class="container-bordering">
        <div class="circle-special-b2b" id="openPopup">
            <span>Акция</span>
        </div>
        <div class="service-section">
            <div class="bussines-header"> <span class="bussines-header--blue"><?=$bussiness_service_blue?></span>
                <?=$bussiness_service_gray?></div>
            <div class="service-section__swiper">
                <div class="swiper" id="serviceSwiper">
                    <div class="swiper-wrapper">
                        <?php 
                        $spt_service = array(
                            'post_type' => 'spt_service',
                            'posts_per_page' => -1,
                            'orderby' => 'date',
                            'order' => 'ASC',
                        );
                        
                        $loop_section_service = new WP_Query($spt_service);
                        while ($loop_section_service->have_posts()): $loop_section_service->the_post();
                        get_template_part('templates/service-card');
                        $i++;
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>


            <div class="service-section__writeus"> Напишите в наш <img
                    src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/tg-logo.svg"
                    alt=""><a class="service-section__writeus--blue" href="<?=$bussiness_sale_link?>">отдел продаж</a>
            </div>
        </div>
    </div>
    <div class="container-bordering">
        <div class="staff-section">
            <div class="bussines-header"> <span class="bussines-header--blue"><?=$bussiness_staff_blue?></span>
                <?=$bussiness_staff_gray?>
            </div>
            <div class="staff-section__swiper">
                <div class="swiper" id="staffSwiper">
                    <div class="swiper-wrapper">

                        <?php 
                        $spt_staff = array(
                            'post_type' => 'spt_staff',
                            'posts_per_page' => -1,
                            'orderby' => 'date',
                            'order' => 'ASC',
                        );
                        
                        $loop_section_staff = new WP_Query($spt_staff);
                        while ($loop_section_staff->have_posts()): $loop_section_staff->the_post();
                        get_template_part('templates/staff-card');
                        $i++;
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>

                </div>

            </div>
            <div class="swiper-button-next--staff"></div>
            <div class="swiper-button-prev--staff"></div>
            <div class="staff-section__writeus"> Напишите в наш <img
                    src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/tg-logo.svg"
                    alt=""><a class="staff-section__writeus--blue" href="<?=$bussiness_sale_link?>">отдел продаж </a>
            </div>
        </div>
    </div>
    <div class="container-bordering">
        <div class="app-section">
            <div class="app-section__describe">
                <div class="app-section__header"><?=$bussiness_app_header?></div>
                <div class="app-section__subheader"><?=$bussiness_app_subheader?></div>
                <div class="app-section__row"> <a class="app-section__download-button"
                        href="<?=$bussiness_demo_link?>">Попробовать
                        демо</a><a class="app-section__more-button" href="<?=$bussiness_more_about?>">Узнать
                        подробнее</a></div>
            </div>
            <div class="app-section__img"> <img
                    src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/bPhones.png"
                    alt=""></div>
        </div>
    </div>
    <div class="info-section"> <img class="info-section__decor1"
            src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/decor5.svg" alt=""><img
            class="info-section__decor2"
            src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/decor6.svg" alt=""><img
            class="info-section__decor3"
            src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/decor7.svg" alt="">
        <div class="container-bordering">
            <div class="info-section__card">
                <div class="info-section__card-img"
                    style="background-image: url('http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/warrantyLogo.svg')">
                </div>
                <div class="info-section__card-name">Гарантийное обслуживание</div><a class="info-section__link"
                    href="<?php echo home_url();?>/warranty">Подробнее ></a>
            </div>
            <div class="info-section__card">
                <div class="info-section__card-img"
                    style="background-image: url('http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/supportLogo.svg')">
                </div>
                <div class="info-section__card-name">Техническая поддержка</div><a class="info-section__link"
                    href="<?php echo home_url();?>/support">Подробнее ></a>
            </div>
            <div class="info-section__card">
                <div class="info-section__card-img"
                    style="background-image: url('http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/marketLogo.svg')">
                </div>
                <div class="info-section__card-name">Маркетинговые материалы</div><a class="info-section__link"
                    href="<?php echo home_url();?>/market">Подробнее ></a>
            </div>
            <div class="info-section__card">
                <div class="info-section__card-img"
                    style="background-image: url('http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/lawLogo.svg')">
                </div>
                <div class="info-section__card-name">Юридические материалы</div><a class="info-section__link"
                    href="<?php echo home_url();?>/lawyer">Подробнее ></a>
            </div>
        </div>
    </div>
    <?php 
    if(have_rows("news_repeater_bussiness")):?>
    <div class="container-bordering">
        <div class="news-section">
            <div class="bussines-header"> <span class="bussines-header--blue"><?=$bussiness_news_blue?></span>
                <?=$bussiness_news_gray?></div>
            <div class="news-section__swiper">
                <div class="swiper" id="newsSwiper">
                    <div class="swiper-wrapper">
                        <?php while( have_rows('news_repeater_bussiness') ) : the_row();
                            $news_image = get_sub_field("bussiness_news_image");
                            $news_link = get_sub_field("bussiness_news_link");
                            $news_isbig = get_sub_field("bussiness_news_big");
                            ?>
                        <div
                            class="swiper-slide <?php if ($news_isbig) { echo 'swiper-slide--big'; } else { echo 'swiper-slide--small'; }  ?> ">
                            <a href="<?=$news_link?>" style="background-image: url(<?=$news_image?>)"></a>
                        </div>
                        <?php endwhile;?>
                    </div>
                    <div class="swiper-navigation">
                        <div class="swiper-button-next--news"></div>
                        <div class="swiper-button-prev--news"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif;?>
    <?php
     if(have_rows("faq_repeater_bussiness")): ?>
    <div class="container-bordering">
        <div class="faq-section">
            <div class="bussines-header"> <span class="bussines-header--blue"><?=$bussiness_faq_blue?></span>
                <?=$bussiness_faq_gray?></div>
            <?php while( have_rows('faq_repeater_bussiness') ) : the_row();
                            $bussiness_faq_question = get_sub_field("bussiness_faq_question");
                            $bussiness_faq_answer = get_sub_field("bussiness_faq_answer");
                            ?>
            <div class="faq-section__block">
                <div class="faq-section__question"><?=$bussiness_faq_question?><img
                        src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/arrowRight.svg"
                        alt=""></div>
                <div class="faq-section__answer"><?=$bussiness_faq_answer?></div>
            </div>
            <?php endwhile;?>

        </div>
    </div>
    <?php endif; ?>
</div>
<?php get_footer();