<?php
function logVisit($pdo, $uri, $userAgent) {
    $sql = "INSERT INTO analytics (uri, user_agent) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$uri, $userAgent]);
}

function getStats($pdo) {
    $stats = [];
    $stats['total_views'] = $pdo->query("SELECT COUNT(*) FROM analytics")->fetchColumn();
    $stats['top_pages'] = $pdo->query("SELECT uri, COUNT(uri) as visits FROM analytics GROUP BY uri ORDER BY visits DESC LIMIT 5")->fetchAll();
    return $stats;
}