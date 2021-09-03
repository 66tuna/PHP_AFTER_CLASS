<?php
function dump($value){
    echo "<div class='dump' style='display:inline-block; width:50%'>";
    echo "<pre>";
    var_dump($value);//var_dump는 배열을 출력한다.
    echo "</pre>";
    echo "</div>";
}

