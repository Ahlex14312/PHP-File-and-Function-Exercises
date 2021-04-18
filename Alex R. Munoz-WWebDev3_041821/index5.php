<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <title>Exercise Number 5</title>
</head>
<body>
<nav class="bg-dark pb-4">
        <h2 class="text-center text-white pt-4">Calculate the Factorial of the Number</h2>
    </nav>
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-4">
                <div class="card my-3">
                    <div class="card-header bg-primary">
                        <h3 class="text-center">Number to Calculate</h3>
                    </div>
                    <div class="card-body bg-dark">
                    <form method="post">
                        <label class="text-primary">Enter a number:</label><br>
                        <input type="number" class="form-control" name="number"><br>
                        <button class="btn btn-danger" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
if(isset($_POST['submit'])){
    $input_num = $_POST['number'];
     function factor($number){
          $factorial=1;
          if ($number <0){
              $abs_value=abs($number);
              echo "It's absolute value is ".$abs_value;
            }else if($number >=0){
                for ($i = 1; $i <= $number; $i++){         
                    $factorial = $factorial * $i;  
                 }  
                 echo "The factor of ".$number." is ".$factorial;
                }
            }
            factor($input_num);
        }
        ?>
</body>
</html>