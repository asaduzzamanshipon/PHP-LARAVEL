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
            <select name="exam" id="name">
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
        <?php include 'condition.php'; ?>
        </div>
    </main>
</body>
</html>