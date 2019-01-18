<?php
	# Stop Hacking attempt
	define('__APP__', TRUE);

	# Start session
		session_start();

	# Database connection
	// include ("dbconn.php");

	# Variables MUST BE INTEGERS
		if(isset($_GET['nav'])) { $nav   = (int)$_GET['nav']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }

	# Variables MUST BE STRINGS A-Z
		if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }

	if (!isset($nav)) { $nav = 1; }

	# Classes & Functions
		include_once("functions.php");
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
		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}

		# Početna stranica
		if (!isset($nav) || $nav == 1) { include("pocetna.php"); }

		# Novosti
		else if ($nav == 2) { include("novosti.php"); }

		# Kontakt
		else if ($nav == 3) { include("kontakt.php"); }

		# O nama
		else if ($nav == 4) { include("onama.php"); }

		# Galerija
		else if ($nav == 5) { include("galerija.php"); }

		# Registracija
		else if ($nav == 6) { include("registracija.php"); }

		# Prijava
		else if ($nav == 7) { include("prijava.php"); }

		# Administracija
		else if ($nav == 8) { include("admin.php"); }
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
