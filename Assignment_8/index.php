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
                <option value="choice">Choice One</option>
                <option value="jsc">JSC</option>
                <option value="ssc">SSC</option>
                <option value="hsc">HSC</option>
                <option value="bsc">BSC</option>
                <option value="msc">Masters</option>
            </select><br><br><br>
            <button id="button">Submit</button>
            <br>
            <br>
        </form>
        <div id="total">
        <?php 
        $point = $_GET['grade_point'];

        if ($_GET['name'] == "jsc" || $_GET['name'] == "ssc" || $_GET['name'] == "hsc"){
            if ($point == 5){
                echo "Congratulations! You have got 'A+'. Remember, success is a consequences, must not be a goal.";
            }
            elseif ($point >= 4.00 && $point < 5){
                echo "You have been passed with grade 'A'. Forget the mistakes, Remember the lessons.";
            }
            elseif ($point >= 3.50 && $point < 4.00){
                echo "You have been passed with grade 'A-'. Forget the mistakes, Remember the lessons.";
            }
            elseif ($point >= 3.00 && $point < 3.50){
                echo "You have been passed with grade 'B'. Forget the mistakes, Remember the lessons.";
            }
            elseif ($point >= 2.00 && $point < 3.00){
                echo "You have been passed with grade 'C'. Forget the mistakes, Remember the lessons.";
            }
            elseif ($point >= 1.00 && $point < 2.00){
                echo "You have been passed with grade 'D'. Forget the mistakes, Remember the lessons.";
            }
            elseif ($point < 1.00){
                echo "Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success.";
            }
            else {
                echo "You have provided wrong grade point. </b> ";
            }
        }
        elseif ($_GET['name'] == "bsc" || $_GET['name'] == "msc"){
            if ($point == 4){
                echo "Congratulations! You have got 'A'. Remember, success is a consequences, must not be a goal.";
            }
            elseif ($point >= 3.67 && $point< 4.00){
                echo "You have been passed with grade 'A-'. Forget the mistakes, Remember the lessons.";
            }
            elseif ($_GET['grade_point'] >= 3.32 && $_GET['grade_point'] < 3.67){
                echo "YYou have been passed with grade 'B+'. Forget the mistakes, Remember the lessons.";
            }
            elseif ($_GET['grade_point'] >= 3.00 && $_GET['grade_point'] < 3.32){
                echo "You have been passed with grade 'B'. Forget the mistakes, Remember the lessons.";
            }
            elseif ($_GET['grade_point'] >= 2.67 && $_GET['grade_point'] < 3.00){
                echo "You have been passed with grade 'B-'. Forget the mistakes, Remember the lessons.";
            }
            elseif ($_GET['grade_point'] >= 2.33 && $_GET['grade_point'] < 2.67){
                echo "You have been passed with grade 'C+'. Forget the mistakes, Remember the lessons.";
            }
            elseif ($_GET['grade_point'] >= 2.00 && $_GET['grade_point'] < 2.33){
                echo "You have been passed with grade 'C'. Forget the mistakes, Remember the lessons.";
            }
            elseif ($_GET['grade_point'] >= 1.00 && $_GET['grade_point'] < 2.00){
                echo "YYou have been passed with grade 'D'. Forget the mistakes, Remember the lessons.";
            }
            elseif ($_GET['grade_point'] < 1.00){
                echo "Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success.";
            }
        }
        elseif($_GET['name'] == "choice"){
            echo "Please selcect choice one!";
        }
        else {
            echo "You have provided wrong grade point. </b> ";
        }
        ?>
        </div>
    </main>
</body>
</html>