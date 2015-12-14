<?php

                require_once("conexion/conexion.php");
                

?>
<!doctype html>
<!-- indicar el idioma -->
<html lang="es">
  <head>
    <!-- especificar siempre en UTF8 -->
    <meta charset="latin1"/>
    <!--eliminar el zoom ajustar al ancho del dispositivo por defecto para moviles-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Nombre de la pagina en el Chrome -->
    <title>GUL REYNOSA</title>
    <meta name="description" content="descripcion de la pagin">
    <!-- Usar normalize para resetear las etiquetas -->
    <link href="normalize.css" rel="stylesheet"/>
    <link href="stylus.css" rel="stylesheet"/>
    <link rel="shortcut icon" type="image/x-icon" href="./imagenes/favicon.ico" />
  </head>
  <body>
    <!-- cabecera de la pagina -->
    <header>
      <!-- metemos en un div el logo -->
      <div class="logo left">
        <img alt="puls4" src="imagenes/logo.png"/>
      </div>
      <!-- metemos otro div para los titulos -->
      <div class="titular">
        <h1 class="titulo">GNU/LINUX</h1>
        <!-- filtro o  datos del usuario o categoria del tag-->
        <div>
          <a class="filtro" href="#">CLAN GUL REYNOSA</a>
          <a class="publicar right" href="#">#GhostLT</a>
        </div>
      </div>
      <!-- creamos un div para el avatar del usuario -->
      <div class="usuario">
        <!-- anexamos un avatar dentro de figure -->
        <figure class="avatar">
          <img alt="javier" src="imagenes/avatar.jpg"/>
        </figure>
        <a class="flechita" href="#"></a>
      </div>
    </header>

    <!-- usar nav para especificar el menu -->
    <nav>
      <ul class="menu">
        <li><a href="#">Cursos</a></li>
        <li><a href="#">Proyectos</a></li>
        <li><a href="#">Empresas</a></li>
        <li><a href="#">Universidades</a></li>
        <li><a href="#">Preparatorias</a></li>
        <li><a href="#">Secundarias</a></li>
        <li><a href="#">Conferencias</a></li>
        <li><a href="#">Pr&oacute;ximos Concursos</a></li>
      </ul>  
    </nav>

    <div class="flexcontenedor">
    <!-- area del contenido dentro del section -->
    <section class="posts item-section-aside-flex">
      <!--primer article-->
      <!-- ultimo item dentro de un contenido semantico -->
      <article class="post item-section">
        <!-- aqui va la capa de la descripcion -->
        <div class="descripcion">
          <!-- anexamos la imagen dentro de un figure -->
          <figure class="imagen left">
            <img alt="foto" src="imagenes/foto.jpg"/>
          </figure>
          <!-- segundo nivel todo el contenido del post -->
          <div class="detalles">
            <h2 class="titulo">
              Las Mejores Distribuciones de GNU/Linux 
              <p class="autor">por <a href="#">Javier Viveros</a></p>
              <a class="tag" href="#">GNU Linux</a>
              <p class="fecha right">hace <strong>20</strong>min </p>
            </h2>
          </div>
        </div>
        <!-- segunda mitad donde van los likes -->
        <!-- 2 areas area de los votos y area de los datos -->
        <div class="acciones">
          <div class="votos left">
            <a class="up" href="#"></a>
            <span class="total">156</span>
            <a class="down" href="#"></a>
          </div>
          <div class="datos right">
            <a class="comentarios" href="#">10</a>
            <a class="estrellita" href="#"></a>
          </div>
        </div>
      </article>
      
<!--segundo article-->
<article class="post item-section">
        <div class="descripcion">
          <figure class="imagen left">
            <img alt="foto" src="imagenes/foto.jpg"/>
          </figure>
          <div class="detalles">
            <h2 class="titulo">
              Las Mejores Distribuciones de GNU/Linux 
              <p class="autor">por <a href="#">Javier Viveros</a></p>
              <a class="tag" href="#">GNU Linux</a>
              <p class="fecha right">hace <strong>20</strong>min </p>
            </h2>
          </div>
        </div>
        <div class="acciones">
          <div class="votos left">
            <a class="up" href="#"></a>
            <span class="total">156</span>
            <a class="down" href="#"></a>
          </div>
          <div class="datos right">
            <a class="comentarios" href="#">10</a>
            <a class="estrellita" href="#"></a>
          </div>
        </div>
      </article>

<!--tercer article-->
<article class="post item-section">
        <div class="descripcion">
          <figure class="imagen left">
            <img alt="foto" src="imagenes/foto.jpg"/>
          </figure>
          <div class="detalles">
            <h2 class="titulo">
              Las Mejores Distribuciones de GNU/Linux 
              <p class="autor">por <a href="#">Javier Viveros</a></p>
              <a class="tag" href="#">GNU Linux</a>
              <p class="fecha right">hace <strong>20</strong>min </p>
            </h2>
          </div>
        </div>
        <div class="acciones">
          <div class="votos left">
            <a class="up" href="#"></a>
            <span class="total">156</span>
            <a class="down" href="#"></a>
          </div>
          <div class="datos right">
            <a class="comentarios" href="#">10</a>
            <a class="estrellita" href="#"></a>
          </div>
        </div>
</article>

<!--article cuatro-->
<article class="post item-section">
        <div class="descripcion">
          <figure class="imagen left">
            <img alt="foto" src="imagenes/foto.jpg"/>
          </figure>
          <div class="detalles">
            <h2 class="titulo">
              Las Mejores Distribuciones de GNU/Linux 
              <p class="autor">por <a href="#">Javier Viveros</a></p>
              <a class="tag" href="#">GNU Linux</a>
              <p class="fecha right">hace <strong>20</strong>min </p>
            </h2>
          </div>
        </div>
        <div class="acciones">
          <div class="votos left">
            <a class="up" href="#"></a>
            <span class="total">156</span>
            <a class="down" href="#"></a>
          </div>
          <div class="datos right">
            <a class="comentarios" href="#">10</a>
            <a class="estrellita" href="#"></a>
          </div>
        </div>
</article>

<!--seccion cinco-->
<article class="post item-section">
        <div class="descripcion">
          <figure class="imagen left">
            <img alt="foto" src="imagenes/foto.jpg"/>
          </figure>
          <div class="detalles">
            <h2 class="titulo">
              Las Mejores Distribuciones de GNU/Linux 
              <p class="autor">por <a href="#">Javier Viveros</a></p>
              <a class="tag" href="#">GNU Linux</a>
              <p class="fecha right">hace <strong>20</strong>min </p>
            </h2>
          </div>
        </div>
        <div class="acciones">
          <div class="votos left">
            <a class="up" href="#"></a>
            <span class="total">156</span>
            <a class="down" href="#"></a>
          </div>
          <div class="datos right">
            <a class="comentarios" href="#">10</a>
            <a class="estrellita" href="#"></a>
          </div>
        </div>
</article>

<!--seccion seis-->
<article class="post item-section">
        <div class="descripcion">
          <figure class="imagen left">
            <img alt="foto" src="imagenes/foto.jpg"/>
          </figure>
          <div class="detalles">
            <h2 class="titulo">
              Las Mejores Distribuciones de GNU/Linux 
              <p class="autor">por <a href="#">Javier Viveros</a></p>
              <a class="tag" href="#">GNU Linux</a>
              <p class="fecha right">hace <strong>20</strong>min</p>
            </h2>
          </div>
        </div>
        <div class="acciones">
          <div class="votos left">
            <a class="up" href="#"></a>
            <span class="total">156</span>
            <a class="down" href="#"></a>
             <span class="total">0</span>
          </div>
          <div class="datos right">
            <a class="comentarios" href="#">10</a>
            <a class="estrellita" href="#"></a>
          </div>
        </div>
      </article>

    </section>

    <aside >
      <article>
        <div class="redes_sociales">
          <h2><strong>Siguenos en las Redes</strong> </h2>
          <a class="facebook" href="#"></a>
          <a class="twitter" href="#"></a>
          <a class="google" href="#"></a>
          <a class="youtube" href="#"></a>
          <a class="github" href="#"></a>
        </div>
      </article>

      <!--primer top articulos-->
     <ul class="articulos-novedades">
     <li><a href="#"> <img src="http://lorempixel.com/40/40/" alt="img1">Ranking de las mejores distribuciones GNU/Linux de 2015</a></li> 
      <!--segundo top articulos-->
    <li><a href="#"><img src="http://lorempixel.com/40/40/" alt="img1">Recopilacion de las distribuciones ligeras</a></li>

      <!--tercer top articulos-->
    <li><a href="#"><img src="http://lorempixel.com/40/40/" alt="img1">Como se maneja un arduino</a></li>

<!--cuarto top articulos-->
    <li><a href="#"><img src="http://lorempixel.com/40/40/" alt="img1">Recopilacion de las distribuciones ligeras</a></li>

      <!--quinto top articulos-->
    <li><a href="#"><img src="http://lorempixel.com/40/40/" alt="img1">Erle Robotics entre las 15 start-ups finalistas en Robohub 2015</a></li>
 <!--sexto top articulos-->
    <li><a href="#"><img src="http://lorempixel.com/40/40/" alt="img1">Erle-Brain 2: el nuevo cerebro robótico de Erle Robotics</a></li>
     </ul>
      <article>
        <div class="secciones">
          <h2>Secciones</h2>
       <ul class="menu-secciones">
        <li><a href="#">Cursos</a></li>
        <li><a href="#">Proyectos</a></li>
        <li><a href="#">Empresas</a></li>
        <li><a href="#">Universidades</a></li>
        <li><a href="#">Preparatorias</a></li>
        <li><a href="#">Secundarias</a></li>
        <li><a href="#">Conferencias</a></li>
        <li><a href="#">Proximos Concursos</a></li>
      </ul>  

        </div>
      </article>

      <article>
        <div class="secciones">
          <h2>Conferencias</h2>
       <ul class="menu-secciones">
        <li><a href="#">Fecha 1</a></li>
        <li><a href="#">Fecha 2</a></li>
        <li><a href="#">Fecha 3</a></li>
        <li><a href="#">Fecha 4</a></li>
      </ul>  
        </div>
      </article>

      <article>
        <div class="secciones">
          <h2>Proximos Concursos</h2>
       <ul class="menu-secciones">
        <li><a href="#">Fecha 1</a></li>
        <li><a href="#">Fecha 2</a></li>
        <li><a href="#">Fecha 3</a></li>
        <li><a href="#">Fecha 4</a></li>
      </ul>  

        </div>
      </article>
      
    </aside>


    </div><!--cerramos el flex contenedor-->    

    <footer>
      <h3><strong>Powered by CLAN GUL REYNOSA</strong><span class="mejor">GNU/LINUX 2015</span></h3>
    </footer>
  </body>
</html>
