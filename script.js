"use strict";


$('#add').on('submit', function (e) {
    e.preventDefault();
    var data = $(this).serialize();

    $.ajax({
        type: 'POST',
        url: 'function.php',
        data: data,
        success: function(response) {
            console.log('Success:', response);
            $('#add')[0].reset(); // Сброс формы
            $('#successModal').modal('show'); // Показать модальное окно
        },
        error: function(error) {
            console.log('Error:', error);
        }
    });
});
