<?php /* Template Name: Страница Маркетинг */
get_header();
$market_header_blue = get_field('market_header_blue');
$market_header_gray = get_field('market_header_gray');
$market_subheader_blue = get_field('market_subheader_blue');
$market_subheader_gray = get_field('market_subheader_gray');
$apply_header = get_field('apply_header');
$apply_textconntent = get_field('apply_textconntent');
$apply_mail = get_field('apply_mail');
$brandbook_link = get_field('brandbook_link');
$photobank_link = get_field('photobank_link');
$admaterial_linkn = get_field('admaterial_linkn');
?>

<div class="main main--marketing">
    <div class="container-bordering">
        <div class="custom-breadcrumbs">
            <a href="<?php echo home_url();?>/bussiness">Для бизнеса</a> >
            <?php echo get_the_title();?>
        </div>
        <div class="main-header"><?=$market_header_blue?></div>
        <div class="main-subheader"><?=$market_header_gray?></div>
        <div class="main-caption"><?=$market_subheader_gray?><span
                class="main-caption--blue"><?=$market_subheader_blue?></span></div>
        <div class="refferals-section">
            <div class="refferals-section__card">
                <div class="refferals-section__img"> <img
                        src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/example1.png"
                        alt=""></div>
                <div class="refferals-section__header" style="font-size:22px; margin-bottom:16px">Брендбук </div><a
                    class="refferals-section__link" style="
    align-self: flex-start; margin-left:20px" href="<?=$brandbook_link?>">подробнее</a>
            </div>
            <div class="refferals-section__card">
                <div class="refferals-section__img"> <img
                        src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/example2.png"
                        alt=""></div>
                <div class="refferals-section__header" style="font-size:22px; margin-bottom:16px">Фотобанк</div><a
                    class="refferals-section__link" style="
    align-self: flex-start; margin-left:20px" href="<?=$photobank_link?>">подробнее</a>
            </div>
            <div class="refferals-section__card">
                <div class="refferals-section__img"> <img
                        src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/example3.png"
                        alt=""></div>
                <div class="refferals-section__header" style="font-size:22px; margin-bottom:16px">Рекламные материалы
                </div><a class="refferals-section__link" style="
    align-self: flex-start; margin-left:20px" href="<?=$admaterial_linkn?>">подробнее</a>
            </div>
            <div class="refferals-section__img1"><img
                    src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/decor4.svg" alt="">
            </div>
            <div class="refferals-section__img2"><img
                    src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/decor3.svg" alt="">
            </div>
        </div>
    </div>
    <div class="promote-section">
        <div class="container-bordering">
            <div class="promote-section__header"><?=$apply_header?></div>
            <div class="promote-section__text"><?=$apply_textconntent?><a class="promote-section__link"
                    href="mailto:<?=$apply_mail?>"><?=$apply_mail?></a></div>
            <div class="promote-section__img"><img
                    src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/decor5.png" alt="">
            </div>
            <div class="promote-section__globe"><img
                    src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/globe.png" alt="">
            </div>
        </div>
    </div>
</div>
<?php get_footer();