<?php

function verificar_emailU($con, $email){
    $sql = "SELECT email FROM tb_usuarios WHERE email = '$email'";
    $resultado = mysqli_query($con, $sql);
    $usuario = mysqli_fetch_assoc($resultado);
    
    if( isset($usuario["email"]) ){
        // print("e-mail encontrado");
        return false;
    }
    else{
      // print("e-mail não encontrado");
      return true;
    }
  }

  function verificar_emailM($con, $email){
    $sql = "SELECT email FROM tb_motoristas WHERE email = '$email'";
    $resultado = mysqli_query($con, $sql);
    $usuario = mysqli_fetch_assoc($resultado);
    
    if( isset($usuario["email"]) ){
        // print("e-mail encontrado");
        return false;
    }
    else{
      // print("e-mail não encontrado");
      return true;
    }
  }

  function ehMotorista($con, $email, $senha){
    $sql = "SELECT id_motorista FROM tb_motoristas WHERE email = '$email' and senha = '$senha'";
    $resultado = mysqli_query($con, $sql);
    $dados = mysqli_fetch_assoc($resultado);
    if(isset($dados["email"])){
      return true;
    }
    else{
      return false;
    }
  }

  function ehUsuario($con, $email, $senha){
    $sql = "SELECT id_usuario FROM tb_usuarios WHERE email = '$email' and senha = '$senha'";
    $resultado = mysqli_query($con, $sql);
    $dados = mysqli_fetch_assoc($resultado);
    if(isset($dados["id_usuario"])){
      return true;
    }
    else{
      return false;
    }
  }

  function dml(){

  }

  function dql(){
    
  }

  ?>