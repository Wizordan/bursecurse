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
