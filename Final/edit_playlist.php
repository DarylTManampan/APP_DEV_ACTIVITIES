<?php
include 'database.php';
$id = $_GET['id'];
$playlist = $pdo->query("SELECT * FROM playlists WHERE id = $id")->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];

    $stmt = $pdo->prepare("UPDATE playlists SET title = ? WHERE id = ?");
    $stmt->execute([$title, $id]);
    header("Location: selected.php?id=$id");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Playlist</title>
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
            <h2 class="text-center mb-4">Edit Playlist</h2>
            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Playlist Title</label>
                    <input type="text" name="title" class="form-control" 
                           value="<?= $playlist['title'] ?>" required>
                </div>

                <div class="button-group">
                    <button type="submit" class="btn btn-primary w-100 mb-2">Update Playlist</button>
                    <a href="selected.php?id=<?= $id ?>" class="btn btn-outline-secondary w-100">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
