<!DOCTYPE html>
<html>

<body>

    <?php
    $r = 5;

    // Triangle Up
    if ($r == 5) {
        $star = 10;
        for ($a = $star; $a > 0; $a--) {
            for ($i = 1; $i <= $a; $i++) {
                echo "&nbsp";
            }
            for ($a1 = $star; $a1 >= $a; $a1--) {
                echo "*";
            }
            echo "<br>";
        }
    }

    // Triangle Down
    elseif ($r == 7) {
        $star = 10;
        for ($a = 1; $a <= $star; $a++) {
            for ($b = 1; $b <= $a; $b++) {
                echo "&nbsp";
            }
            for ($c = $star; $c >= $a; $c -= 1) {
                echo "*";
            }
            echo "<br>";
        }
    }

    // Diamond
    elseif ($r == 10) {
        $star = 10;
        for ($a = 1; $a <= $star; $a++) {
            for ($b = $star; $b >= $a; $b -= 1) {
                echo "&nbsp";
            }
            for ($c = 1; $c <= $a; $c++) {
                echo "*";
            }
            echo "<br>";
        }
        for ($a = 1; $a <= $star; $a++) {
            for ($b = 1; $b <= $a; $b++) {
                echo "&nbsp";
            }
            for ($c = $star; $c >= $a; $c -= 1) {
                echo "*";
            }
            echo "<br>";
        }
    } else {
        echo "the number is zero";
    }
    ?>

</body>

</html>