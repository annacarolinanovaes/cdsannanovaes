<?php
	include("/php/edicao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title> Edição - Anna Novaes </title>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3 class="well"> Edição do CD</h3>
                    </div>
             
                    <form class="form-horizontal" action="paginaedicao.php?id=<?php echo $id?>" method="post">
                        
                      <div class="control-group <?php echo !empty($artistaErro)?'error':'';?>">
                        <label class="control-label">Artista</label>
                        <div class="controls">
                            <input name="artista" size="50" type="text"  placeholder="Artista" value="<?php echo !empty($artista)?$artista:'';?>">
                            <?php if (!empty($artistaErro)): ?>
                                <span class="help-inline"><?php echo $artistaErro;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                        
                       <div class="control-group <?php echo !empty($anoErro)?'error':'';?>">
                        <label class="control-label">Ano</label>
                        <div class="controls">
                            <input name="ano" size="50" type="text"  placeholder="Ano" value="<?php echo !empty($ano)?$ano:'';?>">
                            <?php if (!empty($anoErro)): ?>
                                <span class="help-inline"><?php echo $anoErro;?></span>
                            <?php endif; ?>
                        </div>
                       </div>
                        
                       <div class="control-group <?php echo !empty($duracaoErro)?'error':'';?>">
                        <label class="control-label">Duração (em minutos)</label>
                        <div class="controls">
                            <input name="duracao" size="10" type="text"  placeholder="Duração" value="<?php echo !empty($duracao)?$duracao:'';?>">
                            <?php if (!empty($duracaoErro)): ?>
                                <span class="help-inline"><?php echo $duracaoErro;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                        
                        <div class="control-group <?php echo !empty($preco)?'error':'';?>">
                        <label class="control-label">Preço (R$)</label>
                        <div class="controls">
                            <input name="preco" size="20" type="text"  placeholder="Preço" value="<?php echo !empty($preco)?$preco:'';?>">
                            <?php if (!empty($precoErro)): ?>
                                <span class="help-inline"><?php echo $precoErro;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                        
                        <div class="control-group <?php echo !empty($nomeErro)?'error':'';?>">
                        <label class="control-label">Nome do álbum</label>
                        <div class="controls">
                            <input name="nome" size="50" type="text"  placeholder="Nome" value="<?php echo !empty($nome)?$nome:'';?>">
                            <?php if (!empty($nomeErro)): ?>
                                <span class="help-inline"><?php echo $nomeErro;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      
                        <br/>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Atualizar</button>
                          <a href="index.php" type="btn" class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>                 
    </div> 
  </body>
</html>

