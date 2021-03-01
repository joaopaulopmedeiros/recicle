function exibirInformacoes()
{
    $(document).ready(function(){
        var data_user = {
            docCadastrado : id_user
        };
        
        $.ajax({
            url:"http://localhost/recicle/cidadao/index",
            method:"POST",
            data:data_user,
            dataType:"json",
            success:function(data)
            {
                console.log('oi');
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

function alterarDadosSessao(dataUser)
{
    $(document).ready(function(){
        $.ajax({
            url:"http://localhost/recicle/sessao/editsession",
            method:"POST",
            data:dataUser
        })
    });
}

$(document).ready(function(){
    $(document).on('submit', '#editar_conta', function(event){
        event.preventDefault();

        var dataUser = {
            nome : $('#nome').val(),
            login : $('#email').val(),
            email_user : email_user,
            docCadastrado : $('#doc').val(),
            cep : $('#cep').val(),
            senha : $('#senha').val(),
            tipo_user : 'cidadao'
        };

        $.ajax({
            url:"http://localhost/recicle/cidadao/update",
            method:"POST",
            data:dataUser,
            dataType:"json",
            success:function(data)
            {
                if(data.success)
                {
                    alterarDadosSessao(dataUser);
                    fecharForm();
                    $('#alerta').html("<div class='alert alert-green' role='alert'>Os dados foram salvos com sucesso!</div>");
                    exibirInformacoes();
                }
                if(data.error)
                {
                    $('#alerta').html("<div class='alert alert-red' role='alert'>" + data['msg_erro'] + "</div>");
                }
            }
        })
    });
});