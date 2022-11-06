<?php
  $mysqli = new mysqli("localhost", "root", "", "test");
  if ($mysqli->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  

    //htttp guia 
    /*  https://programacion.net/articulo/almacenar_y_recuperar_una_imagen_de_una_base_de_datos_mysql_mediante_php_1861#:~:text=Insertar%20archivo%20de%20imagen%20en%20MySQL&text=En%20MySQL%2C%20hay%20disponibles%20cuatro,que%20es%20del%20tipo%20LONGBLOB.  */
    
    //Check connection
    if($mysqli->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Get image data from database
    $result = $mysqli->query("SELECT image FROM images WHERE id = 2");
    
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        
        //Render image
        header("Content-type: image/jpg"); 
        echo $imgData['image']; 
    }else{
        echo 'Image not found...';
    }

?>