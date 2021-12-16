<?php
/*
ЗАДАНИЕ 1
- Установите константу для хранения имени файла
- Проверьте, отправлялась ли форма и корректно ли отправлены данные из формы
- В случае, если форма была отправлена, отфильтруйте полученные значения
  с помощью функций trim(), htmlspecialchars()
- Сформируйте строку для записи с файл
- Откройте соединение с файлом и запишите в него сформированную строку
- Используя функцию header() выполните перезапрос текущей страницы
  (чтобы избавиться от данных, отправленных методом POST)
*/
    const USER_LOG = "users.txt";
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $fn = trim (strip_tags($_POST["fname"]));
        $ln = trim (strip_tags($_POST["lname"]));
        $user = "$fn $ln\n";
        file_put_contents(USER_LOG,$user,FILE_APPEND);
        header("Location:file.php");
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <title>Работа с файлами</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>Заполните форму</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    Имя: <input type="text" name="fname" /><br />
    Фамилия: <input type="text" name="lname" /><br />

    <br />

    <input type="submit" value="Отправить!" />

</form>
<hr/>
<?php
/*
ЗАДАНИЕ 2
- Проверьте, существует ли файл с информацией о пользователях
- Если файл существует, получите все содержимое файла в виде массива строк
- В цикле выведите все строки данного файла с порядковым номером строки
- После этого выведите размер файла в байтах.
*/
if(file_exists(USER_LOG))
{
    $users = file (USER_LOG);
    if(is_array($users))
    {
        echo "<pre>";
        $i = 1;
        foreach ($users as $user)
        {
            echo "$i "."$user"."<br/>";
            $i++;
        }
        echo "</pre>";
        echo  "Размер файла: ".(int) filesize(USER_LOG)." байт";
    }
}


?>

</body>
</html>