<?php
$page_title = 'Каталог';
$page_header_bg = 'header-page-shop';
include_once('./template-php/navbar.php');
?>

<?php
include_once('./template-php/header-page.php');
?>
<?php if (isset($_GET['error'])) : ?>
  <div class="error"><?= htmlspecialchars($_GET['error']) ?></div>
<?php endif; ?>


<?php
include_once('./template-php/section-product.php');
?>



<?php
include_once('./template-php/footer.php');
?>