<?php 
get_header();
$service_header_blue = get_field('service_header_blue');
$service_header_gray = get_field('service_header_gray');
$service_description = get_field('service_description');
$service_card_first = get_field('service_card_first');
$service_card_first_image = get_field('service_card_first_image');
$service_card_second = get_field('service_card_second');
$service_card_second_image = get_field('service_card_second_image');
$service_layout_blue = get_field('service_layout_blue');
$service_layout_gray = get_field('service_layout_gray');
$service_more_link = get_field('service_more_link');
$service_apply_header_blue = get_field('service_apply_header_blue');
$service_apply_header_gray = get_field('service_apply_header_gray');
$service_apply_header_image = get_field('service_apply_header_image');
$service_layout = get_field('service_layout');
$bussiness_faq_blue = get_field('bussiness_faq_blue');
$bussiness_faq_gray = get_field('bussiness_faq_gray');
?>

<div class="main main--service">
    <div class="container-bordering">
        <div class="custom-breadcrumbs">
            <a href="<?php echo home_url();?>/bussiness">Для бизнеса</a> >
            <?php echo get_the_title();?>
        </div>
        <div class="greeting-section">
            <div class="bussines-header"> <span class="bussines-header--blue"><?=$service_header_blue?> </span>
                <?=$service_header_gray?></div>
            <div class="greeting-section__caption">
                <?=$service_description?>
            </div>
            <div class="greeting-section__row">
                <div class="greeting-section__card">
                    <div class="greeting-section__card-text">
                        <?=$service_card_first?>
                    </div>
                    <div class="greeting-section__card-image">
                        <img src="<?=$service_card_first_image?>" alt="">
                    </div>
                </div>
                <div class="greeting-section__card">
                    <div class="greeting-section__card-text"><?=$service_card_second?></div>

                    <div class="greeting-section__card-image">
                        <img src="<?=$service_card_second_image?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="second-section">
            <div class="bussines-header">
                <span class="bussines-header--blue"><?=$service_layout_blue?> </span>
                <?=$service_layout_gray?>
            </div>
            <?php if($service_layout == 'service_layout_1'):
                    $service_layout_caption = get_field('service_layout_caption');
                    $service_req_blue = get_field('service_req_blue');
                    $service_req_gray = get_field('service_req_gray');
                    ?>
            <div class="second-section__table">
                <?php
                    if(have_rows("service_stages_repeater")): ?>
                <div class="second-section__column-nums">
                    <?php while( have_rows('service_stages_repeater') ) : the_row();
                            $service_stage_num = get_sub_field("service_stage_num");
                            $service_stage_content = get_sub_field("service_stage_content");
                            ?>
                    <div class="second-section__row">
                        <div class="second-section__num"><?=$service_stage_num?></div>
                        <div class="second-section__text"><?=$service_stage_content?></div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
                <div class="second-section__column-container">
                    <div class="second-section__caption-container">
                        <div class="second-section__caption">
                            <span class="second-section__caption--blue"><?=$service_req_blue?> </span>
                            <?=$service_req_gray?>
                        </div>
                        <?php
                        if(have_rows("service_req_repeater")): ?>
                        <ul class="second-section__caption-list">
                            <?php while( have_rows('service_req_repeater') ) : the_row();
                                $service_req_common = get_sub_field("service_req_common");
                                $service_req_detail = get_sub_field("service_req_detail");
                                ?>
                            <li class="second-section__caption-item">
                                <div class="second-section__caption-item-blue">
                                    <?=$service_req_common?>
                                </div>
                                <div class="second-section__caption-item-grey">
                                    <?=$service_req_detail?>
                                </div>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="second-section__small-text">
                <?=$service_layout_caption?>
            </div>
            <?php endif; ?>
            <?php if($service_layout == 'service_layout_2'):?>
            <div class="second-section__row-table">
                <?php if(have_rows("service_ben_repeater")): ?>
                <?php while( have_rows('service_ben_repeater') ) : the_row(); 
                        $service_ben_single = get_sub_field('service_ben_single');
                    ?>
                <div class="second-section__row-table-item"><?=$service_ben_single?></div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php if($service_layout == 'service_layout_3'):?>
            <div class="second-section__row">
                <?php if(have_rows("service_what_repeater")): ?>
                <?php while( have_rows('service_what_repeater') ) : the_row(); 
                    $service_what_single = get_sub_field('service_what_single');
                    ?>
                <div class="second-section__row-item"><?=$service_what_single?></div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <div class="second-section__middle-text">
                С подробной технической информацией предварительно можно ознакомиться
                <a href="<?=$service_more_link?>" class="second-section__link">здесь</a>
            </div>
            <img src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/decor3.svg" alt=""
                class="serAbs2">
            <img src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/decor4.svg" alt=""
                class="serAbs1">

        </div>
    </div>
    <div class="apply-section">
        <div class="container-bordering">
            <div class="apply-section__read-block">
                <div class="apply-section__header">
                    <span class="apply-section__header--blue"><?=$service_apply_header_blue?> </span>
                    <?=$service_apply_header_gray?>
                </div>
                <div class="apply-section__btn modal-button">Отправить заявку</div>
            </div>
            <img src="<?=$service_apply_header_image?>" alt=""
                class="apply-section__image <?php if($service_layout == 'service_layout_2') {echo "special-image-service";}?> <?php if($service_layout == 'service_layout_3') {echo "special-image-2-service";}?>">

        </div>
    </div>
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
<?php 
get_footer();
?>