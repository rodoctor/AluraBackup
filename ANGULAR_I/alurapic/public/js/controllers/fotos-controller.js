angular.module('alurapic').controller('FotosController', function($scope) {
    $scope.foto = {
        titulo: 'Rick and Monty',
        url: 'img/rick and morty.png'
    };
});

//O scope recebe propriedades dinamicamente
//O scope vai disponibilizar dados para a View