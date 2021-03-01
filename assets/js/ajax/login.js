$(document).ready(function(){
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
            $('#alert').html("<div class='alert alert-red' role='alert'>" + data['erro'] + "</div>");
          }
        }
      })
    })
});