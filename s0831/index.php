<?php
// $name = "참치";
// $age = 20;
// echo "안녕하세요 내 이름은 {$name}입니다." . "<br>";//안에 있는 변수명을 찾아서 적어준다.
// echo "안녕하세요 내 이름은 {$age} 입니다.";//문자열 그대로 출력.



// $str = '안녕하세요';
// $str2 = 'abcde';
// $str3 = "abcdeabcde";
// echo strlen($str) . "<br>"; //utf-8 때문에 3byt로 계산 원래는 2 byt
// echo mb_strlen($str) . "<br>";//글자수 그대로 나옴
// echo strpos($str2, "d") . "<br>";
// echo strpos($str3, "d", 6) . "<br>";
// echo mb_strpos($str, "하");



// $str = "<a href='#'>네이버</a>";
// $replaced = str_replace("네이버", "구글", $str);
//                          찾을꺼    바꿀꺼   원본
// echo $str . "<br>";
// echo $replaced . "<br>";



// $list = ["a", "e", "i", "o", "u", "W"];
// $replaced = str_replace($list, "", "Hello World");
// echo $replaced . "<br>";



// $str = "건강을 위해서라면 매일 야채와 과일, 물을 먹어야 한다.";
// $target = ["야채", "과일", "물"];
// $list = ["과자", "초콜렛", "치킨"];
// $replaced = str_replace($target, $list, $str);
// echo $replaced;



// $str = "abcdefg";//0부터 시작
// echo substr($str, 0, 3) . "<br>"; //abc
// echo substr($str, 4, 2) . "<br>";//ef
// echo substr($str, -1, 1) . "<br>";//g
// echo substr($str, -2, 2). "<br>";//fg
// echo substr($str, -3). "<br>";
// echo substr($str, 3) . "<br>";



// $department = ['소프트웨어', '전자제어', '정보통신', '바이오화확'];
// echo $department[3] . "<br>";

// array_push($department, "동원학과");
// echo $department[4] . "<br>";
// $department[] = "원신학과2";
// echo $department[5];

// $human = ['name' => '홍길도', 'age' => 20, 'male' => true, 'job' => '도적'];//키와 벨류로 이루어진것이 관계배열
// echo $human['name'] . "<br>";
// echo $human['age'] . "<br>";
// echo $human['male'] . "<br>";

// $newArr = array_splice($department, 2);//2index에서 2번쨰까지를 짜르고 그 안에 새로운 값을 저장한다.
// echo "<pre>";
// var_dump($department); //배열 출력할때는 var_dump를 쓴다.
// var_dump($newArr);
// echo "</pre>";



// $department = ['소프트웨어', '전자제어', '정보통신', '바이오화확'];
// //[문제] while loop를 통해 department의 모든 데이터를 출력해보세요
// $i = 0;
// while($i <= count($department)){
//     echo $department[$i] . "<br>";
//     $i++;

//     if($i == count($department)){
//         return;
//     }
// }

// while(count($department) > 0){
//     $item = array_pop($department);
//     echo $item;
// }
