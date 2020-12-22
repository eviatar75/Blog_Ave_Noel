<?php
session_start();
  ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.php">Acceuil</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
						<?php
						 if(isset($_SESSION['mail']) AND !isset($_GET['deconnexion']) )
						 {
						  ?>
						 <li class="nav-item active">
								<a class="nav-link" href="index.php?deconnexion=true">Se deconnecter<span class="sr-only">(current)</span></a>
						</li>
						<?php
						 }
						 else if($_GET['deconnexion'] = true)
						 {
							 session_unset();
						  ?>

						<li class="nav-item active">
								<a class="nav-link" href="index.php?page=1">S'inscrire <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
								<a class="nav-link" href="connexion.php">Se connecter <span class="sr-only">(current)</span></a>
						</li>
						<?php
							}
						  ?>
				</ul>
				<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
		</div>
</nav>