<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Numbers</title>
</head>
<body>
    <h1>Testing Numbers</h1>
    
    <?php
    // ฟังก์ชันเพื่อตรวจสอบค่าจำนวนเต็มว่าตกอยู่ในช่วง 20 ถึง 50 หรือไม่
    function test($x, $y) {
        return ($x >= 20 && $x <= 50) != ($y >= 20 && $y <= 50);
    }
    ?>

    <p>Testing with 20 and 84: 
        <?php
        $result1 = test(20, 84);
        echo $result1 ? 'True' : 'False';
        ?>
    </p>

    <p>Testing with 14 and 50: 
        <?php
        $result2 = test(14, 50);
        echo $result2 ? 'True' : 'False';
        ?>
    </p>

    <p>Testing with 25 and 40: 
        <?php
        $result3 = test(25, 40);
        echo $result3 ? 'True' : 'False';
        ?>
    </p>

    <p>Testing with 11 and 45: 
        <?php
        $result4 = test(11, 45);
        echo $result4 ? 'True' : 'False';
        ?>
    </p>

</body>
</html>
