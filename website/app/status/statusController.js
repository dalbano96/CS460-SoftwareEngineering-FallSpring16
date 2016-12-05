var app=angular.module('app', []);
app.controller('programCtrl', ['$scope', function($scope) {
	// Display the graduate program title
	$scope.title='Graduate Program';

	// Display the list of requirements
	$scope.requirements=[
		{ name: 'requirement1' },
		{ name: 'requirement2' },
		{ name: 'requirement3' },
		{ name: 'requirement4' },
	];
}]);	
