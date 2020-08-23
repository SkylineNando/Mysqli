<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "events";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $idEvents = filter_input(INPUT_GET, 'idEvents', FILTER_SANITIZE_NUMBER_INT);
    if(!empty($idEvents)){
      $idEvents= "DELETE FROM events WHERE idEvents ='$idEvents'";
      $idEvents = mysqli_query($conn, $idEvents);
      if(mysqli_affected_rows($conn)){
        echo "success";;
      }else{
        echo "Could not save to database";
      }
    }else{	
      echo "Could not save to database";
    };
   ?>
