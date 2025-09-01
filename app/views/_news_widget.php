<div style="border: 1px solid #ccc; padding: 15px; margin-bottom: 20px;">
    <h3>Latest Tech News</h3>
    <?php if (!empty($newsItems)): ?>
        <ul>
            <?php foreach ($newsItems as $item): ?>
                <li><a href="<?php echo htmlspecialchars($item['link']); ?>" target="_blank"><?php echo htmlspecialchars($item['title']); ?></a></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Could not load news feed.</p>
    <?php endif; ?>
</div>