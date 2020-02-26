<?php
$nome = $_POST['nome'];
$data = $_POST['data'];
$vendedor = $_POST['vendedor'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];


$conn = new mysqli('localhost','root','', 'banco');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into cliente(nome, data_cadastro, vendedor, descricao, valor)
    values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssd",$nome, $data, $vendedor, $descricao, $valor);
    $stmt->execute();
    echo ("Registrado com sucesso!");
    $stmt->close();
    $conn->close();
    }
?>