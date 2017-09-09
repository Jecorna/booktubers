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
        
        
        $sqlusuarioexiste2 = "select * from booktubers_usuarios where booktubers_usuarios_email='".$_POST['email']."' and booktubers_usuarios_password='".md5($_POST['password'])."'";
        $resultusuarioexiste2 = mysqli_query($conexion, $sqlusuarioexiste2);
        if (mysqli_num_rows($resultusuarioexiste2) > 0)
        {
            session_start();
            while($rowp = mysqli_fetch_assoc($resultusuarioexiste2)) {
                $_SESSION['entorno']['usuario_id']=$rowp['booktubers_usuarios_id'];
                $_SESSION['entorno']['usuario_email']=$rowp['booktubers_usuarios_email'];
                $_SESSION['entorno']['usuario_nombre']=$rowp["booktubers_usuarios_nombre"];
                $_SESSION['entorno']['usuario_edad']=$rowp["booktubers_usuarios_edad"];
                $_SESSION['entorno']['usuario_nombrear']=$rowp["booktubers_usuarios_nombrear"];
            }
            header('Location: ../?ec=1');
        }
    }
    
?>