<footer class="footer">
  <div class="container">
    <div class="footer-bg">
      <div class="footer-cta">
        <h2>Узнайте первыми о новых акциях!</h2>
        <form action="./subscribe.php" method="POST" class="form-cta">
          <input type="email" name="email" placeholder="Введите e-mail" required class="form-cta-input">
          <button type="submit" class="btn btn-cta">Подписаться</button>
        </form>
      </div>

      <!-- Подключим модальное окно -->
      <?php include './includes/modal.php'; ?>
    </div>


    <!-- START Footer menu -->
    <div class="footer-menu">
      <div class="footer-menu-wrapper">


        <!-- Общий контейнер для всех контактов -->
        <div class="footer-contacts">
          <h3 class="footer-menu-title">Contact Us</h3>
          <!-- Группа "Email" -->
          <div class="footer-contact-group">
            <h4 class="footer-contact-title">Email</h4>
            <a href="mailto:needhelp@Organia.com" class="footer-contact-link">needhelp@Organia.com</a>
          </div>

          <!-- Группа "Phone" -->
          <div class="footer-contact-group">
            <h4 class="footer-contact-title">Phone</h4>
            <a href="tel:666888888" class="footer-contact-link">666 888 888</a>
          </div>

          <!-- Группа "Address" -->
          <div class="footer-contact-group">
            <h4 class="footer-contact-title">Address</h4>
            <address class="footer-contact-link">88 road, borklyn street, USA</address>
          </div>
        </div>

        <!-- Контейнер социальных сетей -->
        <div class="footer-social-company">
          <div class="footer-social-company-wrapper">
            <img src="./img/Logo.svg" alt="логотип" class="logo-img" width="244" height="74">
            <p class="footer-social-company-text">Следите за новостями и акциями <br>
              в наших социальных сетях, подпишитесь!</p>
            <div class="footer-social-icons">
              <img src="./img/social/1.svg" alt="insta" class="footer-social-icon" width="60" height="60">
              <img src="./img/social/2.svg" alt="fb" class="footer-social-icon" width="60" height="60">
              <img src="./img/social/3.svg" alt="telegramm" class="footer-social-icon" width="60" height="60">
              <img src="./img/social/4.svg" alt="vk" class="footer-social-icon" width="60" height="60">
            </div>
          </div>
        </div>

        <div class="footer-partners-link">
          <h3 class="footer-menu-title">Partners</h3>
          <ul class="footer-partners-list">
            <li class="footer-partners-item">Style Guide</li>
            <li class="footer-partners-item">404 Not Found</li>
            <li class="footer-partners-item">Password Protected</li>
            <li class="footer-partners-item">Licences</li>

          </ul>
        </div>

      </div>
    </div>

  </div>

</footer>


<script src="./js/swiper-bundle.min.js"></script>
<script src="./js/main.js"></script>