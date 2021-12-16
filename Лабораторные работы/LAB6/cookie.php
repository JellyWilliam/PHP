<?php
/*
ЗАДАНИЕ 1
- Инициализируйте переменную для подсчета количества посещений
- Если соответствующие данные передавались через куки
  сохраняйте их в эту переменную
- Нарастите счетчик посещений
- Инициализируйте переменную для хранения значения последнего посещения страницы
- Если соответствующие данные передавались из куки, отфильтруйте их и сохраните в эту переменную.
  Для фильтрации используйте функции trim(), htmlspecialchars()
- С помощью функции setcookie() установите соответствующие куки.  Задайте время хранения куки 1 сутки.
  Для задания времени последнего посещения страницы используйте функцию date()
*/
date_default_timezone_set('Europe/Moscow');
$visit_counter = 0;
if (isset($_COOKIE["visitCounter"])){
    $visit_counter = $_COOKIE["visitCounter"];
}
$visit_counter++;
$last_visit = "";
if (isset($_COOKIE["lastVisit"]))
{
    $last_visit=htmlspecialchars($_COOKIE["lastVisit"], ENT_QUOTES);
    $last_visit=stripslashes(trim($last_visit));
}

setcookie("visitCounter", $visit_counter, time() + 60*60*24, '/');
setcookie("lastVisit", date ("d-m-Y H:i:s"), time() + 60*60*24, '/');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Последний визит</title>
</head>
<body>

<h1>Последний визит</h1>

<?php
/*
ЗАДАНИЕ 2
- Выводите информацию о количестве посещений и дате последнего посещения
*/
echo " <h2> Вы зашли на страницу $visit_counter раз</h2> <p>Последнее посещение: $last_visit</p>";
?>

</body>
</html>