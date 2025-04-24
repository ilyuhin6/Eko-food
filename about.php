<?php
$page_title = 'О нас';
$page_header_bg = 'header-page-about';
include_once('./template-php/navbar.php');
?>

<?php
include_once('./template-php/header-page.php');
?>


<section class="section-page-about">
  <div class="container">
    <div class="page-about-wrapper">
      <img src="./img/about/about-Image.png" alt="о нас" class="page-about-img" width="880" height="690" style="margin-left: -3.75rem;">
      <div class="page-about-content">
        <h2 class="about-title">О нас</h2>
        <p class="about-descr">
          Натуральне продукты - здоровое население
        </p>
        <p class="about-text">
          Работа с местными фермерами приносит производственным компаниям преимущество в виде
          высококачественного сырья, укрепляет местное сообщество, снижает экологический след и способствует
          устойчивости цепочки поставок, обеспечивая надежность и прозрачность.
        </p>

        <p class="about-text">
          Simply dummy text of the printing and typesetting industry. Lorem had ceased to been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.
        </p>

        <div class="page-aboute-descr-wrapper" style="display: flex; justify-content: space-between;">
          <div class="about-descr-wrapper">
            <img src="./img/about/Icon-harvest.svg" alt="продукция" width="56" height="56" class="about-descr-image">
            <div class="about-descr-content">
              <h3 class="about-descr-content-tilte">Современная <br> сельхоз. техника</h3>
            </div>
          </div>

          <div class="about-descr-wrapper">
            <img src="./img/about/Chemical-Plant.svg" alt="продукция" width="56" height="56" class="about-descr-image">
            <div class="about-descr-content">
              <h3 class="about-descr-content-tilte">Выращивание <br> без гормонов</h3>
            </div>
          </div>
        </div>
        <a href="./contact.php" class="link link-primary" style="margin-top: 3.3125rem;">Контакты<img src="./img/icon/Aerrow.svg" alt="стрелка" width="19" height="19" /> </a>
      </div>
    </div>
  </div>
</section>





<?php
include_once('./template-php/footer.php');
?>