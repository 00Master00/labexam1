<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4: Counting 'aa'</title>
</head>
<body>

    <h1>Counting 'aa' in Strings</h1>

    <?php
    function test($s) {
        $ctr_aa = 0; // ตัวนับคำว่า 'aa'
        $i = 0;
        while ($i < strlen($s) - 1) { // วนลูปจนถึงตัวอักษรสุดท้ายก่อนที่สตริงจะยาวกว่า 'aa'
            if (substr($s, $i, 2) == "aa") { // ถ้าพบ 'aa'
                $ctr_aa++; // เพิ่มตัวนับ
                $i += 2; // ข้ามไปสองตำแหน่งหลังจากพบ 'aa'
            } else {
                $i++; // ถ้าไม่เจอ ให้เพิ่มค่าตำแหน่งทีละหนึ่ง
            }
        }
        return $ctr_aa; // คืนค่าจำนวนครั้งที่พบ 'aa'
    }

    // ทดสอบฟังก์ชันกับสตริงตัวอย่าง
    echo "Testing with 'bbaaccaag': " . test("bbaaccaag") . "<br>";  // Expected: 2
    echo "Testing with 'jjkiaaasew': " . test("jjkiaaasew") . "<br>"; // Expected: 2
    echo "Testing with 'JSaaakoiaa': " . test("JSaaakoiaa") . "<br>"; // Expected: 2
    ?>

</body>
</html>
