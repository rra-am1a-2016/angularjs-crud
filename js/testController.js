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

      $scope.createRecord = function () {
            //alert("Naam en haarkleur: " + $scope.firstname + $scope.infix + $scope.lastname + $scope.hairColor );
            $http({
                   url: "createRecord.php",
                   method: "POST",
                   data: {firstname: $scope.firstname,
                          infix: $scope.infix,
                          lastname: $scope.lastname,
                          haircolor: $scope.hairColor},
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).then(function (response) {
                  // Alle code als er geen error is
            },
            function (response) {
                  // Als er wel een error is.
            });
      }

      

       $scope.naamVolledig = function () {
         return $scope.firstname + " " + $scope.infix + " " + $scope.lastname;
      };
});