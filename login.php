<html lang="en-US">
<head><title>PHP 5 Forms Required Fields</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title> Login </title>
  <style>
    .top-gap{
      display:block;
      height:100px;
      width:100%;
      position:absolute;
      background: #eee;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-5">
        <form method="POST" name="loginForm" action="<?php print htmlspecialchars($_SERVER['PHP_SELF']); ?>">
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" name="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="password" class="form-control" id="pwd">
          </div>
          <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
          </div>
          <button type="submit" name="loginButton" class="btn btn-default">Login</button>
        </form>
      </div>
      </div>
      </div>
  </div>
</body>

</html>

<?php

  class Employee{

    function filterUserData($data){

      $data = htmlspecialchars($data);
      $data = trim($data);
      $data = htmlentities($data);
      return $data;

    }

    function getFormData(){
      $uEmail = filterUserData($_POST['email']);
      $uPassword = filterUserData($_POST['password']);
    }

  }

if(isset($_POST['loginButton'])){
  $employee = new Employee();
  $employee->getFormData();
}

 ?>
