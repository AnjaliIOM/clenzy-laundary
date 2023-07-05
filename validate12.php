<?php
session_start();
  $username = "";
  $password = "";
  $con = mysqli_connect('localhost','root',"");

  if(!$con)
  {
      echo 'Not Connected to Server';
  }

  if(!mysqli_select_db($con,'laundry'))
  {
      echo 'Database not selected';
  }
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = mysqli_query($con,"select * from admin where username = '$username' and password = '$password'");

  if(mysqli_num_rows($query) == 0){
    echo '<script type="text/javascript">

    window.onload = function () { alert("Invalid Credentials"); }

</script>';


   header("refresh:0.25; url=loginadmin.html");
  }
  else
  {
      $_SESSION['username']=$username;
      $_SESSION['password']=$password;
      echo '<script type="text/javascript">

          window.onload = function () { alert("LOGIN SUCCESSFULL"); }

</script>';
      header("refresh:0.25; url=dashboard.html"); 
  }

?>
