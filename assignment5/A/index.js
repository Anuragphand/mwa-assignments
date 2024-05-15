var app = angular.module('myApp', ['ngRoute']);

app.config(function($routeProvider) {
    $routeProvider
    .when('/view1', {
        templateUrl: 'view1.html',
        controller: 'View1Controller'
    })
    .when('/view2', {
        templateUrl: 'view2.html',
        controller: 'View2Controller'
    })
    .otherwise({
        redirectTo: '/view1'
    });
});

app.service('DataService', function() {
    var data = {
        sharedData: ''
    };

    return {
        getData: function() {
            return data.sharedData;
        },
        setData: function(value) {
            data.sharedData = value;
        }
    };
});

app.controller('MainController', function($scope, DataService) {
    $scope.sharedData = DataService.getData();
});

app.controller('View1Controller', function($scope, DataService) {
    $scope.data = DataService.getData();

    $scope.updateData = function() {
        DataService.setData($scope.data);
    };
});

app.controller('View2Controller', function($scope, DataService) {
    $scope.data = DataService.getData();

    $scope.updateData = function() {
        DataService.setData($scope.data);
    };
});
