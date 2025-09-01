<h2>Contact Us</h2>

<?php if (isset($message)): ?>
    <p style="color: green; font-weight: bold;"><?php echo $message; ?></p>
<?php endif; ?>
<?php if (isset($error)): ?>
    <p style="color: red; font-weight: bold;"><?php echo $error; ?></p>
<?php endif; ?>

<form action="index.php?action=send_contact" method="post">
    <div style="margin-bottom: 15px;">
        <label for="name">Your Name</label><br>
        <input type="text" id="name" name="name" required style="width: 100%;">
    </div>
    <div style="margin-bottom: 15px;">
        <label for="email">Your Email</label><br>
        <input type="email" id="email" name="email" required style="width: 100%;">
    </div>
    <div style="margin-bottom: 15px;">
        <label for="subject">Subject</label><br>
        <input type="text" id="subject" name="subject" required style="width: 100%;">
    </div>
    <div style="margin-bottom: 15px;">
        <label for="body">Message</label><br>
        <textarea id="body" name="body" rows="8" required style="width: 100%;"></textarea>
    </div>
    <div class="g-recaptcha" data-sitekey="<?php echo htmlspecialchars($recaptcha_site_key); ?>" style="margin-bottom: 15px;"></div>
    <div><button type="submit">Send Message</button></div>
</form>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>