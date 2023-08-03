<?php
include("connection.php");
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Registration Form</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <h1>Registration Form</h1>
  <form>
    <label for="roll">Roll:</label>
    <input type="text" id="roll" name="roll" required /><br /><br />

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required /><br /><br />

    <label for="lastname">Lastname:</label>
    <input type="text" id="lastname" name="lastname" required /><br /><br />

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required /><br /><br />

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required /><br /><br />

    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required /><br /><br />

    <td><a href="login.html"><input type="submit" id="button" name="button"></a></td>
  </form>
  <script src="script.js"></script>
</body>

</html>


<?php

$rn = $_GET['roll'];
$fn = $_GET['name'];
$ln = $_GET['lastname'];
$em = $_GET['email'];
$pwd = $_GET['passward'];
$conpwd = $_GET['confirm_password'];



echo "$rn";
echo "$fn";
echo "$ln";
echo "$em";
echo "$pwd";
echo "$conpwd";


// connection establishment

$query = "INSERT INTO STUDENT VALUES ('$rn','$fn' ,'$ln' ,'$em','$pwd','$conpwd')";
$data = mysqli_query($conn, $query);
if ($data) {
  echo "data inserted into data base";
} else {
  echo "data is not inserted";
}
?>