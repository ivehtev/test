"use strict";

var serviceSwiper = new Swiper('#serviceSwiper', {
  // Optional parameters
  direction: 'horizontal',
  centeredSlides: true,
  loop: true,
  speed: 400,
  spaceBetween: 32,
  effect: 'cards',
  slidesPerView: '3.01',
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  breakpoints: {
    1280: {
      slidesPerView: '2',
      centeredSlides: false,
    },
    850: {
      slidesPerView: '1',
      centeredSlides: false,
    }
  }
});

const updatedswiperImages = document.querySelectorAll(".swiper-preview");
let updatedimgLinkArray = new Array();
let updatedreturnValue = 0;
updatedswiperImages.forEach(slide => {
  let image = slide.querySelector('img');
  console.log(image);
  let imageSrc = image.src;
  var updatedreturnValue = `<img class="swiper-preview swiper-pagination-bullet" src=${imageSrc}>`;
  updatedimgLinkArray.push(updatedreturnValue);
  image.addEventListener('click', () => {
    let newImage = document.createElement("img");
    let newLayer = document.createElement("div");
    newLayer.classList.add("dark-layer");
    newLayer.classList.add("dark-layer-2");
    newImage.src = image.src;
    newImage.classList.add('zoomed-image');
    newLayer.addEventListener('click', () => {
      document.querySelector('.main').removeChild(newLayer);
    })
    newLayer.appendChild(newImage);
    document.querySelector('.main').appendChild(newLayer);

  })
})

var greetingStaffSwiper = new Swiper('#greetingStaffSwiper', {
  // Optional parameters
  direction: 'vertical',
  loop: true,
  speed: 400,
  spaceBetween: 32,
  effect: 'cards',
  slidesPerView: '1',
  swipeHandler: '.swiper-wrapper',
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next--staff-s',
    prevEl: '.swiper-button-prev--staff-s'
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    renderBullet: function (index) {
      return updatedimgLinkArray[index];
    },
  },
});
var staffSwiper = new Swiper('#staffSwiper', {
  // Optional parameters
  direction: 'horizontal',
  centeredSlides: true,
  loop: true,
  speed: 400,
  spaceBetween: 32,
  effect: 'cards',
  slidesPerView: '3.01',
  navigation: {
    nextEl: '.swiper-button-next--staff',
    prevEl: '.swiper-button-prev--staff'
  },
  breakpoints: {
    1280: {
      slidesPerView: '2',
    },
    850: {
      slidesPerView: '1',
    }
  }
});
var newsSwiper = new Swiper('#newsSwiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  speed: 400,
  spaceBetween: 29,
  effect: 'cards',
  slidesPerView: 'auto',
  // swipeHandler: '.swiper-wrapper',
  // pagination: {
  //     el: '.swiper-pagination',
  //     clickable: true
  // },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next--news',
    prevEl: '.swiper-button-prev--news'
  }
});
var faqBlocks = document.querySelectorAll('.faq-section__block');
faqBlocks.forEach(function (block) {
  block.addEventListener('click', function () {
    if (!block.classList.contains('faq-section__block--active')) {
      block.classList.add('faq-section__block--active');
    } else {
      block.classList.remove('faq-section__block--active');
    }
  });
});

const darkLayer = document.querySelector(".dark-layer");
const applyBtns = document.querySelectorAll(".modal-button");
const closeForm = document.getElementById("closeForm");

applyBtns.forEach(button => {
  button.addEventListener("click", () => {
    darkLayer.classList.toggle("js--hidden");
  });
});


closeForm.addEventListener("click", () => {
  darkLayer.classList.toggle("js--hidden");
});

window.onclick = function (event) {
  if (event.target == darkLayer || event.target == document.querySelector('dark-layer-2')) {
    darkLayer.classList.toggle("js--hidden");
  }
};

function modalNew() {
  setTimeout(relateSubmission, 2000)

}

function relateSubmission() {
  if (!document.querySelector('.wpcf7-form.invalid')) {
    document.querySelector('.apply-form').innerHTML = `
        <div class="form-header form-applied">Форма успешно отправлена</div>`;
    setTimeout(
      () => {
        location.reload();
      }, 1200)
  }

}

document.querySelector('.wpcf7-form').addEventListener('submit', modalNew);
let currentTime = new Date() / 1000;
if (!localStorage.getItem('popupShown')) {
  let currentTime = new Date() / 1000;
  localStorage.setItem('popupShown', currentTime);
}
if ((currentTime - localStorage.getItem('popupShown')) > 86400) {
  let popup = document.getElementById('popup');
  popup.classList.toggle('js--hidden');
  popup.addEventListener('click', () => {
    popup.classList.toggle('js--hidden');
    let newCurrentTime = new Date() / 1000;
    localStorage.setItem('popupShown', newCurrentTime);
  })
}

let inputCategory = document.querySelector('input[name="text-369"]');
inputCategory.readOnly = true;
let documentTitle = document.title;
documentTitle = documentTitle.replace(' - Ваш личный Спутник', '');
inputCategory.value = documentTitle;
if (document.getElementById('openPopup')) {
  let popupBtn = document.getElementById('openPopup');
  console.log(popupBtn);
  popupBtn.addEventListener('click', () => {
    let popup = document.getElementById('popup');
    popup.classList.toggle('js--hidden');
    popup.addEventListener('click', () => {
      popup.classList.toggle('js--hidden');
      let newCurrentTime = new Date() / 1000;
      localStorage.setItem('popupShown', newCurrentTime);
    })
  })
}


var string = `<div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 298.667px; margin-right: 32px;"> <img class="service-section__service-img" src="http://sputnik.dev-tmweb.ru/wp-content/uploads/2022/06/staff2.png" alt="">
<div class="service-section__service-name">Асгард</div>
        <div class="service-section__par">Бесплатный интернет для домофонной компании</div>
    <div class="service-section__par">Продвижение телеком компании в приложении жителя</div>
    <div class="service-section__par">Координация процессов от Спутника</div>
    
<div class="service-section__row">
    <div class="service-section__price">Бесплатно</div><a class="service-section__more" href="http://sputnik.dev-tmweb.ru/spt_service/%d1%81%d0%bf%d1%83%d1%82%d0%bd%d0%b8%d0%ba-%d0%be%d0%bd%d0%bb%d0%b0%d0%b9%d0%bd/">Подробнее</a>
</div>
</div>`;


var allLinks = document.querySelectorAll('a');
if (window.location.href.includes('bussiness')) {
  allLinks.forEach(link => {
    link.addEventListener('click', event => {
      var distanceBlock = window.pageYOffset + link.getBoundingClientRect().top - 500;
      console.log(distanceBlock);
      localStorage.setItem('offset', distanceBlock);
    })
  });
}

if (document.querySelector('.custom-breadcrumbs')) {
  var breadLink = document.querySelector('.custom-breadcrumbs').querySelector('a');
  breadLink.addEventListener('click', () => {
    localStorage.setItem('fromBread', "true");
  })
}


