<?php
	isset($_GET["page"])?$page=$_GET["page"]:$page="accueil";

	function Error($id,$reason){
		print("<h1>Error $id</h1>\<center><h2>$reason</h2></center>");
		exit();
	}

	$pages=[
		"Accueil"	=>	[
			'content'	=>	'{PAGE} <span>sur notre site qui vous présente les trois résidences</span>'
		],
		"Coordonnées"	=>	[
			'href'		=>	'coordonnees',
			'content'	=>	'{PAGE}'
		],
	];

	$Residences=[
		0	=>	[
			'name'		=>	'Ampere',
			'address'	=>	"Rue de la source \n 29150 CHATEAULIN",
			'inf'		=>	[
				'Ascenseur'	=>	0,
				'Parking'	=>	1,
			],
			'note'		=>	2
		],
		1	=>	[
			'name'		=>	'Fresnel',
			'address'	=>	"Rue des sternes \n 29000 QUIMPER",
			'inf'		=>	[
				'Ascenseur'	=>	1,
				'Parking'	=>	0,
			],
			'note'		=>	3
		],
		2	=>	[
			'name'		=>	'Coulomb',
			'address'	=>	"Rue des oliviers \n 29200 BREST",
			'inf'		=>	[
				'Ascenseur'	=>	1,
				'Parking'	=>	1,
			],
			'note'		=>	4
		]
	];

	foreach($Residences as $rid => $inf){
		$pages[$inf['name']]=['id'=>$rid,'residence'=>1,'content'=>'{PAGE} <img src="assets/img/Photos/{PAGE}/{PAGE}-Vue.jpg" alt="{PAGE}">'];
	}
?>

<html>
<head>
	<title>Location Appartement [<?php echo(strtoupper($page))?>]</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/FichierDeStyle.css">

	
</head>
<body>
	<div class="LesLiens">
		<h3>Les résidences</h3>
		<?php
			foreach($pages as $pid => $inf){
				$href='index?page={URL}';

				if(isset($inf['residence'])){
					$href='index?page=residence&id='.$inf['id'];
				}
				$result="
					<a href='".$href."'>
						{CONTENT}
					</a>
				";

				$result=str_replace('{CONTENT}',$inf['content'],$result);
				$result=str_replace('{PAGE}',$pid,$result);
				$result=str_replace('{URL}',isset($inf['href'])?$inf['href']:$pid,$result);

				print($result);
			}
		?>
	</div>
	
	<?php file_exists("pages/$page.php")?include("pages/$page.php"):print("Page $page not found !") ?>

</body>
</html>