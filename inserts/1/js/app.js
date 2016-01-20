var app = angular.module("animalsApp", []);

app.controller("animalsController", ["$scope", "$sce", function($scope, $sce) {

$scope.animals = [
	{
	cardId : null,
	classname : "mouse",
	title : "Мышь",
	btnId : "btnId1",
	textId : "Id1",
	text : "Честное слово, поисковик выдал это существо по запросу 'мышь'. И хотя автор явно погрешил против природы, его творение останется здесь."
	},
	{
	cardId : null,
	classname : "cat",
	title : "Кот",
	btnId : "btnId2",
	textId : "Id2",
	text : "Без кота не обходится практически ни один интернет-ресурс. Или, вернее, популярность ресурса прямо пропорциональна количеству опубликованных в нем котов."
	},
	{
	cardId : null,
	classname : "dog",
	title : "Собака",
	btnId : "btnId3",
	textId : "Id3",
	text : "Собака - лучший друг человека. Я верила в это до тех пор, пока не узнала, что у меня на 'лучших друзей' аллергия."
	},
	{
	cardId : null,
	classname : "horse",
	title : "Лошадь",
	btnId : "btnId4",
	textId : "Id4",
	text : "Я подумала и решила избрать лошадь своим лучшим другом - ввиду красоты и вышеупомянутой аллергии на собак."
	}
];

}]);