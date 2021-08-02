<?php
 
require_once 'init.php';
 
// pega os dados do formuário
$name = isset($_POST['name']) ? $_POST['name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$CPF = isset($_POST['CPF']) ? $_POST['CPF'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$sex = isset($_POST['sex']) ? $_POST['sex'] : null;
$birth_date = isset($_POST['birth_date']) ? $_POST['birth_date'] : null;
 
 
// validação (bem simples, só pra evitar dados vazios)
if (empty($name) || empty($email) || empty($sex) || empty($birthdate))|| empty($CPF))|| empty($password))
{
    echo "Volte e preencha todos os campos";
    exit;
}
 
// a data vem no formato dd/mm/YYYY
// então precisamos converter para YYYY-mm-dd
$isoDate = dateConvert($birthdate);
 
// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO patient(name, email,CPF, password, sex, birthdate) VALUES(:name, :email,:CPF,:password :sex, :birth_date)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':CPF', $CPF);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':sex', $sex);
$stmt->bindParam(':birth_date', $isoDate);
 
 
if ($stmt->execute())
{
    header('Location: index.php');
}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}