$(document).ready(function(){
  function exibirDesafios()
  {
    var url = window.location.href;
    var idx = url.indexOf("recicle");
    var tipo_user = url.substring(idx).split("/")[1];

    var url2 = window.location.href;
    var idx2 = url2.indexOf(tipo_user);
    var page = url2.substring(idx2).split("/")[1];

    var url_controller;

    if (page === 'index') {
      url_controller = "http://localhost/recicle/desafios/showRecentChallenges";
    }
    else if (page === 'desafios') {
      url_controller = "http://localhost/recicle/desafios/index"
    }

    $.ajax({
      url: url_controller,
      method:"POST",
      data:{data_action: 'all', user: tipo_user},
      success:function(data)
      {
        $('#desafios').html(data);
      }
    });
  }
  exibirDesafios();
});