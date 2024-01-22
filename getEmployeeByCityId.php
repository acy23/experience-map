<?php

    include('database.php');

    if (isset($_GET['plakakodu'])) {
        $plakakodu = $_GET['plakakodu'];

        try {
            // Perform your database query
            // Replace 'employees' with your actual table name
            $query = "SELECT * FROM employees WHERE city_id = $plakakodu";

            // Execute the query
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
        } catch (Exception $e) {
            // Handle other types of exceptions if necessary
            echo json_encode(['error' => $e->getMessage()]);
        } finally {
            // Close the connection in the finally block
            $mysqli->close();
        }
    } else {
        echo "Invalid request";
    }

?>