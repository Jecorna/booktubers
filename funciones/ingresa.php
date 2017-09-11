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
        while($rowp = mysqli_fetch_assoc($resultusuarioexiste)) {
            $_SESSION['entorno']['usuario_id']=$rowp['booktubers_usuarios_id'];
            $_SESSION['entorno']['usuario_email']=$_POST['uname'];
            $_SESSION['entorno']['usuario_nombre']=$rowp["booktubers_usuarios_nombre"];
            $_SESSION['entorno']['usuario_edad']=$rowp["booktubers_usuarios_edad"];
            $_SESSION['entorno']['usuario_nombrear']=$rowp["booktubers_usuarios_nombrear"];
        }
        header('Location: ../?ec=4');
    }
    else
    {
        header('Location: ../?ec=3');
    }
    
?>