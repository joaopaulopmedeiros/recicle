$(document).ready(function(){
    function exibirDesafio()
    {
        var url = window.location.href;
        var idx = url.indexOf("desafio");
        var desafio;

        if (tipo_user == 'cidadao') {
            desafio = url.substring(idx).split("/")[1];
        }
        if (tipo_user == 'criador') {
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