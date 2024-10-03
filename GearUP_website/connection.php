    <!-- PHP code that establishes a connection to MYSQLI database.  -->

    <?php
    // Defining the access data
    define("DBSERVER", ""); // Database server
    define("DBUSER", ""); // Database username
    define("DBPWD", ""); // Database password
    define("DBNAME", ""); // Database name
    
    // Takes the values that we declared and creates the database connection
    $con = mysqli_connect(DBSERVER, DBUSER, DBPWD, DBNAME);

    // Verifies the connection
    if($con == false) {
        // If the connection fails, display the following error message and terminate the script
        die("Error: " . mysqli_connect_error());
    }
    ?>
