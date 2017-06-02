app.controller("testController", function($scope, $http) {
      $scope.firstname = "Arjanus";
      $scope.infix = "de";
      $scope.lastname = "Ruijter";
      $scope.color = "rgb(122, 233, 120)";
      $scope.size = "50px";

      // Opvragen van data uit de database cR(ead)ud

      $http.get("data.php").then(function (response) {
             $scope.jsonString = response.data;
      });

       $scope.naamVolledig = function () {
         return $scope.firstname + " " + $scope.infix + " " + $scope.lastname;
      };
});