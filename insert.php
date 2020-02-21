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

if (isset($_POST['submit']))
{

    $email = $_POST['email'];
    // $password = md5($_POST['password']);
    $password = $_POST['password'];
    $sql = "INSERT INTO users (email,password)
   VALUES ('$email','$password')";

    if (mysqli_query($conn, $sql))
    {
        echo "<h2>"."New record created successfully !"."</h2>";
    }
    else
    {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
