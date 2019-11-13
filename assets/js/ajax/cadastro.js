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
            location.href = "http://localhost/recicle/user_cidadao/index";
          }
  
          if(data.error)
          {
            $('#alerta').html("<div class='alert alert-danger' role='alert'>" + data['msg_erro'] + "</div>");
          }
        }
      })
    });
});