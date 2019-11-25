function cumprirDesafio(idDesafioAceito){
    status = 1;
    $.ajax({
        url:"http://localhost/recicle/desafios/cumprir_desafio",
        method:"POST",
        data:{idDesafioAceito, status},
        dataType:"JSON",
        success:function(data)
        {
            $('#btn-status-desafio').html('OK');
        }
    });
}
