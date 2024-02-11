<?php
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone');
$assunto = filter_input(INPUT_POST, 'assunto');
$message = filter_input(INPUT_POST, 'message');

$result_usuario = "INSERT INTO usuarios (id, nome, email, telefone, assunto, message) VALUES ('$id','$nome','$email','$telefone','$assunto','$message')";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);

if (mysqli_insert_id($mysqli)){
    header("Location: index.html");
}else{
    header("Location: index.html");
}
?>