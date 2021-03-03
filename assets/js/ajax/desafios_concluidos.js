$(document).ready(function(){
  function exibirDesafiosConcluidos(){
      $.ajax({
          url:"http://localhost/recicle/desafiosconcluidos/index",
          method:"POST",
          data:{id_user},
          success:function(data)
          {
              $('#desafios-finalizados').html(data);
          }
      });
  }
  exibirDesafiosConcluidos();
});