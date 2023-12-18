function submitForm() {
    // Получаем данные из формы
    var input1Value = document.getElementById("input1").value;
    var input2Value = document.getElementById("input2").value;

    // Создаем объект FormData для отправки данных формы
    var formData = new FormData();
    formData.append("input1", input1Value);
    formData.append("input2", input2Value);

    // Создаем AJAX запрос
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Обработка успешного ответа от сервера
                console.log(xhr.responseText);
            } else {
                // Обработка ошибки
                console.error('Произошла ошибка при отправке данных');
            }
        }
    };

    // Открываем соединение и отправляем запрос методом POST на указанный серверный обработчик
    xhr.open('POST', 'server-side-script.php'); // Замените 'server-side-script.php' на ваш серверный обработчик
    xhr.send(formData);
}