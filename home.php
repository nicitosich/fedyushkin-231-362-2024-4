<?php
// Проверка, что форма отправлена методом POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);
    $source = htmlspecialchars($_POST['source']);

    // Проверка, прикреплен ли файл
    $fileName = '';
    if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] == 0) {
        $fileName = htmlspecialchars(basename($_FILES['attachment']['name']));
    }
} else {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ответ на обращение</title>
</head>
<body>

<h2>Ваше обращение отправлено!</h2>
<p><strong>ФИО:</strong> <?= $name; ?></p>
<p><strong>Текст обращения:</strong> <?= $message; ?></p>
<p><strong>Откуда узнали:</strong> <?= $source; ?></p>

<?php if ($fileName): ?>
    <p><strong>Прикрепленный файл:</strong> <?= $fileName; ?></p>
<?php else: ?>
    <p><strong>Прикрепленный файл:</strong> Нет</p>
<?php endif; ?>

<!-- Кнопка для повторного заполнения формы -->
<form action="index.php" method="post">
    <input type="hidden" name="name" value="<?= htmlspecialchars($name); ?>">
    <input type="hidden" name="email" value="<?= htmlspecialchars($_POST['email']); ?>">
    <input type="hidden" name="source" value="<?= htmlspecialchars($source); ?>">
    <input type="hidden" name="message" value="<?= htmlspecialchars($message); ?>">
    <input type="submit" value="Заполнить снова">
</form>

</body>
</html>