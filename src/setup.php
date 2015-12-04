<?php
$dbCon = mysqli_connect("localhost", "forum", "forum", "forum");
if (mysqli_connect_errno()) {
  echo "Failed to connect " . mysqli_connect_error();
  die();
}

$userCreate = "CREATE TABLE user (
               username varchar(50) not null,
               password char(60) not null,
               name varchar(100) not null,
               email varchar(100) not null,
               primary key (username),
               constraint uniques unique (username, email))";
mysqli_query($dbCon, $userCreate int resultmode = );



mysqli_close($dbCon);
?>
