var token = '';
$(function () {
    $('#btn_usuarios').click(function () {
        $.ajax({
            url: "http://localhost:8000/usuarios/all",
            type: 'GET',
            dataType: 'JSON',
            success: function (data) {
                console.log(data);
                var lista = '<ul>';
                for (i = 0; i < data.length; i++) {
                    lista += '<li>' + data[i].username + '</li>';
                    lista += '<li>' + data[i].email + '</li>';
                    lista += '<li>' + data[i].api_token + '</li>';

                }
                lista += '</ul>';
                $('#salida').html(lista);
            }

        });

    });
});
function api() {
    $('#btn_usuarios').click(function () {
        $.ajax({
            url: "http://localhost:8000/usuarios/all",
            type: 'GET',
            dataType: 'JSON',
            success: function (data) {
                console.log(data);
                for (i = 0; i < data.length; i++) {


                }
                return token;

            }


        });

    });
    console.log(token);
}
var token="I1bsG4JFe0lnwZ9DB36qd1XbA3dBS3OtcW23wTwz2gdePkGNyrCt4jLMCiwZUpxOh0zsWvZVrC9hoW1biH1B6nlRAn8YvkkJ6nK6CQez5CmhFcLILILVEGPfWWOHUjOZNiENGkGj2kMZL2D2UTMMKL";
localStorage.setItem('I1bsG4JFe0lnwZ9DB36qd1XbA3dBS3OtcW23wTwz2gdePkGNyrCt4jLMCiwZUpxOh0zsWvZVrC9hoW1biH1B6nlRAn8YvkkJ6nK6CQez5CmhFcLILILVEGPfWWOHUjOZNiENGkGj2kMZL2D2UTMMKL',token)

$(function () {

    $('#btn').click(function () {
        
        $.ajax({
            url: "http://localhost:8000/cancion/getCancionesCodigo/1412",
            type: 'GET',
            contentType: "application/json",
            headers:{"Access-Control-Allow-Headers":'Content-Type, Authorization, X-Requested-With,api_token  ',

            },
           
         
            dataType: 'JSON',
            success: function (data) {
                console.log(data);
                var lista = '<ul>';
                for (i = 0; i < data.length; i++) {
                    lista += '<li>' + data[i].nombres +"&nbsp;"+data[i].apellidos +'</li>';
                    lista += '<li>' + data[i].nombre + '</li>';
                    lista += '<li>' + data[i].tipoCancion + '</li>';

                }
                lista += '</ul>';
                $('#salidax').html(lista);
            }

        });

    });
});








