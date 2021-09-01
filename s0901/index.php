<?php
// $human = [
//     'name' => '홍길동',
//     'age' => 20,
//     'job' => '도적'
// ];

// foreach($human as $key => $item){
//     echo $key . " : " . $item . "<br>";
// }



// $human = [
//     [1,2,3,4,5], // $human[0][1] = 2
//     [6,7,8,9,10],// $human[1]
//     [11,12,13,14,15],// $human[2][3] = 14
//     [16,17,18,19,20]// $human[3]
// ];
// //for loop로 위 2차원배열을 출력하시오
// for( $i = 0; $i < count($human); $i++){
//     for($j = 0; $j < count($human[$i]); $j++){
//         echo $human[$i][$j] . " ";
//     }
//     echo "<br>";
// }



// $human = [
//     [1,2,3,4,5], // $human[0][1] = 2
//     [6,7,8,9,10],// $human[1]
//     [11,12,13,14,15],// $human[2][3] = 14
//     [16,17,18,19,20]// $human[3]
// ];
// echo is_array($human);//배열이 맞는지 확인하는 마법함수 is_array



// $data = [1,2,3,4,5,6,7,8,9,10];
// $neadle = "4";

// if(in_array($neadle, $data)){
//     echo "4는 배열안에 있습니다." . "<br>";
// }

// if(in_array($neadle, $data, TRUE)){
//     echo "타입까지 비교해도 4는 배열안에 있습니다." . "<br>";
// }else{
//     echo "타입 미스매치" . "<br>";
// }



// $keys = ["name", "age", "job"];
// $value = ["홍길동", 20, "도적"];

// $arr = array_combine($keys, $value);

// echo "<pre>";
// var_dump($arr);
// echo "</pre>";

function dump($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    echo "<br>";
}



// echo "<div style='width:400px';>";
//     $fill_zero = array_fill(0,5,0);
//     dump($fill_zero);
//     $fill_banana = array_fill(3,4,"banana");
//     dump($fill_banana);
// echo "</div>";



// $arr = ["양영", "디지털", "홍길동"];
// dump($arr);
// echo array_shift($arr) . "<br>";//배열안에 있는것을 뽑는다
// echo array_unshift($arr, "성남", "분당") . "<br>"; // shift해서 남은것들의 갯수
// dump($arr);




$arr1 = [
    "name1" => "홍길동",
    "name2" => "이순신",
    "name3" => "신사임당"
];
sort($arr1); //정렬
dump($arr1);
rsort($arr1); //거꾸로 정렬
dump($arr1);
ksort($arr1);
dump($arr1);
krsort($arr1);
dump($arr1);
$data = [
    ['name' => '홍길동', 'age' => 34, 'job' => '도적'],
    ['name' => '신사임당', 'age' => 57, 'job' => '가정주부'],
    ['name' => '이순신', 'age' => 19, 'job' => "해적"]
];
usort($data, function($a, $b){//usort 사용자가 만든 함수로 정의 한다.   $a,$b를 비교
    return $a['age'] - $b['age'];
});

dump($data);