<link rel="stylesheet" href="styles/menu.css" />
<link rel="stylesheet" href="styles/main/header.css" />
<script src="scripts/menu.js" defer></script>
<script src="scripts/overflow.js" defer></script>

<header>
	<div class="container row">
		<a href="#" class="logo">
			<img src="images/logo-text.svg" />
		</a>
		<ul class="tl grow row jcr" id="main_menu">
			<li><a class="btn active" href="#" class="active">Home</a></li>
			<li><a class="btn" href="#">Athletes</a></li>
			<li><a class="btn" href="#about_sec">About Us</a></li>
			<li><a class="btn" href="#contact_sec">Contact</a></li>
			<li><a class="btn" href="#tech_sec">Our Technology</a></li>
		</ul>
		<ul class="tl row">
			<li id="overflow_btn" class="menu">
				<button class="icon-btn btn" aria-label="Menu">
					<i-con file="3-bars"></i-con>
				</button>
				<ul id="overflow_menu" class="list"></ul>
			</li>
		</ul>
	</div>
</header>