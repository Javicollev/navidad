<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Aventureros sin límite - Navidad para los niños">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link type="text/css" rel="stylesheet" href="../css/estilos.css">
    <link type="text/css" rel="stylesheet" href="../css/normalize.css">
    <!--link(href='http://fonts.googleapis.com/css?family=Delius+Swash+Caps|Pompiere' rel='stylesheet' type='text/css')-->
    <link href="http://fonts.googleapis.com/css?family=Delius+Swash+Caps|Delius" rel="stylesheet" type="text/css">
  </head>
  <body>
    <header>
      <h1 id="logo"><a href="../"><img src="../img/logo.png" alt="logo"></a></h1>
      <nav id="menu">
        <ul>
          <li><a href="../#ayudar">¿Cómo ayudar?</a></li>
          <li><a href="../#apadrina">Apadrina</a></li>
        </ul>
      </nav>
    </header>
    <section id='principal'>
      <?php
        $nombre = $_POST['nombre'];
        $sexo = $_POST['sexo'];
        $edad = $_POST['edad'];
        echo "<h2 class='titulos'>Hola... has decidido apadrinar a ".$nombre.", ".$sexo." ".$edad."</h2>";

       $_SESSION['nombrecillo']="$nombre";
        
       ?>
       <article id="contacto">
        <h3 class='subs'>Por favor ingresa tus datos en el siguiente formulario, </br>nos pondremos en contacto contigo a la brevedad posible</h3>
         <form class='formulario' action="enviar.php" method='post'>
            <input name='nom' class='form' type="text" placeholder="Escriba su Nombre completo" required>
            <input name='ap' class='form' type="text" placeholder="Escriba sus Apellidos" required>
            <input name='mai' class='form' type="email" placeholder="Escriba su E-mail" required>
            <input name='tel' class='form' type="number" placeholder="Teléfono - Cel." required>
            <input  class='mandar'type="submit" value="Enviar">
          </form></br>
          <a class='fb' target='_blank' href="https://www.facebook.com/aventurerostravel">Encuéntranos en Facebook</a>
        </article>
    </section>
    <footer>
      
    </footer>

  </body>
</html>