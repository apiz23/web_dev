<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resit</title>
    <link rel="stylesheet" href="receipt.css">
</head>
<body>
    <h1>RECEIPT</h1>
    <div class="container_main">
        <div class="upper">
            <p>XYZ GROCERY STORE COMPANY</p>
            <p>BATU PAHAT MALL, JOHORE 83000</p>
            <p>Date: 23/Feb/2023</p>
            <p>Receipt No: 123456</p>
            <p>Staff: Hafizuddin</p>
            <hr class="new3">
        </div>
        <div class="middle">
            <div class="list">
                <p id="item">Items</p>
                <p id="price">Price</p>
            </div>
            <div class="oil">
                <p>Oil</p>
                <p>RM 2.50</p>
            </div>
            <div class="nuts">
                <p>Nuts</p>
                <p>RM 1.00</p>
            </div>
            <div class="chocolate">
                <p>Chocolate</p>
                <p>RM 4.50</p>
            </div>
            <div class="toiletpaper">
                <p>Toilet Paper</p>
                <p>RM 3.00</p>
            </div>
            <div class="vegetables">
                <p>Vegetables</p>
                <p>RM 1.50</p>
            </div>
            <div class="amount">
                <div class="total">
                    <p>TOTAL</p>
                    <p> <?php echo $_SESSION['payment']; ?> </p>  
                </div>
                <div class="paid">
                    <p>PAID</p>
                    <?php print "<p> $_POST[pay] </p>"; ?>
                </div>
                <div class="change">
                    <p>CHANGE</p>
                    <?php 
                        $balance = $_POST['pay'] - $_SESSION['payment'];
                        print $balance;
                    ?>
                </div>
            </div>
            <hr class="new3">
        </div>

        <div class="footer">
            <footer>
                <p id="footer">Thank you for purchase</p>
            </footer>
        </div>
    </div>
</body>
</html>