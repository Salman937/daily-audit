<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>daily audit</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- navbar starts -->
  <nav class="navbar navbar-inverse">
     <div class="container-fluid">
     <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-right" role="search" >
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
         <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
         </div>
         <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  <!-- navbar ends -->

  <!-- Body strats -->
   <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form class="form-horizontal" action="<?php base_url(); ?>index.php/signup/sign" method="post">
          <fieldset>
           <legend>Sign Up</legend>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
               <input type="text" class="form-control" name="email" placeholder="Email">
              </div>
            </div>
        <div class="form-group">
          <label for="inputPassword" class="col-lg-2 control-label">Password</label>
             <div class="col-lg-10">
              <input type="password" class="form-control" name="password" placeholder="Password">
             
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <input type="submit" name="signup" class="btn btn-primary" value="Sign Up">
          </div>
        </div>
      </fieldset>
    </form>
    </div>
    </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>