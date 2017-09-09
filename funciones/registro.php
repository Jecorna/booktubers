<?php
include 'conexion.php';
    
    $sqlusuarioexiste = "select * from booktubers_usuarios where booktubers_usuarios_email='".$_POST['email']."'";
    $resultusuarioexiste = mysqli_query($conexion, $sqlusuarioexiste);
    if (mysqli_num_rows($resultusuarioexiste) > 0)
    {
        header('Location: ../?ec=2');
    }
    else
    {
        $sqlusuariocrea = "insert into booktubers_usuarios (booktubers_usuarios_nombre,booktubers_usuarios_nombrear, booktubers_usuarios_email,booktubers_usuarios_emailar,booktubers_usuarios_edad, booktubers_usuarios_escuela,booktubers_usuarios_ciudad,booktubers_usuarios_pais,booktubers_usuarios_fecalta,booktubers_usuarios_password) values ('".$_POST['nombre']."','".$_POST['nombrear']."','".$_POST['email']."','".$_POST['emailar']."',".$_POST['edad'].",'".$_POST['escuela']."','".$_POST['ciudad']."','".$_POST['pais']."','".date("Y-m-d H:i:s")."','".md5($_POST['password'])."')";
        $resultusuariocrea = mysqli_query($conexion, $sqlusuariocrea);
        session_start();
        $_SESSION['entorno']['usuario_email']=$_POST['email'];
        header('Location: ../?ec=1');
    }
    
?>