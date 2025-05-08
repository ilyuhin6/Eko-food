<?php
$page_title = 'Новости';
$page_header_bg = 'header-page-blog';
include_once('./template-php/navbar.php');
?>

<?php
include_once('./template-php/header-page.php');
?>
<?php if (isset($_GET['error'])) : ?>
  <div class="error"><?= htmlspecialchars($_GET['error']) ?></div>
<?php endif; ?>

<style>
  .blog-post-content {
    margin-bottom: 3.75rem;
  }
</style>

<section class="section section-blog">
  <div class="container">
    <!-- <div class="blog-action-wrapper">
            <div class="blog-action">
                <h2 class="section-blog-title">Новости</h2>
                <p class="section-blog-title-remark">Новости об органических продуктах и многом другом</p>
            </div>
            <a href="" class="link section-blog-link">Больше новостей <img src="./img/icon/Aerrow.svg" alt="иконка" width="19" height="19"></a>
        </div> -->
    <div class="blog-content">
      <div class="blog-post-wrapper">
        <div class="blog-post-content">
          <img src="./img/blog/Image.png" alt="пост о витаминах" class="blog-post-content-image">
          <span class="date-post">25 <br> Авг.</span>
          <div class="blog-PostPreview">
            <h3 class="blog-post-title">Витаминная заправка для летнего салата</h3>
            <p class="blog-post-text">Simply dummy text of the printing and typesetting industry. Lorem
              Ipsum</p>
            <a href="#" class="link link-secondary">Подробнее <img src="./img/icon/Aerrow.svg" alt="стрелка" width="19" height="19"></a>
          </div>
        </div>

        <div class="blog-post-content">
          <img src="./img/blog/Image2.png" alt="пост о витаминах" class="blog-post-content-image">
          <span class="date-post">25 <br> Авг.</span>
          <div class="blog-PostPreview">
            <h3 class="blog-post-title">Каих витаминов не хватает осенью?</h3>
            <p class="blog-post-text">Simply dummy text of the printing and typesetting industry. Lorem
              Ipsum</p>
            <a href="#" class="link link-secondary">Подробнее <img src="./img/icon/Aerrow.svg" alt="стрелка" width="19" height="19"></a>
          </div>
        </div>

        <div class="blog-post-content">
          <img src="./img/blog/Image3.jpg" alt="пост о витаминах" class="blog-post-content-image">
          <span class="date-post">25 <br> Авг.</span>
          <div class="blog-PostPreview">
            <h3 class="blog-post-title">Витаминная заправка для летнего салата</h3>
            <p class="blog-post-text">Simply dummy text of the printing and typesetting industry. Lorem
              Ipsum</p>
            <a href="#" class="link link-secondary">Подробнее <img src="./img/icon/Aerrow.svg" alt="стрелка" width="19" height="19"></a>
          </div>
        </div>

        <div class="blog-post-content">
          <img src="./img/blog/Image4.jpg" alt="пост о витаминах" class="blog-post-content-image">
          <span class="date-post">25 <br> Авг.</span>
          <div class="blog-PostPreview">
            <h3 class="blog-post-title">Витаминная заправка для летнего салата</h3>
            <p class="blog-post-text">Simply dummy text of the printing and typesetting industry. Lorem
              Ipsum</p>
            <a href="#" class="link link-secondary">Подробнее <img src="./img/icon/Aerrow.svg" alt="стрелка" width="19" height="19"></a>
          </div>
        </div>

        <div class="blog-post-content">
          <img src="./img/blog/Image5.jpg" alt="пост о витаминах" class="blog-post-content-image">
          <span class="date-post">25 <br> Авг.</span>
          <div class="blog-PostPreview">
            <h3 class="blog-post-title">Витаминная заправка для летнего салата</h3>
            <p class="blog-post-text">Simply dummy text of the printing and typesetting industry. Lorem
              Ipsum</p>
            <a href="#" class="link link-secondary">Подробнее <img src="./img/icon/Aerrow.svg" alt="стрелка" width="19" height="19"></a>
          </div>
        </div>

        <div class="blog-post-content">
          <img src="./img/blog/Image6.jpg" alt="пост о витаминах" class="blog-post-content-image">
          <span class="date-post">25 <br> Авг.</span>
          <div class="blog-PostPreview">
            <h3 class="blog-post-title">Витаминная заправка для летнего салата</h3>
            <p class="blog-post-text">Simply dummy text of the printing and typesetting industry. Lorem
              Ipsum</p>
            <a href="#" class="link link-secondary">Подробнее <img src="./img/icon/Aerrow.svg" alt="стрелка" width="19" height="19"></a>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>





<?php
include_once('./template-php/footer.php');
?>