<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты - LudumLabs</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400..900&family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <section class="contact-section">
        <h2>Контакты</h2>
        <p>Наши контакты и местоположение.</p>

        <div class="contact-content">
            <div class="contact-info">
                <h3>Наш офис</h3>
                <p>Москва, ул. Примерная, 1, ПК клуб "Геймер".</p>
                <p>Часы работы: с 10:00 до 18:00, пн-пт.</p>
                <p>Телефон: +7 (123) 456-78-90</p>
            </div>

            <div class="map-container">
                <h3>Наши координаты</h3>
                <div class="map-frame">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36668.285014464636!2d37.40139516645056!3d54.942091670596426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4135111fb46fcf13%3A0xc2e80cdaa5cacf5b!2sPlayHub!5e0!3m2!1sru!2sru!4v1734288702883!5m2!1sru!2sru"
                            width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>

