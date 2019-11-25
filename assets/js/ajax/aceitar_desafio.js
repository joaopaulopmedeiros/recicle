function adicionarDesafio()
{
    $(document).ready(function(){
        $.ajax({
            url:"http://localhost/recicle/desafios/aceitar_desafio",
            method:"POST",
            data: {idCriadorDesafio,id_user,idTipoRSU,idTipoBonificacao,idDesafio},
            dataType:"JSON",
            success:function(data){
                $('#botao').html('<p class="mb-0"><a onclick="cancelarDesafio()" class="btn btn-danger py-3 px-5 text-white">Não quero participar</a></p>');
            }
        });
    });
}

function cancelarDesafio()
{
    $(document).ready(function(){
        $.ajax({
            url:"http://localhost/recicle/desafios/cancelar_desafio",
            method:"POST",
            data:{id_user,idDesafio},
            dataType:"JSON",
            success:function(data){
                if (data.success) {
                    $('#botao').html('<p class="mb-0"><a onclick="adicionarDesafio()" class="btn btn-primary py-3 px-5 text-white">Aceitar desafio</a></p>');
                }
            }
        });
    });
}