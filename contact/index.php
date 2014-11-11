<?php 
$pageTitle = 'Kontakt';
include "../includes/head.php"; ?>


<section id="main">

	<h2>Kontakt</h2>

	<h3>Postadresse</h3>
	<address>
		Magasinvegen Borettslag <br>
		7028 Trondheim
	</address>

	<h3>Kontaktskjema</h3>

	<form action="/contact/mail.php" method="post" id="messageForm">
		<div class="field">
			<label for="name">Navn <span class="required">*</span></label>
			<input type="text" name="name" id="name" required>
		</div>

		<div class="field">
			<label for="email">Epost <span class="required">*</span></label>
			<input type="email" name="email" id="email" required>
		</div>

		<div class="field">
			<label for="phone">Telefon</label>
			<input type="text" name="phone" id="phone">
		</div>
		
		<div class="field">
			<label for="subject">Emne</label>
			<input type="text/plain" name="subject" id="subject">
		</div>

		<div class="field">
			<label for="message">Melding</label>
			<textarea name="message" id="message"></textarea>
		</div>
		<input type="submit" value="Submit" class="button button-primary">
	</form>

</section>

<?php include "../includes/foot.php"; ?>