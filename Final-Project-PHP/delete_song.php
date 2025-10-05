<?php
include 'database.php';
$id = $_GET['id'];
$playlist_id = $_GET['playlist_id'];
$pdo->prepare("DELETE FROM songs WHERE id = ?")->execute([$id]);
header("Location: selected.php?id=$playlist_id");

