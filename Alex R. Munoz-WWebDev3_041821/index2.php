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
    <title>Exercise Number 2</title>
</head>
<body>
<nav class="bg-dark pb-4">
        <h2 class="text-center text-white pt-4">Append a line into a file given the line number</h2>
    </nav>
    <?php
    function existFile($filename,$fileData,$lineNumber){
        if(file_exists($filename)){
            $file = fopen($filename,'a');
            $lines = file($filename,FILE_IGNORE_NEW_LINES);
            array_splice( $lines, $lineNumber-1, 0, $fileData );
            file_put_contents($filename,join("\n",($lines)));
            fclose($file);

        }else{
            echo "File does not exist!";
        }
    }
    function readFiles($filename){
        if(file_exists($filename)){
            $file = fopen($filename,'r');
            $contents = fread($file, filesize($filename));   
            echo "<pre>$contents</pre>";  
            fclose($file);

       }
    }
    readFiles('people.txt');
    existFile('people.txt',"John Smith",7);

?>
</body>
</html>