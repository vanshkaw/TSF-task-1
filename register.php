<?php
    $conn = new mysqli('localhost','root','','bankingsystem');
    if($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }
    $name = $_POST["name"];
    $email = $_POST["email"];
    $amount = $_POST["amount"];

    $check = "SELECT * FROM users WHERE Email = '$email'";
    $result = mysqli_query($conn, $check);

    if(mysqli_num_rows($result) != 0)
    {
        echo '<script> alert("User with this email already exists!")</script>';
        echo 'Click below to go to the home page!'. '<br><br>'; 
        echo '<a href="home.php"><button type=\"button\" class=\"btn btn-success\">Home</button></a>';
    }
    else{

    $sql = "INSERT INTO users(Name, Email, Amount) VALUES('$name','$email','$amount')";

    if(mysqli_query($conn,$sql))
    {
        echo '<script>alert("Registration Successful!")
            window.location.href=\'home.php\';</script>';
        //redirect(home.php);
        //echo "Click below to visit the home page"."<br>";
    }
    else{
        die('No Record:' .$conn->connect_error);
        header("Location: home.php");
    }
    }
?>