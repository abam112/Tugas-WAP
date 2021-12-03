<?php
    $result = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $x = $_POST['bilangan1']
        $y = $_POST['bilangan2']

        $result = sum($x, $y)
    }

    function sum($x, $y) {
        return $x + $y;
    }
?>

<html>
    <head>
        <title>hello world</title>
    </head>
    <body>
        <?php if ($result == null) { ?>
        <form action="sum.php" method="post"
            <input type="text" name="bilangan1" placeholder="masukkan nilai pertama" />
            <input type="text" name="bilangan2" placeholder="masukkan nilai kedua" />
            <input type="submit" name="submit" />
            </form>
        <?php } else { ?>
            <p>hasilnya adalah <?= $result ?></p>
            <?php } ?>
        }
    </body>
</html>