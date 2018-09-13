<?php
	include '/php/banco.php';
    
    if(!empty($_POST))
    {
        //Acompanha os erros de validação
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
        
        //Validação dos campos:
        $validacao = true;
        if(empty($artista))
        {
            $nomeErro = 'Por favor, digite o nome do artista!';
            $validacao = false;
        }
        
        if(empty($ano))
        {
            $anoErro = 'Por favor, digite o ano!';
            $validacao = false;
        }
        
        if(empty($duracao))
        {
            $duracaoErro = 'Por favor, digite a duração!';
            $validacao = false;
        }
        
        if(empty($preco))
        {
            $precoErro = 'Por favor, digite o preço';
            $validacao = false;
        }
        
        if(empty($nome))
        {
            $nomeErro = 'Por favor, digite o nome do álbum!';
            $validacao = false;
        }
        
        //Inserindo no banco
        if($validacao)
        {
            $pdo = Banco::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			//Query para cadastro de cd
            $sql = "INSERT INTO cd (artista, ano, duracao, preco, nome) VALUES(?,?,?,?,?)";
            $q = $pdo->prepare($sql);
			
			//Execução da query de acordo com os dados digitados
            $q->execute(array($artista,$ano,$duracao,$preco,$nome));
            Banco::desconectar();
			
			//Retornando a página inicial
            header("Location: index.php");
        }
    }
?>