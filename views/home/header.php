<link rel="stylesheet" href="<?= ASSET['css'] ?>home/header.css" />
<script src="<?= ASSET['js'] ?>dropdown.js" type="module"></script>
<script src="<?= ASSET['js'] ?>overflow.js" defer></script>

<header>
	<div class="container row">
		<a href="" class="logo">
			<img src="<?= ASSET['img'] ?>logo.png" />
		</a>
		<ul class="tl grow row jcr" id="main_menu">
			<li><a class="btn active" href="" class="active">Home</a></li>
			<li><a class="btn" href="#">Athletes</a></li>
			<li><a class="btn" href="#about_sec">About Us</a></li>
			<li><a class="btn" href="<?= route('contact') ?>">Contact</a></li>
			<li><a class="btn" href="#tech_sec">Our Technology</a></li>
		</ul>
		<div class="tl row">
			<drop-down class="menu">
				<button class="icon-btn btn" aria-label="Menu" slot="button" id="overflow_btn">
					<i-con file="3-bars"></i-con>
				</button>
				<ul id="overflow_menu"></ul>
			</drop-down>
		</div>
		<div class="grow"></div>
		<button id="btn_signin">Sign In</button>
	</div>
</header>