<?php

function findUserByUsername($pdo, $username) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    return $stmt->fetch();
}

function createUser($pdo, $username, $password, $role) {
    // Prevent non-admins from creating admin or writer accounts via tampering
    if ($role !== 'reader' && $role !== 'writer') {
        $role = 'reader';
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$username, $hashedPassword, $role]);
}

function deleteUserAndReassignPosts($pdo, $userId) {
    // Find the ID of the '[deleted]' user
    $deletedUser = findUserByUsername($pdo, '[deleted]');
    if (!$deletedUser) {
        return false;
    }
    $deletedUserId = $deletedUser['id'];

    // Reassign posts
    $stmt = $pdo->prepare("UPDATE posts SET user_id = ? WHERE user_id = ?");
    $stmt->execute([$deletedUserId, $userId]);

    // Delete the user
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    return $stmt->execute([$userId]);
}
?>