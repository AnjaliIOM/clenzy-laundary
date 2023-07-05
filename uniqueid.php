
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
  $unique ID= $_POST['UID'];
  $sql = "INSERT INTO uniqueid(UID) VALUES ('$name','$email','$pwd')";
   if(!mysqli_query($con,$sql))
      {
        echo '<script type="text/javascript">
                 window.onload = function () { alert("USER ALREADY  EXISTS"); }
              </script>';
        header("refresh:0.25; url=registerform.html");
      }   
   else
function generateUniqueID($length = 8) {
    $timestamp = time(); // Get the current timestamp
    $random = mt_rand(100000, 999999); // Generate a random number
    $data = $timestamp . $random; // Concatenate the timestamp and random number
    $uniqueID = sha1($data); // Apply a hash function to create a unique ID

    // Trim the unique ID to the desired length
    $uniqueID = substr($uniqueID, 0, $length);

    return $uniqueID;
}

// Usage:
$uniqueID = generateUniqueID();
echo " Thank You for Booking!! Your Unique ID is: " . $uniqueID;
?>

