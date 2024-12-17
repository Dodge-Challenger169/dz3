<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin.php');
    exit();
}

include 'db_connection.php';

$result = $conn->query("SELECT * FROM applications ORDER BY submission_date DESC");
?>

<h1>Поступившие заявки</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Email</th>
            <th>Идея</th>
            <th>Дата отправки</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['game_idea']; ?></td>
                <td><?php echo $row['submission_date']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<a href="logout.php">Выйти</a>
