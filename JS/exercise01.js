const matches = (obj1, obj2) => {
    const keysObj2 = Object.keys(obj2);
    return keysObj2.every(key => obj1.hasOwnProperty(key) && obj1[key] === obj2[key]);
};

const parseNumberArray = (str) => {
    // แปลงสตริงที่คั่นด้วยคอมมาเป็นอาร์เรย์ของตัวเลข
    return str.split(',').map(num => Number(num.trim())).reduce((acc, num, index) => {
        acc[index] = num;
        return acc;
    }, {});
};

const compareObjects = () => {
    try {
        // รับค่าจากผู้ใช้ในรูปแบบตัวเลขที่คั่นด้วยคอมมา
        const obj1String = prompt('Enter the first array of numbers (e.g., 1,2,3):');
        const obj2String = prompt('Enter the second array of numbers (e.g., 1,2,3):');
        
        // แปลงค่าที่รับเป็นอ็อบเจ็กต์ที่มีคีย์เป็นดัชนีและค่าของตัวเลข
        const obj1 = parseNumberArray(obj1String);
        const obj2 = parseNumberArray(obj2String);
        
        // ตรวจสอบความถูกต้องของอ็อบเจ็กต์
        if (typeof obj1 !== 'object' || typeof obj2 !== 'object') {
            throw new Error('Both inputs must be valid arrays of numbers.');
        }
        
        // เปรียบเทียบอ็อบเจ็กต์
        const result = matches(obj1, obj2);
        
        // แสดงผลลัพธ์ใน Console
        console.log('Object1:', obj1);
        console.log('Object2:', obj2);
        console.log(`Object1 matches Object2: ${result}`);
    } catch (error) {
        console.error('Error:', error.message);
    }
};

// เรียกใช้ฟังก์ชันเพื่อให้ผู้ใช้ป้อนค่า
compareObjects();
