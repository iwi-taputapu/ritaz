var app = angular.module("animalsApp", []);

app.controller("animalsController", ["$scope", "$sce", function($scope, $sce) {

$scope.animals = [
	{
	classname : "cat",
	text : "Легко"
	},
	{
	classname : "wolf",
	text : "Красиво"
	},
	{
	classname : "deer",
	text : "Быстро"
	},
	{
	classname : "different",
	text : "Функционально"
	}
];

}]);