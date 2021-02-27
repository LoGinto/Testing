<?php 

$status = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $surname = $_POST['surname'];

  if(empty($name) || empty($email) || empty($surname)) {
    $status = "All fields are compulsory.";
  }else{
    if(strlen($name) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $name)) {
        $status = "Please enter a valid name";
      }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $status = "Enter valid email";
      }
      else if(strlen($surname) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $surname)){
        $status = "Please enter a valid surname";
      }     
      else{
          $status = "Thank you for contacting us!";
      }
  }
}

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel = "stylesheet" href="style.css">
    <title>Welcome to Developer Alliance</title>
</head>
<body>
    <div class="containter">
        <h1>Welcome. Leave your contacts</h1>
        <form action="" method = "POST" class="main-form">
            <div class = "form-group">
                <label for="name">Name:</label>
                <input type="text"  name="name" id="name" class = "da-input" placeholder="John" required>
            </div>
            <div class = "form-group">
                <label for="Surname">Surname:</label>
                <input type="text" name= "surname" id="Surname" class = "da-input" placeholder="Doe" required>
            </div>
            <div class = "form-group">
                <label for="email">Email:</label>
                <input type="text" name = "email" id="email" class = "da-input" placeholder="example@gmail.com" required>
            </div>
            <input type="submit" class = "da-button" value = "Submit">
            <div class = "form-status"><?php echo $status?></div>
            
        </form>
    </div>
    <script src="main.js"></script>
</body>
</html>   