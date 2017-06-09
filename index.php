<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>

      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Arvo|Barrio" rel="stylesheet">
      
      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="./css/style.css">
   </head>
   <body>
      <div class="container" ng-app='testmodule' ng-controller="testController" ng-init="readRecords();tekst='Hoi'">
         
         <p>Voornaam: <input type='text' ng-model="firstname"></p>
         <p>tussenvoegsel: <input type='text' ng-model="infix"></p>
         <p>Achternaam: <input type='text' ng-model="lastname"></p>
         <p>color: <input type='text' ng-model="hairColor"></p>

         <button ng-click="createRecord()">Sla op!</button>
         <p ng-init="firstname='';infix='';lastname='';hairColor=''">
               Mijn naam is: {{firstname}} {{infix}} {{lastname}} en mijn haarkleur is: {{hairColor}}
         </p> 
         <p style="background-color: {{color}}; font-size: {{size}}">{{ 100 + 100}}{{tekst}}</p> 
         <p>De naam uit de controller is: {{naamVolledig()}}</p>
         
         
         <table class="table">
            <thead>
                  <tr>
                        <th>ID</th>
                        <th>Voornaam</th>
                        <th>Tussenvoegsel</th>
                        <th>Achternaam</th>
                        <th>Haarkleur</th>
                        <th></th>
                  </tr>
            </thead>
            <tbody>
              <tr ng-repeat="jsObj in jsonString">
                <td>{{jsObj.id}}</td>
                <td>{{jsObj.firstname}}</td>
                <td>{{jsObj.infix}}</td>
                <td>{{jsObj.lastname}}</td>
                <td>{{jsObj.haircolor}}</td>
                <td><span ng-click="removeRecord(jsObj.id)" class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
              </tr>
            </tbody>
         </table>
         
               
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   </body>
</html>

<script src="./js/testApp.js"></script>
<script src="./js/testController.js"></script>
