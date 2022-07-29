<?php
function jscSscHsc($point){
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
    elseif ($point > 0.00 && $point < 1.00){
        echo "Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success.";
    }
    else {
        echo "You have provided wrong grade point.";
    }
}