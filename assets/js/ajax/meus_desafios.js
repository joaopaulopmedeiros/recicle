$(document).ready(function(){
    function exibirDesafios(){
        var user = "<?= $this->session->criador['doc']?>";
        
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