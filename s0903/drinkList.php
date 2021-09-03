<?php
$arr = [
    ['name' => '코카콜라', 'pay' => 2000],
    ['name' => '펩시콜라', 'pay' => 1800],
    ['name' => '사이다', 'pay' => 1800],
    ['name' => '제로콜라', 'pay' => 1800],
    ['name' => '동원참치', 'pay' => 3000]
];

$myPay =  $_POST['myPay'];
$pay = [];
for ($i = 0; $i < count($arr); $i++) {
    array_push($pay, $arr[$i]['pay']);
}

for ($i = 0; $i < count($pay); $i++) {
    if ($myPay >= $pay[$i]) {
        echo "<form action='result.php' method='POST'>";
        echo $arr[$i]['name'] . " " . $arr[$i]['pay'] . "<input type='submit' value='구입'> ";
        echo "<br>";
        echo "</form>";
    }
}
