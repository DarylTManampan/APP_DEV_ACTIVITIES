<?php
include 'database.php';
$id = $_GET['id'];
$playlist_id = $_GET['playlist_id'];
$song = $pdo->query("SELECT * FROM songs WHERE id = $id")->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $album = $_POST['album'];
    $stmt = $pdo->prepare("UPDATE songs SET title = ?, artist = ?, album = ? WHERE id = ?");
    $stmt->execute([$title, $artist, $album, $id]);
    header("Location: selected.php?id=$playlist_id");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Song</title>
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
            <h2 class="text-center mb-4">Edit Song</h2>
            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Song Title</label>
                    <input type="text" name="title" class="form-control" 
                           value="<?= $song['title'] ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Artist</label>
                    <input type="text" name="artist" class="form-control" 
                           value="<?= $song['artist'] ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Album</label>
                    <input type="text" name="album" class="form-control" 
                           value="<?= $song['album'] ?>">
                </div>
                <div class="button-group">
                    <button type="submit" class="btn btn-primary w-100 mb-2">Update Song</button>
                    <a href="selected.php?id=<?= $playlist_id ?>" class="btn btn-outline-secondary w-100">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
