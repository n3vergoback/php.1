<?php
require_once 'core/db.php';
$connection = db_connect();
$query = db_selectOne($connection, $_GET['id']);
?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<div class="card mt-3 mx-3 border-primary" style="height: 800px; width: 350px;">
    <?php if ($query[0]['image'] == 'images/'): ?>
        <img src="images/noimage.jpg" class="card-img-top" style="height: 280px; width: 350px;">
    <?php else: ?>
        <img src="<?= $query[0]['image'] ?>" class="card-img-top" style="height: 280px; width: 350px;">
    <?php endif; ?>
    <div class="card-body">
        <div class="card-title" style="text-align: center"><h2><?= $query[0]['username'] ?></h2></div>
        <hr>
        <div class="card-text">
            <h3>Электронная почта: <?= $query[0]['email'] ?></h3>
            <h3>Операционная система: <?= $query[0]['os'] ?: 'Missing' ?></h3>
            <h3>Навыки: <?= $query[0]['skills'] ?: 'Missing' ?></h3>
            <h3>Пол: <?= ('sex' == 'male') ? 'Мужской' : 'Женский' ?></h3>
            <?php if (strlen($query[0]['aboutys']) > 50): ?>
                <h3>О себе: <?= substr($query[0]['aboutys'], 0, 50) . '...' ?: 'Missing' ?></h3>
            <?php else: ?>
                <h3>О себе: <?= $query[0]['aboutys'] ?></h3>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
