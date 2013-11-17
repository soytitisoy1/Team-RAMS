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
	
    <link href="css/features/navbar-fixed-top.css" rel="stylesheet">
	<link href="css/features/carousel.css" rel="stylesheet">
  </head>

  <body>
	
  
    <!-- Fixed navbar -->
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
            <li class="active"><a href="#" ><span class="glyphicon glyphicon-home"></span> Home</a></li>
			
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-stats"></span> Dashboards <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="dashboard.php">Graphs</a></li>
                               
                <li class="divider"></li>
                <li class="dropdown-header"></li>
                <li><a href="dashboard.php">Charts</a></li>
               
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
			
			<li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>         
          </ul>
		  
		  
          <ul class="nav navbar-nav navbar-right">
		  
          <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-open"></span>  Documentation <b class="caret"></b></a>
            <ul class="dropdown-menu">
			<li><a href="documentation.php">Documentation Overview</a></li>
            
			</ul>
		  </li>
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
				<form class="form-horizontal" role="form" method="post">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" name="user" class="form-control" id="inputEmail3" placeholder="Email">
					</div>
					</div>
					
					
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="password" name="pass" class="form-control" id="inputPassword3" placeholder="Password">
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
				<button type="submit" class="btn btn-primary" name="login">Sign in</button>
				</div>
				
				
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

     <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/back2.png" alt="First Slide">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p></p>
			 
              <p><a class="btn btn-lg btn-info" href="register.php" role="button">Sign up Today</a></p>		  
				
				
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/back2.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p></p>
              <p><a class="btn btn-lg btn-info" href="#" role="button">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/back2.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p></p>
              <p><a class="btn btn-lg btn-info" href="#" role="button">Browse Gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>Heading</h2>
          <p>Your sentence here.</p>
          <p><a class="btn btn-info" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>Heading</h2>
          <p>Your sentence here.</p>
          <p><a class="btn btn-info" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>Heading</h2>
          <p>Your sentence here.</p>
          <p><a class="btn btn-info" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


    
      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <div class="footer">
        <p class="pull-right"><a href="#"  class="arrow-top"><img src="css/icon/newIcon/up.png">Back to top</a></p>
		<a href="http://www.facebook.com"><img src="css/icon/newIcon/facebook.png"></a>
		<a href="https://twitter.com"><img src="css/icon/newIcon/twitter.png"></a>
		<a href="https://plus.google.com"><img src="css/icon/newIcon/google+.png"></a>
        <p>&copy; 2013 HULICA &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
		
      </d>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/holder.js"></script>
	<script src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script src="js/init.js"></script>
  </body>
</html>
