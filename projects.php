<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400..900&family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
    <title>Проекты | LudumLabs</title>
</head>
<body>
    <main class="projects-container">
        <h1>Наши проекты</h1>
        <div class="projects-grid">

            <div class="project-card">
                <img src="images/game1.jpeg" alt="Project 1">
                <h2>Valorant</h2>
                <p>Многопользовательская компьютерная игра в жанре шутер от первого лица. Изначально игра была анонсирована под названием Project A в октябре 2019 года, анонсирована уже под текущим названием 1 марта 2020 года и выпущена в глобальный релиз 2 июня 2020 года.</p>
                <a href="https://ru.wikipedia.org/wiki/Valorant" class="button">Подробнее</a>
            </div>

            <div class="project-card">
                <img src="images/game2.jpg" alt="Project 2">
                <h2>Dota 2</h2>
                <p>Многопользовательская командная компьютерная игра в жанре MOBA. Игра является продолжением DotA — пользовательской карты-модификации для игры Warcraft III: Reign of Chaos</p>
                <a href="https://ru.wikipedia.org/wiki/Dota_2" class="button">Подробнее</a>
            </div>

            <div class="project-card">
                <img src="images/game3.jpg" alt="Project 3">
                <h2>Detroit: Become Human</h2>
                <p>Приключенческая компьютерная игра с элементами «интерактивного кино» для PlayStation 4 в мае 2018 года; в декабре 2019 года игра была перевыпущена на Windows.</p>
                <a href="https://ru.wikipedia.org/wiki/Detroit:_Become_Human" class="button">Подробнее</a>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
