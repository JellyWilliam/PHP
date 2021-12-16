<?php
/*
ЗАДАЧА
Отрисовать навигационное меню на странице,
используя массив в качестве структуры меню

ЗАДАНИЕ 1
- Создайте массив $leftMenu элементами которого будут являться ассоциативные массивы с ключами 'link' и 'href'
- Заполните массив соблюдая следующие условия:
    - Значением элемента с ключём 'link' является один из пунктов меню: 'Домой', 'О нас', 'Контакты', 'Таблица умножения', 'Калькулятор'
    - Значением элемента с ключём 'href' будет имя файла, на который указывает ссылка: stringslab.php, about.php, contact.php, tables.php, calc.php
*/
    $menu = array(
        'Домой' => "stringslab.php",
        'О нас'=> "about.php",
        'Контакты'=> "contact.html",
        'Таблица умножения' => "tables.php",
        'Калькулятор'=> "calc.php"
    );
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню</title>
</head>
<body>
<h1>Меню</h1>
<nav>
    <?php
    /*
    ЗАДАНИЕ 2
    - Отрисуйте вертикальное меню с помощью цикла foreach,
      передав ему в качестве аргумента массив $leftMenu.
      В итоге должен получиться следующий список:
       <ul>
          <li><a href='stringslab.php'>Домой</a></li>
          <li><a href='about.php'>О нас</a></li>
          <li><a href='contact.php'>Контакты</a></li>
          <li><a href='tables.php'>Таблица умножения</a></li>
          <li><a href='calc.php'>Калькулятор</a></li>
        </ul>
    */
    echo "<ul style='list-style-type:none'>";
    foreach($menu as $link=>$href){
        echo "<li><a href='$href'>$link</a></li>";
    }
    echo "</ul>";
    ?>
</nav>
</body>
</html>

