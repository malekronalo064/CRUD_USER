<?php
require 'config.php';

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$stmt->execute([$id]);
$user = $stmt->fetch();

if (!$user) {
    throw new Exception('User not found');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Détails de cet utilisateur</h1>
        <div class="card">
            <div class="card-body">
                <p>ID: <?= $user['id'] ?></p>
                <p>Name: <?= $user['name'] ?></p>
                <p>Email: <?= $user['email'] ?></p>
                <p>Created At: <?= $user['created_at'] ?></p>
            </div>
        </div>
        <a href="index.php" class="btn btn-secondary mt-3">Retour</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="
