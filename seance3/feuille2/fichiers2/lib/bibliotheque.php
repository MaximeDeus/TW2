<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Biblioth�que</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<header>
			<h1>Biblioth�que</h1>
		</header>

		<?php
			require_once("fonctionsLivre.php");    // Appelle le fichier contenant les fonctions du livre
			$file = fopen('../data/livres.txt','r');
			echo libraryToHTML($file); //R�dige tous les livres conform�ment � exemplelivre.html.
		?>		
	</body>
</html>