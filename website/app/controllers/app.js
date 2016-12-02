var app = angular.module('app',['ngRoute']);

app.controller('MainCtrl',function($scope){

})

.config(['$routeProvider',function($routeProvider){
$routeProvider.
when('/', {
  template:'<h1>Welcome to my home page</h1>',
  controller:'MainCtrl'
  }).
  when('/welcome', {
  templateUrl:'welcome.html',
  controller:'MainCtrl'
  }).
  when('/checkdemo', {
  templateUrl:'checkdemo.html',
  controller:'MainCtrl'
  }).
  when('/checkList', {
  templateUrl:'checkList.html',
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
