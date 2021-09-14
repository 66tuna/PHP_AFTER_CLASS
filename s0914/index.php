<?php
// function testFunction($param1, $param2, $param3=100){
//     $sum = $param1 + $param2 + $param3;
//     return $sum;
// }

// $result = testFunction(40, 50);
// echo $result . "<br>";
// $result = testFunction(40, 50, -20);
// echo $result . "<br>";



// 오버로딩 = 물건을 위에 계속 쌓는 느낌
// public void sum(int a, int b);
// public void sum(int a, int b, int c);
// public void sum(int a, String b);

// 오버라이딩 = 덮어쓰기
// class A{
//  public void sum(int a, int b){
//          System.out.println("aaa");
//  }
//}

// class B extends A{
//    public void sum(int a, int b){
//         System.out.println("bbb");
//   }
// }



// function testFunction($param1, $param2){ //이것은 call by value
//     $param1 = $param1 + 20;
//     $param2 = $param2 + 10;
//     return $param1 + $param2;
// }

// $a = 20;
// $b = 30;
// $result = testFunction($a, $b);
// echo $result . "<br>";
// echo $a . "<br>";
// echo $b . "<br>";

//call by reference
//=참조에 의한 호출
//=얕은 복사

//call by value
//=값에 의한 호출
//=깊은 복사



// function testFunction(&$param1, &$param2){//&는 메모리에 저장됨 이것이 call by reference
//     $param1 = $param1 + 20;
//     $param2 = $param2 + 10;
//     return $param1 + $param2;
// }

// $a = 20;
// $b = 30;
// $result = testFunction($a, $b);
// echo $result . "<br>";
// echo $a . "<br>";
// echo $b . "<br>";



require_once("Human.php");
require_once("lib.php");

$h1 = new Human("홍길동", "도둑질");

dump($h1);

$h2 = new Human("박인환", "개객끼");
dump($h2);

if($h1->hasHobby("패드리퍼") && $h2->hasHobby("패드리퍼")){
    echo "둘다 개쓰레기";
}