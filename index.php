<?php 

    include("conexion.php");

      /* insert dentro de una bd */
/*       $insertar = "INSERT INTO mitabla(id, nombre, apellido) VALUES ('6','pepito','el mago')";
      if ($mysqli->query($insertar) === TRUE) {
          echo "parce lo agregamos";
        } else {
          echo "Error: " . $sql . "<br>" . $mysqli->error;
        } */
  

    /* ESTO ES LA R DE UN CRUD
    significa READ:  leer datos
    
    */

    $mitabla = "SELECT * FROM mitabla ";
    $resultado = mysqli_query($mysqli, $mitabla);
    while($row=mysqli_fetch_assoc($resultado)){
        echo $row["id"]."<br>";
        echo $row["nombre"]."<br>";
        echo $row["apellido"]."<br>";
    }

  

?>
