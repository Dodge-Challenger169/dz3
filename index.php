<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LudumLabs</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400..900&family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="main-content">
        <section class="hero-section">
            <div class="hero-container">
                <div class="hero-image">
                    <img src="images/1.png" alt="Разработка игр">
                </div>
                <div class="hero-text">
                    <h1>Добро пожаловать в LudumLabs</h1>
                    <p>
                        Откройте для себя мир разработки игр вместе с LudumLabs. 
                        Мы предоставляем ресурсы, инструменты и уроки для воплощения ваших идей в реальность, 
                        будь вы новичок или профессионал. Давайте создавать что-то невероятное вместе!
                    </p>
                    <a href="#" class="hero-button" id="open-modal">Отправить заявку</a>
                </div>
            </div>
        </section>
    </div>

    <div id="application-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>Оставить заявку на разработку игры</h2>
            <form id="application-form" method="post" action="submit_application.php">
                <label for="name">Ваше имя:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Ваш email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="game-idea">Описание вашей идеи:</label>
                <textarea id="game-idea" name="game_idea" rows="4" required></textarea>
                
                <button type="submit" class="submit-btn">Отправить</button>
            </form>
            <div id="form-message" style="display: none; margin-top: 20px;"></div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="script.js"></script>
</body>
</html>
