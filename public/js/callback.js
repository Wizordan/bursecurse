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
// window.onload = function () {
//     sendRequest();
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
//     let request = new XMLHttpRequest();
//
//     request.open('GET', '/callback');
//     request.send(); // Выполняем отправку
//
//     request.onreadystatechange = function () {
//         if (request.readyState == 4 && request.status == 200){
//             let response = currency+Code+email+bank;
//             console.log(response);
//         }
//     }
// }
// console.log(sendRequest());
