<?php 
    session_start();
      $db = mysqli_connect("localhost", "root", "", "gym");

    if(isset($_POST['submit']))
 {
      
      $access = $_POST['access'];
      if($access=='')
          {
              echo "<script>alert('Enter the Access Code!')</script>";
          }
   else 
   {
        $sql = "select * from maccess WHERE access='$access'";
        $sql_run = mysqli_query($db,$sql);
        if(mysqli_num_rows($sql_run)>0)  
          {  
             header("location: membersignup.php"); 
          }
    }
  }
    if(isset($_POST['login']))
 {
  header("location: member/index.php");
}
?>
<html>
<head>
<title>Member</title>
<style>
body
{
margin:0;
padding:0;
font-family:sans-serif;
background-size:cover;

}
.loginbox
{
position:absolute;
top:50%;
left:20%;
transform:translate(-50%,-50%);
background:rgba(0,0,0,0.5);
width:350px;
height:350px;
padding:80px 40px;
box-sizing:border-box;
}
#p1
{
font-size: 22px;
margin:0;
padding:0 0 20px;
color:white;
text-align:center;
}
.loginbox p
{
margin:0;
padding:0;
font-weight:bold;
color:white;
text-align:left;
}
.loginbox input
{
width:100%;
height: 40px;
margin-bottom:20px;
}

#b1
{
width:40%;
height: 40px;
margin-bottom:20px;
}
.loginbox input[type="submit"]
{
border:none;
outline:none;
height:40px;
color:white;
font-size:16px;
background:#C4ACD0;
cursor:pointer;
border-radius:20px;
}
.loginbox input[type="submit"]:hover
{
background:#9BFC95;
color:Blue;
}
</style>
</head>
<body background="images/image1.jpg">
<div class ="loginbox">

<form method="post" action="maccess.php">
<p id="p1">Access Code &nbsp;<input type="submit" id="b1" name="login" value="Login"></p>
<font size="2" color="white"> Enter the access code given by the admin manually<b>*</b></font>

<input type="text" name="access" id="username" placeholder="Enter the Code"><br><br>

<input type="submit" name="submit" value="Submit"><br><br>
</div>
</form>
</body>
</html>
