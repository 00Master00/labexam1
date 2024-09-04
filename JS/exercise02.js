function random_Number_In_Range(min, max) {
    return Math.random() * (max - min) + min;
}

function generateRandomNumber() {
    const min = parseFloat(document.getElementById('minValue').value);
    const max = parseFloat(document.getElementById('maxValue').value);

    if (isNaN(min) || isNaN(max) || min >= max) {
        document.getElementById('result').textContent = 'กรุณากรอกตัวเลขที่ถูกต้อง โดยค่าต่ำสุดจะน้อยกว่าค่าสูงสุด';
        return;
    }

    const randomNumber = random_Number_In_Range(min, max);
    document.getElementById('result').textContent = `Random Number: ${randomNumber}`;
}
