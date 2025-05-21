<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];

    $stmt = $pdo->prepare("INSERT INTO playlists (title) VALUES (?)");
    $stmt->execute([$title]);
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Playlist</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header class="header-bg">
        <div class="container text-center">
            <h1 class="mb-0">D'Playlist</h1>
        </div>
    </header>

    <div class="container py-5">
        <div class="form-container">
            <h2 class="text-center mb-4">Create New Playlist</h2>
            <form method="post">
            <div class="mb-3">
                <label class="form-label">Playlist Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter playlist title" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100">Create Playlist</button>
            </div>
        </form>
        </div>
    </div>
</body>
</html>
