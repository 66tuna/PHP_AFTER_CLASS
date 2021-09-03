<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>이 짜이트는 PHP자판기 짜이트 입니다. 검색창에 가격을 쓰시면 쓰신 가격 이하의 상품들이 나옵니다.</h1>
    <?php
        $arr = [
            ['name' => '코카콜라', 'pay' => 2000],
            ['name' => '펩시콜라', 'pay' => 1800],
            ['name' => '사이다', 'pay' => 1800],
            ['name' => '제로콜라', 'pay' => 1800],
            ['name' => '동원참치', 'pay' => 3000]
        ];
    
        for ($i = 0; $i < count($arr); $i++) {
            echo $arr[$i]['name'] . " " . $arr[$i]['pay'];
            echo "<br>";
        }

    ?>
    <form action="drinkList.php" method="POST">
        <input type="text" name="myPay">
        <input type="submit" value="전송">
    </form>


</body>

</html>