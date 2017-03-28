<?php
require "config.php";
header('Content-Type: application/json');
$sql_query = "SELECT * FROM `treatments`";
$stm = $pdo->prepare($sql_query);
$stm->execute();
$result = $stm->fetchAll(PDO::FETCH_ASSOC);
$main = array('treatments' => $result);
echo json_encode($main);
