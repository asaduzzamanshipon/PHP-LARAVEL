<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main id="calculator">
        <form action="index.php">
            <br>
            <label for="name" id="grade_point">Point :</label> <br> <input type="number" max="5" step="any" name="grade_point" id="grade_point" ><br><br>
            <select name="name" id="name">
            <option value="ssc">SSC</option>
            <option value="hsc" selected="selected">HSC</option>
            </select><br><br><br>
            <button id="button">Submit</button>
            <br>
            <br>
        </form>
        <div id="total">
        <?php 
        if ($_GET['name'] == "ssc"){
            if ($_GET['grade_point'] == 5){
                echo "Your SSC Grade: A+";
            }
            elseif ($_GET['grade_point'] >= 4.00 && $_GET['grade_point'] < 5){
                echo "Your SSC Grade: A";
            }
            elseif ($_GET['grade_point'] >= 3.50 && $_GET['grade_point'] < 4.00){
                echo "Your SSC Grade: A-";
            }
            elseif ($_GET['grade_point'] >= 3.00 && $_GET['grade_point'] < 3.50){
                echo "Your SSC Grade: B";
            }
            elseif ($_GET['grade_point'] >= 2.00 && $_GET['grade_point'] < 3.00){
                echo "Your SSC Grade: C-";
            }
            elseif ($_GET['grade_point'] >= 1.00 && $_GET['grade_point'] < 2.00){
                echo "Your SSC Grade: D";
            }
            elseif ($_GET['grade_point'] < 1.00){
                echo "Your SSC Grade: F";
            }
        }
        elseif ($_GET['name'] == "hsc"){
            if ($_GET['grade_point'] == 4){
                echo "Your HSC Grade: A";
            }
            elseif ($_GET['grade_point'] >= 3.67 && $_GET['grade_point'] < 4.00){
                echo "Your HSC Grade: A-";
            }
            elseif ($_GET['grade_point'] >= 3.32 && $_GET['grade_point'] < 3.67){
                echo "Your HSC Grade: B+";
            }
            elseif ($_GET['grade_point'] >= 3.00 && $_GET['grade_point'] < 3.32){
                echo "Your HSC Grade: B";
            }
            elseif ($_GET['grade_point'] >= 2.67 && $_GET['grade_point'] < 3.00){
                echo "Your HSC Grade: B-";
            }
            elseif ($_GET['grade_point'] >= 2.33 && $_GET['grade_point'] < 2.67){
                echo "Your HSC Grade: C+";
            }
            elseif ($_GET['grade_point'] >= 2.00 && $_GET['grade_point'] < 2.33){
                echo "Your HSC Grade: C";
            }
            elseif ($_GET['grade_point'] >= 1.00 && $_GET['grade_point'] < 2.00){
                echo "Your HSC Grade: D";
            }
            elseif ($_GET['grade_point'] < 1.00){
                echo "Your HSC Grade: F";
            }
        }
        ?>
        </div>
    </main>
</body>
</html>