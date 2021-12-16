<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Загрузка файла на сервер</title>
</head>
<body>
<div>
    <?php
    /*
    ЗАДАНИЕ
    - Проверьте, отправлялся ли файл на сервер
    - В случае, если файл был отправлен, выведите: имя файла, размер, имя временного файла, тип, код ошибки
    - Если загружен файл типа "image/jpeg", то с помощью функции move_uploaded_file() переместите его в каталог upload
    */
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $upload_dir = 'upload';
        if (is_uploaded_file($_FILES['fupload']['tmp_name'])) {
            echo "Файл " . $_FILES['fupload']['name'] . " успешно загружен.<br/>";
            echo 'Размер файла:' . $_FILES['fupload']['size'] . ' байт, имя временного файла: ' . substr($_FILES['fupload']['tmp_name'], strripos($_FILES['fupload']['tmp_name'], '\\') + 1) . ', тип: ' . $_FILES['fupload']['type'] . ', ошибка: ' . $_FILES['fupload']['error'] . '<br/>';
            if ($_FILES['fupload']['type'] == "image/jpeg") {
                $tmp_name = $_FILES['fupload']['tmp_name'];
                $name = basename($_FILES['fupload']['name']);
                move_uploaded_file($tmp_name, "$upload_dir/$name");
                echo 'Файл имеет расширение jpeg и перемещён в каталог upload';
            }
        } else {
            echo "Файл '" . $_FILES['fupload']['tmp_name'] . "' не загружен, ошибка: " . $_FILES['fupload']['error'] . '<br/>';
        }
    }
    ?>
</div>
<form enctype="multipart/form-data"
      action="<?= $_SERVER['PHP_SELF']?>" method="post">
    <p>
        <input type="hidden" name="MAX_FILE_SIZE" value="1024000">
        <input type="file"   name="fupload"><br>
        <input type="submit" value="Загрузить">
    </p>
</form>
<?php
$dir = 'upload/';
$cols = 3;
$files = scandir($dir);
echo "<table>";
$k = 0;
for ($i = 0; $i < count($files); $i++) {
    if (($files[$i] != ".") && ($files[$i] != "..")) {
        if ($k % $cols == 0) echo "<tr>";
        echo "<td>";
        $path = $dir. urlencode($files[$i]);
        echo "<a href='$path'>";
        echo "<img src='$path' alt='' width='300' />";
        echo "</a>";
        echo "</td>";
        if ((($k + 1) % $cols == 0) || (($i + 1) == count($files))) echo "</tr>";
        $k++;
    }
}
echo "</table>"; // Закрываем таблицу
?>
</body>
</html>

