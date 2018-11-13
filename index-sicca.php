<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?PHP 
// Chemin en dur
$path = realpath('/home/gen-011/Documents/Dev/PHP/Gestion-Fichiers-PHP-Ajax/Documents/');


/* $objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::SELF_FIRST);
foreach($objects as $name => $object){
   var_dump($name);
} */


/* $iterator = new DirectoryIterator(dirname(__FILE__));

while($iterator->valid()) {
	$file = $iterator->current();
	echo $iterator->key() . " => " . $file->getFilename() . "\n";
	$iterator->next();
} */


// Affiche l'extension du fichier
$directory = new DirectoryIterator($path);
foreach ($directory as $fileinfo) {
		echo $fileinfo->getExtension() . "\n";
}
?>
<br>
<br>
<?PHP
// Affiche le nom complet + extension
$dir = new DirectoryIterator(dirname(__FILE__));
foreach ($dir as $fileinfo) {
	echo $fileinfo->getFilename() . "\n";
}
?>
    
</body>
</html>





