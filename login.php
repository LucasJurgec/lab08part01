<?php include 'header.inc'; ?>
    <form method="post" action="process.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="hidden" name="token" value="abc123" required><br>
        <input type="submit" value="Login" required><br>
    </form>
<?php include 'footer.inc'; ?>