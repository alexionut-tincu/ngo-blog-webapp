<h2>Welcome to the Project Description</h2>
<p>This website describes the plan and final implementation of an NGO's blog platform built using PHP and MySQL, following a Model-View-Controller (MVC) architecture.</p>
<p>The application is now feature-complete. Use the navigation links to explore the detailed architecture and database schema.</p>

<h3>Key Features Implemented:</h3>
<ul>
    <li><strong>Full CRUD Functionality:</strong> Users can Create, Read, Update, and Delete blog posts based on their permissions.</li>
    <li><strong>Multi-Role User System:</strong> The application supports three distinct user roles:
        <ul>
            <li><strong>Admin:</strong> Full control over all content and access to analytics/reports.</li>
            <li><strong>Writer:</strong> Can create posts and manage their own content.</li>
            <li><strong>Reader:</strong> Can view blog posts after logging in.</li>
        </ul>
    </li>
    <li><strong>Secure Authentication:</strong> A complete user registration and login system using PHP sessions and hashed passwords. Login and registration are protected by Google reCAPTCHA.</li>
    <li><strong>Account Management:</strong> Users can create new accounts and delete their own accounts (which reassigns their posts to a special "[deleted]" user).</li>
    <li><strong>PDF Report Generation:</strong> Admins can download a PDF report of all blog posts.</li>
    <li><strong>Website Analytics:</strong> A simple, built-in analytics system tracks page views, with a report visible to admins.</li>
    <li><strong>Contact Form:</strong> A public contact form allows visitors to send emails to the site administrator, protected by reCAPTCHA.</li>
    <li><strong>External Data Integration:</strong> The blog homepage includes a widget that parses and displays the latest headlines from an external tech news RSS feed.</li>
</ul>