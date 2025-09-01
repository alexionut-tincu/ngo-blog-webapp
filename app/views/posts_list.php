<?php include '_news_widget.php'; ?>

<h2>All Blog Posts</h2>

<?php if (empty($posts)): ?>
    <p>No posts have been published yet.</p>
<?php else: ?>
    <?php foreach ($posts as $post): ?>
        <article>
            <h3><a href="index.php?action=show_post&id=<?php echo $post['id']; ?>"><?php echo htmlspecialchars($post['title']); ?></a></h3>
            <p><small>By <?php echo htmlspecialchars($post['author'] ?? 'Unknown'); ?> on <?php echo date('F j, Y', strtotime($post['created_at'])); ?></small></p>
            <div><?php echo nl2br(htmlspecialchars(substr($post['content'], 0, 150))); ?>...</div>
        </article>
        <hr>
    <?php endforeach; ?>
<?php endif; ?>