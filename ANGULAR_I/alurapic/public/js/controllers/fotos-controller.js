angular.module('alurapic').controller('FotosController', function($scope, $http) {
    $scope.fotos = [];

    $http.get('/v1/fotos')
    .success(function(retorno){
        console.log(retorno);
        $scope.fotos = retorno;
    })
    .error(function(erro){
        console.log(erro);
    });
    
});

//O scope recebe propriedades dinamicamente
//O scope vai disponibilizar dados para a View
//$http realiza requisição AJAX
//