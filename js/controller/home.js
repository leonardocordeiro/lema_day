app.controller("HomeController", function($scope, $http) {

	$scope.cadastrar = function() { 
		$http.post("/inscricao.php", {
			nome : $scope.nome,
			sobrenome : $scope.sobrenome,
			email : $scope.email

		}).success(function(resultado) {
			$scope.cadastrado = true;			
		});

	}

});