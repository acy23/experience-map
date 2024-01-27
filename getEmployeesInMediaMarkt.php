<?php
    include('database.php');

    try {
        $query = "SELECT COUNT(id) as count from employees where store like '%media%' or '%Media%'";

        $result = $mysqli->query($query);

        // Check if the query was successful
        if ($result) {
            // Fetch data from the result
            $data = $result->fetch_all(MYSQLI_ASSOC);

            // Return the data as JSON
            header('Content-Type: application/json');
            echo json_encode($data[0]);
        } else {
            // Handle query error
            echo json_encode(['error' => $mysqli->error]);
        }
    } catch (Exception $e) {
        // Handle other types of exceptions if necessary
        echo json_encode(['error' => $e->getMessage()]);
    } finally {
        // Close the connection in the finally block
        $mysqli->close();
    } else {
        echo "Invalid request";
    }
?>
