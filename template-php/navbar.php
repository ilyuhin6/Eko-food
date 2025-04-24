<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&family=Yellowtail&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/swiper-bundle.css">
  <title>Belalea - Экологические продукты</title>
</head>

<!-- START navbar -->
<nav class="navbar">
  <div class="navbar-wrapper">
    <a href="/"><img src="./img/Logo.svg" alt="логотип" class="logo-img" width="244" height="74"></a>
    <ul class="navbar-list">
      <li class="item-navbar">
        <a href="../about.php" class="link-navbar">О нас </a>
      </li>
      <li class="item-navbar">
        <a href="#" class="link-navbar">Каталог</a>
      </li>
      <li class="item-navbar">
        <a href="#" class="link-navbar">Диллерам</a>
      </li>
      <li class="item-navbar">
        <a href="#" class="link-navbar">Новости</a>
      </li>
      <li class="item-navbar">
        <a href="#" class="link-navbar">Вход</a>
      </li>
    </ul>
    <div class="navbar-actions">
      <!-- <img src="./img/icon/Search_Icon.svg" alt="поиск" class="action-search" width="56" height="56">
            <span class="action-contact">Контакты</span> -->
      <div class="search-container">
        <input type="text" class="search-input" placeholder="Поиск..." aria-label="Поле поиска">
        <img src="./img/icon/Search_Icon.svg" alt="Поиск" class="action-search" width="56" height="56" id="searchTrigger">
      </div>
      <span class="action-contact" data-phone="+7 (999) 123-45-67">
        <span class="contact-text">Контакты</span>
      </span>
    </div>
  </div>
</nav>