require 'auth.php';
require 'config.php';
$email = $_SESSION['email'];

$stm_select = $pdo->prepare('SELECT * FROM `order` WHERE email = :email'); 
$stm_select->execute(['email' => $email]);
$resultat = array();

foreach ($stm_select as $row) {
    $resultat[] = $row;
}
echo json_encode($result);
