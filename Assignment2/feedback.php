<?php 

    $conn = mysqli_connect("localhost","root","","assignment2_webDev");
    if (!$conn) {die("Connection failed: " . mysqli_connect_error());}
    echo 'Connected';

    
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        mysqli_query($conn,"INSERT INTO feedback VALUES ('','$name','$email','$subject','$message')");
        header("Location: index.html");
    }
?>