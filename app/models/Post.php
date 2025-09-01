<?php

function getAllPosts($pdo) {
$sql = "SELECT p.id, p.title, p.content, p.created_at, p.user_id, u.username as author
FROM posts p
LEFT JOIN users u ON p.user_id = u.id
ORDER BY p.created_at DESC";
$stmt = $pdo->query($sql);
return $stmt->fetchAll();
}

function getPostById($pdo, $id) {
$sql = "SELECT p.id, p.title, p.content, p.created_at, p.user_id, u.username as author
FROM posts p
LEFT JOIN users u ON p.user_id = u.id
WHERE p.id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
return $stmt->fetch();
}

function createPost($pdo, $title, $content, $userId) {
$sql = "INSERT INTO posts (title, content, user_id) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
return $stmt->execute([$title, $content, $userId]);
}

function updatePost($pdo, $id, $title, $content) {
$sql = "UPDATE posts SET title = ?, content = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
return $stmt->execute([$title, $content, $id]);
}

function deletePost($pdo, $id) {
$sql = "DELETE FROM posts WHERE id = ?";
$stmt = $pdo->prepare($sql);
return $stmt->execute([$id]);
}
?>