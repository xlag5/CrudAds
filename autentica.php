<?php 

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

if(($login == "GJK" and $senha =="123") or ($login == "teste" and $senha == "teste"))
{
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	header('location:pagina.php');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:login.php');
  }
?>

