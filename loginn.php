<?php

require "config.php";

if(isset($_POST["submit"]))
$name = $_POST["name"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$confirmpassword = $_POST["coonfirmpassword"];
$duplicate = mysqli_query($conn, "SELECT * FORM Tb_user WHERE username =   '$usernamemail' OR email = '$usernameemail'");
$row = mysqli_num_rows($result) 

    if($password == $row["password"]){
$SESSION["login"]= true
$SESSION["id"] = $row["id"];
header("location : indec.php");

}

else{
echo
"<script> 'alert(wrong password');   </script>"
}


echo{
"<script> 'alert(user is nog registered');   </script>"
}

?>


<html lang="en" dir="ltr">

<head>

    <meta charset="UTF-8">
    <title>login</title>

    <h2>Login</h2>


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
<button typ="submit" name="submit">Login</button>

<a href = "registration.php">Registration</a>

</form>
</br>

</head>
<body>