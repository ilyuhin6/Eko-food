
const searchTrigger = document.getElementById('searchTrigger');
const searchInput = document.querySelector('.search-input');

searchTrigger.addEventListener('click', function() {
    searchInput.classList.toggle('active');
    
    if (searchInput.classList.contains('active')) {
        searchInput.focus();
    }
});

// Закрытие при клике вне области
document.addEventListener('click', function(e) {
    if (!e.target.closest('.search-container')) {
        searchInput.classList.remove('active');
    }
});

// Закрытие при нажатии ESC
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        searchInput.classList.remove('active');
    }
});

// После открытия инпута проверяем адаптивность
window.addEventListener('resize', () => {
  const searchInput = document.querySelector('.search-input');
  if(window.innerWidth < 768 && searchInput.classList.contains('active')) {
    searchInput.classList.remove('active');
  }
});


// Действия с контатктами
document.querySelector('.action-contact').addEventListener('click', function() {
  this.classList.toggle('active');
});



// Иницилизиурем слайдер на отзывы
var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});




// слайдер каталога product-shop
var swiper = new Swiper(".mySwiper3", {
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".mySwiper2", {
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
});