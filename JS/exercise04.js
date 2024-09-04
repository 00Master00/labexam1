const randomHexColorCode = () => {
    // Generate a random hexadecimal color code
    let n = Math.floor(Math.random() * 0xFFFFFF).toString(16);
    return '#' + n.padStart(6, '0');
};

const generateRandomColor = () => {
    const colorCode = randomHexColorCode();
    const colorDisplay = document.getElementById('colorDisplay');
    const colorCodeElement = document.getElementById('colorCode');

    // Set the background color and text of the color code
    colorDisplay.style.backgroundColor = colorCode;
    colorCodeElement.textContent = colorCode;
};
