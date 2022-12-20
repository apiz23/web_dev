<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection</title>
</head>
<body>
    <h1>Grade Determine</h1>
    <form action="main.php" method="POST">
        <label for="mark">Mark: </label>
        <input type="number" name="mark" value="mark" placeholder="Mark" >

        <input type="submit">
    </form>

    <!-- <?php
        $mark = $_POST['mark'];
        
        switch($mark){
            case $mark > 69 && $mark <= 100:
                echo "A";
                break;
            case $mark >= 60:
                echo "B";
                break;
            case $mark >= 50:
                echo "C";
                break;
            case $mark >= 40:
                echo "D";
                break;
            case $mark >= 0:
                echo "F";
                break;
            default:
                echo "Invalid input";
                break;
        }
    ?> -->
    <?php
        $mark=$_POST['mark'];

        if($mark > 69 && $mark <= 100){  
            echo "A";
        }elseif($mark >= 60){
            echo "B";
        }elseif($mark >= 50){
            echo "C";
        }elseif($mark >= 40){
            echo "D";
        }elseif($mark >= 0){
            echo "F";
        }else{
            echo "<br>Invalid input!";
        }
    ?>
</body>
</html>