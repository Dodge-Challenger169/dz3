<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $gameIdea = htmlspecialchars($_POST['game_idea']);

    $stmt = $conn->prepare("INSERT INTO applications (name, email, game_idea) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $gameIdea);

    if ($stmt->execute()) {
        echo "Заявка успешно отправлена!";
    } else {
        echo "Ошибка при отправке заявки: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
