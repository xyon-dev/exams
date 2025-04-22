<?php
include 'db\connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>
  <?php echo('hello world') ?>
</h1>
</body>
</html>
<h5>
  <?php $conn = connect(NULL)?>
</h5>
<h5>connection close: 
  <?php 
    echo $closed = mysqli_close($conn); 
  ?>  
</h5>
