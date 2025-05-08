<?php
$page_title = 'Мука';
$page_header_bg = 'header-page-shop-single';
include_once('./template-php/navbar.php');
?>



<?php
include_once('./template-php/header-page.php');
?>


<style>
  .section-product-more {
    margin-top: 8.25rem;
  }

  .product-shop-wrapper {
    display: flex;
    justify-content: space-between;
    gap: 20;
  }

  .product-shop-descr {
    max-width: 40.625rem;
  }

  .block-link-product-shop {
    margin-top: 3.875rem;
    color: #fff;
    font-size: 20px;
    font-weight: 600;
  }

  .link-product-shop {
    padding: 1.75rem 3.25rem;
  }

  .product-shop-slider {
    max-width: 50%;
  }

  .product-card-shop {
    background-color: #f9f8f8;
    padding: 2.5rem 1rem 2.5rem 1rem;
  }

  .mySwiper3 {
    margin-top: 1rem;
  }

  @media (max-width:1200px) {
    .product-shop-wrapper {
      flex-direction: column;
      align-items: center;
      gap: 20px;
    }

    .product-shop-slider {
      max-width: 100%;
    }

    .product-shop-descr {
      max-width: 80%;
    }
  }

  @media (max-width: 448px) {
    .link-product-shop {
      display: inline-block;
      margin-bottom: 10px;
    }

    .card-shop-pagination {
      width: 40px;
      height: 100%;
    }
  }
</style>

<section class="section section-product-shop" style="margin-top: 8.3125rem;">
  <div class="container">
    <div class="product-shop-wrapper">
      <div class="product-shop-slider">

        <!-- Swiper -->

        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
          <div class="swiper-wrapper">
            <div class="swiper-slide product-card-shop">
              <img src="./img/product/image2.jpg" />
            </div>
            <div class="swiper-slide product-card-shop">
              <img src="./img/product/image2.jpg" />
            </div>
            <div class="swiper-slide product-card-shop">
              <img src="./img/product/image2.jpg" />
            </div>
            <div class="swiper-slide product-card-shop">
              <img src="./img/product/image2.jpg" />
            </div>

          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div thumbsSlider="" class="swiper mySwiper3">
          <div class="swiper-wrapper">
            <div class="swiper-slide product-card-shop">
              <img src="./img/product/image2.jpg" width="107" height="132" class="card-shop-pagination" />
            </div>
            <div class="swiper-slide product-card-shop">
              <img src="./img/product/image2.jpg" width="107" height="132" class="card-shop-pagination" />
            </div>
            <div class="swiper-slide product-card-shop">
              <img src="./img/product/image2.jpg" width="107" height="132" class="card-shop-pagination" />
            </div>
            <div class="swiper-slide product-card-shop">
              <img src="./img/product/image2.jpg" width="107" height="132" class="card-shop-pagination" />
            </div>
          </div>
        </div>

      </div>
      <div class="product-shop-descr">
        <h2 class="reviews-remark">Мука Рисовая</h2>
        <p class="about-text">
          Simply dummy text of the printing and typesetting industry. Lorem had ceased to been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.
        </p>
        <p class="about-text">
          Simply dummy text of the printing and typesetting industry. Lorem had ceased to been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.
        </p>
        <div class="block-link-product-shop">
          <a href="" class="link-product-shop" style="background-color: #C01F93; color: #fff; margin-right: 20px;">Wildberries</a>
          <a href="" class="link-product-shop" style="background-color: #2714FF; color: #fff; border-radius: 15px; padding: 1.75rem 4.9375rem;">OZON</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-product-more">
  <div class="container">
    <h2 class="section-product-remark">Похожие продукты</h2>

    <div class="product-wrapper">
      <a href="../catalog-single.php" class="product-card-link">
        <div class="product-card">
          <span class="badge-product">Масла</span>
          <img src="./img/product/image1.jpg" alt="масло" width="292" height="361">
          <h3 class="card-product-title">Масло тыквенное, 250мл</h3>
        </div>
      </a>
      <a href="../catalog-single.php" class="product-card-link">
        <div class="product-card">
          <span class="badge-product">Масла</span>
          <img src="./img/product/image1.jpg" alt="масло" width="292" height="361">
          <h3 class="card-product-title">Масло тыквенное, 250мл</h3>
        </div>
      </a>
      <a href="../catalog-single.php" class="product-card-link">
        <div class="product-card">
          <span class="badge-product">Масла</span>
          <img src="./img/product/image1.jpg" alt="масло" width="292" height="361">
          <h3 class="card-product-title">Масло тыквенное, 250мл</h3>
        </div>
      </a>
      <a href="../catalog-single.php" class="product-card-link">
        <div class="product-card">
          <span class="badge-product">Масла</span>
          <img src="./img/product/image1.jpg" alt="масло" width="292" height="361">
          <h3 class="card-product-title">Масло тыквенное, 250мл</h3>
        </div>
      </a>
    </div>
  </div>

</section>




<?php
include_once('./template-php/footer.php');
?>