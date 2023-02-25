<?php
require_once 'core/db.php';
$connection = db_connect();
$query = db_select($connection);

?>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<h1>Заявки от пользователей</h1>
<div class="row">
        <?php foreach ($query as $i): ?>
    <div class="col-sm-4">
    <div class="card mt-3 mx-3 border-primary" style="height: 800px; width: 350px;">
                <?php if ($i['image'] == 'images/'): ?>
                    <img src="images/noimage.jpg" class="card-img-top" style="height: 280px; width: 350px;">
                <?php else: ?>
                    <img src="<?= $i['image'] ?>" class="card-img-top" style="height: 280px; width: 350px;">
                <?php endif; ?>
                <div class="card-body">
                    <div class="card-title" style="text-align: center"><h2><a href="user_application.php?id=<?=$i['id']?>"><?= $i['username'] ?></a></h2></div>
                    <hr>
                    <div class="card-text">
                        <h3>Электронная почта: <?= $i['email'] ?></h3>
                        <h3>Операционная система: <?= $i['os'] ?: 'Missing' ?></h3>
                        <h3>Навыки: <?= $i['skills'] ?: 'Missing' ?></h3>
                        <h3>Пол: <?= ($i['sex'] == 'male') ? 'Мужской' : 'Женский' ?></h3>
                        <?php if (strlen($i['aboutys']) > 50): ?>
                        <h3>О себе: <?= substr($i['aboutys'], 0, 50). '...' ?: 'Missing' ?></h3>
                        <?php else: ?>
                        <h3>О себе: <?= $i['aboutys']?></h3>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
    </div>
        <?php endforeach; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
