<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1</title>
</head>

<style>
    table{
        border: 5px solid;
    }

    tr,td,th{
        border-style: groove;
    }
</style>

<body>
    <?php
        $personal_data = array(
                        array(1,"Anip",20),
                        array(2,"Hatta",12),
                        array(3,"Nazri",13),
                        array(4,"Mamat",22)
                    );
        echo "<table>";
        echo "<tr>";
        echo "<th> Id </th>";
            echo "<th> Name </th>";
            echo "<th> Ages </th>";
        echo "</tr>";
            
        for($i = 0; $i < 4; $i++){
            echo "<tr>";
            for($j = 0;$j < 3; $j++){
                echo "<td>" . $personal_data[$i][$j]. "</td>";
            }
            echo "</tr>";
        }
        
        echo "</table>";
        ?>

                <!-- <?php
            $personal_data = array("Anip" => 20,"Hatta" => 12,"Nazri" => 13, "Mamat" => 22);
            echo "<table>";
                echo "<tr>";
                    echo "<th> Id </th>";
                    echo "<th> Name </th>";
                    echo "<th> Ages </th>";
                echo "</tr>";
        
            $i = 1;
            foreach($personal_data as $k => $var){
                echo "<tr>";
                    echo "<td>" . $i++ . "</td>";
                    echo "<td>" . $k . "</td>";
                    echo "<td>" . $var . "</td>";
                echo "</tr>";
            }
    
            echo "</table>";
        ?> -->
</body>
</html>