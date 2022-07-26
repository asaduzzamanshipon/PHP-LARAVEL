        <?php 
        include 'cgp4.php';
        include 'cgp5.php';
        $point = $_GET['grade_point'];
        $exam = $_GET['exam'];
        if ($exam == "jsc" || $exam == "ssc" || $exam == "hsc"){
            jscSscHsc($point);
        }
        elseif ($exam == "bsc" || $exam == "msc"){
            bscMsc($point);   
        }
        elseif($exam == "choice"){
            echo "Please selcect choice one!";
        }
        // else {
        //     echo "You have provided wrong grade point.";
        // }
        ?>