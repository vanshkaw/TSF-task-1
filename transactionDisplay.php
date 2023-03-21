<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <title>Transactions</title>
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

    <div class="card">
        <div class="card-header">
            TRANSACTIONS 
        </div>
        <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">S No.</th>
                <th scope="col">Sender</th>
                <th scope="col">Receiver</th>
                <th scope="col">Amount</th>
                <th scope="col">Date & Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = new mysqli('localhost','root','','bankingsystem');
                if($conn->connect_error){
                    die('Connection Failed: '.$conn->connect_error);
                }
                $sql = "SELECT *FROM transactions";
                $results = $conn->query($sql);
                
                if(!$results) {
                die('No Record:' .$conn->connect_error);
                    }
                while($row = $results->fetch_assoc())
                    {
                        echo "
                        <tr>
                            <td scope=\"col\">".$row["SNo."]."</td>
                            <td scope=\"col\">".$row["Sender"]."</td>
                            <td scope=\"col\">".$row["Receiver"]."</td>
                            <td scope=\"col\">".$row["Amount"]."</td>
                            <td scope=\"col\">".$row["Date & Time"]."</td>
                        </tr>";
                    } 
                ?>
            </tbody>
        </table>
        </div>
    </div>


</body>
</html>