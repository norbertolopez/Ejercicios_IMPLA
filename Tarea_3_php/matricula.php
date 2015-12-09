<html>

<head></head>

<body>

<?php if (!isset($_POST["dni"])) : ?>


    <div style='margin: 65 100 100 150;float:left;'>
      <form action="" method="post" class="login">
      <table border="0">
        <tr>
          <td>DNI:  </td>
          <td><input type="text" name="dni" maxlength="10" size="10" required></td>
        </tr>
        <tr>
          <td>Nombre:  </td>
          <td><input type="text" name="nombre" maxlength="10" size="10" required></td>
        </tr>
        <tr>
          <td>Apellidos:  </td>
          <td><input type="text" name="apellidos" maxlength="10" size="10" required></td>
        </tr>
        <tr>
          <td>Direccion:  </td>
          <td><input type="text" name="direccion" maxlength="10" size="10" required></td>
        </tr>
        <tr>
          <td>Telefono:  </td>
          <td><input type="text" name="telefono" maxlength="10" size="10" required></td>
        </tr>
        <tr>
          <td>Correo:  </td>
          <td><input type="text" name="correo" maxlength="10" size="10" required></td>
        </tr>
        <tr>
          <td>Curso:  </td>
          <td><select name="curso">
            <option value="1ASIR">1ASIR</option>
            <option value="2ASIR">2ASIR</option>
            </select></td>
        </tr>
        <tr>
          <td>Asignaturas:  </td>
            <td>
            <input type="checkbox" name="asignaturas[]" value="Implantacion">Implantacion<br>
            <input type="checkbox" name="asignaturas[]" value="Redes">Redes<br>
            <input type="checkbox" name="asignaturas[]" value="SO">SO<br>
            <input type="checkbox" name="asignaturas[]" value="BD">BD<br>
            <input type="checkbox" name="asignaturas[]" value="Hardware">Hardware<br>
            <input type="checkbox" name="asignaturas[]" value="Seguridad">Seguridad<br>
            <input type="checkbox" name="asignaturas[]" value="Empresas">Empresas<br>
            <input type="checkbox" name="asignaturas[]" value="FOL">FOL<br>
            </td>
        </tr>
        <tr>
          <td>Pide Beca:  </td>
            <td>
              <input type="radio" name="beca" value="SI" checked>SI
              <input type="radio" name="beca" value="NO" checked>NO
            </td>
        </tr>



        <tr>
          <td colspan="2"><input type=submit value="Entrar" id="enviar"></td>
        </tr>
      </table>
      </form>
    </div>



    <?php
  else:
    $dni=$_POST["dni"];
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $direccion=$_POST["direccion"];
    $telefono=$_POST["telefono"];
    $correo=$_POST["correo"];
    $curso=$_POST["curso"];
    $asignaturas=$_POST["asignaturas"];
    $beca=$_POST["beca"];

    echo "<div style='margin: 65 100 100 150;float:left;'>";
    echo "<h1>RESUMEN</h1>";
    echo "<br>";
    echo "<br>";
    echo "<b>DNI:</b>"." $dni";
    echo "<br><br>";
    echo "<b>Nombre:</b>"." $nombre";
    echo "<br><br>";
    echo "<b>Direccion:</b>"." $direccion";
    echo "<br><br>";
    echo "<b>Teléfono:</b>"." $telefono";
    echo "<br><br>";
    echo "<b>Correo:</b>"." $correo";
    echo "<br><br>";
    echo "<b>Curso:</b>"." $curso";
    echo "<br><br>";


    for ($i=0;  $i<sizeof($asignaturas);  $i++) {
    echo "<b>Asignatura ".($i+1).":</b>"." $asignaturas[$i]"."<br>";
    }
    echo "<br><br>";
    echo "<b>Pide Beca:</b>". $beca;
    echo "<div>";

endif

    ?>



</body>

</html>
