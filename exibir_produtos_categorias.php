<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Produtos</title>
</head>
<body>
<table border="2">
			<tr>
				<th>id</th>
				<th>nome</th>
				<th>categoria</th>
			</tr>
			<?php
				$pdo = new PDO("sqlite:estoque.db");
            	$queryProdutos = "SELECT produtos.id, produtos.nome, categorias.nome as \"nome_categoria\"
				FROM produtos INNER JOIN categorias
				WHERE produtos.categoria_id = categorias.id";
            	$produtos = $pdo->query($queryProdutos);

				foreach($produtos as $produto){
					echo "<tr><td>".$produto["id"]."</td>";
					echo "<td>".$produto["nome"]."</td>";
					echo "<td>".$produto["nome_categoria"]."</td></tr>";
				}
	

			?>
		</table>
</body>
</html>