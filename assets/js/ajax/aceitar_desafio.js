function adicionarDesafio()
{
    $(document).ready(function(){
        $.ajax({
            url:"http://localhost/recicle/desafios/aceitar_desafio",
            method:"POST",
            data: {idCriadorDesafio,id_user,idTipoRSU,idTipoBonificacao,idDesafio},
            dataType:"JSON",
            success:function(data){
                $('#botao').html('<p class="mb-0"><a href="#" onclick="cancelarDesafio()" class="btn btn-red py-2 px-5">Não quero participar</a></p>');
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
                    $('#botao').html('<p class="mb-0"><a href="#" onclick="adicionarDesafio()" class="btn btn-green py-2 px-5">Aceitar o desafio</a></p>');
                }
            }
        });
    });
}