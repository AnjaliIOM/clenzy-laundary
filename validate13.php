<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$con = mysqli_connect('localhost', 'root', '');

if (!$con) {
    echo 'Not Connected to Server';
}

if (!mysqli_select_db($con, 'laundry')) {
    echo 'Database not selected';
}

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contactnumber'];
$pincode = $_POST['pincode'];
$address = $_POST['address'];


$query = "INSERT INTO form (name, email, contactnumber, pincode, address) VALUES ('$name', '$email', '$contact', '$pincode', '$address')";
if (!mysqli_query($con, $query)) {
    echo '<script type="text/javascript">
    window.onload = function () { alert("Invalid Credentials"); }
    </script>';
    header("refresh:0.25; url=pickup.html");
} else {
    echo '<script type="text/javascript">
        window.onload = function () { alert("YOUR SCHEDULE IS CONFIRMED"); }
    </script>';

    $sql = "SELECT * FROM form WHERE email = '$email'";
    $result = $con->query($sql);

    if ($result->num_rows == 0) {
        echo '<script type="text/javascript">
            window.onload = function () { alert("Email ID not found"); }
        </script>';
        header("refresh:0.25; url=pickup.php");
    } else {
        $row = $result->fetch_assoc();
        $name = $row["name"];

        $otp = rand(100000, 999999);

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->Username = 'clenzelaundry@gmail.com';
        $mail->Password = 'htphrjjtmkaqcjca';
        $mail->setFrom('noreply_reset_password@gmail.com');
        $mail->addAddress($email);

        $mail->Body = "Hi " . $name . ", Your OTP is: " . $otp;

        // Send the message and handle errors
        try {
            $mail->send();
            echo "SUCCESS";
            echo '<script type="text/javascript">
                window.onload = function () { alert("OTP has been sent to your registered Email ID"); }
            </script>';

            $_SESSION['otp'] = $otp;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['contactnumber'] = $contact;
            $_SESSION['pincode'] = $pincode;
            $_SESSION['address'] = $address;
            
            header("refresh:0.25; url=verify.html");
        } catch (Exception $e) {
            echo "ERROR: " . $mail->ErrorInfo;
        }
    }
}
?>
