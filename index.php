<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="badword.php" method="GET">
        <label for="text">Testo</label>
        <textarea name="text" id="text" cols="30" rows="10"></textarea>
        <hr>
        <label for="word">parola da censurare</label>
        <input type="text" id="word" name="badword">
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>