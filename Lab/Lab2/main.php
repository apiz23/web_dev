<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Libre Frankli|Caveat|Hind">
</head>
<body>
    
    <header>
        <h1>LAB 2</h1>
    </header>

    <form action="page.php" method="POST">
        <div class="name">
            <label for="name">Full Name</label></br>
            <input id="name" type="text" name="name" placeholder="Name" size="50">
        </div>
        <div class="email">
            <label for="email">E-mail</label></br>
            <input id="email" type="email" name="email" placeholder="Email" size="50">
        </div>
        <div class="messageBox">
            <label for="message">Message: </label></br>
            <textarea name="message" id="message" cols="50" rows="15" placeholder="Messages"></textarea></br>
            <div class="containerButton">
                <button type="submit" id="submitBTN" value="Submit">Send</button>
                <button type="reset" id="resetBTN" value="Reset">Clear</button>
            </div>
        </div>

        <div class="option">
            <p>Additional Option: </p>
            <input type="checkbox" name="c1" id="c1" value="Malaysia">
            <label for="c1">Malaysia</label></br>
            <input type="checkbox" name="c2" id="c2" value="Indonesi">
            <label for="c1">Indonesia</label></br>
            <input type="checkbox" name="c3" id="c2" value="Singapore">
            <label for="c1">Singapore</label>
        </div>

        <div class="agreement">
            <p>Do you agree?</p>
            <label for="yes">Yes</label>
            <input type="radio" name="agge" value="yes">
            <label for="yes">No</label>
            <input type="radio" name="agge" value="no">
        </div>

        <div class="dropdown">
            <label>Select an item from the dropdown: </label>
            <select name="language" id="language">
                <option value="php">Php</option>
                <option value="html">html</option>
                <option value="javascript">javascript</option>
                <option value="css">css</option>
            </select>
        </div>
        
    </form>

</body>
</html>