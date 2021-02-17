<?php 
    $server_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_schema = "college";

    $conn = mysqli_connect($server_host,$db_user,$db_pass,$db_schema);
    
    if(!$conn){
        die("Connection to Database failed: " . mysqli_connect_error());
    }

    $schno = $_POST['schno'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $marks = $_POST['marks'];

    $sql_query = "INSERT INTO student (sch_no, f_name, l_name, marks) VALUES ($schno, '$fname', '$lname', $marks);";
    
    $result = mysqli_query($conn, $sql_query);

    if ($result) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>