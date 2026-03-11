<?php

session_start();

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $articles = ["article1", "article2", "article3"];

   foreach ($articles as $article) {

    if(array_key_exists($article, $_POST)) { 

        if(!in_array($article, $_SESSION["cart"])) {
            $_SESSION["cart"][] = $article;
        }else{
            echo "<p style='color:red;'>Article already in cart.</p>";

        }
    }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 9</title>  
</head>
<body>
    <?php
    if (!empty($_SESSION["cart"])) {
        $count = 0 ;
        echo "<h3>Votre panier :</h3>";
        for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
            $count ++ ;
        }
        echo "<p>" . $count . " article(s)</p>" ;
    }
    ?>
    
    <form action="Challenge9.php" method="post">
        <h2>Articles :</h2>

        <label>Article 1</label>
        <input type="submit" name="article1" value="Add to cart">
        <br><br>
        <label>Article 2</label>
        <input type="submit" name="article2" value="Add to cart">
        <br><br>
        <label>Article 3</label>
        <input type="submit" name="article3" value="Add to cart">
        <br><br>
    </form>
</body>
</html>