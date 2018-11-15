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
	</head>

	<body>
		<?php
		//  Nombre de ficher qui augmentera à chaque nouveau fichier //
			$nombreDeFichier =0;
		// Liste pour lister les documents //
			echo '<ul>';
		// Fonction pour ouvrir le dossier et le dossier ouvert est stocke dans une variable //
			if ($dossier = opendir('./Documents')) {
		// La boucle pour lire les fichiers et false pour verifier que la lecture du dossier n'a pas retourne d'erreur //
				while(false !== ($fichier = readdir($dossier))) {
		// Pour indiquer les fichiers a ne pas afficher dans les resultats //
					if($fichier != '.' && $fichier != '..' && $fichier != 'index.php') {
		// Pour incrementer de 1 pour rester sur le dossier //
					$nombreDeFichier++;
		//  Pour afficher //
					echo '<li><a href="./Documents' . $fichier . '">' . $fichier . '</a></li>';
		}
			echo '</ul>';
		}
		closedir($dossier);

		}
		 else {
			echo 'Le dossier n\' a pas pu être ouvert';
		}
		?>
			
	</body>
</html>
