$(document).ready(function(){
  /* FUNÇÃO PARA EXIBIR OS TIPOS DE RSU CADASTRADOS */
  function exibirTiposDeRSU(){
    $.ajax({
      url:"http://localhost/recicle/rsu/index",
      method:"POST",
      success:function(data)
      {
        $('#rsu').html(data);
      }
    });
  }
  exibirTiposDeRSU();

  /* ADICIONAR TIPO DE RSU */
  $(document).on('submit', '#form_rsu', function(event){
    event.preventDefault();

    var dataRSU = {
      tipo : $('#tipoRSU').val()
    };

    $.ajax({
      url:"http://localhost/recicle/rsu/insert",
      method:"POST",
      data:dataRSU,
      dataType:"json",
      success:function(data)
      {
        if(data.success)
        {
          $('#form_rsu')[0].reset();
          $('#alert-rsu').empty();
          $('#ModalRSU').modal('hide');
          exibirTiposDeRSU();
          $('#alert').html("<div class='alert alert-green alert-dismissible fade show' role='alert'>Tipo de resíduo cadastrado com sucesso!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
        }

        if(data.error)
        {
          $('#alert-rsu').html("<div class='alert alert-red' role='alert'>" + data['msg_erro'] + "</div>");
        }
      }
    })
  })
});