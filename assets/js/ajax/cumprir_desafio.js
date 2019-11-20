function cumprirDesafio(idDesafioAceito){
    status = 1;
    console.log(idDesafioAceito);
    $.ajax({
        url:"http://localhost/recicle/desafios/cumprir_desafio",
        method:"POST",
        data:{idDesafioAceito, status},
        success:function(data)
        {
        $('#desafio').html(data);
        }
    });
}
