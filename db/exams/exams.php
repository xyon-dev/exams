<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h5>
<?php
include 'connect.php';
//
$dbConnect = connect(NULL);
?>
</h5>
<h5>
<?php
if($dbConnect->query('CREATE DATABASE exams')){
  echo "Database created successfully";
}else{
  echo "Error creating database: ".$dbConnect->error;
}
$dbConnect->close();
?>
</h5>

</body>
</html>
