<?php
require_once("main.php");

$sql = "SELECT * FROM blog";
$result = $db->query($sql);
$list = $result->fetchAll();