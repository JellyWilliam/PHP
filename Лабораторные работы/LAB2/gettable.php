<?php
/*
ЗАДАНИЕ 1
- Опишите функцию getTable()
- Задайте для функции три аргумента: $cols, $rows, $color

ЗАДАНИЕ 2
- Откройте файл tables.php
- Скопируйте код, который отрисовывает таблицу умножения
- Вставьте скопированный код в тело функции getTable()
- Измените код таким образом, чтобы таблица отрисовывалась в зависимости от входящих параметров $cols, $rows и $color
*/
    function getTable($cols = 10, $rows = 10, $color = "yellow"){
        static $count = 0;
        $count++;
        $GLOBALS["count"] = $count;
        echo '<table class="tbl">';
        for ($tr = 1; $tr <= $rows; $tr++) {
            echo "<tr>";
            for ($td = 1; $td <= $cols; $td++) {
                if ($td == 1 or $tr == 1) {
                    echo "<th style='background-color:$color'>", $tr * $td, "</th>";
                } else {
                    echo "<td>", $tr * $td, "</td>";
                }
            }
            echo "</tr>";
        }
        echo '</table><hr/>';
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица умножения</title>
    <style>
        .tbl {
            border-spacing: 10px;
            border-collapse: separate;
        }
        td {
            padding: 10px;
        }
    </style>
</head>
<body>
<h1>Таблица умножения</h1>
<?php
/*
ЗАДАНИЕ 3
- Отрисуйте таблицу умножения вызывая функцию getTable() с различными параметрами
- Создайте локальную статическую переменную $count для подсчёта числа вызовов функции getTable()
*/
/*
ЗАДАНИЕ 4
- Измените входящие параметры функции getTable() на параметры по умолчанию
*/
/*
ЗАДАНИЕ 5
- Отрисуйте таблицу умножения вызывая функцию getTable() без параметров
- Отрисуйте таблицу умножения вызывая функцию getTable() с одним параметром
- Отрисуйте таблицу умножения вызывая функцию getTable() с двумя параметрами
- Используя статическую переменную $count выведите общее число вызовов функции getTable()
*/
    getTable(5, 6, "red");
    getTable();
    getTable(8);
    getTable(5, 5);

    echo "Таблица была отрисована " . $count . " раз";

?>
</body>
</html>

