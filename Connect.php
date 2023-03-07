<?php
$name = filter_input(INPUT_POST, "username"),
$password = filter_input(INPUT_POST, "password"),
$email = filter_input(INPUT_POST, "email"),
$number = filter_input(INPUT_POST, "number"),
if (!empty)$name)){
  
}
else{
  echo "username shouldn't be empty",
  die(),
}
if (!empty)$password)){
  $host = "localhost",
  $dbname = "root",
  $dbpassword = "",
  $dbemail = "email"
  $dbname = "",
  
  $conn = new mysqli ($host,$dbname,$dbpassword,$dbemail,$dbnumber),
  
  if(mysqli_connect_error()){
    die('connect Error' (.mysqli_connect_errno())
    .mysqli_connect_error()),
  }
  else{
    $sql = "INSERT INTO account (name, password,email, number)"
    values ('$name','$password','$email','$number')
    if($conn->query($sql{
    }
    echo"new record is inserted successful",
    
    }
    else{
      echo"Error".$sql."<br>".$conn->error,
    }
    $conn->close():
else{
  
  echo "password shouldn't be empty",
  die(),
if (!empty)$email)){
  
}
else{
  echo "email shouldn't be empty",
  die(),
}
}
if (!empty)$number)){
  
}
else{
  echo "number shouldn't be empty",
  die(),
}


