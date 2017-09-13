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



  </form><br /><br />
  <center><table style='text-align: center;
  line-height: 40px;
  border-collapse: separate;
  border-spacing: 0;
  border: 2px solid #503882;
  width: 700px;
  margin: 50px auto;
  border-radius: .25rem;'>
    <thead>
    <tr style='background: #503882;
  color: #fff;
  border: none;padding: 0 15px 0 20px;'>
        <th>Categor&iacute;a</th>
        <th>Libro</th>
        <th>Fecha</th>
        <th>Liga</th>
        </tr>
    </thead>
    <tbody>";
        $sqlnumligas = "select * from booktubers_entradas be left join booktubers_titulos bt on be.booktubers_entradas_titulos_id=bt.booktubers_titulos_id where be.booktubers_entradas_usuarios_id=".$_SESSION['entorno']['usuario_id']." ";
        $resulnumligas = mysqli_query($conexion, $sqlnumligas);
        if (mysqli_num_rows($resulnumligas) > 0)
        {
            while($rownl = mysqli_fetch_assoc($resulnumligas)) {
                echo "<tr><td>".$rownl["booktubers_entradas_titulos_id"]."</td>
                <td>".$rownl["booktubers_titulos_titulo"]."</td>
                <td>".$rownl["booktubers_entradas_fechaentrada"]."</td>
                <td><a href='".$rownl["booktubers_entradas_ligavideo"]."' target='_blank'>".$rownl["booktubers_entradas_ligavideo"]."</a></td></tr>";
            }
        }
    echo "</tbody>
</table></center>
        </div>
      </div>
    </div>
  </div>
</div>";
     }
     
     /**
      * Función que carga el historial de las ligas subidas
      */
     
     function historial()
     {
        echo "dfdsfdsf<table><thead><th>Yo</th><tr><td>dd</td></tr></thead></table>";
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
                $ciudades.= "<option value='".$rowc["idCiudades"]."'>".$rowc["Ciudad"]."</option>";
            }
        }
        //$data="<option value='2'>Ciudad</option>";
        echo $ciudades;
     }
     
     /**
      * Actualiza liga
      */
     if($_POST['actualiza'])
     {
        include 'conexion.php';
        $sqlobtliga = "select * from booktubers_entradas where booktubers_entradas_titulos_categoria='".$_SESSION['entorno']['categoria']."' and booktubers_entradas_usuarios_id=".$_SESSION['entorno']['usuario_id']." and booktubers_entradas_titulos_id='".$_SESSION['entorno']['Libros']."'";
        $resultobtliga = mysqli_query($conexion, $sqlobtliga);
        if (mysqli_num_rows($resultobtliga) > 0)
        {
            while($rowac = mysqli_fetch_assoc($resultobtliga)) {
                $sqlactliga = "update booktubers_entradas set booktubers_entradas_ligavideo='".$rowac["booktubers_entradas_ligavideo_alterna"]."' where booktubers_entradas_titulos_categoria='".$_SESSION['entorno']['categoria']."' and booktubers_entradas_usuarios_id=".$_SESSION['entorno']['usuario_id']." and booktubers_entradas_titulos_id='".$_SESSION['entorno']['Libros']."'";
                $resultactliga = mysqli_query($conexion, $sqlactliga);
            }
        }
     }
    
?>