
<?php 
session_start();

if (isset($_POST["name"]) && isset($_POST["Fav"])) {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["Fav"] = $_POST["Fav"];
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
    <?php 
    if (isset($_SESSION['name']) && isset($_SESSION['Fav'])) {

        echo "Hello, " . $_SESSION['name'] . "! Your favorite programming language is " . $_SESSION['Fav'] . ".<br><br>";
        
        session_unset();
        
        session_destroy();
    } 
    ?>
    <a href="Challenge8.php">Go back to the first page</a>
</body>
</html>