<?php 
get_header();
$post = get_post();
?>

<div class="main main--staff">
    <div class="container-bordering">
        <div class="custom-breadcrumbs">
            <a href="<?php echo home_url();?>/bussiness">Для бизнеса</a> >
            <?php echo get_the_title();?>
        </div>
        <div class="bussines-header"> <span class="bussines-header--blue"><?php echo get_the_title($post)?></span></div>
        <div class="greeting-section">
            <?php 
            if(have_rows("staff_photos")):?>
            <div class="greeting-section__swiper">
                <div class="swiper" id="greetingStaffSwiper">
                    <div class="swiper-wrapper">
                        <?php while( have_rows('staff_photos') ) : the_row();
                        $staff_image = get_sub_field("staff_photo");
                    ?>
                        <div class="swiper-slide swiper-preview"><img src="<?=$staff_image?>" alt=""></div>
                        <?php endwhile;?>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-next swiper-button-next--staff-s"></div>
                <div class="swiper-button-prev swiper-button-prev--staff-s"></div>
            </div>
            <?php endif;?>
            <div class="greeting-section__container">
                <div class="greeting-section__header">Характеристики:</div>
                <div class="greeting-section__prename"><?php echo get_field('list_prename'); ?></div>
                <ul class="greeting-section__list">
                    <?php if (have_rows('staff_chars')):?>
                    <?php while( have_rows('staff_chars') ) : the_row();
                        $text_par = get_sub_field("staff_char");
                        $staff_char_is_list = get_sub_field('staff_char_is_list');
                        ?>
                    <li class="greeting-section__item"><?=$text_par?></li>
                    <?php if (have_rows('staff_char_letter_repeater')):?>
                    <ol>

                        <?php while( have_rows('staff_char_letter_repeater') ) : the_row();
                        $staff_char_letter = get_sub_field('staff_char_letter');
                        ?>
                        <li class="greeting-section__item-list-letter">
                            <?=$staff_char_letter?>
                        </li>
                        <?php endwhile;?>
                    </ol>
                    <?php endif?>
                    <?php endwhile;?>
                    <?php endif;?>
                </ul>
                <?php if (get_field('list_aftername')) {?>
                <div class="greeting-section__aftername">
                    <?php echo get_field('list_aftername'); ?>
                </div>
                <?php } else {?>
                <a href="<?php echo get_field('docs_link');?>" class="greeting-section__link">
                    Скачать паспорт
                </a>
                <?php }?>
                <div class="greeting-section__row">
                    <div class="greeting-section__btn modal-button">Заказать товар</div>
                    <div class="greeting-section__price"><?php echo get_field('staff_price');?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="apply-section">
        <div class="container-bordering">
            <div class="apply-section__read-block">
                <div class="apply-section__header">
                    <span class="apply-section__header--blue">Посчитайте свою экономику </span>
                    в домофонном бизнесе
                </div>
                <div class="apply-section__btn modal-button">Посчитать</div>
            </div>
            <img src="http://sputnik.dev-tmweb.ru/wp-content/uploads/2022/06/staff2.png" alt=""
                class="apply-section__image  ">

        </div>
    </div>

    <div class="container-bordering">
        <div class="relate-section">
            <div class="relate-section__header">Рекомендуемые товары</div>
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
        </div>
        <?php
     if(have_rows("faq_repeater_bussiness")): ?>
        <div class="container-bordering">
            <div class="faq-section">
                <div class="bussines-header"> <span class="bussines-header--blue">Ответы</span>
                    на частые вопросы</div>
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
</div>
<?php 
get_footer();
?>