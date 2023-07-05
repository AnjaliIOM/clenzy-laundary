<?php

   $con = mysqli_connect('localhost','root','');

   if(!$con)
   {
       echo 'Not Connected to Server';
   }

   if(!mysqli_select_db($con,'laundry'))
   {
       echo 'Database not selected';
   }

   $name = $_POST['name'];
   $email = $_POST['email'];
   $pwd = $_POST['psw'];
   $sql = "INSERT INTO user (name,email,password) VALUES ('$name','$email','$pwd')";
   if(!mysqli_query($con,$sql))
      {
        echo '<script type="text/javascript">
                 window.onload = function () { alert("USER ALREADY  EXISTS"); }
              </script>';
        header("refresh:0.25; url=registerform.html");
      }   
   else
   {
    echo '<script type="text/javascript">
             window.onload = function () { alert("LOGIN FOR VERIFICATION"); }
          </script>';
    header("refresh:0.25; url=login.html");

   }
?>