<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>
    <h1>Payment</h1>
    <div class="payment_container">
        <?php
            $_SESSION['payment'] = 0;
            $items_price = array(2.5,1.0,4.5,3,1.5);
            $items_name = array("oil","nuts","chocolate","toiletpaper","vegetables");
            
            for($i = 0; $i < 5; $i++){
                if($_POST[$items_name[$i]] == '' or $_POST[$items_name[$i]] < 0){
                    $_SESSION['payment'] += 0;
                }else{
                    $_SESSION['payment'] += ($_POST[$items_name[$i]] * $items_price[$i]);
                }
            }
        ?>
        <input id="payment" name="payment">
            <?php print "<p> Payment: RM <strong> $_SESSION[payment] </strong></p>"; ?>
        </input>
        <form action="receipt.php" method="POST">
            <input type="number" name="pay" value="pay amount" step="0.01">

            <div class="pay_container">
                <input type="submit" id="payBTN">
            </div>
        </form>
    </div>
</body>
</html>