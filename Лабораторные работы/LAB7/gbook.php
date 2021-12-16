<?php
/* ЗАДАНИЕ 1
- Подключитесь к серверу MySQL, выберите базу данных
- Установите кодировку по умолчанию для текущего соединения
-
- Проверьте, была ли корректным образом отправлена форма
- Если она была отправлена: отфильтруйте полученные данные
  с помощью функций trim(), htmlspecialchars() и mysqli_real_escape_string(),
  сформируйте SQL-оператор на вставку данных в таблицу msgs и выполните его с помощью функции mysqli_query().
  После этого с помощью функции header() выполните перезапрос страницы,
  чтобы избавиться от информации, переданной через форму
*/
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

const DB_HOST = '';
const DB_LOGIN = '';
const DB_PASSWORD = '';
const DB_NAME = '';

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
mysqli_query($link, "SET NAMES 'utf8'");
mysqli_query($link, "SET CHARACTER SET 'utf8'");
mysqli_query($link, "SET SESSION collation_connection = 'utf8_general_ci'");

$message = '';
if($_SERVER["REQUEST_METHOD"]=="POST") {
    if ($_POST['name'] == '' || $_POST['email'] == '' || $_POST['msg'] == '') {
        $message = 'Заполните все поля!!';
    } else {
        $name = mysqli_real_escape_string($link, htmlspecialchars(trim($_POST['name'])));
        $email = mysqli_real_escape_string($link, htmlspecialchars(trim($_POST['email'])));
        $message = mysqli_real_escape_string($link, ($_POST['msg']));

        mysqli_query($link, "INSERT INTO *** (name, email, msg) VALUES ('" . $name . "', '" . $email . "', '" . $message . "')");

        header('Location: /LAB7/gbook.php');
    }
}

/*
ЗАДАНИЕ 3
- Проверьте, был ли запрос методом GET на удаление записи
- Если он был: отфильтруйте полученные данные,
  сформируйте SQL-оператор на удаление записи и выполните его.
  После этого выполните перезапрос страницы, чтобы избавиться от информации, переданной методом GET
*/
if(isset($_GET['del'])) {
    mysqli_query($link, "DELETE FROM heroku_a1de55d38247829.msgs WHERE id = '". $_GET['del'] ."'");
    header('Location: /LAB7/gbook.php');
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гостевая книга</title>
</head>
<body>

<h1>Гостевая книга</h1>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <h1><?= $message?></h1>
    Ваше имя:<br>
    <input type="text" name="name"><br>
    Ваш E-mail:<br>
    <input type="email" name="email"><br>
    Сообщение:<br>
    <textarea name="msg" cols="50" rows="5"></textarea><br>
    <br>
    <input type="submit" value="Добавить!">

</form>

<?php
/*
ЗАДАНИЕ 2
- Сформируйте SQL-оператор на выборку всех данных из таблицы
  msgs в обратном порядке и выполните его. Результат выборки
  сохраните в переменной.
- Закройте соединение с БД
-	С помощью функции mysqli_num_rows() получите количество рядов результата выборки и выведите его на экран
- В цикле функцией mysqli_fetch_assoc() получите очередной ряд результата выборки в виде ассоциативного массива.
  Таким образом, используя этот цикл, выведите на экран все сообщения, а также информацию
  об авторе каждого сообщения. После каджого сообщения сформируйте ссылку для удаления этой
  записи. Информацию об идентификаторе удаляемого сообщения передавайте методом GET.
*/
$query = mysqli_query($link, "SELECT * FROM msgs");
$rows = mysqli_num_rows($query);
for ($i = 0; $i < $rows; $i++) {
    $messages[$i] = mysqli_fetch_array($query);
}
mysqli_close($link);
?>
<?php
if (isset($messages)){
    foreach ($messages as $message) {
        ?>
        <p><b><a href="mailto:<?= $message['email']?>"><?= $message['name']?></a></b><br><?= $message['msg']?></p>
        <p align="right"><a href="<?= $url?>?del=<?= $message['id'] ?>">Удалить</a></p>
<?php }}?>
</body>
</html>