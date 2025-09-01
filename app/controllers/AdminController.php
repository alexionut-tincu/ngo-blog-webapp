<?php
require_once 'BaseController.php';

class AdminController extends BaseController {
    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
        if (!isWriter() && !isAdmin()) { redirect('index.php?action=login_form'); }
    }

    public function dashboard() {
        $posts = getAllPosts($this->pdo);
        $this->render('admin_list', ['pageTitle' => 'Manage Posts', 'posts' => $posts]);
    }

    public function newPostForm() { $this->render('post_form', ['pageTitle' => 'New Post']); }
    public function createPost() {
        createPost($this->pdo, $_POST['title'], $_POST['content'], $_SESSION['user_id']);
        redirect('index.php?action=admin');
    }

    public function editPostForm() {
        $post = getPostById($this->pdo, $_GET['id']);
        if (isAdmin() || (isWriter() && $post['user_id'] == $_SESSION['user_id'])) {
            $this->render('post_form', ['pageTitle' => 'Edit Post', 'post' => $post]);
        } else {
            redirect('index.php?action=admin');
        }
    }

    public function updatePost() {
        $post = getPostById($this->pdo, $_POST['id']);
        if (isAdmin() || (isWriter() && $post['user_id'] == $_SESSION['user_id'])) {
            updatePost($this->pdo, $_POST['id'], $_POST['title'], $_POST['content']);
        }
        redirect('index.php?action=admin');
    }
    
    public function deletePost() {
        $post = getPostById($this->pdo, $_GET['id']);
        if (isAdmin() || (isWriter() && $post['user_id'] == $_SESSION['user_id'])) {
            deletePost($this->pdo, $_GET['id']);
        }
        redirect('index.php?action=admin');
    }

    public function showAnalytics() {
	$stats = getStats($this->pdo);
	$this->render('analytics_report', ['pageTitle' => 'Analytics', 'stats' => $stats]);
    }
}