
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>2</title>
</head>
<body>
<?php
$nameErr = $emailErr = "";
$name = $email = " ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST['Naam'])){
        $nameErr = 'Naam is verplicht';
    } else {
        $name = cleanData($_POST['Naam']);
    }
    if(empty($_POST['E-mail'])){
        $emailErr = "E-mail is verplicht";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        } else {
            $email = cleanData($_POST['E-mail']);
        }
    }
}
function cleanData($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<div class="content">
    <div class="form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="Naam">Naam:</label><br>
        <input type="text"  id="Naam" name="Naam" value="">
        <span class="error">* <?php echo $nameErr;?></span> <br>
        <label for="E-mail">E-mail:</label><br>
        <input type="text"  id="E-mail" name="E-mail" value="">
        <span class="error">* <?php echo $emailErr;?></span> <br>
        <input class="button" type="submit" value="Submit">
        <p><?php echo $name;?> </p>
        <p><?php echo $email;?> </p>
    </form>
    </div>
</div>
</body>
</html>
