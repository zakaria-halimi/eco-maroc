<?php
if (!isset($conn)) {
    include 'config.php';
}

$sql = "CREATE TABLE IF NOT EXISTS testimonials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    major VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    // Table created successfully or already exists
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
