<?php include ("User.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo"test de la class USER";


    $Q1 = new user("Tata");
    $Q2 = new user("Titi");

    echo"<p> je suis ".$Q1->getNom()."</p>";
    echo"<p> je suis ".$Q2->getNom()."</p>";
?>    
</body>
</html>