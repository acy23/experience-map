<?php
include('database.php');

// Check if the id parameter is set
if (isset($_GET['id'])) {
    // Sanitize and validate the id parameter
    $id = $mysqli->real_escape_string($_GET['id']);

    // Perform your database query with the id parameter
    $query = "SELECT * FROM employees WHERE id = '$id'";
    $result = $mysqli->query($query);

    // Check if the query was successful
    if ($result) {
        // Fetch data from the result
        $data = $result->fetch_all(MYSQLI_ASSOC);

        // Return the data as JSON
        header('Content-Type: application/json');
        echo json_encode($data);
    } else {
        // Handle query error
        echo json_encode(['error' => $mysqli->error]);
    }
} else {
    // No id parameter provided
    echo json_encode(['error' => 'No id parameter provided']);
}

// Close the database connection
$mysqli->close();
?>