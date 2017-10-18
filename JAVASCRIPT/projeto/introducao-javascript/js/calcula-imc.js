//calcula-imc.js

var titulo = document.querySelector(".titulo");
titulo.textContent = "Aparecida Nutricionista";
var pacientes = document.querySelectorAll(".paciente");

for (var i = 0; i < pacientes.length; i++) {
    var tdPeso = pacientes[i].querySelector(".info-peso");
    var tdAltura = pacientes[i].querySelector(".info-altura");
    var tdImc = pacientes[i].querySelector(".info-imc");
    
    var peso = tdPeso.textContent;
    var altura = tdAltura.textContent;
    
    var testaPeso = validaPeso(peso);
    var testaAltura = validaAltura(altura);

    //validações
    if (!testaPeso) {
        tdImc.textContent = "Peso inválido";
        pacientes[i].classList.add("paciente-invalido");
    }

    if (!testaAltura) {
        tdImc.textContent = "Altura inválida";
        pacientes[i].classList.add("paciente-invalido");
    }

  if (testaAltura && testaPeso) {
        var imc = calculaImc(peso, altura);
        tdImc.textContent = imc;
    }
}



function calculaImc(peso, altura){
    var imc = 0;
    imc = peso / (altura * altura);

    return imc.toFixed(2);
}


//validador de peso
function validaPeso(peso){
    if (peso <= 0 || peso >= 1000) {
        return false;
    }
        return true;
}

//validador de altura
function validaAltura(altura){
    if (altura <= 0 || altura >= 3.00) {
       return false;
    }
        return true;
}