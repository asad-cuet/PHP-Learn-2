<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

<body ng-app="myApp">

<p><a href="#/!">Main</a></p>

<a href="#!red">Red</a>
<a href="#!green">Green</a>
<a href="#!blue">Blue</a>

<div ng-view></div>

<script>
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "main.php"
    })
    .when("/red", {
        templateUrl : "red.php"
    })
    .when("/green", {
        templateUrl : "green.php"
    })
    .when("/blue", {
        templateUrl : "blue.htm"
    });
});
</script>

<p>Click on the links to navigate to "red.htm", "green.htm", "blue.htm", or back to "main.htm"</p>
</body>
</html>