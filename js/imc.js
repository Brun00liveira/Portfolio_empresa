// The first thing to do is get data from all interactions in HTML

var calculate = document.getElementById('calculate');


// nome is a object HTML in input
// console.log(nome);
// ====================================
// To assign a value to the variable just use .
// Ex: nome.value = "bruno"
// ====================================
// function to calculate the IMC

function imc () {
//the .value is necessary, because in the name, height and weight it is important to recover the contained value  
    var name = document.getElementById('name').value;
    var height = document.getElementById('height').value;
    var weight = document.getElementById('weight').value;
// a value will be inserted in the result, so .value is not used
    var result = document.getElementById('result');

    if (name !== '' && height !== '' && weight !== '') {

        var imc = (weight/(height * height)).toFixed(1);

        let grade = "";

        if (imc < 18.5){
            grade = 'below the required weight';
        }else if(imc < 25){
            grade = 'in the required weight';
        }else{
            grade = 'above the required weight';
        }

        result.textContent = name + " your IMC is " + imc + " You are " + grade;
    } else{
        result.textContent = "Fill all values!"
    }
}


//when to click, the imc function will be use
calculate.addEventListener('click', imc);