/*
	File: statusController.js
	Retrieve graduate program and list of requirements from DB
*/

var app=angular.module('app', []);
app.controller('programCtrl', ['$scope', function($scope) {
	// Display the graduate program title
	$scope.title = '(Graduate Program)';

	// Display the list of requirements
	$scope.requirements=[
		{ name: 'requirement1', desc: 'test1' },
		{ name: 'requirement2', desc: 'test2' },
		{ name: 'requirement3', desc: 'test3' },
		{ name: 'requirement4', desc: 'test4' },
	];
	
	// Retrieve graduate program from db, store in programs object (Work in progress)
	/*
		$link.get("getProgram.php").success(function(data) {
		$scope.programs = data;
	}
	*/
	
}]);	
