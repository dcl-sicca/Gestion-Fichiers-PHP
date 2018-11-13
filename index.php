<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Liste des fichiers</title>
	</head>

	<body>
		<?php
			$nb_fichier = 0;

			echo '<ul>';
			if($dossier = opendir('./Documents'))
			{
				while (false !== ($fichier = readdir($dossier)))
				{
					if($fichier != '.' && $fichier != '..' && $fichier != 'index.php')
					{
						$nb_fichier++;
						echo '<li><a href="./mondossier/' . $fichier . '">' . $fichier . '</a></li>';
					}
				}
				closedir($dossier);
			}
			else
			{
				echo "Le dossier n'a pas pu être ouvert";
			}
		?>
	</body>
</html>