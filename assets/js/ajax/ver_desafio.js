$(document).ready(function(){
    function exibirDesafio()
    {
        var url = window.location.href;
        var idx = url.indexOf("desafio");
        var desafio = url.substring(idx).split("/")[1];

        $.ajax({
            url:"http://localhost/recicle/desafios/ver_desafio",
            method:"POST",
            data:{id_desafio:desafio},
            success:function(data)
            {
                $('#desafio').html(data);
            }
        });
    }
    exibirDesafio();
});