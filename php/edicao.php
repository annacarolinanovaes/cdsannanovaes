<?php 
	
	include '/php/banco.php';
	
	//Necessário id do CD para que, assim, dados sejam carregados
	$id = null;
	if ( !empty($_GET['id'])) 
            {
		$id = $_REQUEST['id'];
            }
	
	if ( null==$id ) 
            {
		header("Location: index.php");
            }
	
	if ( !empty($_POST)) 
            {
		
			$artistaErro = null;
			$anoErro = null;
			$duracaoErro = null;
			$precoErro = null;
			$nomeErro = null;
	
			$artista = $_POST['artista'];
			$ano = $_POST['ano'];
			$duracao = $_POST['duracao'];
			$preco = $_POST['preco'];
			$nome = $_POST['nome'];
		
		//Validação dos campos
		$validacao = true;
		if (empty($artista)) 
                {
                    $artistaErro = 'Por favor digite o artista!';
                    $validacao = false;
                }
		
		if (empty($preco)) 
                {
                    $precoErro = 'Por favor digite o preco!';
                    $validacao = false;
		} 
		
		if (empty($ano)) 
                {
                    $ano = 'Por favor digite o endereço!';
                    $validacao = false;
		}
                
                if (empty($duracao)) 
                {
                    $duracao = 'Por favor digite o duracao!';
                    $validacao = false;
		}
                
                if (empty($ano)) 
                {
                    $ano = 'Por favor preenche o campo!';
                    $validacao = false;
		}
		
		if ($validacao) //Se os campos forem validados
                {
                    $pdo = Banco::conectar();
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
					//Query para edição de CD, sendo necessário o ID 
                    $sql = "UPDATE cd set artista = ?, ano = ?, duracao = ?, preco = ?, nome = ? WHERE id = ?";
                    $q = $pdo->prepare($sql);
                    $q->execute(array($artista,$ano,$duracao,$preco,$nome,$id));
                    Banco::desconectar();
                    header("Location: index.php");
		}
	} 
        else 
            {
                $pdo = Banco::conectar();
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "SELECT * FROM cd where id = ?";
				$q = $pdo->prepare($sql);
				$q->execute(array($id));
				$data = $q->fetch(PDO::FETCH_ASSOC);
				$artista = $data['artista'];
				$ano = $data['ano'];
				$duracao = $data['duracao'];
				$preco = $data['preco'];
				$nome = $data['nome'];
				Banco::desconectar();
	}
?>