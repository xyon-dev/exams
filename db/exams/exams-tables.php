<?php include 'C:\Apache24\htdocs\exams\db\connect.php' ?>
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
      $dbConnect = connect('exams');
      ?>
  </h5>
  <h5>
    <!-- create tables: if($dbConnect->query('CREATE DATABASE exams')) 
      1. questions:
    a. questionID
    b. questionText
    b. answer (text, [bool])
    c. type (multiple, choose-all, boolean)
  2. options: multiple choice, 'choose all that agree apply'
    a. id
    b. questionID
    c. optionText 
    -->
     <?php 
        if($dbConnect->query('CREATE TABLE questions (
          ID INT AUTO_INCREMENT PRIMARY KEY,
          questionText VARCHAR(200) NOT NULL,
          answer VARCHAR(100) NOT NULL,
          type TEXT NOT NULL
        )'));
        if($dbConnect->query('CREATE TABLE options (
          ID INT AUTO_INCREMENT PRIMARY KEY,
          questionID INT NOT NULL,
          optionText VARCHAR(100) NOT NULL
        )'));
        // close connection
        $dbConnect->close();
        //
        echo "tables created: questions, and options"
      ?>
  </h5>
</body>
</html>