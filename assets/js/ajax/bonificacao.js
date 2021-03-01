$(document).ready(function(){
    /* FUNÇÃO PARA EXIBIR AS BONIFICAÇÕES CADASTRADAS */
    function exibirBonificacoes(){
        $.ajax({
        url:"http://localhost/recicle/bonificacao/index",
        method:"POST",
        success:function(data)
        {
            $('#bonificacao').html(data);
        }
        });
    }
    exibirBonificacoes();

    /* ADICIONAR BONIFICAÇÃO */
  $(document).on('submit', '#form_bonificacao', function(event){
    event.preventDefault();

    var dataBonificacao = {
      nome : $('#tipoBonificacao').val()
    };

    $.ajax({
      url:"http://localhost/recicle/bonificacao/insert",
      method:"POST",
      data:dataBonificacao,
      dataType:"json",
      success:function(data)
      {
        if(data.success)
        {
          $('#form_bonificacao')[0].reset();
          $('#alert-bonificacao').empty();
          $('#ModalBonificacao').modal('hide');
          exibirBonificacoes();
          $('#alert').html("<div class='alert alert-green alert-dismissible fade show' role='alert'>Bonificação cadastrada com sucesso!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
        }

        if(data.error)
        {
          $('#alert-bonificacao').html("<div class='alert alert-red' role='alert'>" + data['msg_erro'] + "</div>");
        }
      }
    })
  })
});