<h1>Reset your password</h1>
<p>An email with the instructions will be send to your email</p>
<form action="includes/reset-request.inc.php" method="post">
    <input type="text" name="email" placeholder="enter your email adress">
    <!-- uses -submit to make sure the user does not accesses the file by writing in the url -->
    <button type="submit" name="reset-request-submit">Submit</button>
</form>
<?php if (isset($_GET["reset"])) {
    if ($_GET["reset"] == "success") {
        echo '<p class="signupsuccess">Check your emial!</p>';
    }
}