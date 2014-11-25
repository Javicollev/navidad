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
      
       <article id="contacto">
        <h2 class='titulos'>Gracias por regalar sonrisas y compartir con los niños de Yauyos.</h3>
         <?php 
            $n = $_POST['nom'];
            $a = $_POST['ap'];
            $m = $_POST['mai'];
            $t = $_POST['tel'];
            
            $aquien = "javicolist0@gmail.com";
            $asunto = "Apadrinaron a un niño";
            $mensaje = $n.' '.$a.' con el e-mail '.$m.'.'."\r\n".' Ha decidido adoptar a  '.($_SESSION['nombrecillo'])."\r\n"."Su número de contacto es ".$t;
            $aquien2 = $m;
            $asunto2 = "Felicidades!. Apadrinaste a un niño";
            $mensaje2 = "Hola ".$n." ".$a.", has decidido apadrinar a ".($_SESSION['nombrecillo'])."\r\n"."Somos AVENTUREROS SIN LIMITE y estamos agradecidos por tu iniciativa de querer regalar una sonrisa a los niños de Yauyos, que tanta esperanza guardan en su corazón."."\r\n"."Muy pronto nos comunicaremos contigo para ultimar detalles.";
            $cabeceras = 'From: AventurerosSinLímite' . "\r\n" .
              'Reply-To: aventurerossinlimite@gmail.com' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();
             if(mail($aquien, $asunto, $mensaje, $cabeceras)){
                mail($aquien2, $asunto2, $mensaje2, $cabeceras);
                echo "Hola ".'<strong>'.$n.'</strong>'.", hemos recibido tu mensaje y te responderemos en la brevedad posible, sigue disfrutando de tu visita en nuestro sitio web.";
              }else{
                echo "Ha ocurrido un error en el envío.";
              }
        ?>

        </br>
      </br>
    </br>

                <a class='fb' target='_blank' href="https://www.facebook.com/aventurerostravel">Encuéntranos en Facebook</a>
        </article>
    </section>
    <footer>
      
    </footer>

  </body>
</html>