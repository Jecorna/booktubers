<?php
include 'conexion.php';
    session_start();
    $sqlusuarioexiste = "select * from booktubers_entradas where booktubers_entradas_titulos_categoria='".$_POST['categoria']."' and booktubers_entradas_usuarios_id=".$_POST['idusr']." and booktubers_entradas_titulos_id='".$_POST['Libros']."'";
    $resultusuarioexiste = mysqli_query($conexion, $sqlusuarioexiste);
    echo $sqlusuarioexiste;
    if (mysqli_num_rows($resultusuarioexiste) > 0)
    {
        $sqlactliga = "update booktubers_entradas set booktubers_entradas_ligavideo_alterna='".$_POST['liga']."' where booktubers_entradas_titulos_categoria='".$_POST['categoria']."' and booktubers_entradas_usuarios_id=".$_POST['idusr']." and booktubers_entradas_titulos_id='".$_POST['Libros']."'";
        $resultactliga = mysqli_query($conexion, $sqlactliga);
        $_SESSION['entorno']['categoria']=$_POST['categoria'];
        $_SESSION['entorno']['Libros']=$_POST['Libros'];
        header('Location: ../?ec=5');
    }
    else
    {
        $sqlentradacrea = "insert into booktubers_entradas (booktubers_entradas_usuarios_id,booktubers_entradas_titulos_categoria, booktubers_entradas_titulos_id,booktubers_entradas_ligavideo,booktubers_entradas_fechaentrada) values ('".$_POST['idusr']."','".$_POST['categoria']."','".$_POST['Libros']."','".$_POST['liga']."','".date("Y-m-d H:i:s")."')";
        $resultentradacrea = mysqli_query($conexion, $sqlentradacrea);
        echo $sqlentradacrea;
        header('Location: ../?ec=6');
    }
    
?>