var app = angular.module("animalsApp", ['ngAnimate']);

app.controller("animalsController", ["$scope", "$sce", function($scope, $sce) {

$scope.animals = [
	{
	classname : "cat1",
	title : "Grey"
	},
	{
	classname : "cat2",
	title : "Brown"
	},
	{
	classname : "cat3",
	title : "Black"
	},
	{
	classname : "cat4",
	title : "Orange"
	}
];

$scope.currentSlideIndex = 0;
$scope.nextSlide = function () {
	$scope.animals.push($scope.animals[0]);
	$scope.animals.shift();
}

}]);