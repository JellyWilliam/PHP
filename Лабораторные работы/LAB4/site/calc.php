<?php
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $number1 = $_POST['num1'];
        $number2 = $_POST['num2'];
        $operation = $_POST['operator'];
        $reset = $_POST['reset'];

        if($reset) {
            $view = "";
            $number1 = 0;
            $number2 = 0;
            $operation = false;
            $view = "";
        }

        if($operation) {
            if($operation == "+") {
                $result = $number1 + $number2;
            }
            if($operation == "-") {
                $result = $number1 - $number2;
            }
            if($operation == "*") {
                $result = $number1 * $number2;
            }
            if($operation == "/") {
                $result = ($number2 != 0) ? $number1 / $number2 : "на 0 делить нельзя";
            }
            $view = "$number1 $operation $number2 = " . $result;
        }
}
?>
    <!-- Область основного контента -->
    <form action='<?=$_SERVER['REQUEST_URI']?>' method="post">
      <label>Число 1:</label>
      <br>
      <input name='num1' type='number'>
      <br>
      <label>Оператор: </label>
      <br>
        <select name='operator'>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
      <br>
      <label>Число 2: </label>
      <br>
      <input name='num2' type='number'>
      <br>
      <br>
      <input type='submit' value='Считать'>
      <br>
      <br>
      <input name="result" type="text" value="<?= $view ?>" disabled/><br><br>
    </form>
    <!-- Область основного контента -->