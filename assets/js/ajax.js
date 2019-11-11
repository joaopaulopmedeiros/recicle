function idCidadao() {
  document.getElementById('lblDoc').innerHTML = 'CPF';
}

function idCriadorDesafio() {
  document.getElementById('lblDoc').innerHTML = 'CPF ou CNPJ';
}

$(document).ready(function(){
  /* FORMULÁRIO DE CADASTRO */
  $(document).on('submit', '#user_form', function(event){
    event.preventDefault();
    var user = "";

    if ($('#btnCidadao').is(':checked')) {
      user = "cidadao";
    }
    else if ($('#btnCriadorDesafio').is(":checked")) {
      user = "criador";
    }

    var dataUser = {
      nome : $('#nome').val(),
      login : $('#email').val(),
      doc : $('#doc').val(),
      cep : $('#cep').val(),
      senha : $('#senha').val(),
      confirmarSenha : $('#confirmarSenha').val(),
      user_type : user 
    };

    $.ajax({
      url:"http://localhost/recicle/cadastro/index",
      method:"POST",
      data:dataUser,
      dataType:"json",
      success:function(data)
      {
        if(data.success)
        {
          location.href = "http://localhost/recicle/user_cidadao/index";
        }

        if(data.error)
        {
          $('#alerta').html("<div class='alert alert-danger' role='alert'>" + data['msg_erro'] + "</div>");
        }
      }
    })
  });

  /* LOGIN */
  $(document).on('submit', '#user_login', function(event){
    event.preventDefault();

    var dataLogin = {
      login : $('#lemail').val(),
      senha : $('#lsenha').val()
    };

    $.ajax({
      url:"http://localhost/recicle/login/index",
      method:"POST",
      data:dataLogin,
      dataType:"json",
      success:function(data)
      {
        if(data.success)
        {
          var token = data['Token'];

          function redirectPost()
          {
            var form = document.createElement('form');
            document.body.appendChild(form);
            form.method = 'post';
            form.action = 'http://localhost/recicle/sessao/decode';
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'token';
            input.value = token;
            form.appendChild(input);
            form.submit();
            document.body.removeChild(form);
          }
          
          redirectPost();
        }

        if(data.error)
        {
          $('#alert').html("<div class='alert alert-danger' role='alert'>" + data['erro'] + "</div>");
        }
      }
    })
  })

  /* ADICIONAR DESAFIO */
  $(document).on('submit', '#add_desafio', function(event){
    event.preventDefault();

    var data;

    if($('#semDataLimite').is(':checked'))
    {
      data = null;
    }
    else
    {
      data = $('#data-limite').val();
    }

    var dadosDesafio = {
      titulo : $('#titulo').val(),
      descricao : $('#descricao').val(),
      idCriadorDesafio : $('#user_id').val(),
      idTipoBonificacao : $('#bonificacao').val(),
      idTipoRSU : $('#rsu').val(),
      qtdRSU : $('#qtdRSU').val(),
      descricaoBonificacao : $('#descricaoBonificacao').val(),
      dataLimite : data,
      img : $('#img-desafio').val()
    };

    $.ajax({
      url:"http://localhost/recicle/desafios/insert",
      method:"POST",
      data:dadosDesafio,
      dataType:"json",
      success:function(data)
      {
        console.log(dadosDesafio.img);
        if(data.success)
        {
          console.log("deu certo!!!!!!!!!!!!!");
          //location.href = "http://localhost/recicle/user_criadordesafio/desafios";
        }

        if(data.error)
        {
          console.log("deu ruim krai");
          $('#alert').html("<div class='alert alert-danger' role='alert'>" + data['msg_erro'] + "</div>");
        }
      }
    })
  })

  /* FUNÇÃO PARA EXIBIR OS TIPOS DE RSU CADASTRADOS */
  function exibirTiposDeRSU(){
    $.ajax({
      url:"http://localhost/recicle/rsu/index",
      method:"POST",
      success:function(data)
      {
        $('#rsu').html(data);
      }
    });
  }
  exibirTiposDeRSU();

  /* FUNÇÃO PARA EXIBIR AS BONIFICAÇÕES CADASTRADAS */
  function exibirBonificacoes(){
    $.ajax({
      url:"http://localhost/recicle/bonificacao/index",
      method:"POST",
      success:function(data)
      {
        $('#bonificacao').html(data);
      }
    });
  }
  exibirBonificacoes();

  /* ADICIONAR TIPO DE RSU */
  $(document).on('submit', '#form_rsu', function(event){
    event.preventDefault();

    var dataRSU = {
      tipo : $('#tipoRSU').val()
    };

    $.ajax({
      url:"http://localhost/recicle/rsu/insert",
      method:"POST",
      data:dataRSU,
      dataType:"json",
      success:function(data)
      {
        if(data.success)
        {
          $('#form_rsu')[0].reset();
          $('#alert-rsu').empty();
          $('#ModalRSU').modal('hide');
          exibirTiposDeRSU();
          $('#alert').html("<div class='alert alert-success alert-dismissible fade show' role='alert'>Tipo de resíduo cadastrado com sucesso!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
        }

        if(data.error)
        {
          $('#alert-rsu').html("<div class='alert alert-danger' role='alert'>" + data['msg_erro'] + "</div>");
        }
      }
    })
  })

  /* ADICIONAR BONIFICAÇÃO */
  $(document).on('submit', '#form_bonificacao', function(event){
    event.preventDefault();

    var dataBonificacao = {
      nome : $('#tipoBonificacao').val()
    };

    $.ajax({
      url:"http://localhost/recicle/bonificacao/insert",
      method:"POST",
      data:dataBonificacao,
      dataType:"json",
      success:function(data)
      {
        if(data.success)
        {
          $('#form_bonificacao')[0].reset();
          $('#alert-bonificacao').empty();
          $('#ModalBonificacao').modal('hide');
          exibirBonificacoes();
          $('#alert').html("<div class='alert alert-success alert-dismissible fade show' role='alert'>Bonificação cadastrada com sucesso!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
        }

        if(data.error)
        {
          $('#alert-bonificacao').html("<div class='alert alert-danger' role='alert'>" + data['msg_erro'] + "</div>");
        }
      }
    })
  })
});
