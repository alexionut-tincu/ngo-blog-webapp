<?php
require_once 'BaseController.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PageController extends BaseController {
    private $pdo;
    private $config;

    public function __construct($pdo, $config) {
        $this->pdo = $pdo;
        $this->config = $config;
    }

    public function home() { $this->render('home', ['pageTitle' => 'Project Home']); }
    public function architecture() { $this->render('architecture', ['pageTitle' => 'Project Architecture']); }
    public function database() { $this->render('database', ['pageTitle' => 'Project Database']); }

    public function listPosts() {
        $posts = getAllPosts($this->pdo);
        $newsItems = [];
        $rssUrl = 'https://feeds.arstechnica.com/arstechnica/index';
        try {
            if ($rss = @simplexml_load_file($rssUrl)) {
                $count = 0;
                foreach ($rss->channel->item as $item) {
                    if ($count++ >= 5) break;
                    $newsItems[] = ['title' => (string)$item->title, 'link' => (string)$item->link];
                }
            }
        } catch (\Exception $e) {}
        $this->render('posts_list', ['pageTitle' => 'Blog', 'posts' => $posts, 'newsItems' => $newsItems]);
    }

    public function showPost() {
        $post = getPostById($this->pdo, $_GET['id']);
        $this->render('post_single', ['pageTitle' => 'View Post', 'post' => $post]);
    }

    public function contactForm() {
        $this->render('contact_form', ['pageTitle' => 'Contact Us', 'recaptcha_site_key' => $this->config['recaptcha']['site_key']]);
    }
    
    public function sendContactEmail() {
        require_once '../app/libs/PHPMailer.php';
        require_once '../app/libs/SMTP.php';
        require_once '../app/libs/Exception.php';
    
        if (!verifyRecaptcha($_POST['g-recaptcha-response'], $this->config['recaptcha']['secret_key'])) {
            return $this->render('contact_form', ['pageTitle' => 'Contact Us', 'recaptcha_site_key' => $this->config['recaptcha']['site_key'], 'error' => 'reCAPTCHA failed.']);
        }
    
        $mail = new PHPMailer(true);
        try {
            $smtp = $this->config['smtp'];
            $mail->isSMTP();
            $mail->Host = $smtp['host'];
            $mail->SMTPAuth = true;
            $mail->Username = $smtp['user'];
            $mail->Password = $smtp['pass'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = $smtp['port'];
            
            $mail->setFrom(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL), filter_var($_POST['name'], FILTER_SANITIZE_STRING));
            $mail->addAddress($this->config['admin_email'], 'Site Admin');
            
            $mail->isHTML(false);
            $mail->Subject = 'Contact Form: ' . filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
            $mail->Body    = "New message from: {$_POST['name']} ({$_POST['email']})\n\n{$_POST['body']}";
            
            $mail->send();
            $this->render('contact_form', ['pageTitle' => 'Contact Us', 'recaptcha_site_key' => $this->config['recaptcha']['site_key'], 'message' => 'Message has been sent!']);
        } catch (Exception $e) {
            $this->render('contact_form', ['pageTitle' => 'Contact Us', 'recaptcha_site_key' => $this->config['recaptcha']['site_key'], 'error' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
        }
    }
}