<?php
    function getTable($cols = 10, $rows = 10, $color = "yellow"){
        static $count = 0;
        $count++;
        $GLOBALS["count"] = $count;
        echo '<table border="1" cellpadding="10">';
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

    function getMenu($menu, $vertical=true){
        $style='';
        if(!$vertical){$style = " style='display:inline; margin-right:10px'";}
        echo "<ul style='list-style-type:none'>";
        foreach($menu as $link=>$href){
            echo "<li$style><a href='$href'>$link</a></li>";
        }
        echo "</ul>";
    }
