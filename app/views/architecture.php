<h2>Application Architecture</h2>
<p>The application is built using a robust <strong>Model-View-Controller (MVC)</strong> pattern, with a single entry point (`index.php`) acting as a router.</p>

<h3>Core Components:</h3>
<ul>
    <li><strong>Router (<code>index.php</code>):</strong> The central router inspects the URL (`?action=` or `?page=`) and delegates the request to the appropriate controller method. It is also responsible for initializing the session and loading helper functions.</li>
    <li><strong>Controllers (in <code>app/controllers/</code>):</strong> Logic is separated into distinct controller classes:
        <ul>
            <li><code>BaseController.php</code>: A parent class that provides a shared `render()` method to load views within a consistent HTML layout (header and footer).</li>
            <li><code>PageController.php</code>: Handles public-facing pages like the project info, contact form, and blog post viewing.</li>
            <li><code>AuthController.php</code>: Manages all user authentication logic, including login, logout, registration, and account deletion.</li>
            <li><code>AdminController.php</code>: Protects and handles all actions related to content management (CRUD for posts) and viewing site analytics.</li>
            <li><code>ReportController.php</code>: Handles the generation of PDF reports for administrators.</li>
        </ul>
    </li>
    <li><strong>Models (in <code>app/models/</code>):</strong> Each model corresponds to a database table and contains all the SQL queries for that entity:
        <ul>
            <li><code>Post.php</code>: Manages fetching, creating, updating, and deleting posts.</li>
            <li><code>User.php</code>: Manages finding, creating, and deleting users.</li>
            <li><code>AnalyticsModel.php</code>: Manages logging site visits and retrieving statistics.</li>
        </ul>
    </li>
    <li><strong>Views (in <code>app/views/</code>):</strong> Simple PHP files responsible for presentation. They are organized into:
        <ul>
            <li>A <code>layouts</code> directory containing the main site header and footer.</li>
            <li>Partial/widget views like <code>_news_widget.php</code>.</li>
            <li>Content-specific views for each page (e.g., <code>posts_list.php</code>, <code>login_form.php</code>).</li>
        </ul>
    </li>
</ul>

<h3>User Roles & Permissions:</h3>
<ul>
    <li><strong>Admin:</strong> Full control. Can perform CRUD operations on *all* posts. Can view site analytics and generate PDF reports. Cannot delete their own account.</li>
    <li><strong>Writer:</strong> Content creator. Can perform CRUD operations *only on their own* posts. Can delete their own account.</li>
    <li><strong>Reader:</strong> Consumer. Can only view the list of posts and read single posts. Can delete their own account.</li>
    <li><strong>Guest (Not Logged In):</strong> Can only view the Project Info pages and the Contact Form.</li>
</ul>

<h3>External Libraries (in <code>app/libs/</code>):</h3>
<ul>
    <li><strong>FPDF:</strong> A PHP class used for generating the PDF report of all posts.</li>
    <li><strong>PHPMailer:</strong> A robust library used for reliably sending emails from the contact form via an SMTP server.</li>
</ul>

<h3>Security Measures:</h3>
<ul>
    <li><strong>Password Hashing:</strong> User passwords are securely hashed using PHP's `password_hash()` function.</li>
    <li><strong>SQL Injection Prevention:</strong> All database queries are executed using PDO prepared statements.</li>
    <li><strong>Session-Based Authentication:</strong> User login state is securely managed using PHP sessions.</li>
    <li><strong>Access Control:</strong> The router and controllers strictly enforce role-based permissions for all sensitive actions.</li>
    <li><strong>Bot Protection:</strong> The login, registration, and contact forms are protected by Google reCAPTCHA v2.</li>
</ul>