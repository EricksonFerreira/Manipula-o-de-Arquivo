 <?php 
session_start();
$user = $_SESSION['user'];
$id = $_GET['id'];
$amount = $_GET['amount'];
$title = $_GET['title'];
$done = 1;

$file = file('../Tasks/'.$user.'.csv');
$file[$id] = $amount."/;/".$title."/;/".$done."\n";
file_put_contents('../Tasks/'.$user.'.csv', implode($file));
header('location:../Views/index.php');

?>