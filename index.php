<?php
// Get the requested page, default to dashboard
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// Allowed pages for security
$allowed_pages = ['dashboard', 'finance', 'sales', 'inventory', 'peakhour', 'insights'];

if (!in_array($page, $allowed_pages)) {
    $page = 'dashboard';
}

// Check if the file exists before including
$file_path = $page . '.html';

if (file_exists($file_path)) {
    include($file_path);
} else {
    // Fallback or error message if the specific HTML isn't uploaded yet
    echo "<div style='color: white; background: #2A0000; padding: 20px; font-family: sans-serif;'>";
    echo "<h2>Page Under Construction</h2>";
    echo "The file <strong>$file_path</strong> has not been uploaded yet.";
    echo "<br><a href='index.php?page=dashboard' style='color: #f5f7fb;'>Return to Dashboard</a>";
    echo "</div>";
}
?>