<h2>Admin: Manage Posts</h2>

<p>
    <a href="index.php?action=new_post">Create New Post</a> |
    <a href="index.php?action=generate_report">Download PDF Report</a>
    <?php if (isAdmin()): ?>
        | <a href="index.php?action=analytics">View Analytics</a>
    <?php endif; ?>
</p>
<hr>

<?php if (empty($posts)): ?>
    <p>No posts to manage.</p>
<?php else: ?>
    <table border="1" cellpadding="5" width="100%">
        <thead><tr><th>Title</th><th>Author</th><th>Actions</th></tr></thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <td><a href="index.php?action=show_post&id=<?php echo $post['id']; ?>"><?php echo htmlspecialchars($post['title']); ?></a></td>
                    <td><?php echo htmlspecialchars($post['author'] ?? 'Unknown'); ?></td>
                    <td>
                        <?php if (isAdmin() || (isWriter() && $_SESSION['user_id'] == $post['user_id'])): ?>
                            <a href="index.php?action=edit_post&id=<?php echo $post['id']; ?>">Edit</a> |
                            <a href="index.php?action=delete_post&id=<?php echo $post['id']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
                        <?php else: ?>
                            (No permissions)
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>