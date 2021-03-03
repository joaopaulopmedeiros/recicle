function resgatarPremio(idDesafioAceito)
{
    status = 1;
    $.ajax({
        url:"http://localhost/recicle/desafios/resgatar_premio",
        method:"POST",
        data:{idDesafioAceito, status},
        dataType:"JSON",
        success:function(data){
            if (data.success) {
                $('#ModalResgatarPremio').modal('hide');
                $('#botao').html('<p class="mb-0"><a href="#" onclick="adicionarDesafio()" class="btn btn-green py-2 px-5">Quero participar novamente!</a></p>');
            }
        }
    });
}