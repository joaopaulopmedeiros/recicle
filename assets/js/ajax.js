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

    var dataDesafio = {
      nome : $('#nome').val(),
      login : $('#email').val(),
      doc : $('#doc').val(),
      cep : $('#cep').val(),
      senha : $('#senha').val(),
      confirmarSenha : $('#confirmarSenha').val(),
      user_type : user 
    };

    $.ajax({
      url:"http://localhost/recicle/desafios/insert",
      method:"POST",
      data:dataDesafio,
      dataType:"json",
      success:function(data)
      {
        if(data.success)
        {
          location.href = "http://localhost/recicle/user_criadordesafio/desafios";
        }

        if(data.error)
        {
          $('#alerta').html("<div class='alert alert-danger' role='alert'>" + data['msg_erro'] + "</div>");
        }
      }
    })
  })
});
