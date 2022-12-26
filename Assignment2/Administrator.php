<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="assets/img/images-removebg-preview (1).png" rel="icon">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Feedback</title>
</head>

<style>
    .container{
        margin-top: 60px;
    }
</style>

<body>
    <nav class="navbar navbar-light bg-warning">
        <div class="container">
        <a class="navbar-brand mx-auto" href="#">
            <h1>Administrator Page</h1>
        </a>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="Login.html">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
            </svg>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Main Page <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <span class="navbar-text">
            <div class="btn-group dropleft">
                <div class="collapse navbar-collapse" id="navbar-list-3">
                  <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="https://t3.ftcdn.net/jpg/03/62/56/24/360_F_362562495_Gau0POzcwR8JCfQuikVUTqzMFTo78vkF.jpg" width="45" height="35" class="rounded-circle">
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="index.html">Main Page</a>
                        <a class="dropdown-item" href="Login.html">Log Out</a>
                      </div>
                    </li>   
                  </ul>
                </div>
            </div>
          </span>
        </div>
      </nav>

    <div class="container-fluid">
    <?php
      $conn = mysqli_connect("localhost", "root", "", "assignment2_webDev");
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      
      $result = mysqli_query($conn,"SELECT name,email,subject,message FROM feedback");
      
      $i = 0;
      echo '<table class="table table-striped table-primary">';
      echo '<thead>';
      echo '<tr>';
        echo '<th scope="col">No</th>';
        echo '<th scope="col">Name</th>';
        echo '<th scope="col"> Email</th>';
        echo '<th scope="col"> Subject </th>';
        echo '<th scope="col"> Feedback </th>';
      echo '</tr>';
      echo '</thead>';
      echo '<tbody';
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<th scope="row"> ' . ($i+1) . '</th>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['subject'] . '</td>';
            echo '<td>' . $row['message'] . '</td><br>';
            echo '</tr>';
            $i++;
          }
      }
      echo '</tbody>';
    ?> 
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>