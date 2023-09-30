<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $title = $_POST["title"];
    $content = $_POST["content"];

    // Validate and sanitize user input (you should add more validation)
    $title = htmlspecialchars($title);
    $content = htmlspecialchars($content);

    // Store the blog post in a database (you need to set up a database connection)
    // Example: $db->query("INSERT INTO blog_posts (title, content) VALUES ('$title', '$content')");

    // Redirect to a success page or display a confirmation message
    header("Location: post_created.html");
    exit();
}
?>
