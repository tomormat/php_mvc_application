<!DOCTYPE html>
<html>
<head>
    <title>Advertisement List</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
    <h1>Advertisement List</h1>
    <ul>
        <!-- Loop through the advertisements and display each one along with the username -->
        <?php foreach ($advertisements as $ad): ?>
            <li><?php echo htmlspecialchars($ad->title) . ' - ' . htmlspecialchars($ad->username); ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="home">Back to Home</a>
</body>
</html>


