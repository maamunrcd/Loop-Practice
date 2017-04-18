<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>


<?php
if (isset($_REQUEST["submit"])) {
    $number = $_REQUEST;
    extract($number);
    $num_row = $number;

    $count = 1;
    for ($i = 1; $i <= $num_row; $i++) {
        for ($j = $num_row - $i; $j > 0; $j--) {
            echo "&nbsp&nbsp";
        }
        for ($x = 1; $x <= $count; $x++) {
            echo "*";
        }
        $count = $count + 2;
        echo "<br>";
        if ($i == $num_row) {
            for ($l = 1; $l <= $num_row; $l++) {
                for ($f = $num_row - $l; $f < $num_row; $f++) {
                    echo "&nbsp&nbsp";
                }
                for ($p = 5; $p <= $count; $p++) {
                    echo "*";
                }
                $count = $count - 2;
                echo "<br>";
            }
        }
    }
}
?>
<body>
<form action="" method="post">
    Enter Your Number:<br>
    <input style="margin-bottom: 5px;" type="number" name="number">
    <input type="submit" name="submit">
</form>
</body>
</html>