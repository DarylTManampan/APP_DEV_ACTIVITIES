<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['playlist_id'])) {
    $playlist_id = (int) $_POST['playlist_id'];

    $pdo->prepare("DELETE FROM songs WHERE playlist_id = ?")->execute([$playlist_id]);
    $pdo->prepare("DELETE FROM playlists WHERE id = ?")->execute([$playlist_id]);

    header("Location: index.php");
    exit;
}

