<?php
include_once "includes/connection.inc.php";

session_start();
$loggedIn = isset($_SESSION['login']); // Verifica se o usuário está logado

if ($loggedIn) {
    // Retrieve the email from the session
    $email = $_SESSION['email'];

    include_once "header.php";
    ?>
    <div class="carb">
        <div class="main">
            <div class="main__container">
                <div class="main__content">
                    <form action="email-support/email.php" method="post">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name_input" value="<?php echo $name; var_dump($email); ?>" required><br><br>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email_input" value="<?php echo $email; var_dump($email); ?>"><br><br>

                        <label for="subject">Subject:</label>
                        <select id="subject" name="subject_input" required><br><br>
                            <option value=""> --- Select an Option --- </option>
                            <option value="1">Technical Problems</option>
                            <option value="2">Error Reporting</option>
                            <option value="3">Sponsoring Oportunities</option>
                            <option value="4">Feedback</option>
                            <option value="5">Ask a Question</option>
                            <option value="6">Other</option>
                        </select>

                        <label for="message">Message:</label><br>
                        <textarea id="message" name="message_input" rows="4" required></textarea><br><br>

                        <input type="submit" value="Send Email">
                    </form>
                </div>
            </div>
        </div>

        <?php
        include_once "footer.php";
        ?>
    </div>
    <script src="js/app.js"></script>
    </body>

    </html>
    <?php
} else {
    header("Location: ../index.php");
    exit();
}