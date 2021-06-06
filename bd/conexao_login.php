<?php
session_start();
include "conexaogeral.php";
$email = $_POST['email'];
$senha = $_POST['senha'];
$stmt = $conn->prepare('SELECT * FROM usuario WHERE email = ? AND senha = ?');
$stmt->bindParam(1,$login);
$stmt->bindParam(2,$senha);
$stmt->execute();

$_SESSION['log']=true;


header("location: ../index.php");
?>
</body>
</html>
