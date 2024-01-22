<?php 
    include('database.php');

    if (isset($_GET['plakakodu'])) {
        $plakakodu = $_GET['plakakodu'];
    
        // Perform your database query
        // Replace 'employees' with your actual table name
        $query = "SELECT * FROM employees WHERE city_id = $plakakodu";
    
        // Execute the query
        // Replace $mysqli with your actual database connection variable
        $result = $mysqli->query($query);
    
        // Fetch data from the result
        $data = $result->fetch_all(MYSQLI_ASSOC);
    
        // Return the data as JSON
        header('Content-Type: application/json');
        echo json_encode($data);
    } else {
        echo "Invalid request";
    }


?>