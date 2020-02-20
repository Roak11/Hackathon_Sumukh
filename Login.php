<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $myemail = mysqli_real_escape_string($db,$_POST['email']); 
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM user WHERE name = '$myusername' and password = '$mypassword'";

      $result = mysqli_query($db,$sql);
      echo "$result";

      // $row = mysqli_fetch_array($db,$result);
      // $active = $row['active'];
      
      // $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Sign-Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./Images/cow_icon.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style type="text/css">
    .field-icon {
        float: right;
        margin-left: -25px;
        margin-top: -25px;
        position: relative;
        z-index: 3;
        margin-right: 3px
    }

    .kl {
        color: #d8d8d8
    }

    @media only screen and (max-width: 768px) {
  #imh{
    display: none;
  }
}
    </style>
</head>

<body>
    <div class="container" style="padding-top: 13%;">
        <div class="row">
            <div class="col-md-5" style="padding-right:10%;">
                <h2 style="text-align: center;">Login</h2>
                <form action = "" method = "post">
                        <div class="form-group col-xs-4">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" name = "username"">
                        </div> 
                    <div class="form-group col-xs-4">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="name@domain.com" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input id="password-field" type="password" class="form-control pwd" placeholder="Enter your password" name = "password">
                        <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password kl"></span>
                    </div>
                    <button type="submit" class="btn btn-primary rounded" style="width: 100%;">Sign-Up</button>
                </form>
                <div style="text-align:center;color:#989898;">
                    Already have an account?<a href="#"><span style="color:#808080;">Log in</span></a>
                </div>
                <div>
                    <br>
                    <a class="btn btn-outline-dark justify-content-center   " href="#" role="button" style="text-transform:none;width: 100%;">
                        <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                        Login with Google
                    </a>
                </div>
            </div>
            <div class="col-md-7" style="padding-left: 10%;">
                <img src="./Images/capture.png" class="img-fluid" id=imh>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(".toggle-password").click(function() {

        $(this).toggleClass("fa-eye-slash fa-eye ");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
    </script>
</body>

</html>