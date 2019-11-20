$(document).ready(function(){
    function exibirDesafios(){

    var url = window.location.href;
    var idx = url.indexOf("recicle");
    var user = url.substring(idx).split("/")[1]; //tipo de usuario = user_criadordesafio
    var data_action = "meus-desafios";

        $.ajax({
            url:"http://localhost/recicle/desafios/index",
            method:"POST",
            data:{data_action, user_id, user},
            success:function(data)
            {
            $('#desafios').html(data);
            }
        });
    }

    exibirDesafios();
});
