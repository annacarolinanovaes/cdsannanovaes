<?php
	include("/php/detalhes.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<title> Detalhes - Anna Novaes </title>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">           
            <div class="span10 offset1">
                <div class="row">
                    <h3 class="well"> Listar CDs </h3>
                </div>

                <div class="form-horizontal">                   
                    <div class="control-group">
                        <label class="control-label">Artista</label>
                        <div class="controls">
                            <label class="carousel-inner">
                                <?php echo $data['artista'];?>
                            </label>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label">Ano</label>
                        <div class="controls">
                            <label class="carousel-inner">
                                <?php echo $data['ano'];?>
                            </label>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label">Duração</label>
                        <div class="controls">
                            <label class="carousel-inner">
                                <?php echo $data['duracao'];?>
                            </label>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label">Preço</label>
                        <div class="controls">
                            <label class="carousel-inner">
                                <?php echo $data['preco'];?>
                            </label>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label">Nome</label>
                        <div class="controls">
                            <label class="carousel-inner">
                                <?php echo $data['nome'];?>
                            </label>
                        </div>
                    </div>
                    <br/>
                    <div class="form-actions">
                        <a href="index.php" type="btn" class="btn btn-default">Voltar</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>

