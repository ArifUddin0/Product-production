<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lift Keep</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* CSS style for the boxes */
        .container {
            margin-top: 50px;
        }
        .navbar-brand img {
            max-height: 40px;
            margin-right: 10px;
        }
        .card-container {
            margin: 0 10px;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="path_to_your_logo_image" alt="Lift Keep Logo">
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
                        <a class="nav-link" href="http://localhost/pp/fitness-monitoring/resources/views/auth/register.blade.php"  class="text-primary">Register</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="http://localhost/pp/fitness-monitoring/resources/views/auth/login.blade.php" class="text-primary">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Track Workouts</h5>
                    <p class="card-text">Click here to track your workouts.</p>
                    <a href="http://localhost/pp/fitness-monitoring/resources/views/workouts.blade.php" class="btn btn-primary">Go to Workouts</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Track Meals</h5>
                    <p class="card-text">Click here to track your meals.</p>
                    <a href="http://localhost/pp/fitness-monitoring/resources/views/meals.blade.php" class="btn btn-primary">Go to Neals</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
