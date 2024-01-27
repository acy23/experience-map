<?php

include('database.php');

$sql = "SELECT DISTINCT city_id FROM employees";
$result = $mysqli->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Fetch the results into an array
    $cityIds = array();
    while ($row = $result->fetch_assoc()) {
        $cityIds[] = $row['city_id'];
    }

    // Close the database connection
    $mysqli->close();

    // Convert the array to JSON
    $jsonResponse = json_encode($cityIds);

    // Set the content type to JSON
    header('Content-Type: application/json');

    // Return the JSON response
    echo $jsonResponse;
} else {
    // If no results are found
    echo json_encode(array('message' => 'No city IDs found'));
}

?>
