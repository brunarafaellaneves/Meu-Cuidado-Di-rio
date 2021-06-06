<?php  
	include 'conexaogeral.php';
	
	$nome = htmlspecialchars($_POST['nome']);
	$email =  htmlspecialchars($_POST['email']);
	$senha =  htmlspecialchars($_POST['senha']);

  $sql ="INSERT INTO usuario(nome, email, senha) VALUES (?,?,?)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam( 1, $nome);
	$stmt->bindParam( 2, $email);
	$stmt->bindParam( 3, $senha);
	$result = $stmt->execute();

	if ( !$result ){
	    var_dump($stmt->errorInfo());
	    exit;
	}
	header("location:../login.php");
?>
