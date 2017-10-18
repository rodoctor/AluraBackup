//remover pacientes

//remover-paciente
var tabela = document.querySelector("#tabela-pacientes");

tabela.addEventListener("dblclick", function(event){
    event.target.parentNode.classList.add("fadeOut");

    //Remove o pai do alvo do duplo clique
    setTimeout(function(){
        event.target.parentNode.remove();
        },500);//tempo
    });




