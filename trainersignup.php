<?php 
    session_start();
      $db = mysqli_connect("localhost", "root", "", "gym");
 
if(isset($_POST['register_btn'])) 
{ 
   $login_id = $_POST['login_id'];
   $name = $_POST['login_id'];
   $security = $_POST['security'];
   $pass_key = $_POST['pass_key'];
   $pass_key2 = $_POST['pass_key2'];

   if($security=='')
   {
      echo "<script type='text/javascript'>alert('Enter the Valid Details')</script>";
   }
   else 
   {
          if ($pass_key == $pass_key2)
      {
         $sql = "select * from trainersignup WHERE login_id='$login_id'";
         $sql_run = mysqli_query($db,$sql);
        
         if(mysqli_num_rows($sql_run)>0)
          { 
            if($login_id=='')
              {
                echo "<script type='text/javascript'>alert('Enter the Valid Details')</script>";
              }
              else
              {
            echo "<script type='text/javascript'> alert('login_id already exists... try another login_id')</script>";
              }
         }
          else
           {
                if($pass_key=='' and $pass_key2=='' )
                {
                  echo "<script type='text/javascript'> alert('Enter the Valid Details')</script>";
                }
                else {
                   $sql = "INSERT INTO trainersignup(login_id, pass_key, security, level, name) VALUES('$login_id', '$pass_key', '$security', 5,'$name')";
             $sql_run = mysqli_query($db, $sql);
                     if($sql_run)
                     {
                      echo "<script type='text/javascript'> alert('User Registered... Go to Login page')</script>";
                     }
                    else
                     {
                       echo "<script type='text/javascript'> alert('Error...')</script>";
                      }  
                 }
            }
       }
        
        else{
                echo "<script type='text/javascript'> alert('pass_key and Conform pass_key does not match...')</script>";
            }
   }
}
 ?>
 <!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Phoenix_Trainer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/trainerloginstyle.css">

  
</head>
<body>
  
<div class="container-login100" style="background-image: url('images/chalk-clap.jpg');">
  <div class="signup__container">
  
  <div class="container__child signup__thumbnail">
    <div class="thumbnail__content text-center"><br>
      <center> <font  size=9px ><b> Trainer </b></font> </center><br><br>
      <h1 class="heading--primary">Welcome to Phoenix!!!</h1>
      <h2 class="heading--secondary">Are you ready to train?</h2>
    </div>
    <div class="thumbnail__links">
      <ul class="list-inline m-b-0 text-center">
        <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="" target="_blank"><i class="fa fa-instagram"></i></a></li>
      </ul>
    </div>
    <div class="signup__overlay"></div>
  </div>
 
  <div class="container__child signup__form">
    <form method="post" action="trainersignup.php">
      <div class="form-group">
        <label for="login_id">Username</label>
        <input class="form-control" type="text" name="login_id" id="username"  required />
      </div>
       
      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="text" name="security" id="email"  required />
      </div>
      <div class="form-group">
        <label for="Password">Password</label>
        <input class="form-control" type="Password" name="pass_key" id="Password"  required />
      </div>
      <div class="form-group">
        <label for="PasswordRepeat">Confirm Password</label>
        <input class="form-control" type="Password" name="pass_key2" id="Password"  required />
      </div>
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" name="register_btn" type="submit" value="Register" />
          </li>
          <li>
            <a class="signup__link" href="trainer/index.php">I am already a trainer</a>
          </li>
        </ul>
      </div>
    </form>  
  </div>
  </div>
</body>

</html>