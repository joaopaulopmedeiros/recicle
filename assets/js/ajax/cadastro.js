$(document).ready(function(){
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
            $('#alerta').html("<div class='alert alert-danger' role='alert'>" + data['msg_erro'] + "</div>");
          }
        }
      })
    });
});