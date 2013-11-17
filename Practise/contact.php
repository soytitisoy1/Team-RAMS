<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>HULICA - Heuristic Updating of Line Item through Community Analysis</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
	<link href="carousel.css" rel="stylesheet">
    <link href="css/features/navbar-fixed-top.css" rel="stylesheet">
	<link href="css/features/carousel.css" rel="stylesheet">
  </head>

  <body>
	
  
   <div class="navbar navbar-default navbar-fixed-top " role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">HULICA</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php" ><span class="glyphicon glyphicon-home"></span> Home</a></li>
			
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-stats"></span> Dashboards <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="dashboard.php">Data</a></li>
                               
                <li class="divider"></li>
                <li class="dropdown-header"></li>
                <li><a href="comment.php">Comments</a></li>
               
              </ul>
            </li>	
			
			
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> About <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="about.php">Group</a></li>
                <li><a href="about.php">Work</a></li>
                
                <li class="divider"></li>
                <li class="dropdown-header">Others</li>
                <li><a href="about.php">API</a></li>
                <li><a href="about.php">Contest</a></li>
              </ul>
            </li>	
			
			<li class="active"><a href="#"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>         
          </ul>
		  
		  
          <ul class="nav navbar-nav navbar-right">
		  
         
		  <li><a  href="#myModal" data-toggle="modal"><span class="glyphicon glyphicon-user"></span> Sign In</a></li>   
	
			
		  
		  
		  </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<!--Modal Form-->
	<div class="modal fade, active" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user"></span> Sign In</h4>
				</div>
				
				
				<div class="modal-body">			
				<!--Login Form -->
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					</div>
					</div>
					
					
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
					</div>
					</div>
					
					
					<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					<div class="checkbox">
						<label>
						<input type="checkbox"> Remember me
						</label>
					</div>
					</div>
					</div>
					
					<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						
					</div>
					</div>
				</form>				
				</div>
	  
				<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary">Sign in</button>
				</div>
				
				
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


     <div class="container marketing">
			
	 <div class="modal-content">
				<div class="modal-header">
					<h1>Contact Us</h1>
				</div>
				
				
				<div class="modal-body">			
				<!--Login Form -->
				<p>Got quesions? Get in touch with us.</p>
				<p>However, you may contact us about general inquiries about our API!<p>
				<p><a href="">nanonas@yahoo.com.com</a></p>
				<p><a href="">dark_kaith@yahoo.com</a></p>
				<p><a href="">aeejorango@gmail.com</a></p>			
				</div>
	  
				
				
				
			</div><!-- /.modal-content -->
	 
    <hr class="featurette-divider">
	
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#"><img src="css/icon/newIcon/up.png">Back to top</a></p>
		<a href="http://www.facebook.com"><img src="css/icon/newIcon/facebook.png"></a>
		<a href="https://twitter.com"><img src="css/icon/newIcon/twitter.png"></a>
		<a href="https://plus.google.com"><img src="css/icon/newIcon/google+.png"></a>
        <p>&copy; 2013 HULICA &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
		
      </footer>

    </div><!-- /.container -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	 <script src="js/holder.js"></script>
  </body>
</html>
