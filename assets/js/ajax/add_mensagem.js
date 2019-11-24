$(document).ready(function(e){
    $(document).on('submit', '#add_mensagem', function(event){
      event.preventDefault();
  
      var dadosMensagem = {
        nome : $('#nome').val(),
        sobrenome : $('#sobrenome').val(),
        email : $('#email').val(),
        assunto : $('#assunto').val(),
        mensagem : $('#mensagem').val()
      };
  
      $.ajax({
        url:"http://localhost/recicle/contato/insert",
        method:"POST",
        data:dadosMensagem,
        dataType:"JSON",
        success:function(data)
        {
          if(data.success)
          {
            $('#alert').html("<div class='alert alert-success alert-dismissible fade show' role='alert'>Mensagem enviada com sucesso!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
            $('#add_mensagem')[0].reset();
          }
  
          if(data.error)
          {
            $('#alert').html("<div class='alert alert-danger' role='alert'>" + data['msg_erro'] + "</div>");
          }
        }
      })
    })
});