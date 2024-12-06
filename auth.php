<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <?php $title = "Форма авторизации"; ?>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <?php
        $menu = [
            ["href" => "index.php", "text" => "Вернуться на главную", "class" => ""]
        ];
        ?>
        <nav>
            <?php foreach ($menu as $item): ?>
                <a href="<?= $item['href']; ?>" class="<?= $item['class']; ?>"><?= $item['text']; ?></a>
            <?php endforeach; ?>
        </nav>
    </header>

    <div class="auth-form-container">
        <form>
            <label for="login">Логин:</label>
            <input type="text" id="login" name="login" required><br>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required><br>

            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Запомнить меня</label><br>

            <input type="submit" value="Войти">
        </form>
    </div>
</body>
</html>