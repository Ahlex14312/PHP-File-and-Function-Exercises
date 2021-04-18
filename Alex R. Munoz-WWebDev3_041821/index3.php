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
    <title>Exercise Number 3</title>
</head>
<body>
<nav class="bg-dark pb-4">
        <h2 class="text-center text-white pt-4">Reads a file, and displays a line based on the number of vowel letters</h2>
    </nav>
<?php
function randomLiner($filename){
    $fileContents = "people.txt" ;
    $document = fopen($fileContents,'r');
    $text =  fread($document,filesize("people.txt"));
    fclose($document);  
    echo "<br>";
    $vowels = array("a", "e", "i", "o", "u"); 

    $length = strlen($text);
    $counter = 0; 
    for ($i =0; $i < $length; $i++){
        if (array_search($text[$i], $vowels)){
            $counter++; 
        }
    }
    
    $text_lines = file($fileContents); 
    if($counter%2!=0){
        echo "There are $counter vowels inside the people.txt<br>";
        echo " $counter is odd numbers;  <br>";
        echo "Therefore the 3rd Line of the file is <br>";
        echo ("<h1>$text_lines[5]</h1>");
    }else{
        echo "The number of vowels are $counter<br>";
        echo ($text_lines[3]);
    }

    }
    function readFiles($filename){
        if(file_exists($filename)){
            $fileContents = fopen($filename,'r');
            $contents = fread($fileContents, filesize($filename));  
            echo "<pre>$contents</pre>";  
            fclose($fileContents);

       }
    }
    readFiles('people.txt');
    randomLiner('people.txt');
?>
</body>
</html>