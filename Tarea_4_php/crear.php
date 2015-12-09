<html>

<head><title>EJERCICIO PHP</title></head>

<body>
   
    <?php
    
      //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "root", "", "talleresfaber");

      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $mysqli->connect_error);+          exit();
      }

      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
      if ($result = $connection->query("SELECT * FROM REPARACIONES;")) {

          printf("<p>The select query returned %d rows.</p>", $result->num_rows);

   }
      ?>
    
    

  <table style="border:1px solid black">
          <thead>
            <tr>
              <th>IdReparacion</th>
              <th>Matricula</th>
             <th>FechaEntrada</th>
             <th>Km</th>
             <th>Averia</th>
              <th>FechaSalida</th>
                <th>Reparado</th>
                <th>Observaciones</th>
                <th>EDITAR</th>
                <th><img src="usuario.png" width="40px" height="40"></th>
                <th><img src="tuerca.png" width="40px" height="40"></th>
                <th>BORRAR</th>
                <th>Mostrar</th>
                
                
          </thead>
    

    
      <?php

          //FETCHING OBJECTS FROM THE RESULT SET
        //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              echo "<tr>";
              echo "<td>".$obj->IdReparacion."</td>";
              echo "<td>".$obj->Matricula."</td>";
              echo "<td>".$obj->FechaEntrada."</td>";
              echo "<td>".$obj->Km."</td>";
              echo "<td>".$obj->Averia."</td>";
              echo "<td>".$obj->FechaSalida."</td>";
              echo "<td>".$obj->Reparado."</td>";
              echo "<td>".$obj->Observaciones."</td>";
              echo "<td>"."<a href='editar.php?id=$obj->IdReparacion'>"."<img src='lapiz.png' width='40px' height='40px'/>"."</td>";
            
              
              echo "<td>"."<a href='asig_emple.php?id=$obj->IdReparacion'>"."<img src='suma.png' width='40px' height='40px'/>"."</td>";
              
              echo "<td>"."<a href='asig_pieza.php?id=$obj->IdReparacion'>"."<img src='suma2.png' width='40px' height='40px'/>"."</td>";
              echo "<td>"."<a href='borrar.php?id=$obj->IdReparacion'>"."<img src='papelera.png' width='40px' height='40px'/>"."</td>";
              
              echo "<td>"."<a href='mostrar.php?id=$obj->IdReparacion'>"."<img src='mostrar.png' width='40px' height='40px'/>"."</td>";
            
              echo "</tr>";
          }

         
          $result->close();
          unset($obj);
          unset($connection);

     

    ?>
    </table>
    
    
    
</body>

</html>