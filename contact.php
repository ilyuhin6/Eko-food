<?php
$page_title = 'Контакты';
$page_header_bg = 'header-page-contact';
include_once('./template-php/navbar.php');
?>

<?php
include_once('./template-php/header-page.php');
?>
<?php if (isset($_GET['error'])) : ?>
  <div class="error"><?= htmlspecialchars($_GET['error']) ?></div>
<?php endif; ?>
<style>
  .address-ofice {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 20px;
  }

  .address-text {
    margin-bottom: 20px;
  }

  .address-ofice-title {
    font-size: 18px;
    font-weight: 600;
    color: #525C60;
  }

  .form-row {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
  }

  .form-group {
    flex: 1;
  }

  label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
  }

  input[type="text"],
  input[type="email"],
  textarea,
  select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
  }

  textarea {
    height: 150px;
    resize: vertical;
  }

  button[type="submit"] {
    background: #0088cc;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  }

  button[type="submit"]:hover {
    background: #006699;
  }

  /* Стили модального окна */
  .modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
    justify-content: center;
    align-items: center;
  }

  .modal-content {
    background-color: white;
    padding: 30px;
    border-radius: 8px;
    max-width: 400px;
    width: 90%;
    text-align: center;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    animation: modalFadeIn 0.3s ease-out;
  }

  @keyframes modalFadeIn {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .modal h2 {
    color: #4CAF50;
    margin-top: 0;
  }

  .modal p {
    margin-bottom: 25px;
    color: #555;
  }

  .modal-close {
    background: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  }

  .modal-close:hover {
    background: #45a049;
  }
</style>
<section class="section section-contact">
  <div class="container">
    <div class="page-about-wrapper">
      <img src="./img/contact/Image.jpg" alt="о нас" class="page-about-img" width="880" height="690"">
      <div class=" page-about-content">
      <p class="about-descr">
        Мы с удовольствием поговорим о том, как мы можем работать вместе.
      </p>
      <p class="about-text">
        Simply dummy text of the printing and typesetting industry. Lorem had ceased to
        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.
      </p>

      <div class="page-aboute-descr-wrapper" style="display: flex; justify-content: space-between;">
        <div class="about-descr-wrapper">
          <img src="./img/contact/mail.svg" alt="продукция" width="89" height="89" class="about-descr-image">
          <div class="about-descr-content">
            <h3 class="about-descr-content-tilte">Cообщение</h3>
            <a href="mailto:support@belalea.by" class="about-text">
              support@belalea.by
            </a>
          </div>
        </div>

        <div class="about-descr-wrapper">
          <img src="./img/contact/phone.svg" alt="продукция" width="89" height="89" class="about-descr-image">
          <div class="about-descr-content">
            <h3 class="about-descr-content-tilte">Звонок</h3>
            <a href="tel:875297895" class="about-text">
              +375 (29) 789 789 5
            </a>
          </div>
        </div>
      </div>


      <div class="footer-social-company-wrapper">
        <div class="footer-social-icons">
          <img src="./img/social/1.svg" alt="insta" class="footer-social-icon" width="60" height="60">
          <img src="./img/social/2.svg" alt="fb" class="footer-social-icon" width="60" height="60">
          <img src="./img/social/3.svg" alt="telegramm" class="footer-social-icon" width="60" height="60">
          <img src="./img/social/4.svg" alt="vk" class="footer-social-icon" width="60" height="60">
        </div>
      </div>


    </div>
  </div>
  </div>
</section>



<section class="section section-address">
  <div class="container-contact">
    <div class="address-box-bg">
      <div class="address-box-wrapper">
        <div class="address-box">
          <h2 class="address-title">Где мы?</h2>
          <p class="address-remark">Наш адресс</p>
          <p class="address-text about-text">Мы находимся в самом экологически чистом районе Беларуси.</p>

          <div class="address-wrapper">
            <div class="address-ofice">
              <img src="./img/contact/Icon.svg" alt="офис" width="50" height="50">
              <div class="address-ofice-text">
                <span class="address-ofice-title">Офис</span>
                <br>
                <span class="address-ofice-text about-text">г.Клецк, ул. Аветисова</span>
              </div>
            </div>
          </div>

          <div class="address-wrapper">
            <div class="address-ofice">
              <img src="./img/contact/Icon.svg" alt="производство" width="50" height="50">
              <div class="address-ofice-text">
                <span class="address-ofice-title">Производство</span>
                <br>
                <span class="address-ofice-text about-text">г.Клецк, ул. Нагдаляна</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


<section class="section section-cta-prtners">
  <div class="container">
    <form action="./includes/telegram.php" method="post" id="myForm">
      <!-- Первая строка: Имя и Email -->
      <div class="form-row">
        <div class="form-group">
          <label for="name">Ваше имя*</label>
          <input type="text" id="name" name="name" required placeholder="Иван Иванов">
        </div>
        <div class="form-group">
          <label for="email">Ваш email*</label>
          <input type="email" id="email" name="email" required placeholder="example@mail.com">
        </div>
      </div>

      <!-- Вторая строка: Компания и Тема -->
      <div class="form-row">
        <div class="form-group">
          <label for="company">Компания</label>
          <input type="text" id="company" name="company" placeholder="Название компании">
        </div>
        <div class="form-group">
          <label for="topic">Тема обращения*</label>
          <select id="topic" name="topic" required>
            <option value="" disabled selected>Выберите тему</option>
            <option value="support">Техническая поддержка</option>
            <option value="sales">Вопрос по продажам</option>
            <option value="cooperation">Сотрудничество</option>
            <option value="feedback">Обратная связь</option>
          </select>
        </div>
      </div>

      <!-- Сообщение (на всю ширину) -->
      <div class="form-group">
        <label for="message">Сообщение*</label>
        <textarea id="message" name="message" required placeholder="Опишите ваш вопрос или предложение..."></textarea>
      </div>

      <!-- Кнопка -->
      <button type="submit">Отправить</button>
    </form>

    <!-- Модальное окно -->
    <div id="myModal" class="modal">
      <div class="modal-content">
        <h2>✅ Спасибо!</h2>
        <p>Ваше сообщение успешно отправлено. Мы свяжемся с вами в ближайшее время.</p>
        <button class="modal-close">Закрыть</button>
      </div>
    </div>

    <script>
      document.getElementById('myForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const form = this;

        fetch(form.action, {
            method: 'POST',
            body: new FormData(form)
          })
          .then(response => {
            if (response.ok) {
              document.getElementById('myModal').style.display = 'flex';
              form.reset(); // Очищаем форму после успешной отправки
            } else {
              throw new Error('Ошибка при отправке формы');
            }
          })
          .catch(error => {
            alert('Произошла ошибка: ' + error.message);
          });
      });

      // Закрытие модального окна
      document.querySelector('.modal-close').addEventListener('click', function() {
        document.getElementById('myModal').style.display = 'none';
      });

      // Закрытие при клике вне модального окна
      window.addEventListener('click', function(event) {
        if (event.target === document.getElementById('myModal')) {
          document.getElementById('myModal').style.display = 'none';
        }
      });
    </script>
  </div>
</section>



<?php
include_once('./template-php/footer.php');
?>