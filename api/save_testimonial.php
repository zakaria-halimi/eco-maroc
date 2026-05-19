<?php
header('Content-Type: application/json');
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['name']) && isset($data['major']) && isset($data['content'])) {
        $name = mysqli_real_escape_string($conn, $data['name']);
        $major = mysqli_real_escape_string($conn, $data['major']);
        $content = mysqli_real_escape_string($conn, $data['content']);

        $sql = "INSERT INTO testimonials (name, major, content) VALUES ('$name', '$major', '$content')";

        if (mysqli_query($conn, $sql)) {
            echo json_encode(['success' => true, 'message' => 'Testimonial saved successfully']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Database error: ' . mysqli_error($conn)]);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>
