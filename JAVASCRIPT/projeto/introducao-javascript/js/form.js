//form.js

var form = document.querySelector("#form-adiciona");

var botaoAdiciona = document.querySelector("#adicionar-paciente");
botaoAdiciona.addEventListener("click", adicionarPaciente);

function adicionarPaciente(event){
    //Evita comportamento padrão do botão
    event.preventDefault();
    
    //obter Paciente
    var paciente = obtemPaciente(form);

    //validar dados
    var erros = validaPaciente(paciente);
    //exibir mensages de erro
    if (erros.length > 0) {
        exibeMensagemErro(erros);
        return;
    }
    
    adicionarPacienteNaTabela(paciente);
    form.reset();
}

function adicionarPacienteNaTabela(paciente){
    //montar HTML
    var pacienteTr = montaTr(paciente);
    //inserir na tabela
    var tabela = document.querySelector("#tabela-pacientes");
    tabela.appendChild(pacienteTr);
}

function obtemPaciente(form){
    var paciente = {
        nome: form.nome.value,
        peso: form.peso.value,
        altura: form.altura.value,
        gordura: form.gordura.value,
        imc: calculaImc(form.peso.value, form.altura.value)
    }
    return paciente;
}

function montaTr(paciente){
    var tr = document.createElement("tr");
    tr.classList.add("paciente");

    tr.appendChild(montaTd(paciente.nome, "info-nome"));
    tr.appendChild(montaTd(paciente.peso, "info-peso"));
    tr.appendChild(montaTd(paciente.altura, "info-altura"));
    tr.appendChild(montaTd(paciente.gordura, "info-gprdura"));
    tr.appendChild(montaTd(paciente.imc, "info-imc"));

    return tr;
}

function montaTd(dado, classe) {
    var td = document.createElement("td");
    td.textContent = dado;
    td.classList.add(classe);

    return td;
}

function validaPaciente(paciente){
    var erros = [];

    if (paciente.nome.length == 0) {
        erros.push("Nome não pode ser em branco!");
    }

    if (paciente.peso.length == 0) {
        erros.push("Peso não pode ser em branco!");
    }

    if (paciente.altura.length == 0) {
        erros.push("Altura não pode ser em branco!");
    }

    if (paciente.gordura.length == 0) {
        erros.push("Gordura não pode ser em branco!");
    }

    if(!validaPeso(paciente.peso)) {
        erros.push("Peso inválido");
    }

    if(!validaAltura(paciente.altura)) {
        erros.push("Altura inválida");
    }

    return erros;
}

function exibeMensagemErro(erros){
    var ul = document.querySelector("#mensagens-erro");
    ul.innerHTML = "";
     erros.forEach(function(erro) {
        var li = document.createElement("li");
        li.textContent = erro;
        ul.appendChild(li);
    });
}
