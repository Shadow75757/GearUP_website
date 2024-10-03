    <!-- PHP code that establishes a connection to MYSQLI database.  -->

    <?php
    // Defining the access data
    define("DBSERVER", "epbjc-porto.net"); // Database server
    define("DBUSER", "epbjc_gearup"); // Database username
    define("DBPWD", "qJzY24QsHf"); // Database password
    define("DBNAME", "epbjc_gearup"); // Database name
    
    // Takes the values that we declared and creates the database connection
    $con = mysqli_connect(DBSERVER, DBUSER, DBPWD, DBNAME);

    // Verifies the connection
    if($con == false) {
        // If the connection fails, display the following error message and terminate the script
        die("Error: " . mysqli_connect_error());
    }
    ?>