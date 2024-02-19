<!DOCTYPE html>
<html lang="ru" data-theme="light">



<?php  include_once __DIR__ . '/components/head.php' ?>
<?php  include_once __DIR__ . '/src/helpers.php' ?>
<?php session_start(); $_SESSION['validation']=[]; ?>

<body>

<form class="card" action="src/actions/register.php" method="post" enctype="multipart/form-data">
    <h2>Регистрация</h2>

    <label for="name">
        Имя
        <input
            type="text"
            id="name"
            name="name"
            placeholder="Admin admin"
            <?php validationErrorAttr('name'); ?>

        >
        <?php if(hasValiddationError('name')) : ?>

        <smal><?php validationErrorMessage('name'); ?></smal>

        <?php endif; ?>
    </label>

    <label for="email">
        E-mail
        <input
            type="text"
            id="email"
            name="email"
            placeholder="admin@admin.com"
        >
    </label>

    <label for="avatar">Изображение профиля
        <input
            type="file"
            id="avatar"
            name="avatar"
        >
    </label>

    <div class="grid">
        <label for="password">
            Пароль
            <input
                type="password"
                id="password"
                name="password"
                placeholder="******"
            >
        </label>

        <label for="password_confirmation">
            Подтверждение
            <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                placeholder="******"
            >
        </label>
    </div>

    <fieldset>
        <label for="terms">
            <input
                type="checkbox"
                id="terms"
                name="terms"
            >
            Я принимаю все условия пользования
        </label>
    </fieldset>

    <button
        type="submit"
        id="submit"
        disabled
    >Продолжить</button>
</form>

<p>У меня уже есть <a href="index.php">аккаунт</a></p>

<?php include_once __DIR__ . "/components/scripts.php"?>
</body>
</html>
