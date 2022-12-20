<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
</head>
<body>
    <?php
        $files_ = fopen("test.txt",'r') or die("Unable to open file!");
        while(!feof($files_)) {
            echo fgets($files_) . "<br>";
        }    

        $files_ = fopen("test.txt",'a');
        fwrite($files_,"\n\nAfter: \n");
        fwrite($files_,"My name is Muhammad\n");
        fwrite($files_,"I am ten years old");

        fclose($files_);

        ?>
</body>
</html>

