var app = angular.module('app',['ngRoute']);

app.controller('MainCtrl',function($scope){

})

.config(['$routeProvider',function($routeProvider){
$routeProvider.
when('/', {
  template:'<h1>Welcome to my home page</h1>',
  controller:'MainCtrl'
  }).
  when('/firstPage', {
  templateUrl:'firstPage.html',
  controller:'MainCtrl'
  }).
  when('/secondPage', {
  templateUrl:'secondPage.html',
  controller:'MainCtrl'
  }).
  when('/thirdPage', {
  templateUrl:'thirdPage.html',
  controller:'MainCtrl'
  }).
  when('/errorPage', {
  templateUrl:'errorPage.html',
  controller:'MainCtrl'
  }).
  otherwise( {
  redirectTo : '/errorPage'
  });
}]);
