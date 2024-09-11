<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 5: Divisibility Test</title>
</head>
<body>

    <h1>Divisibility Test Results</h1>

    <p>Testing if 3 is divisible by 3 or 7: 
        <?php
        function test($n) {
            return $n % 3 == 0 || $n % 7 == 0;
        }

        echo test(3) ? 'True' : 'False';  // Expected: True
        ?>
    </p>

    <p>Testing if 14 is divisible by 3 or 7: 
        <?php
        echo test(14) ? 'True' : 'False';  // Expected: True
        ?>
    </p>

    <p>Testing if 12 is divisible by 3 or 7: 
        <?php
        echo test(12) ? 'True' : 'False';  // Expected: True
        ?>
    </p>

    <p>Testing if 37 is divisible by 3 or 7: 
        <?php
        echo test(37) ? 'True' : 'False';  // Expected: False
        ?>
    </p>

</body>
</html>
