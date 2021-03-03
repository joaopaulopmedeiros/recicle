$(document).ready(function(){
    function exibirDesafios(){
        $.ajax({
            url:"http://localhost/recicle/desafiosaceitos/index",
            method:"POST",
            data:{id_user},
            success:function(data)
            {
                $('#desafios').html(data);
            }
        });
    }
    exibirDesafios();
});