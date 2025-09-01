<?php

session_start();

// --- SETUP ---
$config = require_once __DIR__ . '/../../config.php';
require_once '../app/database.php';
require_once '../app/models/Post.php';
require_once '../app/models/User.php';
require_once '../app/models/AnalyticsModel.php';
require_once '../app/controllers/BaseController.php';
require_once '../app/controllers/PageController.php';
require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/AdminController.php';
require_once '../app/controllers/ReportController.php';

// --- LOG VISIT ---
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$ext = pathinfo($path, PATHINFO_EXTENSION);
if ($_SERVER['REQUEST_METHOD'] === 'GET' && !in_array($ext, ['css', 'js', 'jpg', 'png', 'gif'])) {
    logVisit($pdo, $_SERVER['REQUEST_URI'], $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown');
}

// --- HELPERS ---
function isLoggedIn() { return isset($_SESSION['user_id']); }
function isAdmin() { return isLoggedIn() && $_SESSION['role'] === 'admin'; }
function isWriter() { return isLoggedIn() && $_SESSION['role'] === 'writer'; }
function redirect($url) { header("Location: $url"); exit; }
function verifyRecaptcha($token, $secretKey) {
    if (empty($token)) return false;
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$token}");
    $responseKeys = json_decode($response, true);
    return $responseKeys['success'];
}

// --- ROUTING ---
$action = $_GET['action'] ?? null;
$page = $_GET['page'] ?? null;
$isPost = $_SERVER['REQUEST_METHOD'] === 'POST';

// Define all actions that require a user to be logged in.
$protected_actions = [
    'list_posts', 'show_post', // Blog viewing
    'admin', 'new_post', 'create_post', 'edit_post', 'update_post', 'delete_post', 'analytics', // Admin/Writer actions
    'generate_report', // Report actions
    'logout', 'delete_account_form', 'delete_account' // Account actions
];

// If the requested action is in the protected list AND the user is NOT logged in, redirect to login.
if (in_array($action, $protected_actions) && !isLoggedIn()) {
    redirect('index.php?action=login_form');
}

// Define action-to-controller mappings
$auth_actions = ['login_form', 'login', 'register_form', 'register', 'logout', 'delete_account_form', 'delete_account'];
$admin_actions = ['admin', 'new_post', 'create_post', 'edit_post', 'update_post', 'delete_post', 'analytics'];
$report_actions = ['generate_report'];

// Proceed with routing
if ($page) {
    $controller = new PageController($pdo, $config);
    match ($page) {
        'architecture' => $controller->architecture(),
        'database' => $controller->database(),
        default => $controller->home(),
    };
}
elseif (in_array($action, $auth_actions)) {
    $controller = new AuthController($pdo, $config['recaptcha']);
    match ($action) {
        'login_form' => $controller->loginForm(),
        'login' => $isPost ? $controller->login() : redirect('index.php?action=login_form'),
        'register_form' => $controller->registerForm(),
        'register' => $isPost ? $controller->register() : redirect('index.php?action=register_form'),
        'logout' => $controller->logout(),
        'delete_account_form' => $controller->deleteAccountForm(),
        'delete_account' => $isPost ? $controller->deleteAccount() : redirect('index.php'),
    };
}
elseif (in_array($action, $admin_actions)) {
    $controller = new AdminController($pdo);
    match ($action) {
        'admin' => $controller->dashboard(),
        'new_post' => $controller->newPostForm(),
        'create_post' => $isPost ? $controller->createPost() : redirect('index.php?action=new_post'),
        'edit_post' => $controller->editPostForm(),
        'update_post' => $isPost ? $controller->updatePost() : redirect('index.php?action=admin'),
        'delete_post' => $controller->deletePost(),
        'analytics' => $controller->showAnalytics(),
    };
}
elseif (in_array($action, $report_actions)) {
    $controller = new ReportController($pdo);
    match ($action) {
        'generate_report' => $controller->generatePostReport(),
    };
}
else {
    $controller = new PageController($pdo, $config);
    match ($action) {
        'show_post' => $controller->showPost(),
        'contact' => $controller->contactForm(),
        'send_contact' => $isPost ? $controller->sendContactEmail() : redirect('index.php?action=contact'),
        'list_posts' => $controller->listPosts(),
        default => isLoggedIn() ? $controller->listPosts() : $controller->home(),
    };
}