<?php if ($post): ?>
    <h2><?php echo htmlspecialchars($post['title']); ?></h2>
    <p><small>By <?php echo htmlspecialchars($post['author'] ?? 'Unknown'); ?> on <?php echo date('F j, Y', strtotime($post['created_at'])); ?></small></p>
    
    <?php if (isAdmin() || (isWriter() && $_SESSION['user_id'] == $post['user_id'])): ?>
        <div>
            <a href="index.php?action=edit_post&id=<?php echo $post['id']; ?>">Edit</a> |
            <a href="index.php?action=delete_post&id=<?php echo $post['id']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
        </div>
        <hr>
    <?php endif; ?>

    <div><?php echo nl2br(htmlspecialchars($post['content'])); ?></div>
<?php else: ?>
    <h2>Post Not Found</h2>
<?php endif; ?>
<p style="margin-top: 20px;"><a href="index.php?action=list_posts">Back to all posts</a></p>