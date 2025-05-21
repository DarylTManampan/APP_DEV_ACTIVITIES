<?php
include 'database.php';
$playlists = $pdo->query("SELECT * FROM playlists ORDER BY created_at DESC")->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>D'Playlists</title>
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
    <div class="container"><br/>
    <h2 class="playlist-page-title">All Playlists</h2>
    <br/><br/>
    <div class="d-flex justify-content-end mb-4 gap-2">
        <a href="create_playlist.php" class="btn custom-add-btn">
            <span class="glyphicon glyphicon-plus"></span> Add Playlist
        </a>
    </div><br/>
    <div class="row">
        <?php foreach ($playlists as $playlist): ?>
        <div class="col-md-3 playlist-card text-center">
            <a href="selected.php?id=<?= $playlist['id'] ?>">
                <img src="images/cover.jpg" class="img-fluid mb-2" style="max-height:200px;">
                <div class="playlist-name"><?= $playlist['title'] ?></div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>