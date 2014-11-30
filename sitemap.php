<?php
$pageTitle = 'Sitemap';
include "includes/head.php"; ?>

<div class="pagewrap">
	<div class="panel">
		<section id="main">
			<h2>Sidekart</h2>

			<ul>
				<li><a href="/">Hjem</a></li>
				<li><a href="/calendar/">Kalender</a></li>
				<li><a href="/contact/">Kontakt</a></li>
				<li><a href="#">Om borettslaget</a>
					<ul>
						<li><a href="/about/residents.php">Beboere</a></li>
						<li><a href="/about/board.php">Styret</a></li>
					</ul>
				</li>
				<li><a href="#">Informasjon</a>
					<ul>
						<li><a href="info/proceedings.php">Referater</a></li>
						<li><a href="info/washlist.php">Vaskeliste</a></li>
						<li><a href="info/household_regulations.php">Husordensregler</a></li>
						<li><a href="info/projects.php">Prosjekter</a></li>
					</ul>
				</li>
			</ul>

		</section>
	</div>
</div>

<?php include "includes/foot.php"; ?>