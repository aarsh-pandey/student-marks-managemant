<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <title>Student Data</title>
</head>

<body class='bg-secondary text-light'>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Student Hub</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>

          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
      </div>
    </div>
  </nav>









  <h3>Name - Aarsh Pandey</h3>
  <h4>Sch No - 191112205</h4>
  <hr>

  <h4> Students in Database </h4>

  <?php

    $server_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_schema = "college";

    $conn = mysqli_connect($server_host,$db_user,$db_pass,$db_schema);
    
    if(!$conn){
        die("Connection to Database failed: " . mysqli_connect_error());
    }

    $sql_query = "SELECT sch_no, f_name, l_name FROM student";

    $result = mysqli_query($conn, $sql_query);




    echo '<table class="table caption-top">
    <caption>List of users</caption>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Scholar Number</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Marks</th>
      </tr>
    </thead>
    <tbody>';

    $i = 1;
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr>
        <th scope="row">'.$i.'</th>
        <td>'. $row["sch_no"] .'</td>
        <td>'. $row["f_name"] .'</td>
        <td> '.$row["l_name"] .'</td>
        <td> '.$row["marks"] .'</td>
      </tr>';
      $i++;
    }

    echo '  </tbody>
    </table>';

    ?>








  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>

</html>