<?php
/*
ЗАДАНИЕ 1
- Опишите функцию getMenu()
- Задайте для функции первый аргумент $menu, в него будет передаваться массив, содержащий структуру меню
- Задайте для функции второй аргумент $vertical со значением по умолчанию равным true. Данный параметр указывает, каким образом будет отрисовано меню - вертикально или горизонтально

ЗАДАНИЕ 2
- Откройте файл menu.php
- Скопируйте код, который создает массив $leftMenu и вставьте скопированный код в данный документ
- Скопируйте код, который отрисовывает меню
- Вставьте скопированный код в тело функции getMenu()
- Измените код таким образом, чтобы меню отрисовывалась в зависимости от входящих параметров $menu и $vertical
*/
    function getMenu($menu, $vertical=true){
        $style='';
        if(!$vertical){$style = " style='display:inline; margin-right:10px'";}
        echo "<ul style='list-style-type:none'>";
        foreach($menu as $link=>$href){
            echo "<li$style><a href='$href'>$link</a></li>";
        }
        echo "</ul>";
    }
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
<?php
/*
ЗАДАНИЕ 3
- Отрисуйте вертикальное меню вызывая функцию getMenu() с одним параметром
*/
/*
ЗАДАНИЕ 4
- Отрисуйте горизонтальное меню вызывая функцию getMenu() со вторым параметром равным false
*/
    $menu = array(
        'Домой' => "stringslab.php",
        'О нас'=> "about.php",
        'Контакты'=> "contact.html",
        'Таблица умножения' => "tables.php",
        'Калькулятор'=> "calc.php"
    );
    getMenu($menu);
    getMenu($menu, false);
?>
</body>
</html>
