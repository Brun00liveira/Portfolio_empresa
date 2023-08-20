// Obtendo referência ao campo de altura
var heightInput = document.getElementById('height');

// Adicionando um ouvinte de evento para o evento de entrada (input)
heightInput.addEventListener('input', function() {
    // Obtendo o valor atual do campo de altura
    var currentValue = heightInput.value;

    // Removendo todas as vírgulas do valor atual
    var cleanedValue = currentValue.replace(/,/g, '');

    // Limitando a entrada a três dígitos inteiros e um dígito decimal
    if (/^\d{0,3}(\.\d{0,1})?$/.test(cleanedValue)) {
        // Dividindo a entrada em dígitos inteiros e decimais
        var parts = cleanedValue.split('.');
        var integerPart = parts[0];
        var decimalPart = parts[1] || '';

        // Formatando o valor com a vírgula na posição correta
        if (integerPart.length > 2) {
            integerPart = integerPart.slice(0, -2) + ',' + integerPart.slice(-2);
        }

        // Montando o valor final
        var formattedValue = integerPart + (decimalPart.length > 0 ? ',' + decimalPart : '');

        heightInput.value = formattedValue;
    } else {
        // Caso a entrada não seja válida, reverter para o valor anterior
        heightInput.value = currentValue;
    }
});

// The first thing to do is get data from all interactions in HTML

var calculate = document.getElementById('calculate');

// function to calculate the IMC
function imc() {
    var name = document.getElementById('name').value;
    var height = parseFloat(document.getElementById('height').value.replace(',', '.')); // Convert comma to dot for proper decimal parsing
    var weight = parseFloat(document.getElementById('weight').value);
    var result = document.getElementById('result');

    if (name !== '' && !isNaN(height) && !isNaN(weight)) {

        var imc = (weight / (height * height)).toFixed(1);

        let grade = "";

        if (imc < 18.5) {
            grade = 'below the required weight';
        } else if (imc < 25) {
            grade = 'in the required weight';
        } else {
            grade = 'above the required weight';
        }

        result.textContent = name + " your IMC is " + imc + ". You are " + grade;
    } else {
        result.textContent = "Fill all values!";
    }
}

//when clicked, the imc function will be used
calculate.addEventListener('click', imc);
