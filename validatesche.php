   <?php 
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "laundry";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $status = $statusMsg = '';

if (isset($_POST["submit"])) 
{
        $status = 'error';

        $Product = $_POST["Products"];
        $Material = $_POST["Material"];
        $Price= $_POST["Price"];
        $Quantity = $_POST["Quantity"];
        $Subtotal = $_POST["Subtotal"];

    

    if (!empty($_FILES["image"]["name"][0]))
    {
            // Get total number of uploaded files
            $fileCount = count($_FILES["image"]["name"]);

            // Insert service request data
            $sql = "INSERT INTO schedule (Products,Material,Price,Quantity,Subtotal) VALUES ('$Product','$Material','$Price','$Quantity','$Subtotal')";
       if ($conn->query($sql) === TRUE) 
       {
                // Get the inserted service ID
                $serviceId = $conn->insert_id;

                // Iterate over each uploaded file
                for ($i = 0; $i < $fileCount; $i++) 
                {
                    // Get file info
                    $fileName = basename($_FILES["image"]["name"][$i]);
                    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

                    // Allow certain file formats
                    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                    if (in_array($fileType, $allowTypes)) 
                    {
                        $image = $_FILES['image']['tmp_name'][$i];
                        $imgContent = addslashes(file_get_contents($image));

                        // Insert image data into separate table
                        $imageSql = "INSERT INTO image (service_id, imageType, imageData) VALUES ('$serviceId', '$fileType', '$imgContent')";
                        if ($conn->query($imageSql) !== TRUE) 
                        {
                            $statusMsg = "Error inserting image data: " . $conn->error;
                            break; // Exit the loop if an error occurs while inserting an image
                        }
                    } else {
                        $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
                        break; // Exit the loop if an invalid file type is found
                    }
                }

                    if (empty($statusMsg)) 
                   {
                        $status = 'success';
                        $statusMsg = "Service requested successfully.";
                   }
        } else {
                          $statusMsg = "Error inserting service request data: " . $conn->error;
                }
    } else {
            // $statusMsg = 'Please select at least one image file to upload.';
             echo "<script> alert('Please select at least one image file to upload.');window.location='validatesche.php'</script>";
           }
}
    echo $statusMsg;

    $conn->close();
    ?>
