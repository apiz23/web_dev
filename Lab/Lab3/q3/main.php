<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection</title>
</head>

<style>
    table,tr,td{
        border: 1px solid;
    }
</style>

<body>
    <?php 
        $name = array("Halim" => "Omar","Hatta" => "Hani","Mahathir" => "Razak");
    ?>

    <table>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
        </tr>
        <?php
            foreach($name as $k => $value){
                echo "<tr><td>" . $k . "</td><td>" . $value . "</td></tr>";
            }
        ?>
    </table>
</body>
</html>