<?php
$dbCon = mysqli_connect("localhost", "forum", "forum", "forum");
if (mysqli_connect_errno()) {
  echo "<p>Database Connection Failed: " . mysqli_connect_error() . "</p>";
  die();
}


?>
