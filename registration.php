<?php 

require "config.php";

if (isset($_POST["submit"]))
$name = $_POST["name"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$confirmpassword = $_POST["coonfirmpassword"];
$duplicate = mysqli_query($conn, "SELECT * FORM Tb_user WHERE username =   '$username' OR email = '$email'");
if(mysqli_num_rows($duplicate)> 0){

echo
"<script> 'alert(Username or email has already taken');   </script>";


}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <meta charset="UTF-8">
    <title>Registration</title>
   
</head>
<body>
<h2>Registration</h2>

<form class="" action="" methode="post" autocomplete="off">
    <label for="name">name : </label>
<input type="text" name="username" id="username" required value=""> <br>
<label for="username">username : </label>
<input type="text" name="name" id="name" required value=""> <br>
<label for="password">password : </label>
<input type="text" name="password" id="password" required value=""> <br>
<label for="email">email: </label>
<input type="text" name="email" id="email" required value=""> <br>
<label for="confirm password">confirm password: </label>
<input type="text" name="confirm password" id="confirm password" required value=""> <br>
<button typ="submit" name="submit">Registration</button>

</form>
<br>

<a href="loginn.php">login</a>



</body> 
</html>