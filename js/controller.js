var app = angular.module('loginApp', ['angular-md5']);
app.controller('LoginController', ['$scope','$http','md5', function ($scope, $http, md5) {
	$scope.aceptar = function()
    {
			// Simple GET request example:
			$http({
                method: 'GET',
                url: 'http://localhost:8080/web_login/api/user/'+$scope.username+'/'+$scope.passwordMd5
            }).then(function(response) {
                    $scope.message = "Acceso Correcto";
                    $scope.correcto = 1;
                    $scope.error = 0;
                }, function errorCallback(response) {
                    $scope.message = "Usuario Incorrecto";
                    $scope.correcto = 0;
                    $scope.error = 1;
            });
    };

    $scope.$watch('password' ,function() {
        $scope.passwordMd5 = md5.createHash($scope.password || '');
    });
}]);