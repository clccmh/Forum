<?php
require_once('dbConnection.php');

if(isset($_POST['submit'])){
  echo "Username: " . $_POST['username'] ;
} else {
  echo "NotSet";
}


?>
