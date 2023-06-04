<?php

  session_start();

  if(!isset($_SESSION['atenticado']) || $_SESSION['atenticado'] != 'SIM'){
    header('Location: index.php?login=erro2');
  }
  
?>