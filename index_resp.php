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
<script type="text/javascript">
/**
 * Funcion que se ejecuta al seleccionar una opcion del primer select
 */
function cargarSelect2(valor)
{
    /**
     * Este array contiene los valores sel segundo select
     * Los valores del mismo son:
     *  - hace referencia al value del primer select. Es para saber que valores
     *  mostrar una vez se haya seleccionado una opcion del primer select
     *  - value que se asignara
     *  - testo que se asignara
     */
    var arrayValores=new Array(
      new Array("México","Elija un estado""Elija un estado"),
      new Array("México","Aguascalientes""Aguascalientes"),
      new Array("México","Baja California""Baja California"),
      new Array("México","Baja California Sur""Baja California Sur"),
      new Array("México","Campeche""Campeche"),
      new Array("México","Chiapas""Chiapas"),
      new Array("México","Chihuahua""Chihuahua"),
      new Array("México","Ciudad de México""Ciudad de México"),
      new Array("México","Coahuila""Coahuila"),
      new Array("México","Colima""Colima"),
      new Array("México","Durango""Durango"),
      new Array("México","Estado de México""Estado de México"),
      new Array("México","Guanajuato""Guanajuato"),
      new Array("México","Guerrero""Guerrero"),
      new Array("México","Hidalgo""Hidalgo"),
      new Array("México","Jalisco""Jalisco"),
      new Array("México","Michoacán""Michoacán"),
      new Array("México","Morelos""Morelos"),
      new Array("México","Nayarit""Nayarit"),
      new Array("México","Nuevo León""Nuevo León"),
      new Array("México","Oaxaca""Oaxaca"),
      new Array("México","Puebla""Puebla"),
      new Array("México","Querétaro""Querétaro"),
      new Array("México","Quintana Roo""Quintana Roo"),
      new Array("México","San Luis Potosí""San Luis Potosí"),
      new Array("México","Sinaloa""Sinaloa"),
      new Array("México","Sonora""Sonora"),
      new Array("México","Tabasco""Tabasco"),
      new Array("México","Tamaulipas""Tamaulipas"),
      new Array("México","Tlaxcala""Tlaxcala"),
      new Array("México","Veracruz""Veracruz"),
      new Array("México","Yucatán""Yucatán"),
      new Array("México","Zacatecas""Zacatecas")

    );
    if(valor=!'México')
    {
        // desactivamos el segundo select
        document.getElementById("select2").disabled=true;
    }else{
        // eliminamos todos los posibles valores que contenga el select2
        document.getElementById("select2").options.length=0;

        // añadimos los nuevos valores al select2
        document.getElementById("select2").options[0]=new Option("Selecciona una opcion", "0");
        for(i=0;i<arrayValores.length;i++)
        {
            // unicamente añadimos las opciones que pertenecen al id seleccionado
            // del primer select
            if(arrayValores[i][0]==valor)
            {
                document.getElementById("select2").options[document.getElementById("select2").options.length]=new Option(arrayValores[i][2], arrayValores[i][1]);
            }
        }

        // habilitamos el segundo select
        document.getElementById("select2").disabled=false;
    }
}

/**
 * FErnandoUna vez selecciona una valor del segundo selecte, obtenemos la información
 * de los dos selects y la mostramos
 */
function seleccinado_select2(value)
{
    var v1 = document.getElementById("select1");
    var valor1 = v1.options[v1.selectedIndex].value;
    var text1 = v1.options[v1.selectedIndex].text;
    var v2 = document.getElementById("select2");
    var valor2 = v2.options[v2.selectedIndex].value;
    var text2 = v2.options[v2.selectedIndex].text;

    alert("Se ha seleccionado el valor "+valor1+" ("+text1+") del primer select y el valor "+valor2+" ("+text2+") del segundo select");
}
</script>
</head>
<!-- NAVBAR
================================================== -->
<body>
<div class="navbar-wrapper">
  <div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#homeSlider">Booktubers</a> </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="#home">Inicio</a></li>
          <li><a href="#comop">¿Cómo participo?</a></li>
          <li><a href="#about">Bases</a></li>
          <li><a href="#team">Consejos</a></li>
          <li><button type="button" class="btn btn-book btn-lg" data-toggle="modal" data-target="#myModal">Mi cuenta</button></li>
          <li><button type="button" class="btn  btn-info" data-toggle="modal" data-target="#trabajando" style="margin-left:40px; margin-top:5px; margin-right: -15px;">Registro</button></li>
          <li style="display:none;"><a href="#registro">Registro</a></li>
          <li><a href="http://www.fondodeculturaeconomica.com/invitaciones/2017/ConvocatoriaBooktubers2017.pdf">Convocatoria</a></li>
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
        <img class="img-responsive img-princ" src="images/Recursos/LibrosSFdo.png" alt="">
          <div class="carousel-caption">
            <div class="cont-princ">
              <div class="slide-logo img-responsive"><img class="img-logo-b" src="images/Recursos/logoOrilladelViento.png" alt=""></div>
              <div class="texto-intr">
                <p class="sltext">Para celebrar los 25 años de la colección A la Orilla del Viento, dirigida a lectores como tú, la Secretaría de Relaciones Exteriores y el Fondo de Cultura Económica te invitan a compartir tus experiencias con nuestros libros y a participar como Booktuber en este concurso</p>
                <ul class="lista-nav">
                  <li><button class="ingresa" type="button" data-toggle="modal" data-target="#myModal">Ingresa</button></li>
                  <li><a href="#comop">¿Cómo participo?</a></li>
                  <li><a href="#about">Bases</a></li>
                  <li><a href="http://www.fondodeculturaeconomica.com/invitaciones/2017/ConvocatoriaBooktubers2017.pdf" target="_blank">Ver Convocatoria</a></li>
                </ul>
              </div>

            </div>
            <div class="img-logo-b">
              <a class="getst" href="#registro" role="button">Crea una cuenta</a>
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
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#homeSlider" data-slide-to="0" class="active"></li>
      <!--<li data-target="#homeSlider" data-slide-to="1"></li>-->
    </ol>
  </div>
</div>
<!-- /carousel Close -->

<!-- Service Section
    ================================================== -->
<div class="comop" id="comop">
  <!---->
  <form>
    <p>
        <select id='select1' onchange='cargarSelect2(this.value);'>
            <option value='0'>Selecciona una opcion</option>
            <option value='1'>opcion 1</option>
            <option value='México'>México</option>
            <option value='3'>opcion 3</option>
        </select>
    </p>

    <p>
        <select id='select2' onchange='seleccinado_select2();' disabled>
            <option value='0'>Selecciona una opcion</option>
        </select>
    </p>
</form>
<!---->
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <img src="images/Recursos/Como2017.png" alt="">
      </div>
      <div class="col-md-9">
        <div class="txt-como">
          <ol>
          	                <li> Si tienes entre 9 y 11 años de edad participa en la categoría A.</li>
          	                <li> Si tienes entre 12 y 15 años de edad participa en la categoría B.</li>
                            <li> Si tienes entre 15 y 19 años de edad participa en la categoría C.</li>
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
          					                <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=100420L"><i>La Casa de los Tres Perros,</i> de Agustín Cadena Rubio</a></li>
          					                <li><a target="_blank" href="https://elfondoenlinea.com/Detalle.aspx?ctit=100392L"><i>Reckless. El goyl de jade,</i> de Cornelia Funke, y Lionel Wigram</a></li>
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
          	                <li> Listo, ahora ¡súbelo a <a target="_blank" href="http://www.youtube.com/">YouTube</a>!  <a href="https://support.google.com/youtube/answer/57407?hl=mx" target="_blank" class="ayuda">ayuda</a>
          		                <ul>
          			                <li>Accede a YouTube y crea tu cuenta.</li>
          			                <li>Haz clic donde dice Subir video (parte superior de la página).</li>
          			                <li>Selecciona el video que desees subir.</li>
          			                <li>Mientras el video se carga, puedes agregar información, título, etiquetas y descripción.</li>
          			                <li>Cuando haya quedado como tú quieres, haz clic en Publicar para terminar de subirlo a YouTube.</li>
                                <li>Selecciona la opción Compartir (<i>Share</i>) y copia el enlace que aparece.</li>
          		                </ul>
          	                </li>
          	                <li> Regístrate en nuestra <a target="_blank" href="https://www.fondodeculturaeconomica.com/Editorial.aspx">página</a> y sube el enlace de tu video.
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
              C. El video deberá ser de 1 a 3 minutos de duración, de no ser así, será descalificado. Se
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
                F. Los videos se recibirán desde el 1 de septiembre de 2017 hasta el 31 de enero de 2018.
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
              participantes el 16 de marzo de 2018, en la página del FCE y en las redes sociales. Ese
              mismo día se dará a conocer el lugar de la ceremonia de premiación, la cual se llevará a
              cabo el 31 de marzo de 2018.
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
    <div class="video_uno">
    <div id="videoDiv">
    <div id="videoBlock">
    <video preload="preload" id="video" controls>
    <source src="images/Recursos/Nacho_convocatoria.mp4" type="video/mp4"></source>
    </video>
    <div id="videoMessage">
    <h1>Ignacio Padilla te invita a participar</h1>
    <p class="videoClick" >
    <a href="#registro">Registrate</a>
    </p>
    </div>
    </div>
    </div>
    </div>
<!-- / video_uno  Close -->
<div class="clearfix"></div>
<!-- Our Team Section
    ================================================== -->
<div class="ourteam" id="">
  <div class="container lbla">
    <div class="head_section">
      <h2>Libros participantes</h2>
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
                    <p>categoría A </p>
                    <ul class="member_social">
                      <li><a href="https://elfondoenlinea.com/Detalle.aspx?ctit=100421L"><i class="fa fa-shopping-bag fa-4x" aria-hidden="true"></i></a></li>
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
                    <p>categoría A </p>
                    <ul class="member_social">
                      <li><a href="https://elfondoenlinea.com/Detalle.aspx?ctit=100419L"><i class="fa fa-shopping-bag fa-4x" aria-hidden="true"></i></a></li>
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
                    <p>categoría A </p>
                    <ul class="member_social">
                      <li><a href="https://elfondoenlinea.com/Detalle.aspx?ctit=100417L"><i class="fa fa-shopping-bag fa-4x" aria-hidden="true"></i></a></li>
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
                    <p>categoría A </p>
                    <ul class="member_social">
                      <li><a href="https://elfondoenlinea.com/Detalle.aspx?ctit=100418L"><i class="fa fa-shopping-bag fa-4x" aria-hidden="true"></i></a></li>
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
                    <p>categoría B </p>
                    <ul class="member_social">
                      <li><a href="https://elfondoenlinea.com/Detalle.aspx?ctit=100395L"><i class="fa fa-shopping-bag fa-4x" aria-hidden="true"></i></a></li>
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
                    <p>categoría B </p>
                    <ul class="member_social">
                      <li><a href="https://elfondoenlinea.com/Detalle.aspx?ctit=100145L"><i class="fa fa-shopping-bag fa-4x" aria-hidden="true"></i></a></li>
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
                    <p>categoría B </p>
                    <ul class="member_social">
                      <li><a href="https://elfondoenlinea.com/Detalle.aspx?ctit=100420L"><i class="fa fa-shopping-bag fa-4x" aria-hidden="true"></i></a></li>
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
                    <p>categoría B </p>
                    <ul class="member_social">
                      <li><a href="https://elfondoenlinea.com/Detalle.aspx?ctit=100392L"><i class="fa fa-shopping-bag fa-4x" aria-hidden="true"></i></a></li>
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
                    <p>categoría C </p>
                    <ul class="member_social">
                      <li><a href="hhttps://elfondoenlinea.com/Detalle.aspx?ctit=102729L"><i class="fa fa-shopping-bag fa-4x" aria-hidden="true"></i></a></li>
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
                    <p>categoría C </p>
                    <ul class="member_social">
                      <li><a href="https://elfondoenlinea.com/Detalle.aspx?ctit=102730L"><i class="fa fa-shopping-bag fa-4x" aria-hidden="true"></i></a></li>
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
                    <p>categoría C </p>
                    <ul class="member_social">
                      <li><a href="https://elfondoenlinea.com/Detalle.aspx?ctit=102721L"><i class="fa fa-shopping-bag fa-4x" aria-hidden="true"></i></a></li>
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
                    <p>categoría C </p>
                    <ul class="member_social">
                      <li><a href="https://elfondoenlinea.com/Detalle.aspx?ctit=102731L"><i class="fa fa-shopping-bag fa-4x" aria-hidden="true"></i></a></li>
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
    ================================================== -->
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
<!-- / video Close Close -->

<div class="clearfix"></div>

<!--BLOG Section
    ================================================== -->
<div class="blog" id="team">
  <div class="container">
    <div class="head_section lbla">
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
              <li>Habla de los personajes, ¿cuál fue tu preferido? ¿Te desagradó alguno? ¿Les cambiarías algo? ¿Te parece que podrían existir en la vida real?</li>
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
              <input type="text" class="form-control textfild" name="nombre" id="nombre" placeholder="Nombre del participante" required>
            </div>
            <div class="form-group">
              <span class="input-group-addon">Correo del paticipante</span>
              <input type="email" name="email" id="email" class="form-control textfild" placeholder="Correo del participante" required>
            </div>
            <div class="form-group">
              <span class="input-group-addon">Nombre del adulto responsable</span>
              <input type="text" class="form-control textfild" name="nombrear" id="nombrear" placeholder="Nombre del adulto responsable" required>
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
                          <select size="1" name="pais" id="pais" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;Pais\&#39;,\&#39;\&#39;)&#39;, 0)" class="form-control">
                            <option value="AFGANISTAN">AFGANISTAN</option>
                            <option value="ALBANIA">ALBANIA</option>
                            <option value="ALEMANIA">ALEMANIA</option>
                            <option value="ANDORRA">ANDORRA</option>
                            <option value="ANGOLA">ANGOLA</option>
                            <option value="ANGUILA">ANGUILA</option>
                            <option value="ANTIGUA">ANTIGUA</option>
                            <option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
                            <option value="ARGELIA">ARGELIA</option>
                            <option value="ARGENTINA">ARGENTINA</option>
                            <option value="ARMENIA">ARMENIA</option>
                            <option value="ARUBA">ARUBA</option>
                            <option value="AUSTRALIA">AUSTRALIA</option>
                            <option value="AUSTRIA">AUSTRIA</option>
                            <option value="AZERBAYAN">AZERBAYAN</option>
                            <option value="BAHAMAS">BAHAMAS</option>
                            <option value="BAHREIN">BAHREIN</option>
                            <option value="BANGLADESH">BANGLADESH</option>
                            <option value="BARBADOS">BARBADOS</option>
                            <option value="BARBUDA">BARBUDA</option>
                            <option value="BELGICA">BELGICA</option>
                            <option value="BELICE">BELICE</option>
                            <option value="BENIN">BENIN</option>
                            <option value="BERMUDAS">BERMUDAS</option>
                            <option value="BIELORRUSIA">BIELORRUSIA</option>
                            <option value="BOLIVIA">BOLIVIA</option>
                            <option value="BONAIRE">BONAIRE</option>
                            <option value="BOSNIA HERZEGOVINA">BOSNIA HERZEGOVINA</option>
                            <option value="BOTSWANA">BOTSWANA</option>
                            <option value="BRASIL">BRASIL</option>
                            <option value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
                            <option value="BULGARIA">BULGARIA</option>
                            <option value="BURKINA FASO">BURKINA FASO</option>
                            <option value="BURUNDI">BURUNDI</option>
                            <option value="BUTAN">BUTAN</option>
                            <option value="CABO VERDE">CABO VERDE</option>
                            <option value="CAMBOYA">CAMBOYA</option>
                            <option value="CAMERUN">CAMERUN</option>
                            <option value="CANADA">CANADA</option>
                            <option value="CHAD">CHAD</option>
                            <option value="CHILE">CHILE</option>
                            <option value="CHINA">CHINA</option>
                            <option value="CHIPRE">CHIPRE</option>
                            <option value="COLOMBIA">COLOMBIA</option>
                            <option value="CONGO">CONGO</option>
                            <option value="COREA DEL SUR">COREA DEL SUR</option>
                            <option value="COSTA DE MARFIL">COSTA DE MARFIL</option>
                            <option value="COSTA RICA">COSTA RICA</option>
                            <option value="CROACIA">CROACIA</option>
                            <option value="CUBA">CUBA</option>
                            <option value="CURACAO">CURACAO</option>
                            <option value="DINAMARCA">DINAMARCA</option>
                            <option value="DJIBOUTI">DJIBOUTI</option>
                            <option value="DOMINICA">DOMINICA</option>
                            <option value="ECUADOR">ECUADOR</option>
                            <option value="EGIPTO">EGIPTO</option>
                            <option value="EL SALVADOR">EL SALVADOR</option>
                            <option value="Elija un país">Elija un pa&#237;s</option>
                            <option value="EMIRATOS ARABES UNIDOS">EMIRATOS ARABES UNIDOS</option>
                            <option value="ERITREA">ERITREA</option>
                            <option value="ESLOVENIA">ESLOVENIA</option>
                            <option value="ESPAÑA">ESPA&#209;A</option>
                            <option value="ESTADOS UNIDOS DE AMERICA">ESTADOS UNIDOS DE AMERICA</option>
                            <option value="ESTONIA">ESTONIA</option>
                            <option value="ETIOPIA">ETIOPIA</option>
                            <option value="FILIPINAS">FILIPINAS</option>
                            <option value="FINLANDIA">FINLANDIA</option>
                            <option value="FRANCIA">FRANCIA</option>
                            <option value="GABON">GABON</option>
                            <option value="GALES">GALES</option>
                            <option value="GAMBIA">GAMBIA</option>
                            <option value="GHANA">GHANA</option>
                            <option value="GIBRALTAR">GIBRALTAR</option>
                            <option value="GRANADA">GRANADA</option>
                            <option value="GRECIA">GRECIA</option>
                            <option value="GROENLANDIA">GROENLANDIA</option>
                            <option value="GUADALUPE">GUADALUPE</option>
                            <option value="GUAM">GUAM</option>
                            <option value="GUATEMALA">GUATEMALA</option>
                            <option value="GUAYANA">GUAYANA</option>
                            <option value="GUAYANA FRANCESA">GUAYANA FRANCESA</option>
                            <option value="GUINEA">GUINEA</option>
                            <option value="GUINEA ECUATORIAL">GUINEA ECUATORIAL</option>
                            <option value="HAITI">HAITI</option>
                            <option value="HOLANDA">HOLANDA</option>
                            <option value="HONDURAS">HONDURAS</option>
                            <option value="HONG KONG">HONG KONG</option>
                            <option value="HUNGRIA">HUNGRIA</option>
                            <option value="INDIA">INDIA</option>
                            <option value="INDONESIA">INDONESIA</option>
                            <option value="INGLATERRA">INGLATERRA</option>
                            <option value="IRAQ">IRAQ</option>
                            <option value="IRLANDA">IRLANDA</option>
                            <option value="IRLANDA DEL NORTE">IRLANDA DEL NORTE</option>
                            <option value="ISLANDIA">ISLANDIA</option>
                            <option value="ISLAS CAIMAN">ISLAS CAIMAN</option>
                            <option value="ISLAS COOK">ISLAS COOK</option>
                            <option value="ISLAS FEROE">ISLAS FEROE</option>
                            <option value="ISLAS FIJI">ISLAS FIJI</option>
                            <option value="ISLAS MARSHALL">ISLAS MARSHALL</option>
                            <option value="ISLAS REUNION">ISLAS REUNION</option>
                            <option value="ISLAS VIRGENES AMERICANAS">ISLAS VIRGENES AMERICANAS</option>
                            <option value="ISLAS VIRGENES BRITANICAS">ISLAS VIRGENES BRITANICAS</option>
                            <option value="ISRAEL">ISRAEL</option>
                            <option value="ITALIA">ITALIA</option>
                            <option value="JAMAICA">JAMAICA</option>
                            <option value="JAPON">JAPON</option>
                            <option value="JORDANIA">JORDANIA</option>
                            <option value="KAZAJSTAN">KAZAJSTAN</option>
                            <option value="KENIA">KENIA</option>
                            <option value="KIRGUIZISTAN">KIRGUIZISTAN</option>
                            <option value="KUWAIT">KUWAIT</option>
                            <option value="LAOS">LAOS</option>
                            <option value="LESOTO">LESOTO</option>
                            <option value="LIBANO">LIBANO</option>
                            <option value="LIBERIA">LIBERIA</option>
                            <option value="LIBYA">LIBYA</option>
                            <option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
                            <option value="LITUANIA">LITUANIA</option>
                            <option value="LUXEMBURGO">LUXEMBURGO</option>
                            <option value="MACAO">MACAO</option>
                            <option value="MACEDONIA">MACEDONIA</option>
                            <option value="MADAGASCAR">MADAGASCAR</option>
                            <option value="MALASIA">MALASIA</option>
                            <option value="MALAWI">MALAWI</option>
                            <option value="MALDIVAS">MALDIVAS</option>
                            <option value="MALI">MALI</option>
                            <option value="MALTA">MALTA</option>
                            <option value="MARRUECOS">MARRUECOS</option>
                            <option value="MARTINICA">MARTINICA</option>
                            <option value="MAURICIO">MAURICIO</option>
                            <option value="MAURITANIA">MAURITANIA</option>
                            <option selected="selected" value="MEXICO">MEXICO</option>
                            <option value="MICRONESIA">MICRONESIA</option>
                            <option value="MOLDAVIA">MOLDAVIA</option>
                            <option value="MONACO">MONACO</option>
                            <option value="MONGOLIA">MONGOLIA</option>
                            <option value="MONSERRAT">MONSERRAT</option>
                            <option value="MOZAMBIQUE">MOZAMBIQUE</option>
                            <option value="NAMIBIA">NAMIBIA</option>
                            <option value="NEPAL">NEPAL</option>
                            <option value="NICARAGUA">NICARAGUA</option>
                            <option value="NIGER">NIGER</option>
                            <option value="NIGERIA">NIGERIA</option>
                            <option value="NORUEGA">NORUEGA</option>
                            <option value="NUEVA CALEDONIA">NUEVA CALEDONIA</option>
                            <option value="NUEVA ZELANDA">NUEVA ZELANDA</option>
                            <option value="OMAN">OMAN</option>
                            <option value="PAKISTAN">PAKISTAN</option>
                            <option value="PALAOS">PALAOS</option>
                            <option value="PALESTINA">PALESTINA</option>
                            <option value="PANAMA">PANAMA</option>
                            <option value="PAPUASIA NUEVA GUINEA">PAPUASIA NUEVA GUINEA</option>
                            <option value="PARAGUAY">PARAGUAY</option>
                            <option value="PERU">PERU</option>
                            <option value="POLINESIA FRANCESA">POLINESIA FRANCESA</option>
                            <option value="POLONIA">POLONIA</option>
                            <option value="PORTUGAL">PORTUGAL</option>
                            <option value="PUERTO RICO">PUERTO RICO</option>
                            <option value="QATAR">QATAR</option>
                            <option value="REPUBLICA CHECA">REPUBLICA CHECA</option>
                            <option value="REPUBLICA DE GEORGIA">REPUBLICA DE GEORGIA</option>
                            <option value="REPUBLICA DE LETONIA">REPUBLICA DE LETONIA</option>
                            <option value="REPUBLICA DOMINICANA">REPUBLICA DOMINICANA</option>
                            <option value="REPUBLICA ESLOVACA">REPUBLICA ESLOVACA</option>
                            <option value="REUNION">REUNION</option>
                            <option value="RUANDA">RUANDA</option>
                            <option value="RUMANIA">RUMANIA</option>
                            <option value="RUSIA">RUSIA</option>
                            <option value="SAMOA">SAMOA</option>
                            <option value="SAMOA AMERICANA">SAMOA AMERICANA</option>
                            <option value="SAN BARTOLOME">SAN BARTOLOME</option>
                            <option value="SAN CRISTOBAL Y NEVIS">SAN CRISTOBAL Y NEVIS</option>
                            <option value="SAN EUSTAQUIO">SAN EUSTAQUIO</option>
                            <option value="SAN MARTIN">SAN MARTIN</option>
                            <option value="SAN VICENTE">SAN VICENTE</option>
                            <option value="SANTA LUCIA">SANTA LUCIA</option>
                            <option value="SENEGAL">SENEGAL</option>
                            <option value="SERBIA Y MONTE NEGRO">SERBIA Y MONTE NEGRO</option>
                            <option value="SEYCHELLES">SEYCHELLES</option>
                            <option value="SINGAPUR">SINGAPUR</option>
                            <option value="SIRIA">SIRIA</option>
                            <option value="SRI LANKA">SRI LANKA</option>
                            <option value="SUAZILANDIA">SUAZILANDIA</option>
                            <option value="SUDAFRICA">SUDAFRICA</option>
                            <option value="SUECIA">SUECIA</option>
                            <option value="SUIZA">SUIZA</option>
                            <option value="SURINAM">SURINAM</option>
                            <option value="TAILANDIA">TAILANDIA</option>
                            <option value="TAIWAN">TAIWAN</option>
                            <option value="TANZANIA">TANZANIA</option>
                            <option value="TIMOR DEL ESTE">TIMOR DEL ESTE</option>
                            <option value="TOGO">TOGO</option>
                            <option value="TRINIDAD Y TOBAGO">TRINIDAD Y TOBAGO</option>
                            <option value="TUNEZ">TUNEZ</option>
                            <option value="TURCOS Y CAICOS">TURCOS Y CAICOS</option>
                            <option value="TURQUIA">TURQUIA</option>
                            <option value="UCRANIA">UCRANIA</option>
                            <option value="UGANDA">UGANDA</option>
                            <option value="URUGUAY">URUGUAY</option>
                            <option value="UZBEKISTAN">UZBEKISTAN</option>
                            <option value="VANUATU">VANUATU</option>
                            <option value="VENEZUELA">VENEZUELA</option>
                            <option value="VIETNAM">VIETNAM</option>
                            <option value="WALLIS Y FUTUNA">WALLIS Y FUTUNA</option>
                            <option value="YEMEN">YEMEN</option>
                            <option value="ZAIRE">ZAIRE</option>
                            <option value="ZAMBIA">ZAMBIA</option>
                            <option value="ZIMBAWE">ZIMBAWE</option>

                            </select>

                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">Ciudad</span>
                                <select size="1" name="lstCiudad" id="lstCiudad" class="form-control">
                            <option value=" Elija un estado"> Elija un estado</option>
                            </select>
                            <select id='select2' onchange='seleccinado_select2();' disabled>
                                <option value='0'>Selecciona una opcion</option>
                            </select>
                            </div>
            <input type="submit" value="Crear" class="submit-btn" onClick="">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Parte de llenar video-->
<div class="formulario-carga">
  <form action="/action_page.php">

      <label class="input-group-addon"><b>Categoria</b></label>
      <input class="form-control form-control-b textfild" type="text" name="categoria" required>
      <label class="input-group-addon"><b>Escoge un Libro</b></label>
      <select class="form-control" name="Libros">
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="A3">A3</option>
        <option value="A4">A4</option>
      </select>
      <label class="input-group-addon"><b>Inserta tu liga</b></label>
      <input class="form-control form-control-b textfild" type="text" name="liga" placeholder="https://youtu.be/_ejemplo" required>
      <button class="btn btn-book tcien" type="submit">Carga</button>



  </form>
</div>
<!-- /Parte de llenar video-->
<!-- / contact Close -->

<!-- FOOTER Section
    ================================================== -->
<div class="footer">
  <div class="container lbla">
    <p>© 2017 Fondo de cultura ecónomica - Todos los derechos reservados </p>
    <ul>
      <li><a href="#"><img src="images/Recursos/logo1.png" alt=""></a></li>
      <li><a href="#"><img src="images/Recursos/logo2.png" alt=""></a></li>
      <li><a href="#"><img src="images/Recursos/logo3.png" alt=""></a></li>
      <li><a href="#"><img src="images/Recursos/logo4.png" alt=""></a></li>
      <li><a href="#"><img src="images/Recursos/logo5.png" alt=""></a></li>
      <li><a href="#"><img src="images/Recursos/logo6.png" alt=""></a></li>

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
          <form action="/action_page.php">

              <label class="input-group-addon"><b>Usuario</b></label>
              <input class="form-control form-control-b textfild" type="text" placeholder="Usuario" name="uname" required>
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

</body>
</html>
