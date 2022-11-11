$('#callback').on('submit',function(event){
    event.preventDefault();

    let currency = $('#currency').val();
    let Code = $('#Code').val();
    let email = $('#email').val();
    let bank = $('#bank').val();

    $.ajax({
        url: "aboutstore",
        type:"POST",
        data:{
            "_token": "{{ csrf_token() }}",
            currency:currency,
            Code:Code,
            email:email,
            bank:bank
        },
        success:function(response){
            console.log(response);
        },
    });
});
// window.onload = function () { // Событие страница загружена
//     sendRequest(); // Вызываем функцию с ajax запросом
// }
// $('#callback').on('submit',function() {
//     event.preventDefault();
//     sendRequest();
// });
//
//     let currency = $('#currency').val();
//     let Code = $('#Code').val();
//     let email = $('#email').val();
//     let bank = $('#bank').val();
// function sendRequest(){
//     let request = new XMLHttpRequest(); // Создаём объект запроса
//
//     request.open('GET', '/callback'); // Указываем куда отправить запрос
//     request.send(); // Выполняем отправку
//
//     request.onreadystatechange = function () { // Дожидаемся ответа
//         if (request.readyState == 4 && request.status == 200){// Делаем проверку если ответ получен и страница отдала код 200 (открылась)
//             let response = currency+Code+email+bank; // Получаем ответ как текст (включая html) и сохраням в переменную
//             console.log(response); // Выводим данные в консоль
//         }
//     }
// }
// console.log(sendRequest());
