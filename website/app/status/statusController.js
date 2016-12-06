/*
	File: statusController.js
	Retrieve graduate program and list of requirements from DB
*/

var app=angular.module('app', []);
app.controller('programCtrl', ['$scope', function($scope) {
	// Display the graduate program title
	$scope.title='Graduate Program';

	// Display the list of requirements
	$scope.requirements=[
		{ name: 'requirement1', desc: 'blah' },
		{ name: 'requirement2', desc: 'hello' },
		{ name: 'requirement3', desc: 'world' },
		{ name: 'requirement4', desc: 'Hey Jim' },
	];
	
	// Recieve data from php
	$scope.userInit = function($data) {
		$scope.data = $data;
	};
}]);	
