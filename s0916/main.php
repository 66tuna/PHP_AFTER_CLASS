<?php
    $host = "localhost";
    $dbname = "myblog";
    $charset = "utf8mb4";
    $user = "root";
    $title = "";
    $contents = "";
    $option = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];
    
    $db = new PDO("mysql:host={$host}; dbname={$dbname}; charset={$charset}", $user, $title, $option);

    // $sql = "INSERT INTO blog(name, title, contents, date) VALUES ('아야야', '아야카의 일상', '아야카는 오늘도 나베에 케이크를 넣는다',sysdate() )";

    $sql = "SELECT * FROM blog";
    $result = $db->query($sql);
    $list = $result->fetchAll();
    ?>