$(document).ready(function(){
    function exibirDesafios(){
        
        $.ajax({
            url:"http://localhost/recicle/desafiosaceitos/index",
            method:"POST",
            data:{data_action:"meus-desafios", id_user},
            success:function(data)
            {
            $('#desafios').html(data);
            console.log(id_user);
            }
        });
    }
    exibirDesafios();
});