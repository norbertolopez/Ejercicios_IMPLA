<html>
<head>
    
    <title></title>
</head>
<body>
    
    <?php
       
        if (isset($_GET['id'])) {
            $link = mysql_connect('localhost','root', '', "talleresfaber")or die('No se pudo conectar: ' . mysql_error());
            mysql_select_db('TalleresFaber') or die('No se pudo seleccionar la base de datos');

            // Realizar una consulta MySQL. OBTENGO LOS DATOS DEL CLIENTE
            //IMPORTANTE: ESTOY BUSCANDO POR CLAVE. Si no tendría que 
            //usar mysql_num_rows
            $query = "SELECT * FROM REPARACIONES WHERE IdReparacion='".$_GET['id']."';";
            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
            echo "<form method='post' action='editar.php'>";
            while ($line = mysql_fetch_array($result)) {
                echo "Matricula:<input type='text' name='Matricula' value='".$line['Matricula']."'><br>";
                echo "Fecha de Entrada:<input type='text' name='fechi'  value='".$line['FechaEntrada']."'><br>";
                echo "Km:<input type='text' name='km' value='".$line['Km']."'><br>";
                echo "Averia:<input type='text' name='averia' value='".$line['Averia']."'><br>";
                echo "Fecha de Salida:<input type='text' name='fech' value='".$line['FechaSalida']."'><br>";
                echo "Reparado:<input type='text' name='reparado' value='".$line['Reparado']."'><br>";
                echo "Observaciones:<input type='text' name='obs' value='".$line['Observaciones']."'><br>";
                //Este campos no se va a modificar, lo muestro oculto
                echo "<input type='hidden' name='IdReparacion' value='".$line['IdReparacion']."'><br>";
                echo "<input type='submit' name='enviar' value='Enviar'><br>";
            }
            echo "</form>";
            // Cerrar la conexión
            mysql_close($link);
            
        }

        //VENGO DE UNA PETICION POST
        if (isset($_POST['enviar'])) {
            $link = mysql_connect('localhost', 'root', '')or die('No se pudo conectar: ' . mysql_error());
            mysql_select_db('TalleresFaber') or die('No se pudo seleccionar la base de datos');

            
            //CONSTRUYO LA CONSULTA DE ACTUALIZACIÓN
            $query="UPDATE reparaciones SET IdReparacion=".
                $_POST['IdReparacion'].",Matricula='".
                $_POST['Matricula']."',FechaEntrada='".
                $_POST['fechi']."',Km=".
                $_POST['km'].",Averia='".
                $_POST['averia']."',FechaSalida='".
                $_POST['fech']."',Reparado=".
                $_POST['reparado'].",Observaciones='".
                $_POST['obs']."' WHERE IdReparacion=".$_POST['IdReparacion'].";";
            
            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
            if ($result) {
            echo "Actualizado realizado correctamente";
            } 
            
            // Cerrar la conexión
            mysql_close($link);
            
            header("refresh:5; url=crear.php");                
            
        }
    ?>
</body>
</html>