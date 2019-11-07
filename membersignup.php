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
         $sql = "select * from membersignup WHERE login_id='$login_id'";
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
                   $sql = "INSERT INTO membersignup(login_id, pass_key, security, level, name) VALUES('$login_id', '$pass_key', '$security', 5,'$name')";
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
<html lang="en">
<head>
	<title>Pheonix_Member</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/memberloginbootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="memberloginfonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/memberloginanimate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/memberlogincss-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/memberloginselect2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/memberloginutil.css">
	<link rel="stylesheet" type="text/css" href="css/memberloginmain.css">

</head>
<body>
	
	
	<div class="limiter">
		<div class="container-login100"  style="background-image: url('images/member.jpg'); width:100%; height:100%">
			   <div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div> 
			
				

				<form method="post" action="membersignup.php" class="login100-form validate-form">
					<span class="login100-form-title"><br><br>
						Member
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="login_id" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Email is required">
						<input class="input100" type="text" name="security" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope-open" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<i class="fa fa-lock" aria-hidden="true"></i>
						<input class="input100" type="password" name="pass_key" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Confirm your Password">
						<input class="input100" type="password" name="pass_key2" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button name="register_btn" class="login100-form-btn">
							Signup
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="member/index.php">
							Click Here to login!!!
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			
		</div>
	</div>
	
	

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="js/memberloginmain.js"></script>

</body>
</html>