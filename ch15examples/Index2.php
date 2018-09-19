<?php

    $visitor_name = '';
    $visitor_email = 'adam@thevoice.com';
    $visitor_msg = 'Great job!';
    /* echo "Fields: " . $visitor_name . $visitor_email . $visitor_msg;  */
    
    // Validate inputs
    if ($visitor_name == null || $visitor_email == null ||
        $visitor_msg == null) {
        $error = "Invalid input data. Check all fields and try again.";
        /* include('error.php'); */
        echo "Form Data Error: " . $error; 
        exit();
        } else {
            $dsn = 'mysql:host=localhost;dbname=evajonesssssss';
            $username = 'root';
            $password = 'Pa$$w0rd';
            
            try {           
                $db = 
                    new PDO($dsn, $username, $password);
                // other statements
            } catch (PDOException $e) {
                echo 'PDOException: ' . $e->getMessage();
                exit;
            }
            echo 'No errors.';
        }

?>