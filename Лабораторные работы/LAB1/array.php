<?php
/*
ЗАДАНИЕ 1
- Создайте массив $bmw с ключами:
	'model'
	'speed, km/h'
	'doors'
	'year'
- Заполните ячейки значениями: 'X5', 120, 5, '2006'
- Создайте массивы $toyota и $opel аналогичные массиву $bmw.
- Заполните массив $toyota значениями: 'Carina', 130, 4, '2007'
- Заполните массив $opel значениями: 'Corsa', 140, 5, '2007'
*/
    $bmw=array(
        "model"=>"X5",
        "speed"=> 120,
        "doors"=>5,
        "year"=>"2006",
    );


    $toyota=array(
        "model"=>"Carina",
        "speed"=> 130,
        "doors"=>4,
        "year"=>"2007",

    );

    $opel=array(
        "model"=>"Corsa",
        "speed"=> 140,
        "doors"=>5,
        "year"=>"2007",

    );
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Массивы</title>
</head>
<body>
	<h1>Массивы</h1>
	<?php
	/*
	ЗАДАНИЕ 2
	- С помощью подстановки в строку выведите значения всех трёх массивов в виде: name - model - speed - doors -year,  например: bmw - x5 - 120 - 5 - 2006
	*/
        $car="bmv - ";

        foreach ($bmw as $key=>$value) {

            $car.=$value;
            if($key!="year"){
                $car.=" - ";
            }
        }

        echo $car."<br>";

        $car="toyota - ";

        foreach ($toyota as $key=>$value) {

            $car.=$value;
            if($key!="year"){
                $car.=" - ";
            }
        }

        echo $car."<br>";

        $car="opel - ";

        foreach ($opel as $key=>$value) {

            $car.=$value;
            if($key!="year"){
                $car.=" - ";
            }
        }

        echo $car."<br>";
    ?>

</body>
</html>
