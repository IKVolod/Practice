<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримання та фільтрація даних з форми
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $details = htmlspecialchars($_POST['details']);

    // Формування безпечної назви файлу
    $timestamp = date("Y-m-d_H-i-s");

    $filename = "{$name}_{$email}_{$timestamp}.txt";

    // Формування вмісту файлу
    $data = "Ім'я: $name\nEmail: $email\nДеталі: $details\n\n";

    // Збереження даних у файл
    if (file_put_contents($filename, $data, LOCK_EX)) {
        echo "Дані успішно збережено у файл $filename.";
    } else {
        echo "Сталася помилка під час збереження даних.";
    }
} else {
    echo "Неправильний метод запиту.";
}
?>
