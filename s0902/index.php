<?php

// echo date('Y-m-d') . "<br>";
// echo date('Y-m-d H') . "<br>";
// echo date('Y-m-d H:i') . "<br>";
// echo date('Y-m-d H:i:s') . "<br>";
// echo date('y,M,D') . "<br>";

// $time = strtotime("1980-06-29 07:30:18");
// echo date('Y-m-d H:i:s', $time) . "<br>";//strtotime문자열을 시간으로 바꿈
// echo date('Y-m-d H:i:s', strtotime("+10 day", $time)) . "<br>";//strtotime두개 쓰면 그 시간 만큼 계산함
// echo date('Y-m-d H:i:s', strtotime("+3 week", $time)) . "<br>";
// echo date('Y-m-d H:i:s', strtotime("-3 month", $time)) . "<br>";
// echo date('Y-m-d H:i:s', strtotime("+1 year", $time)) . "<br>";
// echo date('Y-m-d H:i:s', strtotime("+1 year", strtotime("1980-06-29 07:30:18"))) . "<br>";



// $filename = "sample.txt";

// if(file_exists($filename)){//파일이 존재하는지 확인하는 명령어
//     $file = fopen($filename, "r");//file-open = fopen 파일을 연다 / r은 읽기 모드, w는 쓰기 모드
//     if($file){//파일을 여는 도중 실패할수 있기 때문에 if안에 넣는다.
//         $size = filesize($filename);
//         echo "파일크기 : ${size} <br>";
//         $text = fread($file, $size);//파일 읽기
//         echo $text;
//     }else{
//         echo "파일 열기에 실패했습니다.";
//     }
// }else{
//     echo "해당파일이 존재하지 않습니다.";
// }



// $filename = "hello.txt";

// $file = fopen($filename, "w");//없으면 만들고, 있으면 재사용한다.
// if($file){
//     fwrite($file, "Hello222 Hello world! yydh!");
//     fclose($file);//파일을 닫아야 한다.
// }else{
//     echo "파일 작성에 실패했습니다.";
// }



// $myPage = file_get_contents("http://www.naver.com");//브라우저를 불러옴
// echo $myPage;



// $file = file_get_contents("sample.txt");
// echo $file;



// include("lib.php"); //include포합하다 아 ㅋㅋ 모르겠고 걍 넣을께~라는 뜻
// require("lib.php");//require요구하다 오류를 방지하는 것
// require_once("lib.php");//충돌을 막을수 있다. **가장많이 사용한다**
// $arr = [1,2,3,4,5,6,7];
// dump($arr);