<?php
//input name number
$number = $_GET['number'];//get 방식으로 받을려면 $_GET[]으로 받는다.

if($number <= 13){
    echo "초딩입니다.";
}else if($number <= 16){
    echo "중딩입니다.";
}else if($number <= 19){
    echo "고딩입니다.";
}else {
    echo "일단 급식충은 아닙니다,";
}