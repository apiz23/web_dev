<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XYZ GROCERY STORE COMPANY</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <h1>Welcome to XYZ GROCERY STORE</h1>
    <form action="payment.php" method="POST">
        <div class="item_Cointainer">
            <p>List of items:</p>
            <div class="item">
                <div class="oil">
                    <label for="oil">OIL</label>
                    <input type="Number" name="oil" placeholder="RM 2.50">    
                </div>
                <div class="nuts">
                    <label for="nuts">NUTS</label>
                    <input type="Number" name="nuts" placeholder="RM 1.00">    
                </div>
                <div class="chocolate">
                    <label for="chocolate">CHOCOLATE</label>
                    <input type="Number" name="chocolate" placeholder="RM 4.50">    
                </div>
                <div class="toiletPaper">
                    <label for="toiletpaper">TOILET PAPER</label>
                    <input type="Number" name="toiletpaper" placeholder="RM 3.00">    
                </div>
                <div class="vegetables">
                    <label for="vegetables">VEGETABLES</label>
                    <input type="Number" name="vegetables" placeholder="RM 1.50">    
                </div>
            </div>
            <div class="containerBTN">
                <input type="Submit" name="submit" id="submit" placeholder="Send">
            </div>
        </div>
    </form> 

</body>
</html>