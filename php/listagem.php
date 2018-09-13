<?php
	include '/php/banco.php';
	
	$pdo = Banco::conectar();
	
	//Query para listagem de todos os dados contidos na tabela CD
	$result = $pdo->query("SELECT * FROM cd");
	
	//Enquanto houver linhas a serem retornadas, ele imprime os dados de cada cd nas linhas abaixo.
	while($row = $result->fetch(PDO::FETCH_OBJ))
	{
		echo '<tr>';
		echo '<td>'. $row->artista . '</td>';
		echo '<td>'. $row->ano . '</td>';
		echo '<td>'. $row->duracao . ' minutos </td>';
		echo '<td> R$ '. $row->preco . '</td>';
		echo '<td>'. $row->nome . '</td>';
		echo '<td width=250>';
		echo '<a class="btn btn-primary" href="paginadetalhes.php?id='.$row->id.'">Mais</a>';
		echo ' ';
		echo '<a class="btn btn-warning" href="paginaedicao.php?id='.$row->id.'">Atualizar</a>';
		echo ' ';
		echo '<a class="btn btn-danger" href="paginaexclusao.php?id='.$row->id.'">Excluir</a>';
		echo '</td>';
		echo '<tr>';
	}
	Banco::desconectar();
?>