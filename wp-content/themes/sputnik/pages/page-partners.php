<?php /* Template Name: Страница Партнеры */
get_header();
$page_header = get_field('page_header');
$page_header_blue = get_field('page_header_blue');
$personal_link = get_field('personal_link');
$web_link = get_field('web_link');
$mobile_link = get_field('mobile_link');
$lower_header = get_field('lower_header');
$lower_header_blue = get_field('lower_header_blue');
$lower_header_description = get_field('lower_header_description');
$lower_header_link = get_field('lower_header_link');
?>
<div class="main main--partners">
    <div class="container-bordering">
        <div class="custom-breadcrumbs">
            <a href="<?php echo home_url();?>/bussiness">Для бизнеса</a> >
            <?php echo get_the_title();?>
        </div>
        <div class="bussines-header"> <span class="bussines-header--blue"><?=$page_header_blue?>
            </span><?=$page_header?></div>
        <div class="partner-subheader"> Для доступа к платформе нажмите на кнопку <a class="partner-subheader__link"
                href="<?=$personal_link?>">Личный кабинет.</a><br>Подробная информация и инструкции пользователя WEB
            платформы <a class="partner-subheader__link" href="<?=$web_link?>">здесь,</a><br>мобильного приложения
            сотрудников
            <a class="partner-subheader__link" href="<?=$mobile_link?>">здесь.</a>
        </div>
        <?php if(have_rows("web_table")):?>
        <div class="partner-table">
            <div class="partner-table__row">
                <div class="partner-table__header">Тарифы</div>
                <div class="partner-table__header">Лайт</div>
                <div class="partner-table__header partner-table__header--marked">Про</div>
                <div class="partner-table__header partner-table__header--marked">API</div>
            </div>
            <div class="partner-table__row">
                <div class="partner-table__section-header">WEB платформа</div>
            </div>
            <?php while( have_rows('web_table') ) : the_row();?>
            <?php if(have_rows("table_row_web")):?>
            <?php while( have_rows('table_row_web') ) : the_row();
                $table_cell_name = get_sub_field("table_cell_name");
            ?>
            <div class="partner-table__row">
                <div class="partner-table__cell partner-table__cell-name">
                    <span><?=$table_cell_name?></span>
                </div>
                <?php if(get_sub_field('light_sup')) {?>
                <div class="partner-table__cell partner-table__cell--check"></div>
                <?php } else if(get_sub_field('light_sup_price')) {?>
                <div class="partner-table__cell"> <a class="partner-table__cell--price" href="#">стоимость</a></div>
                <?php } else if(get_sub_field('light_sup_income')) { ?>
                <div class="partner-table__cell"> <a class="partner-table__cell--income" href="#">ваша прибыль</a></div>
                <?php }  else { ?> <div class="partner-table__cell partner-table__cell--nocheck">
                </div>
                <?php } ?>
                <?php if(get_sub_field('pro_sup')) {?>
                <div class="partner-table__cell partner-table__cell--check"></div>
                <?php } else if(get_sub_field('pro_sup_price')) {?>
                <div class="partner-table__cell"> <a class="partner-table__cell--price" href="#">стоимость</a></div>
                <?php } else if(get_sub_field('pro_sup_income')) { ?>
                <div class="partner-table__cell"> <a class="partner-table__cell--income" href="#">ваша прибыль</a></div>
                <?php }  else { ?> <div class="partner-table__cell partner-table__cell--nocheck">
                </div>
                <?php } ?>
                <?php if(get_sub_field('api_sup')) {?>
                <div class="partner-table__cell partner-table__cell--check"></div>
                <?php } else if(get_sub_field('api_sup_price')) { ?>
                <div class="partner-table__cell"> <a class="partner-table__cell--price" href="#">стоимость</a></div>
                <?php } else if(get_sub_field('api_sup_income')) { ?>
                <div class="partner-table__cell"> <a class="partner-table__cell--income" href="#">ваша прибыль</a></div>
                <?php } else { ?> <div class="partner-table__cell partner-table__cell--nocheck">
                </div>
                <?php } ?>
            </div>
            <?php endwhile;?>
            <?php endif;?>
            <?php endwhile;?>
            <?php if(have_rows("mobile_table")):?>
            <div class="partner-table__row section-row-special">
                <div class="partner-table__section-header">Мобильное приложение сотрудников</div>
            </div>
            <?php while( have_rows('mobile_table') ) : the_row();
            ?>
            <?php if(have_rows("table_row_web")):?>
            <?php while( have_rows('table_row_web') ) : the_row();
                $table_cell_name = get_sub_field("table_cell_name");
            ?>
            <div class="partner-table__row">
                <div class="partner-table__cell partner-table__cell-name">
                    <span><?=$table_cell_name?></span>
                </div>
                <?php if(get_sub_field('light_sup')) {?>
                <div class="partner-table__cell partner-table__cell--check"></div>
                <?php } else if(get_sub_field('light_sup_price')) {?>
                <div class="partner-table__cell"> <a class="partner-table__cell--price" href="#">стоимость</a></div>
                <?php } else if(get_sub_field('light_sup_income')) { ?>
                <div class="partner-table__cell"> <a class="partner-table__cell--income" href="#">ваша прибыль</a></div>
                <?php }  else { ?> <div class="partner-table__cell partner-table__cell--nocheck">
                </div>
                <?php } ?>
                <?php if(get_sub_field('pro_sup')) {?>
                <div class="partner-table__cell partner-table__cell--check"></div>
                <?php } else if(get_sub_field('pro_sup_price')) {?>
                <div class="partner-table__cell"> <a class="partner-table__cell--price" href="#">стоимость</a></div>
                <?php } else if(get_sub_field('pro_sup_income')) { ?>
                <div class="partner-table__cell"> <a class="partner-table__cell--income" href="#">ваша прибыль</a></div>
                <?php }  else { ?> <div class="partner-table__cell partner-table__cell--nocheck">
                </div>
                <?php } ?>
                <?php if(get_sub_field('api_sup')) {?>
                <div class="partner-table__cell partner-table__cell--check"></div>
                <?php } else if(get_sub_field('api_sup_price')) { ?>
                <div class="partner-table__cell"> <a class="partner-table__cell--price" href="#">стоимость</a></div>
                <?php } else if(get_sub_field('api_sup_income')) { ?>
                <div class="partner-table__cell"> <a class="partner-table__cell--income" href="#">ваша прибыль</a></div>
                <?php } else { ?> <div class="partner-table__cell partner-table__cell--nocheck">
                </div>
                <?php } ?>
            </div>
            <?php endwhile;?>
            <?php endif;?>
            <?php endwhile;?>
            <?php endif;?>
        </div>
        <?php endif;?>
        <!-- <div class="partner-table__cell"> <a class="partner-table__cell--price" href="#">стоимость</a></div>

<div class="partner-table__cell"> <a class="partner-table__cell--income" href="#">ваша прибыль</a>
</div> -->
        <?php if(have_rows("tarif_options")):?>
        <div class="partner-options">
            <?php while( have_rows('tarif_options') ) : the_row();
    $tarif_image = get_sub_field("tarif_image");
    $tarif_header = get_sub_field("tarif_header");
    $tarif_description = get_sub_field("tarif_description");
    $tarif_link_name = get_sub_field("tarif_link_name");
    $tarif_link_value = get_sub_field("tarif_link_value");
    
    ?>
            <div class="partner-option">
                <div class="partner-option__img">
                    <img src="<?=$tarif_image?>" alt="">
                </div>
                <div class="partner-option__header"><?=$tarif_header?></div>
                <div class="partner-option__description"><?=$tarif_description?></div>
                <a class="partner-option__link" href="<?=$tarif_link_value?>"><?=$tarif_link_name?></a>
            </div>
            <?php endwhile;?>
        </div>
        <?php endif;?>
    </div>
    <div class="promote-section">
        <div class="container-bordering">
            <div class="promote-section__header"><span
                    class="promote-section__header--blue"><?=$lower_header_blue?></span><?=$lower_header?></div>
            <div class="promote-section__text"><?=$lower_header_description?></div>
            <div class="promote-section__row"> <a class="promote-section__link" href="<?=$lower_header_link?>">Посчитать
                    экономику</a>
                <div class="promote-section__button modal-button">Отправить заявку</div>
            </div>
            <div class="promote-section__img"><img
                    src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/decor3.svg" alt="">
            </div>
            <div class="promote-section__globe"><img
                    src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/decor4.svg" alt="">
            </div>
        </div>
    </div>
    <?php get_footer();