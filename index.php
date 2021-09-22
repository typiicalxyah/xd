<?php   
   include "db.php";


?>

<!DOCTYPE html>
<head>

    <title>un chat de prueba</title>
    <link rel="stylesheet" type="text/css" href="estilo.css"
    <link rel="stylesheet" type="text/css" href="index.html"
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@600&display=swap" rel="stylesheet">

    <script type="text/javascript">
         function ajax(){
             var req = new  XMLHttpRequest();

             req.onreadystatechange = function(){
                 if (req.readyState == 4 && req.status == 200) {
                     document.getElementById('chat').innerHTML =req.responseText ;
                 }
             }

             req.open('GET' , 'chat.php' , true );
             red.send();
         }

         setInterval(function(){ajax();} , 1000);
    </script>

</head>
<body onLoad="ajax();">
    
<div id="contenedor">
    <div id="caja-chat">
        <div id="chat"> </div>
    </div>
    <form method="POST" action="index.html">
       <input type="text" name="nombre" placeholder="ingresa tu nombre">
       <textarea name="mensaje" placeholder="ingresa tu mensaje"></textarea>
       <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
    if (isset($_POST['enviar'])) {
        $nombre = $_POST ['nombre'];
        $mensaje = $_POST ['mensaje'];
       
        $consulta ="INSERT INTRO chat (nombre, mensaje) VALUES  ('$nombre', '$mensaje')";
        $ejecutar = $conexion->query($consulta);
    }
</div>

</body>
</html>