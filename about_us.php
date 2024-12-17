<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>О нас | LudumLabs</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400..900&family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
</head>
<body>
    <main class="about-container">
        <div class="about-header">
            <h1>О нас</h1>
            <p>Где идеи превращаются в увлекательные игровые миры</p>
        </div>

        <div class="about-content">
            <div class="about-text">
                <h2>Мы создаем будущее</h2>
                <p>
                    Добро пожаловать в <strong>LudumLabs</strong> — студию, где креативность и технологии объединяются для создания уникальных игровых проектов. 
                    Мы команда разработчиков, дизайнеров и мечтателей, стремящихся вдохновлять игроков по всему миру.
                </p>
                <p>
                    Наша цель — не просто создавать игры, а дарить эмоции. От идеи до финального релиза, мы вкладываем в каждый проект страсть и инновации.
                </p>
            </div>
            <div class="about-image">
                <img src="images/2.jpg" alt="LudumLabs Team">
            </div>
        </div>

        <section class="team-section">
    <h2>Наша команда</h2>
    <p>Знакомьтесь с профессионалами, создающими магию</p>
    <div class="team-grid">
        <div class="team-member">
            <div class="image" style="background-image: url('images/prog1.jpg');"></div>
            <div class="content">
                <h3>Александр Костылев</h3>
                <span>Геймдизайнер</span>
            </div>
        </div>

        <div class="team-member">
            <div class="image" style="background-image: url('images/prog2.jpeg');"></div>
            <div class="content">
                <h3>Мирослав Колпаков</h3>
                <span>Программист</span>
            </div>
        </div>

        <div class="team-member">
            <div class="image" style="background-image: url('images/prog3.jpg');"></div>
            <div class="content">
                <h3>Антон Шкредов</h3>
                <span>3D-художник</span>
            </div>
        </div>

        <div class="team-member">
            <div class="image" style="background-image: url('images/prog4.jpg');"></div>
            <div class="content">
                <h3>Илья Осипов</h3>
                <span>Сценарист</span>
            </div>
        </div>
    </div>
</section>

    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
