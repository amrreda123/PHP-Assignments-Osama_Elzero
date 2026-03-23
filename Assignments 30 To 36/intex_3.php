<?php
$admins = ["Osama", "Ahmed", "Sayed"];

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $user = $_POST["user"];
    if ($user !== ""){
        echo "The Request Method Is Post And Username Is " . $user . "<br>";
        if (in_array($user, $admins)) {
            echo "This Username " . $user . " Is Admin";
        }
        else {
            echo "Not Admin";
        }
    }
    else {
        echo "Please type a username";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
  <input type="text" name="user" value="<?= $user ?>">
  <input type="submit" value="Send">
</form>
</body>
</html>