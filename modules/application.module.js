angular
    .module("application", ["ngMaterial"])
    .config([function () {

    }])
    .run([function () {

    }])
    .controller("TestController", TestController);






function TestController ($scope) {
    $scope.items = [
        {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {} ,{} ,{}
    ];
};