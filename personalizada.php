<?php
 $conn = new mysqli('localhost','root','', 'banco');
 
 $pesquisaNome = $_POST['nome'];
 $pesquisaVendedor = $_POST['vendedor'];
 $pesquisaData = $_POST['data'];

?>

 <html>
 <head>

 <title>Resultado da pesquisa</title>
 </head>
 <body>
 
 <table border="1" style='width:50%'>
 <tr>
 <th>ID</th>
 <th>NOME</th>
 <th>VENDEDOR</th>
 <th>DATA</th>
 <th>DESCRIÇÃO</th>
 <th>VALOR</th>
 </tr>
 
 <?php
 $sql = "SELECT * FROM cliente WHERE nome = '$pesquisaNome' or vendedor= '$pesquisaVendedor' or data_cadastro = '$pesquisaData' order by data_cadastro desc";
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
</body>
</html>