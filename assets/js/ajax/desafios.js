$(document).ready(function(){
  function exibirDesafios()
  {
    var url = window.location.href;
    var idx = url.indexOf("recicle");
    var tipo_user = url.substring(idx).split("/")[1];

    $.ajax({
      url:"http://localhost/recicle/desafios/index",
      method:"POST",
      data:{data_action:"all", user: tipo_user},
      success:function(data)
      {
        $('#desafios').html(data);
      }
    });
  }
  exibirDesafios();
});