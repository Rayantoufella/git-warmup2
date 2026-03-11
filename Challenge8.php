<?php 
session_start();

   $err = false ;
   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["name"] = $_POST["name"];


    if(empty($_SESSION["name"])){
        $err = true ;

    } else {
        header("Location: Challenge8Page2.php");
        exit();
   }
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 8</title>  
</head>
<body>
    
    <form method="post">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" >
        <input type="submit" value="Submit">
    </form>


    <?php 
        if($_SERVER["REQUEST_METHOD"] === "POST" && $err === true){
            echo "<p style='color:red;'>Please enter your name.</p>";
        } 
        ?>
</body>