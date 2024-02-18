"use strict";


$('#add').on('submit', function (e) {
    e.preventDefault();
    var data = $(this).serialize();

    $.ajax({
        type: 'POST',
        url: 'function.php',
        data: data,
        success: function(response) {
            var result = JSON.parse(response); // Предполагаем, что ответ приходит в формате JSON
            if (result.status === "Ok!") {
                $('#add')[0].reset(); // Сброс формы
                
                // Установка имени пользователя в модальное окно и его отображение
                $("#newUserName").text(result.name);
                $('#successModal').modal('show');
            }
        },
        error: function(error) {
            console.log('Error:', error);
        }
    });
});

// Перенаправление при закрытии модального окна
$('#successModal').on('hidden.bs.modal', function () {
    window.location.href = 'index.php';
});
