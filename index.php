<!DOCTYPE html>
<html lang="pt-br">
	
    <head>
		<title> CRUD PHP - Anna Novaes </title>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
		
		<!-- jQuery e Tablesorter -->
		<script src="js/jquery-latest.js"></script>
		<script src="js/jquery.tablesorter.min.js"></script>
		
		<!-- Estilos necessários para o tema do tablesorter -->
		<link rel="stylesheet" href="css/blue/estilotabela.css">
		
		<script>
		//Inicializando o framework que permite a ordenação de dados na tabela
		$(function(){
			$('.tablesorter').tablesorter();
		});
		</script>
    </head>
    
    <body>
        <div class="jumbotron">
        <div class="container">
            <div class="row">
                <h1> CRUD em PHP - Anna Novaes</h1>
				<p class="texto"> Criar um pequeno sistema de cadastro de CD’s. Este sistema deve ter um CRUD simples, deve cadastrar CD`s (Artista, Ano, Duração, Preço, Nome do Álbum). </p>
            </div>
            </br>
            <div class="row">
                <p>
                    <a href="paginacadastro.php" class="btn btn-success">Adicionar álbum</a>
                </p>
                <table class="tablesorter">
                    <thead class="fonte">
                        <tr>
							<th>Artista</th>
                            <th>Ano</th>
                            <th>Duração</th>
                            <th>Preço</th>
                            <th>Nome do álbum</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody class="fonte">
                        <?php
							include("/php/listagem.php");
                        ?>
                    </tbody>                   
                </table>               
            </div>
        </div>
        </div>
    </body>
</html>
