<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <?php 

    if ($_GET['name'] == "addition") {
        echo $_GET['number1'] + $_GET['number2']; 
    }
    elseif ($_GET['name'] == "subtraction") {
        echo $_GET['number1'] - $_GET['number2']; 
    }
    elseif ($_GET['name'] == "multiplication") {
        echo $_GET['number1'] * $_GET['number2']; 
    }
    elseif ($_GET['name'] == "division") {
        echo $_GET['number1'] / $_GET['number2']; 
    }
    elseif ($_GET['name'] == "modulus") {
        echo $_GET['number1'] % $_GET['number2']; 
    }

    ?>
    </main>
</body>
</html>