<link rel="stylesheet" href="<?= ASSET['css'] ?>contact.css" />
<script src="<?= ASSET['js'] ?>field/text.js" type="module"></script>

<form class="col grow">
    <p class="desc">Fill out the form below to get in contact!</p>
    <text-field placeholder="Email...">
        <input type="email" name="email" />
    </text-field>
    <text-field placeholder="Subject...">
        <input type="text" name="subject" />
    </text-field>
    <text-field placeholder="Message...">
        <textarea name="message" rows="10"></textarea>
    </text-field>
    <button class="btn hollow" type="submit">Submit</button>
</form>