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
        }
      });
      $.ajax({
        url:"http://localhost/recicle/criador_desafio/fetch_all",
        method:"POST",
        success:function(data)
        {
          $('#ecoponto').html(data);
        }
      });
    }
    
    function enviar(){
    
      $(document).submit(function(){

        var dataFiltro = {
          idTipoRSU : $('#lixo').val(),
          idTipoBonificacao : $('#bonificacao').val(),
          idCriadorDesafio : $('#ecoponto').val()
        };
        
        console.log(dataFiltro);

        return false;
      });
      
      
    }

   exibirDadosCamposFiltro();
   enviar();
    
   /*$(document).on('submit', '#filtro', function(event)
   { 
      event.preventDefault();

      var dataFiltro = {
        idTipoRSU : $('#lixo').val(),
        idTipoBonificacao : $('#bonificacao').val(),
        idCriadorDesafio : $('#ecoponto').val(),
      };
      $('#filtro')[0].reset();
      
      $.ajax({
        url:"http://localhost/recicle/filtro/index",
        method:"POST",
        data:dataFiltro,
        dataType:"json",
        success:function(data)
        {
          $('#filtro')[0].reset();
          exibirDadosCamposFiltro();
          $('#alert').html("<div class='alert alert-success alert-dismissible fade show' role='alert'>filtrado com sucesso!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
          
        }
      })
 
   });*/

});
