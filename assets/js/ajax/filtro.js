$(document).ready(function(){
  function exibirDadosCamposFiltro()
  {
    $.ajax({
      url:"http://localhost/recicle/rsu/index",
      method:"POST",
      success:function(data)
      {
        $('#lixo').html(data);
      }
    });
    $.ajax({
      url:"http://localhost/recicle/bonificacao/index",
      method:"POST",
      success:function(data)
      {
        $('#bonificacao').html(data);
        $('#bonificacao').append('<option value="todos">Todos</option>');
      }
    });
    $.ajax({
      url:"http://localhost/recicle/criador_desafio/fetch_all",
      method:"POST",
      success:function(data)
      {
        $('#ecoponto').html(data);
        $('#ecoponto').append('<option value="todos">Todos</option>');
      }
    });
  }
  
  exibirDadosCamposFiltro();
  

  $(document).on('submit', '#filtro', function(event){ 
    event.preventDefault();

    var url = window.location.href;
    var idx = url.indexOf("recicle");
    var tipo_user = url.substring(idx).split("/")[1];

    var dataFiltro = {
      idTipoRSU : $('#lixo').val(),
      idTipoBonificacao : $('#bonificacao').val(),
      idCriadorDesafio : $('#ecoponto').val(),
      user : tipo_user
    };
    
    $.ajax({
      url:"http://localhost/recicle/filtro/index",
      method:"POST",
      data:dataFiltro,
      success:function(data)
      {
        $('#desafios-filtrados').html(data);
      }
    });
  });
});
