<?php /* Template Name: Страница Гарантия */
get_header();
$more_warranty = get_field('more_warranty');
$manual_mobile = get_field('manual_mobile');
$manual_web = get_field('manual_web');
$manual_video = get_field('manual_video');
$warranty_header = get_field('warranty_header');
$warranty_text = get_field('warranty_text');
$warranty_mail = get_field('warranty_mail');
?>

<div class="main main--warranty">
    <div class="container-bordering">
        <div class="custom-breadcrumbs">
            <a href="<?php echo home_url();?>/bussiness">Для бизнеса</a> >
            <?php echo get_the_title();?>
        </div>
        <div class="main-header">Гарантийный ремонт</div>
        <div class="selling-section">
            <div class="selling-section__row">
                <div class="selling-section__card">
                    <div class="selling-section__numbers">
                        <div class="selling-section__number-container">
                            <div class="selling-section__number">12</div>
                            <div class="selling-section__caption">стран</div>
                        </div>
                        <div class="selling-section__number-container">
                            <div class="selling-section__number">192</div>
                            <div class="selling-section__caption">города России </div>
                        </div>
                    </div>
                    <div class="selling-section__text">Наше оборудование используется в совершенно разных
                        климатических условиях. Мы <span class="selling-section__text--blue">гарантируем высокое
                            качество</span> при эксплуатации в соответствии с опубликованными рекомендациями.</div>
                </div>
                <div class="selling-section__card">
                    <div class="selling-section__numbers">
                        <div class="selling-section__number-container">
                            <div class="selling-section__number">1</div>
                            <div class="selling-section__caption">год</div>
                        </div>
                    </div>
                    <div class="selling-section__text selling-section__text--strange"><span
                            class="selling-section__text--blue">Срок гарантии</span><br> с момента первого выхода
                        оборудования в онлайн.</div>
                </div>
            </div>
            <div class="selling-section__more"> Подробный условия гарантии <a class="selling-section__link"
                    href="<?=$more_warranty?>">здесь</a></div>
            <div class="selling-section__help">
                <div class="selling-section__par"> При возникновении гарантийного случая, необходимо самостоятельно
                    <span class="selling-section__par--blue">завести заявку в личном кабинете </span>Партнера, где в
                    дальнейшем можно отследить статус обращения.
                </div>
                <div class="selling-section__par">Подготовили <span class="selling-section__par--blue">подробную
                        инструкцию </span>для <a class="selling-section__link" href="<?=$manual_mobile?>">мобильного
                        контроля</a> и <a class="selling-section__link" href="<?=$manual_web?>">WEB версии</a>, а так же
                    <a class="selling-section__link" href="<?=$manual_video?>">видеообзор</a>.
                </div>
            </div>
        </div>
    </div>
    <div class="promote-section">
        <div class="container-bordering">
            <div class="promote-section__header"><?=$warranty_header?></div>
            <div class="promote-section__text"><?=$warranty_text?> <a class="promote-section__link"
                    href="mailto:<?=$warranty_mail?>"><?=$warranty_mail?></a>
            </div>
            <div class="promote-section__img"><img
                    src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/decor3.svg" alt="">
            </div>
            <div class="promote-section__globe"><img
                    src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/decor4.svg" alt="">
            </div>
        </div>
    </div>
</div>
<?php get_footer();