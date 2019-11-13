$(document).ready(function(){
    function exibirDesafios(){
        var user = $('#doc').val();
        
        $.ajax({
            url:"http://localhost/recicle/desafios/index",
            method:"POST",
            data:{data_action:"meus-desafios", user_id:user},
            success:function(data)
            {
            $('#desafios').html(data);
            }
        });
    }
    exibirDesafios();
});