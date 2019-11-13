$(document).ready(function(){
  function exibirDesafios(){
    $.ajax({
      url:"http://localhost/recicle/desafios/index",
      method:"POST",
      data:{data_action:"all"},
      success:function(data)
      {
        $('#desafios').html(data);
      }
    });
  }
  exibirDesafios();
});