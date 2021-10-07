<?php
	if( ! isset($_GET["page"])){
		$page = "accueil";
	}
	else{
		$page = $_GET["page"];
	}
?>
<html>
<head>
	<title>location appartement</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="FichierDeStyle.css">
</head>
<body>
	<div class="LesLiens">
		<h3> les résidences </h3>
		<a href="./index.php?page=accueil">
			Accueil
			<span> sur notre site qui vous présente les trois résidences</span>
		</a>
		<a href="./index.php?page=ampere">
			Ampere
			<img src="Photos/Ampere/Ampere-Vue.jpg" alt="Ampere">
		</a>
		<a href="./index.php?page=fresnel">
			Fresnel
			<img src="Photos/Fresnel/Fresnel-Vue.jpg" alt="Fresnel">
		</a>
		<a href="./index.php?page=coulomb">
			Coulomb
			<img src="Photos/Coulomb/Coulomb-Vue.jpg" alt="Coulomb">
		</a>
		<a href="./index.php?page=coordonnees">Coordonnées</a>
	</div>
	
<?php
	include("$page.php");
?>
</body>
</html>