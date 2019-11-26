$(document).ready(function(e){
  $(document).on('submit', '#add_desafio', function(event){
    event.preventDefault();

    var data;
    if($('#semDataLimite').is(':checked')) {
      data = null;
    }
    else {
      data = $('#data-limite').val();
    }

    var dadosDesafio = {
      titulo : $('#titulo').val(),
      descricao : $('#descricao').val(),
      idCriadorDesafio : user_id,
      idTipoBonificacao : $('#bonificacao').val(),
      idTipoRSU : $('#rsu').val(),
      qtdRSU : $('#qtdRSU').val(),
      descricaoBonificacao : $('#descricaoBonificacao').val(),
      dataLimite : data
    };

    $.ajax({
      url:"http://localhost/recicle/desafios/insert",
      method:"POST",
      data:dadosDesafio,
      dataType:"JSON",
      success:function(data)
      {
        if(data.success)
        {
          location.href = "http://localhost/recicle/user_criadordesafio/desafios";
        }

        if(data.error)
        {
          $('#alert').html("<div class='alert alert-danger' role='alert'>" + data['msg_erro'] + "</div>");
        }
      }
    })
  })
});