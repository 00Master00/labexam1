<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic Algorithm: Exercise-1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .output {
            margin: 10px 0;
        }
        .before-after {
            margin: 10px 0;
            font-family: 'Courier New', Courier, monospace;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<div class="container">

    <?php
    // ฟังก์ชันที่เพิ่มตัวอักษรตัวสุดท้ายทั้งด้านหน้าและด้านหลังของสตริง
    function test($str) {
        // ดึงตัวอักษรตัวสุดท้ายของสตริง
        $s = substr($str, -1);
        // คืนค่า: ตัวอักษรสุดท้าย + สตริง + ตัวอักษรสุดท้าย
        return $s . $str . $s;
    }

    // ทดสอบการใช้งานฟังก์ชัน
    $testCases = [
        "Red",
        "Green",
        "1"
    ];

    foreach ($testCases as $testCase) {
        $result = test($testCase);
        echo "<div class='before-after'>";
        echo "<strong>Before:</strong> $testCase<br>";
        echo "<strong>After:</strong> $result";
        echo "</div>";
    }
    ?>

</div>

</body>
</html>
