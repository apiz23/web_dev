<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q2</title>
</head>
<body>
    <form action="main.php" method="post">
        Value: <input type="number" name="number"> <input type="submit">
        <p id="number"></p>
    </form>

    <?php
        $number = $_POST['number'];
    ?>

    <script>
        var number = 0;
        number = "<?php print $number ?>";
        let greeting;
        

        if(number  < 100){
            greeting = "False";
        }else{
            greeting ="True";
        }

        document.getElementById("number").innerHTML = greeting;
    </script>
</body>
</html>