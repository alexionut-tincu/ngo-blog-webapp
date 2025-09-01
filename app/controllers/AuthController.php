<?php
require_once 'BaseController.php';

class AuthController extends BaseController {
    private $pdo;
    private $recaptcha_config;

    public function __construct($pdo, $recaptcha_config) {
        $this->pdo = $pdo;
        $this->recaptcha_config = $recaptcha_config;
    }

    public function loginForm() {
        $this->render('login_form', ['pageTitle' => 'Login', 'recaptcha_site_key' => $this->recaptcha_config['site_key']]);
    }
    public function registerForm() {
        $this->render('register_form', ['pageTitle' => 'Register', 'recaptcha_site_key' => $this->recaptcha_config['site_key']]);
    }
    public function deleteAccountForm() { $this->render('delete_account_form', ['pageTitle' => 'Delete Account']); }

    public function register() {
        if (!verifyRecaptcha($_POST['g-recaptcha-response'], $this->recaptcha_config['secret_key'])) {
            return $this->render('register_form', ['pageTitle' => 'Register', 'recaptcha_site_key' => $this->recaptcha_config['site_key'], 'error' => 'reCAPTCHA failed.']);
        }
        if (findUserByUsername($this->pdo, $_POST['username'])) {
            return $this->render('register_form', ['pageTitle' => 'Register', 'recaptcha_site_key' => $this->recaptcha_config['site_key'], 'error' => 'Username already exists.']);
        }
        createUser($this->pdo, $_POST['username'], $_POST['password'], $_POST['role']);
        redirect('index.php?action=login_form');
    }

    public function login() {
        if (!verifyRecaptcha($_POST['g-recaptcha-response'], $this->recaptcha_config['secret_key'])) {
            return $this->render('login_form', ['pageTitle' => 'Login', 'recaptcha_site_key' => $this->recaptcha_config['site_key'], 'error' => 'reCAPTCHA failed.']);
        }
        $user = findUserByUsername($this->pdo, $_POST['username']);
        if ($user && password_verify($_POST['password'], $user['password'])) {
            $_SESSION['user_id'] = $user['id']; $_SESSION['username'] = $user['username']; $_SESSION['role'] = $user['role'];
            redirect('index.php?action=list_posts');
        } else {
            $this->render('login_form', ['pageTitle' => 'Login', 'recaptcha_site_key' => $this->recaptcha_config['site_key'], 'error' => 'Invalid credentials.']);
        }
    }

    public function logout() { session_destroy(); redirect('index.php?action=login_form'); }
    public function deleteAccount() {
        if (isLoggedIn() && !isAdmin()) {
            deleteUserAndReassignPosts($this->pdo, $_SESSION['user_id']);
            $this->logout();
        } else {
            redirect('index.php?action=list_posts');
        }
    }
}