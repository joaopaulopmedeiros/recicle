$(document).ready(function(){
    function exibirConcorrentesDesafios(){

        var url = window.location.href;
        var idx = url.indexOf("desafio");
        var desafio = url.substring(idx).split("/")[2];

        $.ajax({
            url:"http://localhost/recicle/desafios/ver_concorrentes_desafio",
            method:"POST",
            data:{idDesafio:desafio},
            success:function(data)
            {
            $('#desafio').html(data);
            }
        });
    }
    exibirConcorrentesDesafios();
});
