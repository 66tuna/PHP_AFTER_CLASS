<?php
//1. PDO (PHP Database object) php에서 데이터베이스 사용\
//2. 데이터베이스 접속하는 코드를 작성

$host = "localhost";
$dbname = "myblog";
$charset = "utf8mb4";
$user = "root";
$passwd = "";
$option = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];

$db = new PDO("mysql:host={$host}; dbname={$dbname};  charset={$charset}", $user, $passwd, $option);

// $sql = "INSERT INTO users(id, name, password, level) VALUES ('script', 'js', '1234', 1)";

$sql = "SELECT * FROM users";
$result = $db->query($sql);
$list = $result->fetchAll();

echo "<table>";
echo "<tr>";
echo "<th>아이디</th>";
echo "<th>이름</th>";
echo "<th>비밀번호</th>";
echo "<th>레벨</th>";


foreach($list as $data){
    echo "<tr>";
    echo "<td>" . $data->id . "</td>". "<td>" . $data->name . "</td>" . " <td>" . $data->password . "</td>" . "<td> " . $data->level . "</td>";
    echo "</tr>";
}

echo "</table>";