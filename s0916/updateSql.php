<?php
require_once("main.php");

$name = $_POST["name"];
$title = $_POST["title"];
$contents = $_POST["contents"];

$sql = "INSERT INTO blog(name, title, contents, date) VALUES ($name, $title, $contents,sysdate() )";
$result = $db->prepare($sql);
$list = $result->fetchAll();
?>

<script>location.href='index.php'</script>
