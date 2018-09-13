<?php
    include '/php/banco.php';
	
    $id = null;
	//Necessário id do CD para que, assim, dados sejam carregados
    if(!empty($_GET['id']))
    {
        $id = $_REQUEST['id'];
    }
    
    if(null==$id)
    {
        header("Location: index.php");
    }
    else 
    {
		//Conexão com o banco de dados
       $pdo = Banco::conectar();
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "SELECT * FROM cd where id = ?";
       $q = $pdo->prepare($sql);
       $q->execute(array($id));
       $data = $q->fetch(PDO::FETCH_ASSOC);
       Banco::desconectar();
    }
?>