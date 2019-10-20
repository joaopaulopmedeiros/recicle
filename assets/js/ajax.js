function idCidadao() {
    document.getElementById('lblDoc').innerHTML = 'CPF';
}

function idCriadorDesafio() {
    document.getElementById('lblDoc').innerHTML = 'CPF ou CNPJ';
}

$(document).ready(function(){
    $(document).on('submit', '#user_form', function(event){
    
      var url = "";
      if ($('#btnCidadao').is(':checked')) {
        url = "http://localhost/recicle/user_cidadao/cadastrar";
      }
      else if ($('#btnCriadorDesafio').is(":checked")) {
        url = "http://localhost/recicle/user_criadordesafio/cadastrar";
      }

      var dataUser = {
        nome : $('#nome').val(),
        login : $('#email').val(),
        doc : $('#doc').val(),
        cep : $('#cep').val(),
        senha : $('#senha').val()
      };

       $.ajax({
            url:url,
            method:"POST",
            data:dataUser,
            dataType:"json",
            success:function(data)
            {
              if(data.success)
              {
                console.log("deu certo :D");
              }

              if(data.error)
              {
                console.log("deu errado :(");
              }
            }
        })
    });
});