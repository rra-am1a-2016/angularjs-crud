app.controller("testController", function($scope) {
      $scope.voornaam = "Arjanus";
      $scope.tussenvoegsel = "de";
      $scope.achternaam = "Ruijter";
      $scope.color = "rgb(122, 233, 120)";
      $scope.size = "150px";
      $scope.naamVolledig = function () {
         return $scope.voornaam + " " + $scope.tussenvoegsel + " " + $scope.achternaam;
      };
});