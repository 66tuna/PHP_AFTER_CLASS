<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //    echo "<h1>hello PHP World! </h1>" ;
       
    //    $a = "20";
    //    $b = "yydh";
    //    $c = [1,2,3,4];
    //    echo $a . $b . "aaaa"; //붙여쓸때는 +가 아닌 .을 사용하여 붙는다.
    //    echo "<br>" . $b;
    //    echo $a . 120;
        

    ?>
</body>
</html> -->
<?php
    // function destroy_foo()
    // {
    //     global $foo;
    //     unset($GLOBALS['foo']);//$GLOBALS는 배열형태로 되어있다
    // }

    // $foo = 'bar';
    // destroy_foo();
    // echo $foo;
    

    // define("HOME", "/src");

    // echo HOME . "<br>";

    // function test(){
    //     echo "In test : " . HOME;
    // }

    // test();

    echo __LINE__ . "<br>";
    echo __FILE__ . "<br>";
    echo __DIR__ . "<br>";
    function test(){
        echo __FUNCTION__ . "<br>";
    }

    test();