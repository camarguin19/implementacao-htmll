<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">

        <label for="">Nome:</label>
        <input type="text" name="Nome" id=""></br>

        <label for="">Sobrenome:</label>
        <input type="text" name="Sobrenome" id=""></br>

        <label for="">Civil:</label>
        <input type="text" name="Civil" id=""></br>

        <label for="">RG:</label>
        <input type="number" name="RG" id=""></br>

        <label for="">CPF:</label>
        <input type="number" name="CPF" id=""></br>

        <label for="">Cep:</label>
        <input type="number" name="Cep" id=""></br>

        <label for="">Estado:</label>
        <input type="text" name="Estado" id=""></br>

        <label for="">Cidade:</label>
        <input type="text" name="Cidade" id=""></br>

        <label for="">Bairro:</label>
        <input type="text" name="Bairro" id=""></br>

        <label for="">Rua:</label>
        <input type="text" name="Rua" id=""></br>
        
        <label for="">Numero:</label>
        <input type="number" name="Numero" id=""></br>

        <label for="">Celular:</label> 
        <input type="number" name="Celular" id=""></br>
    
        <label for="">Email:</label>
        <input type="email" name="Email" id=""></br>
    
        <label for="">Senha:</label>
        <input type="password" name="Senha" id=""></br>

        <input type="submit" value="Enviar"></br>

    </form>

</body>
</html>

<?php

print_r($_POST);

$Nome = $_POST['Nome'];
$Sobrenome = $_POST['Sobrenome'];
$Civil = $_POST['Civil'];
$RG = $_POST['RG'];
$CPF = $_POST['CPF'];
$Cep = $_POST['Cep'];
$Estado = $_POST['Estado'];
$Cidade = $_POST['Cidade'];
$Bairro = $_POST['Bairro'];
$Rua = $_POST['Rua'];
$Numero = $_POST['Numero'];
$Celular = $_POST['Celular'];
$Email = $_POST['Email'];
$Senha = $_POST['Senha'];



echo "</br> O nome completo é: {$Nome} {$Sobrenome}";
echo "</br> O estado civil é: {$Civil}";
echo "</br> RG: {$RG}";
echo "</br> CPF: {$CPF}";
echo "</br> Cep: {$Cep}";
echo "</br> Estado: {$Estado}";
echo "</br> Cidade: {$Cidade}";
echo "</br> Bairro: {$Bairro}";
echo "</br> Rua: {$Rua}";
echo "</br> Numero: {$Numero}";
echo "</br> Celular: {$Celular}";
echo "</br> Email: {$Email}";
echo "</br> Senha: {$Senha}";

?>




