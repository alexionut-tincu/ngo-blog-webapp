<h2>Website Analytics</h2>
<p><strong>Total Page Views:</strong> <?php echo $stats['total_views']; ?></p>
<h3>Top 5 Visited Pages:</h3>
<table border="1" cellpadding="5" width="100%">
    <thead><tr><th>Page URI</th><th>Visits</th></tr></thead>
    <tbody>
        <?php foreach ($stats['top_pages'] as $page): ?>
            <tr>
                <td><?php echo htmlspecialchars($page['uri']); ?></td>
                <td><?php echo $page['visits']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>