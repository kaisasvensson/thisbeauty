require 'auth.php';
require 'config.php';
$email = $_SESSION['email'];

$stm_select = $pdo->prepare('SELECT * FROM `order` WHERE email = :email'); 
$stm_select->execute(['email' => $email]);
$result = $stm_select->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
