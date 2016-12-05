var app=angular.module('app', []);
app.controller('programCtrl', ['$scope', function($scope) {
	$scope.title='Title';

	$scope.programs=[
	{
		name: 'testing1'
	},

	{
		name: 'testing2'
	}

	];
}]);	
