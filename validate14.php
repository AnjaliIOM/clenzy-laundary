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

  $otp = $_SESSION['otp'];
  $entered_otp = $_POST['otp'];

  if($otp == $entered_otp){

    header("refresh:0.25; url=demo23.php"); 
  } else{
    echo '<script type="text/javascript">

          window.onload = function () { alert("Entered a wrong OTP"); }

</script>';
      header("refresh:0.25; url=pickup.html");
  }

?>