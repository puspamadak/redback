<!DOCTYPE html>
<html lang="<?= $config->language ?>">

<head>
	<?php include DIR['view']."/include/head.php" ?>
    <link rel="stylesheet" href="<?= ASSET['css'] ?>home/main.css" />
    <link rel="stylesheet" href="<?= ASSET['css'] ?>home/hero.css" />
    <link rel="stylesheet" href="<?= ASSET['css'] ?>home/about.css" />
    <link rel="stylesheet" href="<?= ASSET['css'] ?>home/tech.css" />
    <link rel="stylesheet" href="<?= ASSET['css'] ?>home/contact.css" />
    <script src="<?= ASSET['js'] ?>field/text.js" type="module"></script>
</head>

<body class="col">
	<?php include __DIR__."/header.php" ?>
    <main class="row aic">
        <img src="<?= ASSET['img'] ?>hero.jpg" />
        <div class="container dual">
            <div>
                <h1>Welcome to our Website</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum eius natus maxime, consectetur
                    praesentium, aliquid incidunt amet sapiente corporis minus, quos neque eveniet suscipit enim? Dolores
                    itaque aliquid assumenda architecto!</p>
                <div class="btn-row">
                    <a href="#" class="btn primary">About Us</a>
                    <a href="<?= route('contact') ?>" class="btn hollow">Contact Us</a>
                </div>
            </div>
        </div>
    </main>
    <section id="about_sec">
        <div class="container dual">
            <div class="left">
                <h1>About Us</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi metus, tristique ndolor non,
                    ornare sagittis dolor. Nulla vestibulu lacus sed molestie gravida. Crferm entum quismagna tongue,
                    vel sodales arcu vcstibulum. Nunc lobortis dui magna, quis lacusullamcorper at.
                    <br><br>
                    Phasellus sollicitudin ante cros ornare, <b>sit amet luctus lorem semper</b>. Suspendisse posuere,
                    quamdictum consectetur, augue metus pharetra tellus, eu feugiatloreg egetnisi. Cras ornare bibendum
                    ante, ut bibendum odio convallis eget. vel sodales arcu vcstibulum.</p>
            </div>
            <div class="right col info-points">
                <div>
                    <num>01</num>
                    <div>
                        <h4>Dedication to the Customers</h4>
                        <p>Loreum ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div>
                    <num>02</num>
                    <div>
                        <h4>Ease of Use</h4>
                        <p>Loreum ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div>
                    <num>03</num>
                    <div>
                        <h4>Reliable</h4>
                        <p>Loreum ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tech_sec" class="high">
        <div class="container dual">
            <div class="left col">
                <h1>Our Technology</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis deleniti eaque esse at sint, saepe
                    fugiat quo, quam, dolorem veritatis soluta officiis nobis libero aliquid odio sed. Pariatur, fugiat at?</p>
                <article>
                    <i-con file="trophy"></i-con>
                    <h3>Heart rate</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique velit amet nec dui iaculis feugiat. Tincidunt convallis.</p>
                </article>
                <article>
                    <i-con file="trophy"></i-con>
                    <h3>Oxygen level</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique velit amet nec dui iaculis feugiat. Tincidunt convallis.</p>
                </article>
            </div>
            <div class="right col">
                <article>
                    <i-con file="trophy"></i-con>
                    <h3>Distance coverage</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique velit amet nec dui iaculis feugiat. Tincidunt convallis.</p>
                </article>
                <article>
                    <i-con file="trophy"></i-con>
                    <h3>Body temperature</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique velit amet nec dui iaculis feugiat. Tincidunt convallis.</p>
                </article>
                <article>
                    <i-con file="trophy"></i-con>
                    <h3>Posture & muscle activity</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique velit amet nec dui iaculis feugiat. Tincidunt convallis.</p>
                </article>
            </div>
            <div class="btn-row">
                <a href="#" class="btn hollow">Show More</a>
            </div>
        </div>
    </section>
    <section id="contact_sec">
        <div class="container">
            <h1>Contact Us</h1>
        </div>
        <iframe class="map" src="https://www.openstreetmap.org/export/embed.html?bbox=144.61853027343753%2C-38.08809407886682%2C145.1060485839844%2C-37.589206976407695&amp;layer=mapnik"></iframe>
        <div class="container dual">
            <div class="left col">
                <h3>CONTACT INFORMATION</h3>
                <a href="tel:0000000000"><i-con file="building"></i-con> <b>Office:</b> +0 000 000 0000</a>
                <a href="tel:0000000000"><i-con file="call"></i-con> <b>Mobile:</b> +0 000 000 0000</a>
                <a href="mailto:example@example.com"><i-con file="envelope"></i-con> <b>Email:</b> example@example.com</a>
                <a href="https://www.openstreetmap.org/#map=8/-37.927/144.229"><i-con file="location-dot"></i-con> <b>Address:</b> City of Melbourne, Victoria, Australia</a>
            </div>
            <form class="right col" id="contact_form">
                <div class="row wrap">
                    <text-field placeholder="Your Name" class="grow">
                        <input type="text" name="name" autocomplete="name" aria-label="Type your name" />
                    </text-field>
                    <text-field placeholder="Your Email" class="grow">
                        <input type="email" name="email" autocomplete="email" aria-label="Type your email" />
                    </text-field>
                </div>
                <text-field placeholder="Your Message">
                    <textarea rows="5" name="message" aria-label="Type your message"></textarea>
                </text-field>
                <div class="btn-row">
                    <button type="submit" name="submit" class="btn primary">SEND MESSAGE</button>
                </div>
            </form>
        </div>
    </section>
	<?php include __DIR__."/footer.php" ?>
</body>

</html>