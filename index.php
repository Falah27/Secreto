<?php
	session_start();
   include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<script src=" https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.8/typed.min.js"></script>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet"></link>
    <title>My Secreto Site</title>

    <style>
		
		*{
			font-family: 'Poppins', sans-serif;
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		
	</style>
  </head>
  <body>
	<section id="navbar">
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #24A19C; ">
		  <div class="container">
			<a class=" navbar-brand" href="#">My Secreto Site</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
			  <ul class="navbar-nav ms-auto">
				<li class="nav-item">
				  <a class="nav-link" href="#About">About Me</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#Secreto">Secreto</a>
				</li>
				
				<li class="nav-item">
				  <a class="nav-link" href="#Contact">Contact</a>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>
	  </section>
	
	  <section id="About">
		<div class="jumbotron" style=" background-color: #24A19C; padding-top: 1rem; padding-bottom: 1rem ;">
			<img src="wp9288788.png" width="200" class="img-thumbnail d-block mx-auto rounded-circle animate__animated animate__fadeIn" alt="">
			<center style="padding: 1rem;">
			<h1 class="display-4 animate__animated animate__swing text-white" style="text-align: center;">Falah</h1>
			<hr style="color: white; width: 30px;">
			<p class="text-white" style="font-size : 22px;"> I'm a <br><i id="typed"></i></p>
			</center>
		  </div>
	  </section>

	  <section id="Secreto">
		<div class="container" style="margin-top: 120px;" >
			<center>
				<h3 class="display-6 animate__animated animate__fadeIn"> Secret Message Field </h3>
			</center>
			<form action="proses.php" method="POST">
				<div class="form-group">
					<label for="msg" class="mb-3 mt-5"><i class="far fa-envelope"></i> Message :</label>
					<textarea class="form-control" name="msg" rows="5" id="msg" placeholder="write your secret message to falah here.." autocomplete="off" type="text" style="font-size = 12px;" ></textarea>
				  </div>
				<center>
				<button type="submit" class="btn text-white mt-4 mb-2" id="send" style="background-color: #24A19C" name="send"> <i class="fas fa-paper-plane"> </i>  | Send Message </button>
				</center>
			  </form>
			  
			  <center>
				<hr style="width: 200px; height: 1px;">
				  <a href="secreto.php"><button class="btn btn-danger mt-2"> see secret message </button></a>
			  </center>
		</div>
	  </section>

	

	  <section id="Contact"
		<div class="container" style="margin-top: 120px;" >
			<center>
				<h3 class="display-6 animate__animated animate__fadeIn"> Social Media </h3>
			<div class="row justify-content-center text-center display-flex" >	
				<div class="col-sm-2 mt-2 " >
					<figure class="figure animate__animated animate__fadeIn">
						<a href="https://www.instagram.com/ef.dyt_/"><img src="ig-removebg-preview.png" width="70" class="figure-img img-fluid rounded " alt="..."></a>
						<figcaption class="figure-caption mt-1" ><a href="https://www.instagram.com/ef.dyt_/" style="color: black; text-decoration: none;" ><p style="font-size: 14px; font-weight: 500;">@ef.dyt_</p></a></figcaption>
					  </figure>
				</div>
				<div class="col-sm-2 mt-2 ">
					<figure class="figure animate__animated animate__fadeIn">
						<a href="https://github.com/Falah27"><img src="GitHub-Mark-removebg-preview.png" width="70" class="figure-img img-fluid rounded" alt="..."></a>
						<figcaption class="figure-caption mt-1"><a href="https://github.com/Falah27" style="color: black; text-decoration: none;" ><p style="font-size: 14px; font-weight: 500;">Falah27</p></a></figcaption>
					  </figure>
				</div>
			</div>
			</center>

		</div>
	  </section>

	  <footer style="background-color: #24A19C; padding: 1rem;">
		  <center>
			  <span style="color: white; font-size: 14px;" class="animate_animated animate__flash"> Copyright by Dayat | 2022 </ style="color: white;">
		  </center>
	  </footer>
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	
	<?php if(@$_SESSION["gagal"]){ ?>
        <script>
            swal({
				title: "Sorry",
				text: "kamu belum isi :(",
				icon: "warning",
				button: "okee!",
				});
        </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION["gagal"]); } else{
		
	} ?>
  </body>
</html>