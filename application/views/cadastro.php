<?php 
 
$login = $_POST['email'];
$senha = MD5($_POST['password']);
$connect = mysql_connect('localhost','root@root.com','123456');
$db = mysql_select_db('clinica');
$query_select = "SELECT email FROM patient WHERE email = '$email'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['email'];
 
  if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo email deve ser preenchido');window.location.href='
    cadastro.html';</script>";
 
    }else{
      if($logarray == $email){
 
        echo"<script language='javascript' type='text/javascript'>
        alert('Esse email já existe');window.location.href='
        cadastro.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO patient (email,password,CPF,address,phone,sex,birth_date,age) VALUES ('$email','$password','$CPF','$address','$phone','$sex','$birth_date','$age')";
        $insert = mysql_query($query,$connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.html'</script>";
        }
      }
    }
?>