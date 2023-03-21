<?php

    $conn = new mysqli('localhost','root','','bankingsystem');
    if($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }
    $sql = "SELECT * FROM users";
    $results = $conn->query($sql);

    $options = "";
    while($row2 = mysqli_fetch_array($results))
    {
        $options = $options."<option>$row2[1]</option>";
    }

    //on click of transfer
    if(isset($_POST['button1'])) {

        $sname = $_POST["sname"];
        $rname = $_POST["rname"];
        $amount = $_POST["amt"];

        // $check = "SELECT Amount FROM users WHERE Name = '$sname'";
        $check = "SELECT * FROM users WHERE Name = '$sname'";
        $result = $conn->query($check);

        $array = $result->fetch_row();
        $balance=$array[3];

        if($sname==$rname)
        {
            echo '<script> alert("Sender and Receiver cannot be same")</script>';
            echo 'window.location = "transaction.php";';
            // echo '<a href="transaction.php"><button type=\"button\" class=\"btn btn-success\">Ok</button></a>';
        } 

        if($amount>$balance)
        {
            echo '<script> alert("Amount entered is more than account\'s balance")</script>';
            echo 'window.location = "transaction.php";';
            // echo '<a href="transaction.php"><button type=\"button\" class=\"btn btn-success\">Ok</button></a>';
        } 
        else{
            

            $set="UPDATE users SET Amount = Amount-$amount WHERE Name = '$sname';
                  UPDATE users SET Amount = Amount+$amount WHERE Name = '$rname';
                  INSERT INTO transactions (Sender, Receiver, Amount)
                        VALUES ('$sname', '$rname', '$amount');";
            $conn->multi_query($set);

            //$conn->query("INSERT INTO transactions (Sender, Receiver, Amount, Date & Time)
                        //VALUES ('$sname', '$rname', '$amount', now());");


            echo '<div class="alert alert-success" role="alert">Transaction is successful!</div>';

        }
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TSF BANKING SYSTEM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="users.php">Users</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="transactionDisplay.php">Transactions</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    </header>    

    <form action="transaction.php" method="post">
        <div class="container">
            <div class="row justify-content-center my-4">
                <h2>Transfer money</h2>
            </div>
            <div class="row">
                <div class="mb-3 col">
                    <label for="sender" class="form-label">Transfer from</label>
                    <select class="form-select" name="sname" aria-label="Default select example" required>
                        <option disabled selected>Sender's Account</option>
                        <?php echo $options;?>
                    </select>
                </div>
                <div class="mb-3 col">
                    <label for="receiver" class="form-label">Transfer to</label>
                    <select class="form-select" name="rname" aria-label="Default select example" required>
                        <option disabled selected>Receiver Account</option>
                        <?php echo $options;?>
                    </select>
                </div>
            </div>
            <div class="row ">
                <div class="my-3 col d-flex justify-content-center">
                    <label for="amt" class="form-label m-3"> Amount </label> 
                    <input type="number" name="amt" required>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger btn-lg" name="button1">Transfer</button>
        </div>
        <!-- <input type="submit" name="button1" value="Button1"/>
        <button type="submit" class="btn btn-primary">Register</button> -->
    </form>


</body>
</html>