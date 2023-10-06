<link rel="stylesheet" href="<?= ASSET['css'] ?>home/footer.css" />

<footer id="footer1">
	<div class="container row wrap">
		<div>
			<a href="" class="logo">
				<img src="<?= ASSET['img'] ?>logo.png" />
			</a>
			<p>We are a team based in Peterborough. we are confident that we will save you time and money.</p>
		</div>
		<nav>
			<h3>Site Info</h3>
			<a href="#">About Us</a>
			<a href="<?= route('contact') ?>">Contact Us</a>
			<a href="#">Terms of Use</a>
			<a href="#">Privacy Policy</a>
		</nav>
		<div>
			<h3>Address</h3>
			<p>City of Melbourne, Victoria, Australia</p>
			<br/>
			<a class="link" href="https://www.openstreetmap.org/#map=8/-37.927/144.229">Show on map</a>
		</div>
		<nav>
			<h3>Contact Details</h3>
			<a href="tel:0000000000"><b>Office:</b> +0 000 000 0000</a>
			<a href="tel:0000000000"><b>Mobile:</b> +0 000 000 0000</a>
			<a href="mailto:example@example.com"><b>Email:</b> example@example.com</a>
		</nav>
	</div>
</footer>
<footer id="footer2">
	<div class="container row aic wrap">
		<div>&copy; Copyright <?= date('Y') ?> @ example.com. All Rights Reserved.</div>
		<nav class="grow row">
			<a href="https://dribble.com" title="Dribbble"><i-con file="dribbble"></i-con></a>
			<a href="https://telegram.com" title="Telegram"><i-con file="telegram"></i-con></a>
			<a href="https://twitter.com" title="Twitter"><i-con file="twitter"></i-con></a>
			<a href="https://instagram.com" title="Instagram"><i-con file="instagram"></i-con></a>
			<a href="https://facebook.com" title="Facebook"><i-con file="facebook"></i-con></a>
		</nav>
	</div>
</footer>