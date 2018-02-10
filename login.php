<?php
    require_once("database.php");
    require_once("functions.php");
 ?>
 <html>
 <head>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="assets/css/login.css" rel="stylesheet" type="text/css">
    <script src="assets/js/jquery-1.9.1.min.js"  type="text/javascript"></script>
    <script src="assets/js/bootstrap.js"  type="text/javascript"></script>
    <script src="assets/js/isotope.min.js"  type="text/javascript"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Login | Incognito</title>
</head>
<body>
<div class="back">
  <div class="div-center">
    <div class="content">
            <center><img src="assets/img/logo.png" alt="logo" height="100" width="100"></center>
                <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">
                   <label for="username">Username</label>
                   <div class="input-group">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="username" type="text" class="form-control" name="username" value="" placeholder="Username">                                        
                    </div>
                    <br />
                    <label for="password">Password</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                    </div>                                                                  
                    <br />
                    <br />
                     <center><button type="submit" name="login" class="btn btn-success btn-md btn-block">Login</button>
                    <br />
                    <a class="btn btn-link" href="changepw.php" name="forgotpw">Forgot Password?</button></center>
                   
                </form>
        </div>
    </div>
</div>


<?php 
    include("footer.php");
?>