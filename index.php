<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
	
</body>
</html>

	<body>

		<header>
			
			<h1>Dossier principal</h1>

		</header>

		<div class="afficheDossier">
			<?php include 'fonction.php' ; ?>
		</div>
		<?php

		// Pour lister les dossiers présent dans le dossier//
$dir_nom = 'Documents'; 
		// Pour ouvrir les dossiers du dossier principal //
$dir = opendir($dir_nom) or die('Erreur de listage : le répertoire n\'existe pas'); 
		// Pour déclare le tableau contenant le nom des fichiers 
$fichier= array();
		// // Pour déclare le tableau contenant le nom des dossiers //
$dossier= array(); 

		while($element = readdir($dir)) { if($element != '.' && $element != '..') 

			{ if (!is_dir($dir_nom.'/'.$element)) {$fichier[] = $element;} else {$dossier[] = $element;} } } 
			closedir($dir); 
				if(!empty($dossier)) 
				{
				sort($dossier); 
				echo "Liste des dossiers accessibles dans '$dir_nom' : \n\n"; echo "\t\t<ul>\n";
					foreach($dossier as $lien)
					{ echo "\t\t\t<li><a href=\"$dir_nom/$lien \">$lien</a></li>\n"; } echo "\t\t</ul>"; } 
		if(!empty($fichier))
		{
		sort($fichier);
		"Liste des fichiers/documents accessibles dans '$dir_nom' : \n\n"; echo "\t\t<ul>\n"; 
	foreach($fichier as $lien)
	{ echo "\t\t\t<li><a href=\"$dir_nom/$lien \">$lien</a></li>\n"; } echo "\t\t</ul>"; } 
	

	/*Fonction download permer de telecharger un fichier*/
function download($file)
{
  $name=GetFileName($file);/*Extraie le nom via la fonction GetFileName*/
/*
Modifie l'header forcer le telechargement au client , au  fichier desirer
*/
  header('Content-disposition: attachment; filename='.$name);/*Indique le nom*/
  header('Content-Type: application/force-download');/*Indique le type*/
  header('Content-Length: '.filesize($file));/*Indique la taille pour permet au client de savoir le % de telechargement Ceci n'est pas obligatoire .*/
  header('Pragma: no-cache');
  header('Cache-Control: must-revalidate, post-check=0, pre-check=0, public');
  header('Expires: 0');
  readfile($file); /*Lit le fichier */
  exit; /*On Quit pour ne rien envoyez d'autre*/
}
?>
	</body>
</html>
