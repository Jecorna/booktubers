<?php
header('Content-Type: text/html; charset=UTF-8');
include 'conexion.php';
session_start();
    
    /**
     * Función que carga las categorías de acuerdo a la edad
     */
     function categorias()
     {
        include 'conexion.php';
        $opciones='';
        if($_SESSION['entorno']['usuario_edad']>8 && $_SESSION['entorno']['usuario_edad']<12)
        {
            $categoria='A';
            $sqltitulos = "select * from booktubers_titulos where booktubers_titulos_categoria='".$categoria."' order by booktubers_titulos_id asc";
            $resulttitulos = mysqli_query($conexion, $sqltitulos);
            if (mysqli_num_rows($resulttitulos) > 0)
            {
                while($rowp = mysqli_fetch_assoc($resulttitulos)) {
                    $opciones.="<option value='".$rowp["booktubers_titulos_id"]."'>".$rowp["booktubers_titulos_titulo"]." ( ".$rowp["booktubers_titulos_autor"]." )</option>";
                }
            }
        }
        if($_SESSION['entorno']['usuario_edad']>11 && $_SESSION['entorno']['usuario_edad']<16)
        {
            $categoria='B';
            $sqltitulos = "select * from booktubers_titulos where booktubers_titulos_categoria='B' order by booktubers_titulos_id asc";
            $resulttitulos = mysqli_query($conexion, $sqltitulos);
            if (mysqli_num_rows($resulttitulos) > 0)
            {
                while($rowp = mysqli_fetch_assoc($resulttitulos)) {
                    $opciones.="<option value='".$rowp["booktubers_titulos_id"]."'>".$rowp["booktubers_titulos_titulo"]." ( ".$rowp["booktubers_titulos_autor"]." )</option>";
                }
            }
        }
        if($_SESSION['entorno']['usuario_edad']>15 && $_SESSION['entorno']['usuario_edad']<20)
        {
            $categoria='C';
            $sqltitulos = "select * from booktubers_titulos where booktubers_titulos_categoria='".$categoria."' order by booktubers_titulos_id asc";
            $resulttitulos = mysqli_query($conexion, $sqltitulos);
            if (mysqli_num_rows($resulttitulos) > 0)
            {
                while($rowp = mysqli_fetch_assoc($resulttitulos)) {
                    $opciones.="<option value='".$rowp["booktubers_titulos_id"]."'>".$rowp["booktubers_titulos_titulo"]." ( ".$rowp["booktubers_titulos_autor"]." )</option>";
                }
            }
        }
        echo "<div class='registro' id='registro'>
  <div class='container'>
    <div class='head_section'>
        <h1>".$_SESSION['entorno']['usuario_nombre']." </h1>
      <h2>Sube tus videos aqu&iacute;</h2>
    </div>
  </div>
  <div class='contact_wrap'>
    <div class='row'>
      <div class='col-sm-12'>
        <div class='query'>
          <form action='funciones/subirliga.php' method='POST'>

      <label class='input-group-addon'><b>Categoria</b></label>
      <input class='form-control form-control-b textfild' type='text' name='categoria' value='".$categoria."' readonly='true' required>
      <label class='input-group-addon'><b>Escoge un Libro</b></label>
      <select class='form-control' name='Libros'>
        ".$opciones."
      </select>
      <label class='input-group-addon'><b>Inserta tu liga</b></label>
      <input class='form-control form-control-b textfild' type='text'  pattern='.{8,}'  title='Liga demasiada corta' name='liga' placeholder='https://youtu.be/_ejemplo' required>
      <input type='hidden' name='idusr' value='".$_SESSION['entorno']['usuario_id']."'>
      <button class='btn btn-book tcien' type='submit'>Carga</button>



  </form>
        </div>
      </div>
    </div>
  </div>
</div>";
     }
     
     /**
      * Función que carga los países
      */
      
     function paises()
     {
        include 'conexion.php';
        $sqltitulos = "SELECT * FROM Paises ORDER BY Pais";
        $resulttitulos = mysqli_query($conexion, $sqltitulos);
        if (mysqli_num_rows($resulttitulos) > 0)
        {
            while($row = mysqli_fetch_assoc($resulttitulos)) {
                echo "<option value='".$row["Codigo"]."'>".$row["Pais"]."</option>";
            }
        }
     }
     
     /**
      * Adquiere el post del pais
      */
     if($_POST['idpais'])
     {
        include 'conexion.php';
        $sqlciudades = "SELECT * FROM Ciudades where Paises_Codigo='".$_POST['idpais']."' ORDER BY Ciudad";
        $resultciudades = mysqli_query($conexion, $sqlciudades);
        $ciudades='';
        if (mysqli_num_rows($resultciudades) > 0)
        {
            while($rowc = mysqli_fetch_assoc($resultciudades)) {
                $ciudades.= "<option value='".$rowc["idciudades"]."'>".$rowc["Ciudad"]."</option>";
            }
        }
        //$data="<option value='2'>Ciudad</option>";
        echo $ciudades;
     }
    
?>