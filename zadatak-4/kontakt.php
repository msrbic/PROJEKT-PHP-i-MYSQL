<?php
	print '
	<h1>kontakt</h1>
	<div id="contact">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.7890741539636!2d15.966758816056517!3d45.795453279106205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d68b5d094979%3A0xda8bfa8459b67560!2sUl.+Vrbik+VIII%2C+10000%2C+Zagreb!5e0!3m2!1shr!2shr!4v1509296660756" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		<form>
			<label for="fname">Ime*</label>
			<input type="text" id="fname" name="firstname" placeholder="Unesite ime.." required>

			<label for="lname">Prezime *</label>
			<input type="text" id="lname" name="lastname" placeholder="Unesite prezime.." required>

			<label for="email">E-mail *</label>
			<input type="email" id="email" name="email" placeholder="Unesite e-mail.." required>

			<label for="country">Država</label>
			<select id="country" name="country">
				<option value="">Molimo odaberite</option>
				<option value="BE">Belgija</option>
				<option value="HR" selected>Hrvatska</option>
				<option value="HU">Mađarska</option>
			</select>

			<label for="subject">Naslov</label>
			<textarea id="subject" name="subject" placeholder="Napišite upit.." style="height:200px"></textarea>

			<input type="submit" value="Submit">
		</form>
	</div>';
?>
