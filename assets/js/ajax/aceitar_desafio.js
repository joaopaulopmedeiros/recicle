function adicionarDesafio(){
    $.ajax({
        url:"http://localhost/recicle/desafios/ver_desafio",
        method:"POST",
        data:{x},
        success:function(data)
        {
         $('#desafio').html(data);
        }
    });
}