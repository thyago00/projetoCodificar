
<?php
$conn = new mysqli('localhost','root','', 'banco');

echo "<table border=1>";
 echo "<tr>";
 echo "<th>ID</th>";
 echo "<th>NOME</th>";
 echo "<th>VENDEDOR</th>";
 echo "<th>DATA</th>";
 echo "<th>DESCRIÇÃO</th>";
 echo "<th>VALOR</th>";


 echo "</tr>";
  
 $sql = "SELECT * FROM cliente";
 $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 while ($registro = mysqli_fetch_array($resultado))
 {
    $id = $registro['id']; 
    $nome = $registro['nome'];
    $vendedor = $registro['vendedor'];
    $data = $registro['data_cadastro'];
    $descricao = $registro['descricao'];
    $valor = $registro['valor'];
    echo "<tr>";
    echo "<td>".$id."</td>";
    echo "<td>".$nome."</td>";
    echo "<td>".$vendedor."</td>";
    echo "<td>".$data."</td>";
    echo "<td>".$descricao."</td>";
    echo "<td>".$valor."</td>";
    echo "</tr>";
 }
 mysqli_close($conn);
 echo "</table>";
 ?>