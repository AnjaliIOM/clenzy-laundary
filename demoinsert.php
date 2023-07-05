<?php 
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "laundry";

    session_start();
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    if(isset($_POST['data'])){
       
        $data = $_POST['data'];
        $date=$_POST['date&time'];
        $email=$_SESSION['email'];
    
 // Assuming 'data' is the name attribute of the input field

// Step 3: Insert data into the database
foreach ($data as $row) {
  $column1 = $row[0]; 
  $column2 = $row[1];
  $column3 = $row[2];
  $column4 = $row[3];
  $column5 = $row[4];
  $column6 = $row[5]; 
  $column7 = $row[6]; 
  $column8 = $row[7]; 

  //Execute the insertion query
  $sql = "INSERT INTO schedule (Products, Material, Price, Quantity,Subtotal, Image, category,service,datetime,email) VALUES ('$column1', '$column2',  '$column3',  '$column4',  '$column5', '$column6', '$column7','$column8','$date','$email')";
  
  if ($conn->query($sql)) {
    echo "Data inserted successfully!";
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 
}
    }


$conn->close();
?>

