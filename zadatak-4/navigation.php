<?php
	print '
	<ul>
		<li><a href="index.php?nav=1">Početna stranica</a></li>
		<li><a href="index.php?nav=2">Novosti</a></li>
		<li><a href="index.php?nav=3">Kontakt</a></li>
		<li><a href="index.php?nav=4">O nama</a></li>
		<li><a href="index.php?nav=5">Galerija</a></li>';
		if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
			print '
			<li><a href="index.php?nav=6">Registracija</a></li>
			<li><a href="index.php?nav=7">Prijava</a></li>';
		}
		else if ($_SESSION['user']['valid'] == 'true') {
			print '
			<li><a href="index.php?menu=8">Administracija</a></li>
			<li><a href="odjava.php">Odjava</a></li>';
		}
		print '
	</ul>';
?>
