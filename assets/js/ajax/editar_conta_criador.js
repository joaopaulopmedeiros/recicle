function exibirInformacoes()
{
    $(document).ready(function(){
        var data_user = {
            docCadastrado : id_user
        };

        $.ajax({
            url:"http://localhost/recicle/criador_desafio/index",
            method:"POST",
            data:data_user,
            dataType:"json",
            success:function(data)
            {
                $('#nome').val(data.nome);
                $('#email').val(data.login);
                $('#doc').val(data.docCadastrado);
                $('#cep').val(data.cep);
                $('#senha').val(data.senha);
            }
        });
    });
}
exibirInformacoes();

$(document).ready(function(){
    $(document).on('submit', '#editar_conta', function(event){
        event.preventDefault();

        var dataUser = {
            nome : $('#nome').val(),
            login : $('#email').val(),
            email_user : email_user,
            docCadastrado : $('#doc').val(),
            cep : $('#cep').val(),
            senha : $('#senha').val()
        };

        $.ajax({
            url:"http://localhost/recicle/criador_desafio/update",
            method:"POST",
            data:dataUser,
            dataType:"json",
            success:function(data)
            {
                if(data.success)
                {
                    fecharForm();
                    $('#alerta').html("<div class='alert alert-success' role='alert'>Os dados foram salvos com sucesso!</div>");
                }
                if(data.error)
                {
                    $('#alerta').html("<div class='alert alert-danger' role='alert'>" + data['msg_erro'] + "</div>");
                }
            }
        })
    });
});