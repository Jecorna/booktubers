<?php
include 'funciones/funciones.php';
session_start();
if(isset($_POST["pais"]) && isset($_POST["ciudad"]))
{
    # aqui gestionariamos los valores del formulario
    echo "OK";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" href="images/favicon.png">
<title>Booktubers</title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- Google Ffonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!-- FontAweasome Icon -->
<link  href="css/font-awesome.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="css/jquery.circliful.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" >
<link href="css/booktubers.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather|Raleway" rel="stylesheet">

<!-- PNotify -->
    <link href="pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

</head>
<!-- NAVBAR
================================================== -->
<body>
<div class="navbar-wrapper">
  <div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#homeSlider">Concurso Internacional de Booktubers</a> </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="#home">Inicio</a></li>
          <li><a href="#comop">¿Cómo participo?</a></li>
          <li><a href="#about">Bases</a></li>
          <li><a href="#team">Consejos</a></li>
          <?php
            if(!$_SESSION['entorno']['usuario_email'])
            {
                echo "<li><button type='button' class='btn btn-book btn-lg' data-toggle='modal' data-target='#myModal'>Mi cuenta</button></li>";
            }
            else
            {
                echo "<li><a href='funciones/salir.php'><button type='button' class='btn btn-book btn-lg'>Salir</button></a></li>";
            }
          ?>
          <!--
<li><button type="button" class="btn  btn-info" data-toggle="modal" data-target="#trabajando" style="margin-left:40px; margin-top:5px; margin-right: -15px;">Registro</button></li>
-->
          <li> <a href="#libros">Libros Participantes</a></li>
          <li><a target="_blank" href="http://www.fondodeculturaeconomica.com/invitaciones/2017/ConvocatoriaBooktubers2017.pdf">Convocatoria</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Carousel
    images 1600x887================================================== -->

<div id="home">
  <div id="homeSlider" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
              <div class="img-ri">
        <img class="img-responsive img-princ" src="images/Recursos/bannermorado.jpg" alt="">
      </div>
          <div class="carousel-caption">
            <div class="cont-princ">
              <div class="slide-logo img-responsive"><img class="img-logo-b" src="images/Recursos/logoOrilladelViento.png" alt=""></div>
              <div class="texto-intr">
                <p class="sltext">El Fondo de Cultura Económica te está buscando. Lee uno de nuestros libros, graba tu reseña y comparte tus experiencias lectoras, ¡conviértete en Booktuber!</p>
              </div>

            </div>
            <div class="img-logo-b">
              <?php
                if(!$_SESSION['entorno']['usuario_email'])
                {
                    echo "<a class='getst' href='#registro' role='button'>Crea una cuenta</a>";
                }
                else
                {
                    echo "<a class='getst' href='#registro' role='button'>Sube Tus videos aqui</a>";
                }
              ?>

            </div>
            </div>

      </div>
      <!--<div class="item" style="background-image:url(images/Recursos/Librito-BT.png);">
        <div class="container">
          <div class="carousel-caption">
            <div class="slide-logo"><img src="images/Recursos/logo-nav.png" alt=""></div>
            <div class="texto-intr">
              <p class="sltext"><ul>
                <li><a href="#">Ingresa</a></li>
                <li><a href="#comop">¿Cómo participo?</a></li>
                <li><a href="#">Bases</a></li>
                <li><a href="#">Ver Convocatoria</a></li>
              </ul></p>
            </div>
            <a class="getst" href="#" role="button">Ver convocatoria</a> </div>
        </div>
      </div>-->
    </div>
    
  </div>
</div>
<!-- /carousel Close -->

<!-- Service Section
    ================================================== -->
<div class="comop" id="comop">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <img class="img-como" src="images/Recursos/Como2017.png" alt="">
      </div>
      <div class="col-md-9">
        <div class="txt-como">
          <ol>
          	                <li> Si tienes entre 9 y 11 años de edad participa en la categoría A.</li>
          	                <li> Si tienes entre 12 y 15 años de edad participa en la categoría B.</li>
                            <li> Si tienes entre 16 y 19 años de edad participa en la categoría C.</li>
          	                <li> Elige uno de los siguientes libros de las colecciones para niños y jóvenes del FCE:
          		                <ul style=" list-style: none;">
          			                <li><span class="lespecial">Categoría A</span>
          				                <ul class="books">
          					                <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=100421L"><i>Volar,</i> de Yolanda Reyes</a></li>
          					                <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=100419L"><i>Quiero ser la que seré,</i> de Silvia Molina</a></li>
          					                <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=100417L"><i>Sombras en el arcoíris,</i> de Mónica B. Brozon</a></li>
          					                <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=100418L"><i>Tito y el misterioso Amicus,</i> de Joel Franz Rosell</a></li>
          				                </ul>
          			                <li><span class="lespecial">Categoría B</span>
          				                <ul class="books">
          					                <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=100395L"><i>El cristal con que se mira,</i> de Alicia Molina</a></li>
          					                <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=100145L"><i>Los muchachos no escriben historias de amo,</i> de Brian Keaney</a></li>
          					                <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=100420L"><i>La Casa de los Tres Perros,</i> de Agustín Cadena </a></li>
          					                <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=100392L"><i>Reckless. El goyl de jade,</i> de Cornelia Funke</a></li>
          				                </ul>
          			                </li>
                                <li><span class="lespecial">Categoría C</span>
                                  <ul class="books">
                                    <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=102729L"><i>El corazón de Juliette,</i> de Tahereh Mafi</a></li>
                                    <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=102730L"><i>Nashville o el juego del lobo,</i> de Antonia Michaelis</a></li>
                                    <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=102721L"><i>El camino de los muertos,</i> de Kevin Brooks</a></li>
                                    <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=102731L"><i>Última escala en ninguna parte,</i> de Ignacio Padilla</a></li>
                                  </ul>
                                </li>
          		                </ul>
          	                </li>
          	                <li> Ve a tu librería más cercana o cómpralo en nuestra <a href="https://elfondoenlinea.com/Libreria.aspx">librería virtual</a></li>
          	                <li> Cuando hayas terminado tu lectura, te invitamos a pensar qué te pareció,  y a contarnos tus opiniones, graba tu video de <b>3 minutos</b> máximo en un celular, tableta o computadora. El nombre de tu video debe contener el hashtag #LeoyCompartoFCE + título del libro que hayas elegido: #LeoyCompartoFCE "Título del libro"</li>
          	                <li> Selecciona el vídeo que desees compartir. ¡Súbelo a <a target="_blank" href="http://www.youtube.com/">YouTube</a>! En este enlace puedes encontrar ayuda <a href="https://support.google.com/youtube/answer/57407?hl=mx" target="_blank" class="ayuda">ayuda</a>
          		                <ul>
          			                <li>Accede a YouTube y crea tu cuenta.</li>
          			                <li>Haz clic donde dice Subir video (parte superior de la página).</li>
          			                <li>Selecciona el video que desees subir.</li>
          			                <li>Mientras el video se carga, puedes agregar información, título, etiquetas y descripción.</li>
          			                <li>Cuando haya quedado como tú quieres, haz clic en Publicar para terminar de subirlo a YouTube.</li>
                                <li>Selecciona la opción Compartir (<i>Share</i>) y copia el enlace que aparece.</li>
          		                </ul>
          	                </li>
          	                <li> Regístrate en nuestra página y pega el enlace de tu video.
                                  Asegúrate de que funciona correctamente.
          	                </li>
                          <ol>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / Services Close -->

<!-- About Us Section
    ================================================== -->
<div class="aboutus" id="about">
  <div class="container lbla">
    <div class="clientsay">
      <img src="images/Recursos/bases.png" alt="">
     </div>
    <div class="row">
      <div class="col-md-4">
        <div class="txt_bases">
          <ul>
            <li>
              A. La convocatoria estará abierta a participantes de 9 a 19 años de edad, con un video en
              idioma español, sin importar el territorio geográfico en el que residan. La participación en
              este concurso implica la total aceptación de las bases de esta convocatoria.
            </li>
            <li>
              B. El premio del concurso Booktubers 2017 #LeoyCompartoFCE consistirá en un
            reconocimiento, una tableta, un paquete de libros del FCE y un taller en el Centro de
            Cultura Digital.
            </li>
            <li>
              C. El video deberá ser de <span class="fechasr">1 a 3 minutos</span> de duración, de no ser así, será descalificado. Se
              valorarán las opiniones personales de los participantes más que los resúmenes de los
              libros
            </li>
            <li>
              D. Se descalificarán aquellos videos que se limiten a contar la trama, específicamente
              el final.
            </li>
          </ul>
        </div>
        <!-- carousel con libros<div class="about_item">
          <h3 class="about_title hilight">Libros participantes</h3>
          <div class="who_weare">
            <div class="whbanner carousel slide" id="whBanner">
              <!-- Carousel items
              <div class="carousel-inner">
                <div class="item active"> <img src="https://www.fondodeculturaeconomica.com/portadas/FEP/1000/FG10555.jpg" alt=""> </div>
                <!--/item--
                <div class="item"> <img src="https://www.fondodeculturaeconomica.com/portadas/FEP/1000/FG10544.jpg" alt=""> </div>
                <!--/item--
                <div class="item"> <img src="https://www.fondodeculturaeconomica.com/portadas/FEP/1000/FG10395.jpg" alt=""> </div>
                <!--/item-
              </div>
              <!--/carousel-inner
              <a class="left-control" href="#whBanner" data-slide="prev"><i class="fa fa-angle-left"></i></a> <a class="right-control" href="#whBanner" data-slide="next"><i class="fa  fa-angle-right"></i></a> </div>
            <p>Fusce velit est, blandit quis, scelerisque nec, faucibus quis ips Fusce in nisl ut elit ultrices hendrerit.</p>
            <p>Suspendisse lobortis ante accumsan est. Vivamus scelerisqu accumsan dolor.Aenean diam felis, pulvinar at, pellentes qued sed aliquet vel tellus.</p>
          </div>
        </div>
      -->
      </div>
      <div class="col-md-4">
        <div class="txt_bases">
            <ul>
              <li>
                E. Cada participante deberá ser registrado en nuestra página
                www.fondodeculturaeconomica.com por un adulto responsable
              </li>
              <li>
                F. Los videos se recibirán desde el <span class="fechasr">1 de septiembre de 2017 hasta el 31 de enero de 2018.</span>
                No se aceptarán extemporáneos bajo ninguna circunstancia.
              </li>
              <li>
                G. El Fondo de Cultura Económica designará un jurado compuesto por cinco prestigiosos
                autores y booktubers que elegirán dos videos ganadores, uno por cada categoría, y
                otorgarán menciones honoríficas si así lo consideran.
              </li>
            </ul>


        </div>
      </div>
      <div class="col-md-4">
        <div class="txt_bases">
          <ul>
            <li>
              H. El fallo del jurado será inapelable y se dará a conocer por correo electrónico a los
              participantes el <span class="fechasr">16 de marzo de 2018</span>, en la página del FCE y en las redes sociales. Ese
              mismo día se dará a conocer el lugar de la ceremonia de premiación, la cual se llevará a
              cabo el <span class="fechasr">31 de marzo de 2018.</span>
              </li>
            <li>
              I. Cualquier caso no previsto en esta convocatoria será resuelto por el Fondo de Cultura
            Económica
            </li>
            <li>
              J. Los datos personales de los participantes son de carácter confidencial, y así serán tratados
            de conformidad con las disposiciones jurídicas aplicables
            </li>
            <li>
              K. En caso de dudas, pueden comunicarse a las oficinas del Fondo de Cultura Económica
            en el teléfono 5554491800 o a los correos edigital@fondodeculturaeconomica.com y
            hdelarosa@fondodeculturaeconomica.com
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / about us close -->
<div class="clearfix"></div>
<!-- video_uno
    ================================================== -->
    <div class="comop" id="comop2">
  <div class="container">
    <div class="row" style="height: 120%;">
      
      <div class="col-md-12">
        <div class="txt-como">
            <center><h3>Alberto Chimal y Raquel Castro les dan consejos para hacer una buena video reseña</h3><br /></center>
            <center><a href="#registro">Registrate</a></center><br /><br />
            <center><iframe style="width: 80%;" src="http://www.youtube.com/embed/R1_q_aAr8Fg" height="615" allowfullscreen="" frameborder="0">
            </iframe></center>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / video_uno  Close -->
<div class="clearfix"></div>
<!-- Our Team Section
    ================================================== -->
<div class="ourteam" id="libros">
  <div class="container lbla">
    <div class="head_section">
      <h1>Libros participantes</h1>
      <div class="team-carousel-control"> <a class="left" href="#team-carousel" data-slide="prev"><i class=" fa fa-angle-left"></i></a> <a class="right" href="#team-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a> </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div id="team-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">
              <div class="col-sm-3">
                <div class="member">
                  <div class="photo"> <img  src="https://www.fondodeculturaeconomica.com/portadas/FEP/1000/FG10555.jpg" alt="" class="img-circle"  /> </div>
                  <div class="info">
                    <h4 class="name">Volar</h4>
                    <span class="designation">Reyes, Yolanda</span>
                    <h5>Categoría A </h5>
                    <ul class="member_social">
                      <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=100421L"><i class="fa fa-shopping-cart fa-4x" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="member">
                  <div class="photo"> <img  src="https://www.fondodeculturaeconomica.com/portadas/FEP/1000/FG10536.jpg" alt="" class="img-circle"  /> </div>
                  <div class="info">
                    <h4 class="name">Quiero ser la que seré</h4>
                    <span class="designation">Molina, Silvia</span>
                    <h5>Categoría A </h5>
                    <ul class="member_social">
                      <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=100419L"><i class="fa fa-shopping-cart fa-4x" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="member">
                  <div class="photo"> <img  src="https://www.fondodeculturaeconomica.com/portadas/FEP/1000/FG10512.jpg" alt="" class="img-circle" /> </div>
                  <div class="info">
                    <h4 class="name">Sombras en el arcoíris</h4>
                    <span class="designation">Brozon, Mónica B.</span>
                    <h5>Categoría A </h5>
                    <ul class="member_social">
                      <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=100417L"><i class="fa fa-shopping-cart fa-4x" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="member">
                  <div class="photo"> <img  src="https://www.fondodeculturaeconomica.com/portadas/FEP/1000/FG10539.jpg" alt="" class="img-circle"  /> </div>
                  <div class="info">
                    <h4 class="name">Tito y el misterioso Amicus</h4>
                    <span class="designation">Rosell, Joel Franz</span>
                    <h5>Categoría A </h5>
                    <ul class="member_social">
                      <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=100418L"><i class="fa fa-shopping-cart fa-4x" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item ">
            <div class="row">
              <div class="col-sm-3">
                <div class="member">
                  <div class="photo"> <img  src="https://www.fondodeculturaeconomica.com/portadas/FEP/9000/FG9440.jpg" alt="" class="img-circle"  /> </div>
                  <div class="info">
                    <h4 class="name">El cristal con que se mira</h4>
                    <span class="designation">Molina, Alicia</span>
                    <h5>Categoría B</h5>
                    <ul class="member_social">
                      <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=100395L"><i class="fa fa-shopping-cart fa-4x" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="member">
                  <div class="photo"> <img  src="https://www.fondodeculturaeconomica.com/portadas/FEP/5000/FG5680.jpg" alt="" class="img-circle"  /> </div>
                  <div class="info">
                    <h4 class="name">Los muchachos no escriben historias de amor</h4>
                    <span class="designation">Keaney, Brian</span>
                    <h5>Categoría B</h5>
                    <ul class="member_social">
                      <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=100145L"><i class="fa fa-shopping-cart fa-4x" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="member">
                  <div class="photo"> <img  src="https://www.fondodeculturaeconomica.com/portadas/FEP/1000/FG10544.jpg" alt="" class="img-circle" /> </div>
                  <div class="info">
                    <h4 class="name">La Casa de los Tres Perros</h4>
                    <span class="designation">Cadena Rubio, Agustín</span>
                    <h5>Categoría B</h5>
                    <ul class="member_social">
                      <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=100420L"><i class="fa fa-shopping-cart fa-4x" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="member">
                  <div class="photo"> <img  src="https://www.fondodeculturaeconomica.com/portadas/FEP/9000/FG9223.jpg" alt="" class="img-circle"  /> </div>
                  <div class="info">
                    <h4 class="name">Reckless. El goyl de jade</h4>
                    <span class="designation">Funke, Cornelia, y Lionel Wigram</span>
                    <h5>Categoría B</h5>
                    <ul class="member_social">
                      <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=100392L"><i class="fa fa-shopping-cart fa-4x" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item ">
            <div class="row">
              <div class="col-sm-3">
                <div class="member">
                  <div class="photo"> <img  src="https://www.fondodeculturaeconomica.com/portadas/FEP/1000/FG10395.jpg" alt="" class="img-circle"  /> </div>
                  <div class="info">
                    <h4 class="name">El corazón de Juliette</h4>
                    <span class="designation">Mafi, Tahereh</span>
                    <h5>Categoría  C</h5>
                    <ul class="member_social">
                      <li><a target="_blank" href="hhttps://elfondoenlinea.com/Detalle.aspx?ctit=102729L"><i class="fa fa-shopping-cart fa-4x" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="member">
                  <div class="photo"> <img  src="https://www.fondodeculturaeconomica.com/portadas/FEP/1000/FG10551.jpg" alt="" class="img-circle"  /> </div>
                  <div class="info">
                    <h4 class="name">Nashville o el juego del lobo</h4>
                    <span class="designation">Michaelis, Antonia</span>
                    <h5>Categoría  C</h5>
                    <ul class="member_social">
                      <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=102730L"><i class="fa fa-shopping-cart fa-4x" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="member">
                  <div class="photo"> <img  src="https://www.fondodeculturaeconomica.com/portadas/FEP/9000/FG9536.jpg" alt="" class="img-circle" /> </div>
                  <div class="info">
                    <h4 class="name">El camino de los muertos</h4>
                    <span class="designation">Brooks, Kevin</span>
                    <h5>Categoría  C</h5>
                    <ul class="member_social">
                      <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=102721L"><i class="fa fa-shopping-cart fa-4x" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="member">
                  <div class="photo"> <img  src="https://www.fondodeculturaeconomica.com/portadas/FEP/1000/FG10550.jpg" alt="" class="img-circle"  /> </div>
                  <div class="info">
                    <h4 class="name">Última escala en ninguna parte</h4>
                    <span class="designation">Padilla, Ignacio</span>
                    <h5>Categoría  C</h5>
                    <ul class="member_social">
                      <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=102731L"><i class="fa fa-shopping-cart fa-4x" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- / our team close -->
<div class="clearfix"></div>
<!-- Video 02
    ==================================================
    <div class="video_uno">
    <div id="videoDiv">
    <div id="videoBlock">
    <video preload="preload" id="video" controls>
    <source src="images/Recursos/Tonnybeth_convocatoria.mp4" type="video/mp4"></source>
    </video>
    <div id="videoMessage">
    <h1>Tonnybeth te invita a participar</h1>
    <p class="videoClick" >
    <a href="#registro">Registrate</a>
    </p>
    </div>
    </div>
    </div>
    </div>
 / video Close Close -->

<div class="clearfix"></div>

<!--BLOG Section
    ================================================== -->
<div class="blog" id="team">
  <div class="container">
    <div class="head_section">

        <img src="images/Recursos/Consejos.png" alt="">


    </div>
    <div class="row">
      <div class="txt_consejos lbla">
        <h3>10 CONSEJOS PARA HACER TUS VIDEORESEÑAS</h3>
          <ol>
              <li>Elige el libro que más te guste, así será más fácil que transmitas tus emociones a los demás.</li>
              <li>No necesitas una súper cámara, la de un celular o tableta sirve; lo que importa es que te sientas motivado. Pide ayuda si te cuesta grabarte a ti mismo.</li>
              <li>Corta (edita) los pedazos del video repetitivos o que sientas que no tienen interés para los demás. </li>
              <li>¡Da tu opinión! Piensa si el tema te parece interesante y está bien tratado, platica si te gusta o no y por qué. Tus comentarios son únicos.</li>
              <li>Puedes mencionar que hay sucesos inesperados pero no digas cuáles con el fin de que despiertes en otros lectores las ganas de leerlo.</li>
              <li>Decir algo interesante en poco tiempo es mejor que hacer un video largo, así que resume tu experiencia en menos de tres minutos. </li>
              <li>No cuentes todo el libro, y mucho menos el final, así despertarás la curiosidad del que te mira; recuerda que a todos nos gustan las sorpresas.</li>
              <li>Busca un nombre que te guste para tu canal, puede ser el tuyo, un apodo o alguna otra cosa con la que te sientas identificado.</li>
              <li>Mira los videos de otros Booktubers para inspirarte, pero sé tú mismo, siéntete cómodo frente a la cámara y diviértete. </li>
          </ol>
      </div>
      <div class="blog-carousel-control"> <a class="left fa fa-angle-left" href="#blogCarousel" data-slide="prev"></a> <a class="right fa fa-angle-right" href="#blogCarousel" data-slide="next"></a> </div>
      <div id="blogCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">
              <div class="col-sm-4">
                <div class="post-item">
                  <div class="post-headre">
                    <div class="post-image"><iframe width="370" height="225" src="https://www.youtube.com/embed/GsYqB8hmyYs" frameborder="0" allowfullscreen></iframe></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="post-item">
                  <div class="post-headre">
                    <div class="post-image"><iframe width="370" height="225" src="https://www.youtube.com/embed/Qg_tV3yVrXI" frameborder="0" allowfullscreen></iframe></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="post-item">
                  <div class="post-headre">
                    <div class="post-image"><iframe width="370" height="225" src="https://www.youtube.com/embed/kYCO3XPM_o8" frameborder="0" allowfullscreen></iframe></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-sm-4">
                <div class="post-item">
                  <div class="post-headre">
                    <div class="post-image"><iframe width="370" height="225" src="https://www.youtube.com/embed/MO7Id6hPaV0" frameborder="0" allowfullscreen></iframe></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="post-item">
                  <div class="post-headre">
                    <div class="post-image"><iframe width="370" height="225" src="https://www.youtube.com/embed/y68ahrQk_i8" frameborder="0" allowfullscreen></iframe></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="post-item">
                  <div class="post-headre">
                    <div class="post-image"><iframe width="370" height="225" src="https://www.youtube.com/embed/UYPLtFmR6Ok" frameborder="0" allowfullscreen></iframe></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-sm-4">
                <div class="post-item">
                  <div class="post-headre">
                    <div class="post-image"><iframe width="370" height="225" src="https://www.youtube.com/embed/56vbocqKun0" frameborder="0" allowfullscreen></iframe></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="post-item">
                  <div class="post-headre">
                    <div class="post-image"><iframe width="370" height="225" src="https://www.youtube.com/embed/Doic81gjut4" frameborder="0" allowfullscreen></iframe></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="post-item">
                  <div class="post-headre">
                    <div class="post-image"><iframe width="370" height="225" src="https://www.youtube.com/embed/dscPLxh3x0g" frameborder="0" allowfullscreen></iframe></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / blog Close -->
<div class="clearfix"></div>
<?php
    if(!$_SESSION['entorno']['usuario_email'])
    {
                              ?>
<div class="registro" id="registro">
  <div class="container">
    <div class="head_section">
      <h2>Crea tu cuenta</h2>
    </div>
  </div>
  <div class="contact_wrap">
    <div class="row">
      <div class="col-sm-12">
        <div class="query">
          <form name="registro" id="registro" method="post" action="funciones/registro.php" >
            <div class="form-group">
              <span class="input-group-addon">Nombre del participante</span>
              <input type="text" pattern=".{3,}"  title="3 caracteres mínimo" class="form-control textfild" name="nombre" id="nombre" placeholder="Nombre del participante" required>
            </div>
            <div class="form-group">
              <span class="input-group-addon">Correo del paticipante</span>
              <input type="email" name="email" id="email" class="form-control textfild" placeholder="Correo del participante" required>
            </div>
            <div class="form-group">
              <span class="input-group-addon">Nombre del adulto responsable</span>
              <input type="text" pattern=".{3,}"  title="3 caracteres mínimo" class="form-control textfild" name="nombrear" id="nombrear" placeholder="Nombre del adulto responsable" required>
            </div>
            <div class="form-group">
              <span class="input-group-addon">Correo del adulto responsable</span>
              <input type="email" name="emailar" id="emailar" class="form-control textfild" placeholder="Correo del adulto responsable" required>
            </div>
            <div class="input-group">
              <span class="input-group-addon">Edad</span>
                    <select size="1" name="edad" id="edad" class="form-control">
                    		<option value="9">9</option>
                    		<option value="10">10</option>
                    		<option value="11">11</option>
                    		<option value="12">12</option>
                    		<option value="13">13</option>
                    		<option value="14">14</option>
                    		<option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
              	       </select>
                     </div>
                     <div class="input-group">
                         <span class="input-group-addon">Escuela</span>
                         <input name="escuela" type="text" id="escuela" class="form-control" placeholder="Escuela" required="" />
                     </div>
                     <div class="input-group">
                          <span class="input-group-addon">Pais</span>
                          <select name="pais" id="pais" class="form-control">
                              <option value='0'>Selecciona un pais</option>
                              <?php
                                paises();
                              ?>
                          </select>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">Ciudad</span>
                                <select name="ciudad" id="ciudad" class="form-control" disabled>
                                </select>
                            </div>
                            <div class="form-group">
                            <span class="input-group-addon">Contraseña</span>
                            <input type="password" pattern=".{8,}"  title="8 caracteres mínimo" class="form-control textfild" name="password" id="password" placeholder="Ingrese contraseña" required>
                            </div>
            <input type="submit" value="Crear" class="submit-btn" onClick="">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
    }
    else
    {
        categorias();
    }
?>

<!-- /Parte de llenar video-->
<!-- / contact Close -->

<!-- FOOTER Section
    ================================================== -->
<div class="footer">
  <div class="container lbla">
    <p>© 2017 Fondo de cultura ecónomica - Todos los derechos reservados </p>
    <ul>
      <li><a target="_blank" href="https://www.gob.mx/cultura"><img src="images/Recursos/logo1.png" alt=""></a></li>
      <li><a target="_blank" href="https://www.gob.mx/sre"><img src="images/Recursos/logo2.png" alt=""></a></li>
      <li><a target="_blank" href="http://www.centroculturadigital.mx/"><img src="images/Recursos/logo3.png" alt=""></a></li>
      <li><a target="_blank" href="https://www.fondodeculturaeconomica.com/Editorial.aspx"><img src="images/Recursos/logo4.png" alt=""></a></li>
      <li><a target="_blank" href="http://www.sep.gob.mx/"><img src="images/Recursos/logo5.png" alt=""></a></li>
      <li><a target="_blank" href="https://www.gob.mx/amexcid"><img src="images/Recursos/logo6.png" alt=""></a></li>

    </ul>
  </div>
</div>
<!-- / contact Close -->
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Acceder</h4>
        </div>
        <div class="modal-body">
          <form action="funciones/ingresa.php" method="POST">

              <label class="input-group-addon"><b>Correo electrónico</b></label>
              <input class="form-control form-control-b textfild" type="text" placeholder="Correo" name="uname" required>
              <label class="input-group-addon"><b>Contraseña</b></label>
              <input class="form-control form-control-b textfild" type="password" placeholder="Contraseña" name="psw" required>
              <button class="btn btn-book tcien" type="submit">Ingresa</button>
              <input class="form-control-b textfild" type="checkbox" checked="checked"> Recuerdame
              <span class="psw">¿Olvidaste tu <a href="#">contraseña?</a></span>


          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-book" data-dismiss="modal">Cerrar</button>
        </div>
      </div>

    </div>
  </div>


<!-- modal estamos trabajando-->
<div class="modal fade" id="trabajando" role="dialog">
  <div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Trabajando</h4>
  </div>
  <div class="modal-body">
    <h1>Estamos trabajando</h1>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default btn-book" data-dismiss="modal">Cerrar</button>
  </div>
</div>

</div>
</div>
<!-- modal estamos trabajando-->
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/onepagenav.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.circliful.js"></script>
<script type="text/javascript" src="js/jquery.tubular.1.0.js"></script>
<script type="text/javascript" src="js/docs.min.js"></script>
<script type="text/javascript">
$(document).on("ready",function(){
    function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        }
        var ecode = getParameterByName('ec');
        if(ecode)
        {
            $("html,body").animate({ scrollTop : $("#registro").offset().top  }, 1500 );
            if(ecode==1)
            {
                new PNotify({
                    title: 'Usuario Registrado',
                    text: 'Usuario Registrado exitosamente, ahora puedes subir las ligas de tus videos',
                    type: 'success',
                    styling: 'bootstrap2'
                });
            }
            if(ecode==2)
            {
                new PNotify({
                    title: 'Usuario existente',
                    text: 'Usuario previamente registrado, intenta nuevamente con otro correo',
                    type: 'error',
                    styling: 'bootstrap2'
                });
            }
            if(ecode==3)
            {
                new PNotify({
                    title: 'Usuario y/o contrasena incorrectos',
                    text: 'Recuerda si usaste mayúsculas o mnúsculas, acentuación o signos especiales',
                    type: 'error',
                    styling: 'bootstrap2'
                });
            }
            if(ecode==4)
            {
                new PNotify({
                    title: 'Bienvenido',
                    text: 'Se ha cargado exitosamente tu sesión y puedes continuar subiendo más videos',
                    type: 'success',
                    styling: 'bootstrap2'
                });
            }
            if(ecode==5)
            {
                var txt;
                var r = confirm("Ya existe una liga asociada a este video. ¿Desea reemplazarla?");
                if (r == true) {
                    $.post('funciones/funciones.php', { actualiza: 1 }, function(data,status){
                        new PNotify({
                            title: 'Liga Actualizada',
                            text: 'Se ha actualizado la liga',
                            type: 'success',
                            styling: 'bootstrap2'
                        });
                    });
                } else {
                    new PNotify({
                        title: 'Liga no actualizada',
                        text: 'Se ha conservado la liga anterior',
                        type: 'info',
                        styling: 'bootstrap2'
                    });
                }
            }
            if(ecode==6)
            {
                new PNotify({
                    title: 'Liga subida con éxito',
                    text: 'Espera tu calificación, será enviada una notifiación a tu correo electrónico una vez haya sido revisada',
                    type: 'success',
                    styling: 'bootstrap2'
                });
            }
        }
});
</script>
<script type="text/javascript" src="js/selects.js"></script>
<!-- PNotify -->
    <script src="pnotify/dist/pnotify.js"></script>
    <script src="pnotify/dist/pnotify.buttons.js"></script>
    <script src="pnotify/dist/pnotify.nonblock.js"></script>
</body>
</html>