<?php
include 'conexion.php';
    echo $_POST['uname']."<br />";
    echo $_POST['psw']."<br />";
    $sqlusuarioexiste = "select * from booktubers_usuarios where booktubers_usuarios_email='".$_POST['uname']."' and booktubers_usuarios_password='".md5($_POST['psw'])."'";
    echo $sqlusuarioexiste;
    $resultusuarioexiste = mysqli_query($conexion, $sqlusuarioexiste);
    if (mysqli_num_rows($resultusuarioexiste) > 0)
    {
        session_start();
        $_SESSION['entorno']['usuario_email']=$_POST['uname'];
        header('Location: ../?ec=1');
    }
    else
    {
        header('Location: ../?ec=3');
    }
    
?>