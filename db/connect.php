<?php
# allow CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

// Create connection function
function connect($dbname){
  # CONNECT to DB
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $connection = NULL;
  if($dbname != NULL ){
    $connection = new mysqli($servername, $username, $password, $dbname);
  }else{
    $connection = new mysqli($servername, $username, $password);
  }
  // Check connection
  if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
    return 0;
  }
  else{
    echo "Connection host: " .$connection->host_info . "\n";
  }
  return $connection;
}
//$msg = json_encode("got it");