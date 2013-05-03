<?php

//require './scripts/requires/site_data.php';


  if (isset($_REQUEST['p']) && isset($_REQUEST['em'])) {
  if (strlen($_REQUEST['p'] > 0) && strlen($_REQUEST['em']) > 0) {
  $email = $_REQUEST['em'];
  $password = $_REQUEST['p'];
  echo 'Hi user : email = ' . $email . 'Password = ' . $password;
  }
  } else {
  header('Location: index.php');
  exit();
  } 
?>
