<?php
print '
<!DOCTYPE html>
<html lang="hr">
	<head>
		<link type="text/css" rel="stylesheet" href="style.css">
		<title>Život u divljini</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Životinjsko carstvo">
		<meta name="keywords" content="životinje, divljina">
		<meta name="author" content="Mario Srbić">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
<body>
	<header>
		<div class="header-image"></div>
		<nav>';
		include("navigation.php");
		print '
		</nav>
	</header>
	<main>';

	# Početna stranica
	if (!isset($_GET['nav']) || $_GET['nav'] == 1) { include("pocetna.php"); }

	# Novosti
	else if ($_GET['nav'] == 2) { include("novosti.php"); }

	# Kontakt
	else if ($_GET['nav'] == 3) { include("kontakt.php"); }

	# O nama
	else if ($_GET['nav'] == 4) { include("onama.php"); }

	# Galerija
	else if ($_GET['nav'] == 5) { include("galerija.php"); }

	print '
	</main>
	<footer>
		<p>Copyright &copy; 2018 Mario Srbić. <a href="https://github.com/msrbic?tab=repositories"><img src="img/github.png" title="Github" alt="Github" style="width:14px; margin-top:0.4em"></a></p>
      <p>
        <a href="#">Back to top</a>
      </p>
	</footer>
</body>
</html>';
?>
