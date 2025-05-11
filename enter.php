<?php
$page_title = 'О нас';
$page_header_bg = 'header-page-about';
include_once('./template-php/navbar.php');
?>



<style>
  .enter-form-bg {
    /* background-color: #7eb693; */
    padding-top: 2rem;
    padding-bottom: 2rem;
    display: flex;
    justify-content: center;
  }

  .auth {
    position: relative;
    width: 850px;
    height: 550px;
    background: #fff;
    margin: 20px;
    border-radius: 30px;
    box-shadow: 0 0 30px rgba(0, 0, 0, .2);
    overflow: hidden;
  }

  .auth__title {
    font-size: 36px;
    margin: -10px 0;
    color: #274c5b;
  }

  .auth__text {
    font-size: 14.5px;
    margin: 15px 0;
  }

  .auth__form {
    width: 100%;
  }

  .auth__form-container {
    position: absolute;
    right: 0;
    width: 50%;
    height: 100%;
    background: #fff;
    display: flex;
    align-items: center;
    color: #333;
    text-align: center;
    padding: 40px;
    z-index: 1;
    transition: .6s ease-in-out 1.2s, visibility 0s 1s;
  }

  .auth--active .auth__form-container {
    right: 50%;
  }

  .auth__form-container--register {
    visibility: hidden;
  }

  .auth--active .auth__form-container--register {
    visibility: visible;
  }

  .auth__input-group {
    position: relative;
    margin: 30px 0;
  }

  .auth__input {
    width: 100%;
    padding: 13px 50px 13px 20px;
    background: #eee;
    border-radius: 8px;
    border: none;
    outline: none;
    font-size: 16px;
    color: #333;
    font-weight: 500;
  }

  .auth__input::placeholder {
    color: #888;
    font-weight: 400;
  }

  .auth__input-icon {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
  }

  .auth__forgot-link {
    margin: -15px 0 15px;
  }

  .auth__forgot-link a {
    font-size: 14.5px;
    color: #333;
  }

  .auth__btn {
    width: 100%;
    height: 48px;
    background: #274c5b;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    border: none;
    cursor: pointer;
    font-size: 16px;
    color: #fff;
    font-weight: 600;
  }

  .auth__social {
    display: flex;
    justify-content: center;
  }

  .auth__social-link {
    display: inline-flex;
    padding: 10px;
    border: 2px solid #ccc;
    border-radius: 8px;
    font-size: 24px;
    color: #333;
    margin: 0 8px;
  }

  .auth__toggle-container {
    position: absolute;
    width: 100%;
    height: 100%;
  }

  .auth__toggle-container::before {
    content: '';
    position: absolute;
    left: -250%;
    width: 300%;
    height: 100%;
    background: #7eb693;
    border-radius: 150px;
    z-index: 2;
    transition: 1.8s ease-in-out;
  }

  .auth--active .auth__toggle-container::before {
    left: 50%;
  }

  .auth__toggle-panel {
    position: absolute;
    width: 50%;
    height: 100%;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    z-index: 2;
    transition: .6s ease-in-out;
  }

  .auth__toggle-panel--left {
    left: 0;
    transition-delay: 1.2s;
  }

  .auth--active .auth__toggle-panel--left {
    left: -50%;
    transition-delay: .6s;
  }

  .auth__toggle-panel--right {
    right: -50%;
    transition-delay: .6s;
  }

  .auth--active .auth__toggle-panel--right {
    right: 0;
    transition-delay: 1.2s;
  }

  .auth__toggle-text {
    margin-bottom: 20px;
  }

  .auth__toggle-btn {
    width: 160px;
    height: 46px;
    background: transparent;
    border: 2px solid #fff;
    box-shadow: none;
  }

  @media screen and (max-width: 650px) {
    .auth {
      height: calc(100vh - 40px);
    }

    .auth__form-container {
      bottom: 0;
      width: 100%;
      height: 70%;
    }

    .auth--active .auth__form-container {
      right: 0;
      bottom: 30%;
    }

    .auth__toggle-container::before {
      left: 0;
      top: -270%;
      width: 100%;
      height: 300%;
      border-radius: 20vw;
    }

    .auth--active .auth__toggle-container::before {
      left: 0;
      top: 70%;
    }

    .auth--active .auth__toggle-panel--left {
      left: 0;
      top: -30%;
    }

    .auth__toggle-panel {
      width: 100%;
      height: 30%;
    }

    .auth__toggle-panel--left {
      top: 0;
    }

    .auth__toggle-panel--right {
      right: 0;
      bottom: -30%;
    }

    .auth--active .auth__toggle-panel--right {
      bottom: 0;
    }
  }

  @media screen and (max-width: 400px) {
    .auth__form-container {
      padding: 20px;
    }

    .auth__toggle-title {
      font-size: 30px;
    }
  }
</style>


<section class="section section-enter-form">
  <div class="container">
    <div class="enter-form-bg">
      <div class="auth">
        <div class="auth__form-container auth__form-container--login">
          <form class="auth__form" action="#">
            <h1 class="auth__title">Login</h1>
            <div class="auth__input-group">
              <input class="auth__input" type="text" placeholder="Username" required>
              <i class="auth__input-icon bx bxs-user"></i>
            </div>
            <div class="auth__input-group">
              <input class="auth__input" type="password" placeholder="Password" required>
              <i class="auth__input-icon bx bxs-lock-alt"></i>
            </div>
            <div class="auth__forgot-link">
              <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="auth__btn">Login</button>
            <p class="auth__text">or login with social platforms</p>
            <div class="auth__social">
              <a class="auth__social-link" href="#"><i class="bx bxl-google"></i></a>
              <a class="auth__social-link" href="#"><i class="bx bxl-facebook"></i></a>
              <a class="auth__social-link" href="#"><i class="bx bxl-github"></i></a>
              <a class="auth__social-link" href="#"><i class="bx bxl-linkedin"></i></a>
            </div>
          </form>
        </div>

        <div class="auth__form-container auth__form-container--register">
          <form class="auth__form" action="#">
            <h1 class="auth__title">Registration</h1>
            <div class="auth__input-group">
              <input class="auth__input" type="text" placeholder="Username" required>
              <i class="auth__input-icon bx bxs-user"></i>
            </div>
            <div class="auth__input-group">
              <input class="auth__input" type="email" placeholder="Email" required>
              <i class="auth__input-icon bx bxs-envelope"></i>
            </div>
            <div class="auth__input-group">
              <input class="auth__input" type="password" placeholder="Password" required>
              <i class="auth__input-icon bx bxs-lock-alt"></i>
            </div>
            <button type="submit" class="auth__btn">Register</button>
            <p class="auth__text">or register with social platforms</p>
            <div class="auth__social">
              <a class="auth__social-link" href="#"><i class="bx bxl-google"></i></a>
              <a class="auth__social-link" href="#"><i class="bx bxl-facebook"></i></a>
              <a class="auth__social-link" href="#"><i class="bx bxl-github"></i></a>
              <a class="auth__social-link" href="#"><i class="bx bxl-linkedin"></i></a>
            </div>
          </form>
        </div>

        <div class="auth__toggle-container">
          <div class="auth__toggle-panel auth__toggle-panel--left">
            <h1 class="auth__toggle-title">Hello, Welcome!</h1>
            <p class="auth__toggle-text">Don't have an account?</p>
            <button class="auth__btn auth__toggle-btn auth__register-btn">Register</button>
          </div>

          <div class="auth__toggle-panel auth__toggle-panel--right">
            <h1 class="auth__toggle-title">Welcome Back!</h1>
            <p class="auth__toggle-text">Already have an account?</p>
            <button class="auth__btn auth__toggle-btn auth__login-btn">Login</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  const authContainer = document.querySelector('.auth');
  const registerBtn = document.querySelector('.auth__register-btn');
  const loginBtn = document.querySelector('.auth__login-btn');

  registerBtn.addEventListener('click', () => {
    authContainer.classList.add('auth--active');
  })

  loginBtn.addEventListener('click', () => {
    authContainer.classList.remove('auth--active');
  })
</script>

<?php
include_once('./template-php/footer.php');
?>