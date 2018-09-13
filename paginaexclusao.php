<?php
	include("/php/exclusao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<title> Exclusão - Anna Novaes </title>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="span10 offset1">
                <div class="row">
                    <h3 class="well">Excluir Álbum</h3>
                </div>
                <form class="form-horizontal" action="paginaexclusao.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id;?>"/>
                    <div class="alert alert-danger"> Deseja excluir o álbum?
                    </div>
                    <div class="form actions">
                        <button type="submit" class="btn btn-danger">Sim</button>
                        <a href="index.php" type="btn" class="btn btn-default">Não</a>
                    </div>
                </form>
            </div>           
        </div>
    </body>    
</html>

