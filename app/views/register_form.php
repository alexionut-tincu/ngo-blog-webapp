<h2>Create Account</h2>
<?php if (isset($error)): ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>
<form action="index.php?action=register" method="post">
    <div style="margin-bottom: 15px;">
        <label for="username">Username</label><br>
        <input type="text" id="username" name="username" required>
    </div>
    <div style="margin-bottom: 15px;">
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" required>
    </div>
    <div style="margin-bottom: 15px;">
        <label for="role">Account Type</label><br>
        <select name="role" id="role">
            <option value="reader">Reader (can only view posts)</option>
            <option value="writer">Writer (can create and manage own posts)</option>
        </select>
    </div>
    
    <div class="g-recaptcha" data-sitekey="<?php echo htmlspecialchars($recaptcha_site_key); ?>" style="margin-bottom: 15px;"></div>
    
    <div>
        <button type="submit">Register</button>
    </div>
</form>
<p>Already have an account? <a href="index.php?action=login_form">Login here</a>.</p>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
