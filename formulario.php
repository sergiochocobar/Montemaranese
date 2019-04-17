<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=0, shrink-to-fit=no">
	<title>Devocional PC</title>
	<link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Zilla+Slab:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,900" rel="stylesheet">
	<link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/fonts/themify-icons/themify-icons.css">

  <script type="text/javascript">
    function Redireccionar(){
      window.location= 'index.html';
    }
    setTimeout('Redireccionar()', 2000);



  </script>

</head>
<body>
  <div class="container">
      <?php
        if(isset($_POST['nombre'])&&($_POST['email']!='')&&($_POST['mensaje']!='')){
          $nombre = $_POST['nombre'];
          $email = "sergiochocobar2@gmail.com";
          $emailclient = $_POST['email'];
          $mensaje = $_POST['mensaje'];
          //Contenido del mensaje//
          $titulo = "Mesanje de la web Montemaranese.com";
          $contenido = '<html>
                  <head>
                    <title>' . $titulo . '</title>
                  </head>
                  <body>
                    <h1>Haz recibido un mensaje de la web de Montemaranese</h1>
                    <p>El visitante <strong>' . $nombre . '</strong> te ha enviado un mensaje:</p>
                    <p>Mensaje: ' . $mensaje . ' <br><br> Puedes ponerte en contacto al email: ' . $emailclient . '</p>
                    <hr>
                    <p>Este Mensaje ha sido generado automaticamente desde la web de Montemaranese</p>
                  </body>
                </html>';
          $encabezado = "MINE-Version: 1.0\r\n";
          $encabezado .= "Content-type: text/html; charset=UTF-8\r\n";
          $encabezado .= "From: Montemaranese.com <montemaranese@gmail.com>\r\n";
          $encabezado .= "Reply-To: montemaranese@gmail.com\r\n";

          $envio = mail($email,$titulo,$contenido,$encabezado);


          if($envio == true){
            echo "<h1>El mensaje se ha enviado correctamente.</h1>";
          }
          else{
            echo "<h1>Se ha presentado un error en el envio del email.</h1>";
          }
        }
        else{
          echo "<h2>Se ha presentado un error, completa los campos del formularios.</h2>";
        }

      ?>


      <h2 class="slider__title slider__title--v4">Redireccionando a pagina anterior...</h2>

  </div>

</body>
</html>


