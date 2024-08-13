<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>
<body>
    <h1>Delete User</h1>
    <form action="delete_user.php" method="post">
        <label for="id">User ID:</label>
        <input type="text" id="id" name="id" required><br>
        <input type="submit" value="Delete">
    </form>
</body>
</html>
