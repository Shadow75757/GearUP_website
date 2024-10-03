<?php 
if (isset($_POST["reset-request-submit"])) {

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "https://epbjc-porto.net/gearup/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);
    
    //expires after 15min
    $expires = date("U") + 900;

    require "connection.inc.php";

    $userEmail = $_POST["email"];

    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close();

    $to = $userEmail;

    $subject = "reset pwd";

    $message = '<p>reset pwd testing</p>';
    $message .= '<p>here is the pwd link</br>';
    $message .= '<a href="' . $url . '">' . $url . '</a></p>';

    $headers = "from: test <gearupmailing@gmail.com>\r\n";
    $headers .= "Reply-To: gearupmailing@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);

    header("Location: ../reset-password.php?reset=success");

} else {
    header("Location: index.php");
}
?>