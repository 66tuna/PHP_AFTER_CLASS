<?php

$tmpName = $_FILES["upload"]["tmp_name"];//배열안에 있는 upload는 upload.php input에 있는 name이다
$realName = $_FILES["upload"]["name"];

if(!file_exists("upload")){//폴더가 존재하는지 물어보는 것
    mkdir("upload");
}

move_uploaded_file($tmpName, "upload/" . $realName);

//xampp apache config php 메모장에서 post_max, upload_max 를 검색해서 용량을 맞춰준다