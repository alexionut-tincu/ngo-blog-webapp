<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($pageTitle ?? 'My NGO\'s Blog'); ?></title>
    <style>
        body { font-family: sans-serif; max-width: 800px; margin: 40px auto; padding: 20px; line-height: 1.6; }
        nav { margin-bottom: 20px; }
        nav a { margin-right: 15px; text-decoration: none; font-weight: bold; }
        .nav-section { margin-bottom: 10px; border-bottom: 1px solid #ccc; padding-bottom: 10px; }
        h1, h2, h3 { color: #333; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Epic NGO Blog</h1>
    <nav>
        <div class="nav-section">
            <strong>Project Info:</strong>
            <a href="index.php?page=home">Home</a> |
            <a href="index.php?page=architecture">Architecture</a> |
            <a href="index.php?page=database">Database</a>
        </div>
        
        <div class="nav-section">
            <?php if (isLoggedIn()): ?>
                <a href="index.php?action=list_posts">Blog</a>
                <?php if (isWriter() || isAdmin()): ?>
                    <a href="index.php?action=admin">Manage Posts</a>
                <?php endif; ?>
                <?php if (!isAdmin()): ?>
                    <a href="index.php?action=delete_account_form">Delete Account</a>
                <?php endif; ?>
                <a href="index.php?action=logout">Logout (<?php echo htmlspecialchars($_SESSION['username']); ?>)</a>
		<a href="index.php?action=contact">Contact</a> <!-- Add this -->
            <?php else: ?>
                <a href="index.php?action=login_form">Login</a>
                <a href="index.php?action=register_form">Register</a>
		<a href="index.php?action=contact">Contact</a> <!-- Add this -->
            <?php endif; ?>
        </div>
    </nav>
    <main>