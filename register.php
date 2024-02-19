<!DOCTYPE html>
<html lang="ru" data-theme="light">



<?php  include_once __DIR__ . '/components/head.php' ?>
<?php  include_once __DIR__ . '/src/helpers.php' ?>



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
            value="<?php echo old('name'); ?>"
            <?php validationErrorAttr('name'); ?>

        >
        <?php if(hasValidationError('name')) : ?>

        <small><?php validationErrorMessage('name'); ?></small>

        <?php endif; ?>
    </label>

    <label for="email">
        E-mail
        <input
            type="email"
            id="email"
            name="email"
            placeholder="admin@admin.com"
            value="<?php echo old('email'); ?>"
            <?php validationErrorAttr('email'); ?>
        >
        <?php if(hasValidationError('email')) : ?>

            <small><?php validationErrorMessage('email'); ?></small>

        <?php endif; ?>
    </label>

    <label for="avatar">Изображение профиля
        <input
            type="file"
            id="avatar"
            name="avatar"
            <?php validationErrorAttr('avatar'); ?>
        >
        <?php if(hasValidationError('avatar')) : ?>

            <small><?php validationErrorMessage('avatar'); ?></small>

        <?php endif; ?>
    </label>

    <div class="grid">
        <label for="password">
            Пароль
            <input
                type="password"
                id="password"
                name="password"
                placeholder="******"
                <?php validationErrorAttr('password'); ?>
            >
            <?php if(hasValidationError('password')) : ?>

               <small><?php validationErrorMessage('password'); ?></small>

            <?php endif; ?>
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
