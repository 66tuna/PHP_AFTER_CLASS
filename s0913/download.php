<?php
$filename = $_GET['name'];
$path = 'upload/' . $filename;
if(!file_exists($path)){
    echo "해당 파일은 존재하지 않습니다.";
    exit;
}

$filesize = filesize($path);
header('Paragma: public');//재조합에 필요한 코드 이해할필요 없음
header("Context-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=$filename");
header("Content-Transfer-Encoding: binary");
header("Content-Length: $filesize");

ob_clean();
flush();
readfile($path);