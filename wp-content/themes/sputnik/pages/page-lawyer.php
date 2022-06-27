<?php /* Template Name: Страница Юридические материалы */
get_header();
$law_exist = get_field('law_exist');
$law_protected = get_field('law_protected');
$law_warning = get_field('law_warning');
$privacy_link = get_field('privacy_link');
?>

<div class="main main--lawyer">

    <div class="container-bordering">
        <img src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/decor2.svg" alt=""
            class="absImg1">
        <img src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/shopBag.png" alt=""
            class="absImg2">
        <div class="custom-breadcrumbs">
            <a href="<?php echo home_url();?>/bussiness">Для бизнеса</a> >
            <?php echo get_the_title();?>
        </div>
        <div class="main-header"><?php echo get_the_title();?></div>
        <div class="main-caption"><?=$law_exist?></div>
        <div class="lawyer-section">
            <div class="lawyer-section__text"><?=$law_protected?></div>
            <div class="main-caption"><?=$law_warning?></div><a class="lawyer-section__link"
                href="<?=$privacy_link?>">Политика
                конфиденциальности</a>
        </div>
        <div class="partners-section"><a class="partners-section__link" href="<?php echo get_field('skolk_link')?>"><img
                    src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/logoSkolk.png"
                    alt=""></a><a class="partners-section__link" href="<?php echo get_field('fond_link')?>"><img
                    src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/fondInoLogo.png"
                    alt=""></a></div>

    </div>
</div>
<?php get_footer();