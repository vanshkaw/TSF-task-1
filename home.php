<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <!-- custom css -->
    <link rel="stylesheet" href="external.css"/>

    <title>Banking System</title>
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
    <div class="head">
        <div class="row justify-content-evenly my-5">
            <div class="col-4 py-4 my-4">
                <h1>Welcome to <br> TSF <br> <span>Banking Systems</span> </h1>
                <br><br>
                <h5>Made By-</h5>
                <h3>Vansh Kaw</h3>
            </div>
            <div class="col-4 py-4 my-4">
                <h5>New to our bank</h5>
                <h3>Do Register here</h3>
                <button type="button" class="btn btn-outline-light btn-lg my-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Register</button>
                <!-- <button type="button" class="btn btn-primary my-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Register</button> -->
            </div>
        </div>
    </div>
    </header>
    
    
    
    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New User Register here</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="register.php" method="post">
            <div class="mb-3">
                <input type="text" placeholder="Name" name="name" class="form-control" id="#">
            </div>
            <div class="mb-3">
                <input type="text" placeholder="Email" name="email" class="form-control" id="#">
            </div>
            <div class="mb-3">
                <input type="text" placeholder="Amount" name="amount" class="form-control" id="#">
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
        </div>
    </div>
    </div>


</body>
</html>