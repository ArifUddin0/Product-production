<!DOCTYPE html>
<html lang="en">
<x-app-layout>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lift Keep</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* CSS for workout boxes */
        .box {
            border: 1px solid #000;
            padding: 10px;
            margin-bottom: 10px;
        }

        /* CSS for the "Add" button */
        #add-workout-btn {
            margin-top: 10px;
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
                        <a class="nav-link" href="http://localhost/pp/fitness-monitoring/resources/views/home.blade.php" class="text-primary">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-4">
            <div id="workout-container">
                
            </div>
            <button id="add-workout-btn" class="btn btn-primary">Add Workout</button>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
      
        document.addEventListener('DOMContentLoaded', function () {
            
            // Add workout button
            document.getElementById('add-workout-btn').addEventListener('click', function () {
                const workoutName = prompt('Enter the name for Workout ' );

                // Creates you a new workout box
                const newWorkoutBox = document.createElement('div');
                newWorkoutBox.classList.add('box');
               
                // CInput boxes for the weight sets and reps of a workout
            const repsInput = document.createElement('input');
            repsInput.setAttribute('type', 'number');
            repsInput.setAttribute('placeholder', 'Reps');

            const setsInput = document.createElement('input');
            setsInput.setAttribute('type', 'number');
            setsInput.setAttribute('placeholder', 'Sets');
            
            const weightInput = document.createElement('input');
            weightInput.setAttribute('type', 'number');
            weightInput.setAttribute('placeholder', 'weight');
           

            // Create a label for the workout name
            const workoutLabel = document.createElement('div');
            workoutLabel.textContent = workoutName || 'Workout ';

            // Workout box layout
            newWorkoutBox.appendChild(workoutLabel);
            newWorkoutBox.appendChild(repsInput);
            newWorkoutBox.appendChild(setsInput);
            newWorkoutBox.appendChild(weightInput);

                // Workout box
                document.getElementById('workout-container').appendChild(newWorkoutBox);
            });
        });
    </script>




</body>
</html>
