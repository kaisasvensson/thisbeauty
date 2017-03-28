<?php 
require"config.php";
//tar bort bokningen
if( isset($_POST['remove_id']) ) {
	$sql = "DELETE FROM `timebooking` WHERE `id` = :removeid";
			$stm_delete = $pdo->prepare($sql);
//			$stm_delete->execute(['removeid' => $_POST['remove_id']]);
    		$stm_delete->bindParam( $_POST['remove_id'], PDO::PARAM_INT);
			echo json_encode(true);
		}




