<h2>Final Database Schema</h2>
<p>The application uses a MySQL/MariaDB database consisting of three tables: <code>users</code>, <code>posts</code>, and <code>analytics</code>.</p>

<h3><code>users</code> Table</h3>
<p>Stores user account information, including credentials and roles.</p>
<table>
    <thead><tr><th>Column</th><th>Type</th><th>Notes</th></tr></thead>
    <tbody>
        <tr><td>id</td><td>INT</td><td>Primary Key, AUTO_INCREMENT</td></tr>
        <tr><td>username</td><td>VARCHAR(100)</td><td>Unique, used for logging in.</td></tr>
        <tr><td>password</td><td>VARCHAR(255)</td><td>Stores the securely hashed user password.</td></tr>
        <tr><td>role</td><td>ENUM('admin', 'writer', 'reader')</td><td>Defines the user's permissions. Defaults to 'reader'.</td></tr>
    </tbody>
</table>

<h3><code>posts</code> Table</h3>
<p>Stores all the blog post content and links each post to an author.</p>
<table>
    <thead><tr><th>Column</th><th>Type</th><th>Notes</th></tr></thead>
    <tbody>
        <tr><td>id</td><td>INT</td><td>Primary Key, AUTO_INCREMENT</td></tr>
        <tr><td>user_id</td><td>INT</td><td>Foreign Key referencing <code>users.id</code>. Set to NULL if the author's account is deleted.</td></tr>
        <tr><td>title</td><td>VARCHAR(255)</td><td>The title of the blog post.</td></tr>
        <tr><td>content</td><td>TEXT</td><td>The main body content of the post.</td></tr>
        <tr><td>created_at</td><td>TIMESTAMP</td><td>Automatically set to the time of creation.</td></tr>
    </tbody>
</table>

<h3><code>analytics</code> Table</h3>
<p>Stores simple page view data for the site analytics feature.</p>
<table>
    <thead><tr><th>Column</th><th>Type</th><th>Notes</th></tr></thead>
    <tbody>
        <tr><td>id</td><td>INT</td><td>Primary Key, AUTO_INCREMENT</td></tr>
        <tr><td>uri</td><td>VARCHAR(255)</td><td>The requested page URL (e.g., <code>/index.php?action=show_post&id=1</code>).</td></tr>
        <tr><td>user_agent</td><td>VARCHAR(255)</td><td>The browser/client information of the visitor.</td></tr>
        <tr><td>visit_timestamp</td><td>TIMESTAMP</td><td>Automatically set to the time of the page view.</td></tr>
    </tbody>
</table>