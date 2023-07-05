<?php
session_start();
  $con = mysqli_connect('localhost','root',"");

  if(!$con)
  {
      echo 'Not Connected to Server';
  }

  if(!mysqli_select_db($con,'laundry'))
  {
      echo 'Database not selected';
  }
  $email = $_POST['email_id'];
  $password = $_POST['password'];

  $query = mysqli_query($con,"select * from user where email = '$email' and password = '$password'");

  if(mysqli_num_rows($query) == 0){
    echo '<script type="text/javascript">

    window.onload = function () { alert("Invalid Credentials"); }

</script>';


   header("refresh:0.25; url=validate.php");
  }
  else
  {
      $_SESSION['email']=$email;
      $_SESSION['password']=$password;
      echo '<script type="text/javascript">

          window.onload = function () { alert("WELCOME TO LAUNDARY SYSTEM"); }

</script>';
      header("refresh:0.25; url=home.html"); 
  }

?>