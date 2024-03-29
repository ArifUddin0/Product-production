<!DOCTYPE html>
<html lang="en">
<x-app-layout>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lift Keep</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-top: 50px; 
        }

        .line {
            width: 1px;
            height: 100%;
            background-color: #000;
        }

        .box {
            width: 200px;
            height: 100px;
            border: 5px solid #000;
            margin-bottom: 10px;
            text-align: center;
            line-height: 100px;
        }
    </style>

</head>
<body>
   
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <a class="navbar-brand" href="#">
             <img src="{{ public('images/Lift Keeper.png') }}" alt="Lift Keeper Logo">
                Lift Keep
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="http://localhost/pp/fitness-monitoring/resources/views/home.blade.php" class="text-primary">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="http://localhost/pp/fitness-monitoring/resources/views/workouts.blade.php" class="text-primary">Workouts</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="http://localhost/pp/fitness-monitoring/resources/views/meals.blade.php" class="text-primary">Meals</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="http://localhost/pp/fitness-monitoring/resources/views/mykeep.blade.php" class="text-primary">Mykeep</a>
                        </li>
                        <li class="nav-item">
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="http://localhost/pp/fitness-monitoring/resources/views/home.blade.php" class="text-primary">Register</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="http://localhost/pp/fitness-monitoring/resources/views/auth/login.blade.php" class="text-primary">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        
        <div class="container mt-4">
        
        </div>
        <!-- Main Content -->
        <div class="container mt-4">
        <!-- Left Side OF the screen -->
        <div class="left-side">
            <div class="box">Breakfast</div>
            <div class="box">Lunch</div>
            <div class="box">Dinner</div>
            <div class="box">Extra meal/snack</div>
            <div class="box">Extra meal/snack</div>
            <div class="box">Extra meal/snack</div>
        </div>
        <!-- Divider Line to split it -->
        <div class="line"></div>
        <!-- Right Side overivciew -->
        <div class="right-side"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
