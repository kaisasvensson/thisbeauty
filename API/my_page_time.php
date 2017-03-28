<?php
include'auth.php'; //include auth.php file on all secure pages
require'config.php';

$email = $_SESSION['email'];
$stm_select = $pdo->prepare('SELECT * FROM `timebooking` WHERE email = :email');
$stm_select->execute(['email' => $email]);
$resultat = array();

foreach ($stm_select as $row) {
    $resultat[] = $row;
}
echo json_encode($resultat);
