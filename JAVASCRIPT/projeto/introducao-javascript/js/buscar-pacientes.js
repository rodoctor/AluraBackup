//buscar-pacientes

var botaoBuscar = document.querySelector("#buscar-pacientes");
botaoBuscar.addEventListener("click", function(){
    console.log("Buscando pacientes...");

    //Realiza a busca de dados em outro site via AJAX de modo assíncrono
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "https://api-pacientes.herokuapp.com/pacientes");
    xhr.send();

    xhr.addEventListener("load", function(){
        var erroAjax = document.querySelector("#erro-ajax");
        erroAjax.classList.add("invisivel"); //deixa a mensagem invisivel
        if (xhr.status == 200) {
            //recebe dados em forma de String do site após ser carregado
            var resposta = xhr.responseText;
            //converte a String em um objeto utilizando JSON
            var pacientes = JSON.parse(resposta);
        
            pacientes.forEach(function(paciente) {
                adicionarPacienteNaTabela(paciente);
            });
        } else {
            console.log(xhr.status);
            console.log(xhr.responseText);
            erroAjax.classList.remove("invisivel"); //ativa a mensagem
        };
    });
});

//um parseador é algo que irá realizar a conversão de dados,
//neste caso será realizada a conversão de um objeto JSON para JS