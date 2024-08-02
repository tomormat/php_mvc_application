<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
    <h1>User List</h1>
    <ul>
        <!-- Loop through the users and display each one -->
        <?php foreach ($users as $user): ?>
            <li><?php echo htmlspecialchars($user->name); ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="home">Back to Home</a>
</body>
</html>
