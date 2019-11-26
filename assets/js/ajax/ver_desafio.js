$(document).ready(function(){
    function exibirDesafio()
    {
        var url = window.location.href;
        var idx = url.indexOf("desafio");
        var desafio;

        var url2 = window.location.href;
        var idx2 = url2.indexOf("recicle");
        var tipo_user = url2.substring(idx2).split("/")[1];

        if (tipo_user == 'user_cidadao' || tipo_user == 'user_public') {
            desafio = url.substring(idx).split("/")[1];
        }
        if (tipo_user == 'user_criadordesafio') {
            desafio = url.substring(idx).split("/")[2];
        }

        $.ajax({
            url:"http://localhost/recicle/desafios/ver_desafio",
            method:"POST",
            data:{id_desafio:desafio, user: tipo_user},
            success:function(data)
            {
                $('#desafio').html(data);
            }
        });
    }
    exibirDesafio();
});