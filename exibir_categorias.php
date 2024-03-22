<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Categorias</title>
</head>
<body>
<?php 
            $pdo = new PDO("sqlite:estoque.db");

            $queryCategorias = "SELECT * FROM categorias";

            $categorias = $pdo->query($queryCategorias);

            echo "<table border=2>";
            echo "<tr>";
            echo "<th>id</th>";
            echo "<th>nome</th>";
            echo "<tr>";

            foreach($categorias as $categoria){
                echo "<tr><td>".$categoria["id"]."</td>";
                echo "<td>".$categoria["nome"]."</td></tr>";
            }

            echo "</table>";

        ?>
</body>
</html>