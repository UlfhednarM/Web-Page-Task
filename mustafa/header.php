<?php 

$country_name = "Select Country";
$country_value = "";


if(isset($_GET['page'])){
	$page = $_GET['page'];
}else {
	$page = null;
}

if(isset($_GET['job'])){

	$job = $_GET['job'];

	

	if($job % 2 == 0){ 

		if($job % 3 == 0){ 
       
          $country_name = "Turkey";
          $country_value = "Turkey";
    	}
        
    }else{ 
     
       if($job % 3 == 0){ 
       
          $country_name = "Turkey";
          $country_value = "Turkey";
    	}
    } 

}else {
	$job = null;
	$country_name = "Select Country";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
	
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Project</title>

	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->


  <?php 

  if($job % 2 == 0){  ?>

  	<style type="text/css">
  		
  		#header {
  			
  			  min-height:100%;
			  background:url(bg.jpg) rgba(213, 238, 237, 0.9);
			  background-size:cover;
			  background-blend-mode: multiply; 
  		}

  	</style>
		
        
   <?php } ?>


</head>
<body>

	

	<div id="header">
		<div class="container-fluid">
			<div>
				<nav class="navbar main-nav">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.php">Hub</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="#">Find Jobs <span class="sr-only">(current)</span></a></li>
								<li><a href="#">Browse Startup</a></li>

							</ul>

							<ul class="nav navbar-nav navbar-right">
								<li><a href="#">For Startups</a></li>
								<li class="dropdown">
									<a id="sign-in-nav" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign In <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#">Action</a></li>

									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">

					<h3 id="header-title" class="text-center"> Find them most exciting <span id="header-title-color">startup jobs</span> </h3>

				</div>



				<div class="col-md-6 col-md-offset-3">
					<div class="col-md-12">
						<div class="input-group">
							<form action="content.php" methot="post">
								<input name="job" type="text" class="form-control" placeholder="Job title or keyword">
								<input name="country" type="text" class="form-control" value="<?php echo $country_value;?>" placeholder="<?php echo $country_name;?>">
							<span class="input-group-btn">
								<input type="submit" id="search-btn" class="btn btn-default" type="button">Search</input>
							</span>
						</form>
						</div><!-- /input-group -->
					</div><!-- /.col-lg-6 -->
				</div>

			</div>
		</div>

	</div>

	<div id="main">

		<div class="container-fluid">

			<div class="row">