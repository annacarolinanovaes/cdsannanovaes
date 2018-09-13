<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<title> Cadastro - Anna Novaes </title>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <div class="container">
            <div clas="span10 offset1">
                <div class="row">
                    <h3 class="well"> Adicionar CD </h3>
                    <form class="form-horizontal" action="paginacadastro.php" method="post">
                        
                        <div class="control-group <?php echo !empty($artistaErro)?'error ' : '';?>">
                            <label class="control-label">Artista</label>
                            <div class="controls">
                                <input size= "40" name="artista" type="text" placeholder="Nome do artista ou banda" required="" value="<?php echo !empty($artista)?$artista: '';?>">
                                <?php if(!empty($artistaErro)): ?>
                                    <span class="help-inline"><?php echo $artistaErro;?></span>
                                <?php endif;?>
                            </div>
                        </div>
                        
                        <div class="control-group <?php echo !empty($anoErro)?'error ': '';?>">
                            <label class="control-label">Ano</label>
                            <div class="controls">
                                <input size="10" name="ano" type="text" placeholder="ex: 2000" required="" value="<?php echo !empty($ano)?$ano: '';?>">
                                <?php if(!empty($anoErro)): ?>
                                <span class="help-inline"><?php echo $anoErro;?></span>
                                <?php endif;?>
                        </div>
                        </div>
                        
                        <div class="control-group <?php echo !empty($duracaoErro)?'error ': '';?>">
                            <label class="control-label">Duração (em minutos) </label>
                            <div class="controls">
                                <input size="10" name="duracao" type="text" placeholder="ex: 120" required="" value="<?php echo !empty($duracao)?$duracao: '';?>">
                                <?php if(!empty($duracaoErro)): ?>
                                <span class="help-inline"><?php echo $duracaoErro;?></span>
                                <?php endif;?>
                        </div>
                        </div>
                        
                        <div class="control-group <?php echo !empty($precoErro)?'error ': '';?>">
                            <label class="control-label">Preço (R$)</label>
                            <div class="controls">
                                <input size="10" name="preco" type="text" placeholder="ex: 00,00" required="" value="<?php echo !empty($preco)?$preco: '';?>">
                                <?php if(!empty($precoErro)): ?>
                                <span class="help-inline"><?php echo $precoErro;?></span>
                                <?php endif;?>
                        </div>
                        </div>
                        
                        <div class="control-group <?php echo !empty($nomeErro)?'error ': '';?>">
                            <label class="control-label" >Nome do álbum </label>
                            <div class="controls">
                                <input size="50" name="nome" type="text" placeholder="Nome do álbum" required="" value="<?php echo !empty($nome)?$nome: '';?>">
                                <?php if(!empty($nomeErro)): ?>
                                <span class="help-inline"><?php echo $nomeErro;?></span>
                                <?php endif;?>
                        </div>
                        </div>
                        <div class="form-actions">
                            <br/>
                
                            <button type="submit" class="btn btn-success">Adicionar</button>
                            <a href="index.php" type="btn" class="btn btn-default">Cancelar</a>
                        
                        </div>
                    </form>
                </div>
        </div>
    </body>
</html>


<?php
    include("/php/cadastro.php");
?>
