<?php 
$social_tg = get_field('social_tg','option');
$social_yt = get_field('social_yt','option');
$social_vk = get_field('social_vk','option');
$social_li = get_field('social_li','option');
?>

<div class="footer">
    <div class="container-bordering"> <a class="footer--publisher" href="#">
            <div class="skolk-div"> </div>
        </a>
        <div class="footer--navigation"> <a class="navigation-link" href="#"> </a>
            <a class="navigation-link" href="https://t.me/<?=$social_tg?>" id="tg-logo">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 0C5.37253 0 0 5.37253 0 12C0 18.6275 5.37253 24 12 24C18.6275 24 24 18.6275 24 12C24 5.37253 18.6275 0 12 0Z"
                        fill="#6E6D7A" />
                    <path
                        d="M17.8408 6.90302L15.6974 17.7095C15.6974 17.7095 15.3977 18.4589 14.5733 18.0992L9.62728 14.3072L7.82878 13.438L4.80122 12.4187C4.80122 12.4187 4.33659 12.2539 4.29159 11.8942C4.24659 11.5345 4.81622 11.3396 4.81622 11.3396L16.8515 6.6184C16.8515 6.6184 17.8407 6.18377 17.8407 6.90321"
                        fill="white" class="no-fill" />
                    <path
                        d="M9.24656 17.5887C9.24656 17.5887 9.10219 17.5752 8.92219 17.0056C8.74247 16.436 7.82812 13.4385 7.82812 13.4385L15.0973 8.82223C15.0973 8.82223 15.517 8.56742 15.502 8.82223C15.502 8.82223 15.5769 8.86723 15.352 9.07705C15.1273 9.28695 9.64172 14.2179 9.64172 14.2179"
                        fill="#6E6D7A" />
                    <path
                        d="M11.5226 15.7615L9.56634 17.5452C9.56634 17.5452 9.41334 17.6613 9.24609 17.5885L9.62072 14.2754"
                        fill="#6E6D7A" />
                </svg>

            </a>
            <a class="navigation-link" href="https://www.youtube.com/<?=$social_yt?>" id="yt-logo">
                <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_401_1193)">
                        <path
                            d="M23.47 2.63203C23.3323 2.1233 23.0638 1.65951 22.6911 1.28684C22.3185 0.914168 21.8547 0.64562 21.346 0.507938C19.4835 0 11.9878 0 11.9878 0C11.9878 0 4.49177 0.015375 2.62933 0.523313C2.1206 0.661003 1.65681 0.929565 1.28415 1.30225C0.911497 1.67494 0.642976 2.13875 0.505331 2.6475C-0.0580132 5.95669 -0.276545 10.9991 0.520799 14.1759C0.658459 14.6847 0.926986 15.1485 1.29964 15.5211C1.6723 15.8938 2.13608 16.1623 2.6448 16.3C4.50724 16.808 12.0031 16.808 12.0031 16.808C12.0031 16.808 19.4989 16.808 21.3612 16.3C21.87 16.1624 22.3338 15.8938 22.7065 15.5212C23.0791 15.1485 23.3477 14.6847 23.4853 14.1759C24.0795 10.8621 24.2626 5.82281 23.47 2.63213V2.63203Z"
                            fill="#6E6D7A" />
                        <path d="M9.60156 12.0061L15.8198 8.40442L9.60156 4.80273V12.0061Z" fill="white"
                            class="no-fill" />
                    </g>
                    <defs>
                        <clipPath id="clip0_401_1193">
                            <rect width="24" height="16.875" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </a>
            <a class="navigation-link" href="https://vk.com/<?=$social_vk?>" id="vk-logo">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_401_1197)">
                        <path
                            d="M15.684 0H8.31675C1.59375 0 0 1.59375 0 8.31675V15.684C0 22.407 1.59375 24.0007 8.31675 24.0007H15.684C22.407 24.0007 24.0007 22.407 24.0007 15.684V8.31675C24.0007 1.59375 22.3912 0 15.684 0ZM19.3755 17.121H17.6332C16.9732 17.121 16.77 16.5975 15.5827 15.3945C14.5515 14.3947 14.0947 14.262 13.8405 14.262C13.4812 14.262 13.3792 14.3633 13.3792 14.856V16.4303C13.3792 16.8525 13.2465 17.106 12.129 17.106C10.281 17.106 8.2305 15.9885 6.79275 13.9065C4.6245 10.8555 4.03125 8.57025 4.03125 8.09775C4.03125 7.8435 4.1325 7.60575 4.62075 7.60575H6.36675C6.8085 7.60575 6.9765 7.809 7.14825 8.2815C8.0115 10.7738 9.44925 12.957 10.0425 12.957C10.2615 12.957 10.3628 12.8558 10.3628 12.297V9.723C10.296 8.53575 9.67125 8.43375 9.67125 8.01225C9.67125 7.809 9.83925 7.60575 10.1085 7.60575H12.8542C13.2255 7.60575 13.362 7.809 13.362 8.24625V11.7188C13.362 12.0938 13.53 12.2265 13.6312 12.2265C13.8502 12.2265 14.0377 12.0938 14.4435 11.6873C15.6975 10.281 16.596 8.11275 16.596 8.11275C16.713 7.8585 16.9163 7.62075 17.358 7.62075H19.104C19.6275 7.62075 19.7445 7.89 19.6275 8.265C19.4085 9.2805 17.2717 12.2963 17.2717 12.2963C17.088 12.6007 17.0175 12.7335 17.2717 13.0732C17.4592 13.3275 18.069 13.8548 18.4748 14.3273C19.221 15.1748 19.7948 15.8858 19.9478 16.3778C20.1195 16.866 19.866 17.1203 19.3732 17.1203L19.3755 17.121Z"
                            fill="#6E6D7A" />
                    </g>
                    <defs>
                        <clipPath id="clip0_401_1197">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

            </a>
            <a class="navigation-link" href="https://www.linkedin.com/<?=$social_li?>" id="linkedin-logo">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_401_1200)">
                        <path
                            d="M20.4491 20.4495H16.8931V14.8804C16.8931 13.5525 16.8694 11.8429 15.0436 11.8429C13.1915 11.8429 12.9081 13.2899 12.9081 14.7838V20.4491H9.35213V8.99696H12.7658V10.562H12.8137C13.1553 9.97787 13.649 9.49732 14.2421 9.17154C14.8353 8.84576 15.5057 8.68697 16.1819 8.71206C19.7861 8.71206 20.4506 11.0828 20.4506 14.167L20.4491 20.4495ZM5.33963 7.43162C4.19991 7.43181 3.27581 6.508 3.27563 5.36828C3.27544 4.22856 4.19916 3.30447 5.33888 3.30428C6.4786 3.304 7.40269 4.22781 7.40288 5.36753C7.40298 5.91484 7.18566 6.43978 6.79873 6.82687C6.41179 7.21396 5.88694 7.4315 5.33963 7.43162ZM7.11769 20.4496H3.55791V8.99696H7.1176V20.4495L7.11769 20.4496ZM22.2219 0.00174674H1.77103C0.804469 -0.00912826 0.0118125 0.765153 0 1.73172V22.2679C0.0114375 23.235 0.804 24.01 1.77094 23.9999H22.2219C23.1909 24.0119 23.9866 23.2368 24 22.2679V1.73012C23.9862 0.761684 23.1905 -0.0125033 22.2219 0.00015299"
                            fill="#6E6D7A" />
                    </g>
                    <defs>
                        <clipPath id="clip0_401_1200">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

            </a>
        </div>
    </div>
</div>
<div class="qr-overlay row">
    <div class="qr column">
        <a class="qr__close" href="#">+</a>
        <span class="qr__txt">Наведите камеру телефона и скачайте</span>
        <img class="qr__code" src="https://sputnik.systems/wp-content/uploads/2022/01/qr-code-1.png" alt="QR код">
    </div>
</div>
<div class="dark-layer js--hidden">
    <div class="form apply-form" id="applyForm">
        <div class="form-close" id="closeForm"><span class="cross-one"> </span><span class="cross-two"></span>
        </div>
        <div class="form-header">Оформление заявки</div>
        <?php echo do_shortcode('[contact-form-7 id="363" title="Контактная форма 1"]') ?>
    </div>
</div>
<?php get_template_part('templates/popup');?>
<?php wp_footer(); ?>

<script>
      if (localStorage.getItem('fromBread')) {
        var offset = localStorage.getItem('offset');
        console.log(offset);
        window.scrollTo(0, offset);
        localStorage.removeItem('offset');
        localStorage.removeItem('fromBread');
	}
  	</script>
<script>
if (window.location.href.includes('spt_staff')) {
  let staffSlider = document.getElementById('staffSwiper');
  let staffSlides = staffSlider.querySelectorAll('.swiper-slide');
  console.log(staffSlides);
  staffSlides.forEach(slide => {
      console.log(slide);
      let pageHeader = document.querySelector('.bussines-header--blue').textContent;
      let slideName = slide.querySelector('.staff-section__staff-name').textContent;
      if (pageHeader == slideName) {
        let staffWrapper = staffSlider.querySelector('.swiper-wrapper');
        staffWrapper.removeChild(slide);
      }
  })
}
if(window.location.href.includes('service/partners')) {
   window.location.href = "http://sputnik.dev-tmweb.ru//partners/";
}
</script>
<script>
// We pre-filled your app ID in the widget URL: 'https://widget.intercom.io/widget/cao5rcj3'
(function() {
    var w = window;
    var ic = w.Intercom;
    if (typeof ic === "function") {
        ic('reattach_activator');
        ic('update', w.intercomSettings);
    } else {
        var d = document;
        var i = function() {
            i.c(arguments);
        };
        i.q = [];
        i.c = function(args) {
            i.q.push(args);
        };
        w.Intercom = i;
        var l = function() {
            var s = d.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = 'https://widget.intercom.io/widget/cao5rcj3';
            var x = d.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        };
        if (document.readyState === 'complete') {
            l();
        } else if (w.attachEvent) {
            w.attachEvent('onload', l);
        } else {
            w.addEventListener('load', l, false);
        }
    }
})();
</script>
<script src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/js/jquery.min.js"> </script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<script src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/js/plugins.min.js'?>"> </script>
<script src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/js/mainFelix.js'?>"> </script>

</body>

</html>