<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Test</title>
</head>
<body>
    <h1>Temperature Test Results</h1>
    <p>Testing with temperatures 120 and -1: 
        <?php
        function test($temp1, $temp2) {
            return ($temp1 < 0 && $temp2 > 100) || ($temp2 < 0 && $temp1 > 100);
        }

        $result1 = test(120, -1);
        echo $result1 ? 'True' : 'False';
        ?>
    </p>

    <p>Testing with temperatures -1 and 120: 
        <?php
        $result2 = test(-1, 120);
        echo $result2 ? 'True' : 'False';
        ?>
    </p>

    <p>Testing with temperatures 2 and 120: 
        <?php
        $result3 = test(2, 120);
        echo $result3 ? 'True' : 'False';
        ?>
    </p>
</body>
</html>
