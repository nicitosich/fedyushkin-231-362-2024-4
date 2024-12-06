<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <?php $title = "Федюшкин Никита, группа 231-362, Лабораторная работа №4"; ?>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Меню (навигация) -->
    <header>
        <?php
        $menu = [
            ["href" => "index.php", "text" => "Главная", "class" => "current-page"],
            ["href" => "", "text" => "Новости", "class" => ""],
            ["href" => "", "text" => "Информация", "class" => ""],
            ["href" => "https://mospolytech.ru/", "text" => "Перейти на действующий сайт", "class" => ""],
            ["href" => "auth.php", "text" => "Авторизация", "class" => ""]
        ];
        ?>
        <nav>
            <?php foreach ($menu as $item): ?>
                <a href="<?= $item['href']; ?>" class="<?= $item['class']; ?>"><?= $item['text']; ?></a>
            <?php endforeach; ?>
        </nav>
    </header>

    <!-- Основное содержимое -->
    <main>
        <h1 class="handjet-unique">Добро пожаловать на сайт с информацией об московском политехе</h1>

        <!-- Изображение, меняющееся по четности секунды -->
        <?php
        $image = (date("s") % 2 == 0) ? "1.png" : "1.jpeg";
        ?>
        <img class="content-image" src="<?= $image; ?>" alt="Фотография">

        <h2 class="pacifico-regular">Узнайте информацию об некоторых направлениях ФИТ-а ниже</h2>

        <!-- Таблица направлений -->
        <div class="table-container">
            <h2 class="pacifico-regular">Направления ФИТ-а</h2>
            <?php
            $directions = [
                ["code" => "09.03.01", "name" => "Информатика и вычислительная техника", "duration" => "очно - 4 года, заочно - 5 лет"],
                ["code" => "10.03.01", "name" => "Информационная безопасность", "duration" => "очно - 4 года"],
                ["code" => "09.03.03", "name" => "Прикладная информатика", "duration" => "очно - 4 года"],
                ["code" => "09.03.02", "name" => "Информационные системы и технологии", "duration" => "очно - 4 года, заочно - 5 лет"]
            ];
            ?>
            <table>
                <tr>
                    <th>Код</th>
                    <th>Наименование направления</th>
                    <th>Срок обучения</th>
                </tr>
                <?php foreach ($directions as $direction): ?>
                    <tr>
                        <td><?= $direction['code']; ?></td>
                        <td><?= $direction['name']; ?></td>
                        <td><?= $direction['duration']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        
        <h3>Форма обратной связи</h3>
<form action="home.php" method="POST" enctype="multipart/form-data">
    <label for="name">ФИО:</label>
    <input type="text" id="name" name="name" required value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>"><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"><br>

    <p>Откуда узнали о нас:</p>
    <input type="radio" id="social_media" name="source" value="social_media" <?php echo (isset($_POST['source']) && $_POST['source'] == 'social_media') ? 'checked' : ''; ?>>
    <label for="social_media">Социальные сети</label><br>

    <input type="radio" id="friends" name="source" value="friends" <?php echo (isset($_POST['source']) && $_POST['source'] == 'friends') ? 'checked' : ''; ?>>
    <label for="friends">От друзей</label><br>

    <input type="radio" id="other" name="source" value="other" <?php echo (isset($_POST['source']) && $_POST['source'] == 'other') ? 'checked' : ''; ?>>
    <label for="other">Другое</label><br>

    <label for="type">Тип обращения:</label>
    <select id="type" name="type">
        <option value="complaint">Жалоба</option>
        <option value="suggestion">Предложение</option>
    </select><br>

    <label for="message">Текст сообщения:</label><br>
    <textarea id="message" name="message" rows="6" cols="40" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea><br>

    <label for="attachment">Вложения:</label>
    <input type="file" id="attachment" name="attachment"><br>

    <input type="checkbox" id="consent" name="consent" required>
    <label for="consent">Даю согласие на обработку персональных данных</label><br>

    <input type="submit" value="Отправить">
</form>
    </main>
    
    <!-- Футер -->
    <footer>
        <p>Контактные данные: Mospolytech@yandex.ru | +7 (123) 123‒45‒67</p>
        <p>&copy; 2024. Все права защищены.</p>
        <p>Сформировано <?= date("d.m.Y в H:i:s"); ?></p>
    </footer>

</body>
</html>