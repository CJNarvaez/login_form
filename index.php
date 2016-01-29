<!DOCTYPE html>
<html lang="es" ng-app="loginApp">
<head>
	<meta charset="UTF-8">
	<title>Iniciar Sesión</title>
</head>
<body>
	<div class="col-sm-4 col-sm-offset-4" ng-controller="LoginController">
        <br />
        <div ng-class="{'alert-success': correcto, 'alert-danger': error}" class="alert" role="alert">
            <span ng-class="{'glyphicon-ok': correcto, 'glyphicon-remove': error }" class="glyphicon" aria-hidden="true"></span><strong> {{message}}</strong>
        </div>
        <form name="loginForm" novalidate>
            <div class="form-group">
                <label for="username">Usuario</label>
                <input ng-model="username" type="text" id="username" name="username" class="form-control" placeholder="Enter username" autofocus="true" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input ng-model="password" type="password" id="password" name="password" class="form-control" placeholder="Enter password" required>
            </div>
            <div class="form-group">
                <button ng-click="aceptar()" class="btn btn-primary form-control">Log In</button>
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-rc.1/angular.min.js"></script>
    <script src="lib/angular-md5.min.js"></script>
    <script src="js/controller.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</body>
</html>