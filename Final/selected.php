<?php
include 'database.php';
$playlist_id = $_GET['id'];
$playlist = $pdo->query("SELECT * FROM playlists WHERE id = $playlist_id")->fetch();
$songs = $pdo->query("SELECT * FROM songs WHERE playlist_id = $playlist_id")->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $playlist['title'] ?> - D'Playlist</title>
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

        <div class="playlist-header d-flex justify-content-between align-items-start mb-5">
            <div class="d-flex align-items-center flex-grow-1">
                <div class="me-4">
                    <img src="images/cover.jpg" alt="Playlist Cover" class="img-thumbnail" style="width: 180px; height: 180px;">
                </div>
                <div>
                    <h1 class="display-4 fw-bold"><?= $playlist['title'] ?></h1>
                    <p class="text-default">
                        <?= count($songs) ?> song<?= count($songs) != 1 ? 's' : '' ?>
                    </p>
                    <div class="mt-3">
                        <a href="add_song.php?playlist_id=<?= $playlist_id ?>" class="btn btn-primary me-2">
                            <span class="glyphicon glyphicon-plus"></span> Add Song
                        </a>
                        <a href="edit_playlist.php?id=<?= $playlist_id ?>" class="btn btn-primary me-2">
                            <span class="glyphicon glyphicon-edit"></span> Edit
                        </a>
                        <form action="delete_playlist.php" method="post" style="display:inline;">
                            <input type="hidden" name="playlist_id" value="<?= $playlist_id ?>">
                            <button type="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-trash"></span> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="ms-auto">
                <a href="index.php" class="btn btn-default">
                    <span class="glyphicon glyphicon-arrow-left"></span> Back
                </a>
            </div>
        </div>

        <div class="songs-container">
            <?php if (empty($songs)): ?>
                <div class="text-center empty-state">
                    <span class="glyphicon glyphicon-music" style="font-size: 5rem"></span>
                    <h3>No songs yet</h3>
                </div>
            <?php else: ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="40"></th>
                                <th>Title</th>
                                <th>Artist</th>
                                <th>Album</th>
                                <th width="150"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($songs as $index => $song): ?>
                            <tr class="song-row">
                                <td><?= $index + 1 ?></td>
                                <td><?= $song['title'] ?></td>
                                <td><?= $song['artist'] ?></td>
                                <td><?= $song['album'] ?></td>
                                <td>
                                <div class="song-actions">
                                    <a href="edit_song.php?id=<?= $song['id'] ?>&playlist_id=<?= $playlist_id ?>" 
                                    class="btn btn-sm btn-outline-primary">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                    <a href="delete_song.php?id=<?= $song['id'] ?>&playlist_id=<?= $playlist_id ?>" 
                                    class="btn btn-sm btn-outline-danger">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
