<!DOCTYPE html>
<html>
<head>
	<title>projext</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
	<link   rel="stylesheet" href="assets/font-awesome/less/font-awesome.css">
	<link   rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
	    	<div class="container">
	    		<h3><i class="fa fa-home mr-2"></i></h3>
	  		<a class="navbar-brand font-weight-bold" href="#"></a>
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  		</button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-2 mr-4">
			      <li class="nav-item active">
			        <a class="nav-link"href=" {{ url("/index") }}">Beranda  <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href=" {{ url("/login") }}">Login <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href=" {{ url("/about") }}">Tentang Kami <span class="sr-only">(current)</span></a>
			      </li>
			    </ul>
			  </div>
	  		</div>
	  		<div class="icon ml-auto">
            <h5>
                <i class="fa fa-sign-out ml-2" data-toggle="tooltip" title="Sign Out"></i>
            </h5>
        </div>
		</nav>
	<div class="row mt-5 no-gutters bg-light">
		<div class="col-md-2">
			<ul class="list-group pt-4">
				<li class="list-group-item active"> Project</li>
				<li class="list-group-item">Galuh Indra Laksono (3042018279)</li>
			</ul>
		</div>
		<div class="col-md-10 p-5 pt-2">
			<h3><i class="fa fa-home mr-2 text-white text-center"></i></h3><hr class="bg-secondary">

 <img src="{{ url('public') }}/img/bbbb.jpg" > 

			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
				</div>
			</div>
		</div>
	</div>
</body>
</html>