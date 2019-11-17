function adicionarDesafio(){
    
    var url = window.location.href;
    var idx = url.indexOf("desafio");
    var desafio = url.substring(idx).split("/")[1];

    var url2 = window.location.href;
    var idx2 = url2.indexOf("recicle");
    var tipo_user = url2.substring(idx2).split("/")[1];

    $.ajax({
        url:"http://localhost/recicle/desafios/ver_desafio",
        method:"POST",
        data:{id_desafio:desafio, user: tipo_user},
        dataType: "json",
        success:function(data){
            console.log("sucesso");
        }
    });

    $.ajax({
        url:"http://localhost/recicle/desafios/aceitar_desafio",
        method:"POST",
        data: {idCriadorDesafio,id_user,idTipoRSU,idTipoBonificacao,idDesafio},
        dataType: "json",
        success:function(data){
            console.log("sucesso");
        }
    });
}
