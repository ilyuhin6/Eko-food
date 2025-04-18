
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




var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});