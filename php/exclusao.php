<?php
	include '/php/banco.php';

	$id = 0;

	//Necessário id do CD para que, assim, dados sejam carregados
	if(!empty($_GET['id']))
	{
		$id = $_REQUEST['id'];
	}

	if(!empty($_POST))
	{
		$id = $_POST['id'];

		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//Query para exclusão de CD, sendo necessário o ID 
		$sql = "DELETE FROM cd where id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		Banco::desconectar();
		header("Location: index.php");
	}
?>