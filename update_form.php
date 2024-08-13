<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>
    <h1>Update User</h1>
    <form action="update_user.php" method="post">
        <label for="id">User ID:</label>
        <input type="text" id="id" name="id" required><br>
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
