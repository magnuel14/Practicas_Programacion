$(function(){
$('#btn').click(function(){
    $.ajax({
        url:'https://materiales.canela.me/json_jquery/',
        type: 'POST',
        dataType:'JSON',
        success: function(data){
            var canciones='<ul>';
            for (i=0;i<data.length; i++){

                canciones += '<li>' + data[i].autor 
+ '<img src="'+ data[i].portada
+'" width="90"/>' +'</li>'; 
               
            }
            canciones+='</ul>'
            $('#salida').html(canciones);
        }
    })

});

});