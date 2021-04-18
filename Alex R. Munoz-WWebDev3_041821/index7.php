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
    <title>Exercise Number 7</title>
</head>
<body>
<nav class="bg-dark pb-4">
        <h2 class="text-center text-white pt-4">Function to Reverse String</h2>
    </nav>
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-4">
                <div class="card my-3">
                    <div class="card-header bg-info">
                        <h3 class="text-center">String to Reverse</h3>
                    </div>
                    <div class="card-body bg-dark">
                    <form method="post">
                        <label class="text-info">Enter a string:</label><br>
                        <input type="text" class="form-control" name="text"><br>
                        <button class="btn btn-danger" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
if(isset($_POST['submit'])){
    $string = $_POST['text'];
    function reverseString($string){
        $length=strlen($string);
        if($length %2==0){
            $divide=$length/2;
            $result=substr($string,$divide,$length);
            echo $result;
        }else{
            echo "Reversed string: ".strrev($string);
        }
        }
        echo "Inputted string: ".$string."<br>";
        reverseString($string);
    }
?>
</body>
</html>