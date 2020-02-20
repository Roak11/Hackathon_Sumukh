<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
echo "success";

if (isset($_POST['submit']))
{

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "INSERT INTO users (email,password)
   VALUES ('$email','$password')";

    if (mysqli_query($conn, $sql))
    {
        echo "New record created successfully !";
    }
    else
    {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
