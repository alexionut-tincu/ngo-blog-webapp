<h2>Login</h2>
<?php if (isset($error)): ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>
<form action="index.php?action=login" method="post">
    <div style="margin-bottom: 15px;">
        <label for="username">Username</label><br>
        <input type="text" id="username" name="username" required>
    </div>
    <div style="margin-bottom: 15px;">
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" required>
    </div>
    
    <div class="g-recaptcha" data-sitekey="<?php echo htmlspecialchars($recaptcha_site_key); ?>" style="margin-bottom: 15px;"></div>
    <div>
        <button type="submit">Login</button>
    </div>
</form>
<p>Don't have an account? <a href="index.php?action=register_form">Register here</a>.</p>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
