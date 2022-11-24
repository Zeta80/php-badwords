<?php
var_dump($_GET);
$text = $_GET["text"];
$badword = $_GET["badword"]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Testo Originale: <?php echo $text ?> </p>
    <p>lunghezza testo: <?php echo strlen($text); ?></p>
    <br>
    <?php $new_string = str_replace( $badword, "***", $text);?> 
    <p>Testo Censurato: <?php echo $new_string ?> </p>
    <p>lunghezza testo: <?php echo strlen($new_string); ?></p>
    
    <a href="index.php">Ritorna alla home</a>
</body>

</html>