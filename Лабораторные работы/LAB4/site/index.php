<?php
    error_reporting(0);
    require_once "inc/lib.inc.php";
    require_once "inc/data.inc.php";
    // Инициализация заголовков страницы
    $title = 'Сайт нашей школы';
    $header = "$welcome, Гость";
    $id = strtolower(strip_tags(trim($_GET['id'])));
    switch($id){
        case 'about':
            $title = 'О сайте';
            $header = 'О нашем сайте';
            break;
        case 'contact':
            $title = 'Контакты';
            $header = 'Обратная связь';
            break;
        case 'table':
            $title = 'Таблица умножения';
            $header = 'Таблица умножения';
            break;
        case 'calc':
            $title = 'Он-лайн калькулятор';
            $header = 'Калькулятор';
            break;
    }
?>
<!DOCTYPE html>
<html>

<head>
  <title><?=$title?></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header>
    <!-- Верхняя часть страницы -->
    <img src="logo.png" width="130" height="80" alt="Наш логотип" class="logo">
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </header>

  <section>
    <!-- Заголовок -->
    <h1><?=$header?></h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php
      switch($id){
          case 'about':
              include 'about.php';
              break;
          case 'contact':
              include 'contact.php';
              break;
          case 'table':
              include 'tables.php';
              break;
          case 'calc':
              include 'calc.php';
              break;
          default:
              include 'inc/index.inc.php';
      }
    ?>
    <!-- Область основного контента -->
  </section>
  <nav>
    <!-- Навигация -->
      <?php
        include 'inc/menu.inc.php';
      ?>
    <!-- Навигация -->
  </nav>
  <footer>
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; <?=date('Y')?>
    <!-- Нижняя часть страницы -->
  </footer>
</body>

</html>
