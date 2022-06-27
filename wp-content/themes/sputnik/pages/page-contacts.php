<?php /* Template Name: Страница Контакты */
get_header();
$help_mail = get_field('help_mail','option');
$sell_mail = get_field('sell_mail','option');
$sell_tg = get_field('sell_tg','option');
$sell_phone = get_field('sell_phone','option');
$warranty_mail = get_field('warranty_mail','option');
$pr_mail = get_field('pr_mail','option');
$hire_tg = get_field('hire_tg','option');
?>

<div class="main main--contacts">
    <img class="circle1" src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/decor1.svg"
        alt=""><img class="circle2"
        src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/decor2.svg" alt=""><img
        class="decor1" src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/sosi 1.svg"
        alt="">
    <div class="container-bordering">
        <div class="main-header"><?php echo get_the_title();?></div>
        <div class="support-section">
            <div class="support-section__header">Служба поддержки</div>
            <div class="support-section__par"> Мы на официальной страже галактики Спутника <br><span
                    class="support-section__par--bold">с 8:00 до 22:00 по МСК ежедневно</span>, и в выходные, и в
                праздники. <br>Мы любим свою работу, поэтому вы получаете наши сообщения даже вне рабочего времени.
            </div>
            <div class="support-section__par"> <span class="support-section__par--bold">Написать нам</span> можно
                прямо из приложения. Если у вас нет такой возможности, то всегда можно обратиться с сайта через окно
                чата в правом нижнем углу или написать на почту <a class="support-section__par--link"
                    href="mailto:<?=$help_mail?>"><?=$help_mail?></a>.</div>
        </div>
        <div class="questions-section">
            <div class="questions-section__card">
                <div class="questions-section__header"> Приобрести оборудование<br>или задать вопрос про услуги
                </div>
                <div class="questions-section__link"><a href="tel:<?=$sell_phone?>"><?=$sell_phone?></a></div>
                <div class="questions-section__link"> <img
                        src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/tg-logo.svg"
                        alt=""><a href="https://t.me/<?=$sell_tg?>"><?=$sell_tg?></a></div>
                <div class="questions-section__link"> <a href="mailto:<?=$sell_mail?>"><?=$sell_mail?>
                    </a></div>
            </div>
            <div class="questions-section__card">
                <div class="questions-section__header"> Обратиться насчет гарантии<br>на имеющееся оборудование
                </div>
                <div class="questions-section__link"><a href="mailto:<?=$warranty_mail?>"><?=$warranty_mail?>
                    </a></div>
            </div>
            <div class="questions-section__card">
                <div class="questions-section__header"> Для СМИ и PR-служб,<br>а также по вопросам маркетинга</div>
                <div class="questions-section__subheader"> Даём комментарии и пишем статьи. <br>Пригласите нас в
                    качестве спикера</div>
                <div class="questions-section__link"><a href="mailto:<?=$pr_mail?>"><?=$pr_mail?></a>
                </div>
            </div>
            <div class="questions-section__card">
                <div class="questions-section__header">Для соискателей</div>
                <div class="questions-section__subheader"> Мы всегда ищем амбициозных<br>и сильных профессионалов.
                    <br>Присылайте резюме
                </div>
                <div class="questions-section__link"> <img
                        src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/tg-logo.svg"
                        alt=""><a href="https://t.me/<?=$hire_tg?>"><?=$hire_tg?></a></div>
            </div>
        </div>
        <div class="info-section">
            <div class="info-section__header">Реквизиты</div>
            <div class="info-section__subheader">Общество с ограниченной ответственностью «Спутник»</div>
            <div class="info-section__subheader">Юридический адрес:</div>
            <div class="info-section__text">121205, г .Москва, тер. Инновационного центра Сколково, ул. Нобеля, д.
                7, эт/ч.пом 3/51</div>
            <div class="info-section__subheader">Почтовый адрес:</div>
            <div class="info-section__text">421001, Республика Татарстан, г. Казань, а/я 46</div>
            <div class="info-section__row">
                <div class="info-section__subheader">Электронная почта:</div>
                <a class="info-section__text" href="mailto:<?=$sell_mail?>"><?=$sell_mail?></a>
            </div>
            <div class="info-section__row">
                <div class="info-section__subheader">ИНН:</div>
                <div class="info-section__text">7731323200</div>
            </div>
            <div class="info-section__row">
                <div class="info-section__subheader">КПП: </div>
                <div class="info-section__text">773101001</div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();