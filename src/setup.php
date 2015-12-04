<ul>

<?php
$dbCon = mysqli_connect("localhost", "forum", "forum", "forum");
if (mysqli_connect_errno()) {
  echo "<p>Database Connection Failed: " . mysqli_connect_error() . "</p>";
  die();
}

$userCreate = "CREATE TABLE user (
               username varchar(50) not null,
               password char(60) not null,
               name varchar(100) not null,
               email varchar(100) not null,
               primary key (username),
               constraint uniques unique (username, email))";
if (mysqli_query($dbCon, $userCreate) === TRUE) {
  echo "<p>Table \"user\" created successfully</p>";
} else {
  echo "<p>Creation of table \"user\" failed</p>";
}

$postsCreate = "CREATE TABLE posts (
               postID int not null unique auto_increment,
               postText varchar(1000),
               primary key (postID))";
if (mysqli_query($dbCon, $postsCreate) === TRUE) {
  echo "<p>Table \"posts\" created successfully</p>";
} else {
  echo "<p>Creation of table \"posts\" failed</p>";
}


mysqli_close($dbCon);
?>
