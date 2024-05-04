(function($){
    $("#form-login").submit(function(e){
        $("#alert").html("");
        $.ajax({
            url: 'login/validate',
            type: 'POST',
            data: $(this).serialize(),
            success: function(data){
                let json = JSON.parse(data);
                console.log(json);
            },
            statusCode: {
                400: function(xhr){
                    if(xhr.status == 400){
                        $("#email > input").removeClass('is-invalid');
                        $("#password > input").removeClass('is-invalid');
                        let json = JSON.parse(xhr.responseText);
                        if(json.email.length != 0){
                            $("#email > div").html(json.email);
                            $("#email > input").addClass('is-invalid');
                        }
                        if(json.password.length != 0){
                            $("#password > div").html(json.password);
                            $("#password > input").addClass('is-invalid');
                        }
                    } 
                },
                401: function(xhr){
                    let json = JSON.parse(xhr.responseText);
                    $("#alert").html('<div class="alert alert-danger" role="alert">' + json.msg + '</div>');
                }
            },
        });
        e.preventDefault();
    });
})(jQuery)