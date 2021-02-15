<?php
$nameErr = $emailErr = "";
$name = $email = " ";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Naam'];
    $email = $_POST['E-mail'];
}

?>
<div class="content">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="Naam">Naam:</label><br>
        <input type="text"  id="Naam" name="Naam" value="">
        <label for="E-mail">E-mail:</label><br>
        <input type="text"  id="E-mail" name="E-mail" value="">
        <input class="button" type="submit" value="Submit">
        <p><?php echo $name;?> </p>
        <p><?php echo $email;?> </p>
    </form>

</div>
</body>
</html>
