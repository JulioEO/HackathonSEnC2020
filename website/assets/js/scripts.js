let btnMinus = document.querySelector('#minus');
let btnPlus = document.querySelector('#plus');
let tempElement = document.querySelector('.temp-container span');

btnMinus.addEventListener('click', function() {
    let temp = Number(tempElement.innerHTML.substring(0,2));
    if (temp >= 16) {
        temp -= 1;
    }

    tempElement.innerHTML = temp + " °C";
    console.log(temp);
});