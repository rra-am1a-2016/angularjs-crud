app.controller("testController", function($scope) {
      $scope.firstname = "Arjanus";
      $scope.infix = "de";
      $scope.lastname = "Ruijter";
      $scope.color = "rgb(122, 233, 120)";
      $scope.size = "150px";
      $scope.naamVolledig = function () {
         return $scope.firstname + " " + $scope.infix + " " + $scope.lastname;
      };
});