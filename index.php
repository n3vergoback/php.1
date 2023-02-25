<?php
require_once 'core/db.php';

?>
<head>
    <!--    <link rel="stylesheet" href="css/style.css">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<form method="post" action="add_form.php" class="forms" enctype="multipart/form-data">
    <div class="container col-3 ">
        <div class="card text-center">
            <div class="card-header"><h2>Свяжитесь с нами</h2></div>
            <div class="card-body">
                <label for="name"><h5>Имя пользователя: </h5></label>
                <input class="form-control" type="text" name="name" required></p>
                <label for="email"><h5>Email: </h5></label>
                <input class="form-control" type="email" name="email" placeholder="example@email.com" required></p>
                <div class="mb-3">
                    <div class="mb-3">
                        <h5>Ваш пол:</h5>
                        <input class="form-check-input" type="radio" name="sex" value="male" checked>
                        <label for="sex">Мужской</label>
                        <input class="form-check-input" type="radio" name="sex" value="female">
                        <label for="sex">Женский</label>
                    </div>
                        <h5>Ваша ОС:</h5>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="os">
                        <option value="windows" selected>Windows</option>
                        <option value="macos">MacOS</option>
                        <option value="linux">Linux</option>
                    </select>
                        <h5>Ваши навыки:</h5>
                        <input class="form-check-input mx-2" type="checkbox" name="php">PHP
                        <input class="form-check-input mx-2" type="checkbox" name="mysql">MySQL
                        <input class="form-check-input mx-2" type="checkbox" name="js">JS
                        <input class="form-check-input mx-2" type="checkbox" name="git">Git
                </div>
                <label for="info"><h5>Расскажите о себе:</h5></label>
                <textarea class="form-control mb-3" name="info" id="info" cols="50" rows="5" required></textarea>
                <input class="btn btn-danger" type="reset">
                <button class="btn btn-primary" onclick="sentSuccess()">Подтвердить</button>
            </div>
            Ваше фото: <input type="file" name="image">
        </div>
        <a href="home.php">Список всех пользователей</a>
    </div>
</form>


<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
