<?php
session_start();

if (isset ($_GET['id'])) {
    require 'db.php';
    echo json_encode(array_splice($_SESSION['cart'], 0, 1));
}

