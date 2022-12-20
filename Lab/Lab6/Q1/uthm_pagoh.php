<?php

    $conn = mysqli_connect("localhost", "root", "","UTHMPagoh");

    // Check connection
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //Copy and paste dri code.txt tu and paste bwh ni and ganti
    $sql = "DELETE FROM Student WHERE States = 'Penang' ";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    }else{
        echo "Error deleting record: " . mysqli_error($conn);
    }
?>
