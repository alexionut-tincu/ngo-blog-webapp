
<?php
$is_edit = isset($post);
$form_action = $is_edit ? 'index.php?action=update_post' : 'index.php?action=create_post';
$title = $is_edit ? $post['title'] : '';
$content = $is_edit ? $post['content'] : '';
$id = $is_edit ? $post['id'] : '';
?>

<h2><?php echo $is_edit ? 'Edit Post' : 'Create New Post'; ?></h2>

<form action="<?php echo $form_action; ?>" method="post">
    <?php if ($is_edit): ?>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
    <?php endif; ?>

    <div style="margin-bottom: 15px;">
        <label for="title">Title</label><br>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($title); ?>" style="width: 100%;" required>
    </div>

    <div style="margin-bottom: 15px;">
        <label for="content">Content</label><br>
        <textarea id="content" name="content" rows="10" style="width: 100%;" required><?php echo htmlspecialchars($content); ?></textarea>
    </div>

    <div>
        <button type="submit"><?php echo $is_edit ? 'Update Post' : 'Save Post'; ?></button>
    </div>
</form>