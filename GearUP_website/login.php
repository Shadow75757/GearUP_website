<?php
// Inicia a sessão
session_start();
$loggedIn = isset($_SESSION['login']); // Verifica se o usuário está logado


// Verifica se o formulário de login foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    // Obtém as credenciais do formulário
    $emailOruid = $_POST['email_or_uid'];
    $password = $_POST['password'];

    include_once("includes/connection.inc.php");

    // Verifica se as credenciais estão corretas
    $sql = "SELECT * FROM usertable WHERE (email = '$emailOruid' OR uid = '$emailOruid')";

    // executar a consultar
    $result = mysqli_query($con, $sql);

    // se o resultado resultar num true...
    if ($result) {
        $utilizador = mysqli_fetch_row($result);

        $idUtilizador = $utilizador[0];
        $usernameUtilizador = $utilizador[2];
        $passwordUtilizador = $utilizador[4];

        if (password_verify($password, $passwordUtilizador)) {
            // Password is correct, so start a new session
            session_start();

            // guardar os dados em variáveis de sessão
            $_SESSION["login"] = true;
            $_SESSION["id"] = $id;
            $_SESSION["username"] = $username;
            $_SESSION["email"] = $email;

            // redirecionamos para a página index.php
            header("location: index.php");
        } else {
            echo "Os dados de acesso introduzidos estão inválidos";
        }
    } else {
        echo "Utilizador não encontrado!";
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($con);
}

// Verifica se o formulário de registro foi enviado
if (isset($_POST['signup'])) { // Changed from 'register'
    $name = $_POST['name'];
    $uid = $_POST['uid'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Perform validation and processing here
    // Example: store the user data in a database
    // Note: This is a simplified example, please use secure practices for handling user data

    // Check if passwords match
    if ($password === $cpassword) {
        // Store the data in a database (example)
        // Replace with your database connection details
        $servername = "epbjc-porto.net";
        $username = "epbjc_gearup"; // Changed from $name
        $password_db = "qJzY24QsHf";
        $dbname = "epbjc_gearup";

        // Create a connection
        $con = new mysqli($servername, $username, $password_db, $dbname);

        // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        $dbhashedPassword = password_hash($cpassword, PASSWORD_DEFAULT);

        // Prepare and execute the query
        $stmt = $con->prepare("INSERT INTO usertable (name, uid, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $uid, $email, $dbhashedPassword);
        $stmt->execute();

        // Get the ID of the inserted user
        $user_id = $stmt->insert_id;

        // Close the connection
        $stmt->close();
        $con->close();

        // Automatically log in the user
        $_SESSION['id'] = $user_id;
        $_SESSION['name'] = $name;

        // Redirect the user to a success page or the main page
        header("Location: index.php");
        exit();
    } else {
        echo "Passwords do not match.";
    }
}
include_once "styles.css";
?>

<style>
    .body {
        background-color: rgb(32, 32, 32);
        background-image: linear-gradient(45deg,
                black 25%,
                transparent 25%,
                transparent 75%,
                black 75%,
                black),
            linear-gradient(45deg,
                black 25%,
                transparent 25%,
                transparent 75%,
                black 75%,
                black),
            linear-gradient(to bottom, rgb(8, 8, 8), rgb(32, 32, 32));
        background-size: 10px 10px, 10px 10px, 10px 5px;
        background-position: 0px 0px, 5px 5px, 0px 0px;
        transition: all 0.5s;
        padding: 1px;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
<?php if ($loggedIn) {
    header("Location: index.php");
    exit();
} else {
    ?>
    <!DOCTYPE html>
    <html lang="PT-pt">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log In</title>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css" />
        <script src="js/sliding-animation.js"></script>
    </head>

    <body>
        <div class="body">
            <div class="veen">
                <div class="login-btn splits">
                    <p>Already a user?</p>
                    <button class="active">Login</button>
                </div>
                <div class="rgstr-btn splits">
                    <p>Don't have an account?</p>
                    <button>Register</button>
                </div>
                <div class="wrapper">

                    <!-- Log in Section -->
                    <?php if (isset($error)): ?>
                        <p>
                            <?php echo $error; ?>
                        </p>
                    <?php endif; ?>

                    <form action="" id="login" method="POST">
                        <h3>Login</h3>
                        <div class="email">
                            <label for="email_or_uid">Email or name:</label>
                            <input type="text" id="email_or_uid" name="email_or_uid" required><br><br>
                        </div>
                        <div class="passwd">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required><br><br>
                            <?php 
                            if (isset($_GET["newpwd"])) {
                                if ($_GET["newpwd"] == "passwordupdated") {
                                    echo '<p class="signupsuccess">Your password has been reset!</p>';
                                }
                            }
                            ?>
                            <a href="reset-password.php" style="color: black">Forgot the password?</a>
                        </div>
                        <div class="submit">
                            <button class="dark" type="submit" name="login" value="entrar">Login</button>
                        </div>
                    </form>

                    <!-- Register Section -->
                    <form action="" id="register" autocomplete="off" method="POST">
                        <h3>Register</h3>
                        <div class="name">
                            <input class="form-control" type="text" name="name" required>
                            <label>Full Name</label>
                        </div>
                        <div class="uid">
                            <input class="form-control" type="text" name="uid" required>
                            <label>User Name</label>
                        </div>
                        <div class="email">
                            <input class="form-control" type="email" name="email" required>
                            <label>Email</label>
                        </div>
                        <div class="password">
                            <input class="form-control" type="password" name="password" required>
                            <label>Password</label>
                        </div>
                        <div class="cpassword">
                            <input class="form-control" type="password" name="cpassword" required>
                            <label>Confirm Password</label>
                        </div>
                        <div class="submit">
                            <button class="dark" type="submit" name="signup">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php } ?>