<?php
$selector = $_GET["selector"];
$selector = $_GET["validator"];

if (empty($selector) || empty($validator)) {
    echo  "could not validate your request!";
} else {
    if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
        ?>

        <form action="includes/reset-password.inc.php" method="post">
            <input type="hidden" name="selector" value="<?php echo $selector ?>">
            <input type="hidden" name="validator" value="<?php echo $validator ?>">
            <input type="password" name="pwd" placeholder="Enter the new password">
            <input type="password" name="pwd-repeat" placeholder="Repeat the new password">
            <button type="submit" name="reset-password-submit">Reset password</button>
        </form>
        <?php
    }
}
?>
