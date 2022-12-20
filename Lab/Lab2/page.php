<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Doc</title>
</head>
<body>
    <h1>Make a comment</h1>
    <p>Thank you for you participation! We have registered your comment in our database:</p>
    <ul>
        <li>
            Name: <strong></strong><?php echo $_POST['name']?></strong></br>
        </li>
        <li>
            Email: <strong></strong><?php echo $_POST['email']?></strong></br>
        </li>
        <li>
            Comment: <strong></strong><?php echo $_POST['message']?></strong>
        </li>
    </ul>
</body>
</html>