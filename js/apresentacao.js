$(document).ready(function () {  
    var funcao;
    buscar_apresenacao();
    $('#submitPresentacao').click(function (event) {
      
     let nome_apresentacao = $('#nome-presetancao').val();
        console.log(nome_apresentacao);
      
        funcao = 'guardar';
      
        $.post('../controller/apresentacaoController.php',{ nome_apresentacao, funcao },(response)=> {
          console.log(response); 
          if (response === 'adicionado') {
              $('#add-presetancao').hide('slow');
              $('#add-presetancao').show(1000);
              $('#add-presetancao').hide(2000);
              $('#add-presetancao').trigger('reset');
              buscar_apresenacao();
            } else {
              $('#noadd-presetancao').hide('slow');
              $('#noadd-presetancao').show(1000);
              $('#noadd-presetancao').hide(2000);
              $('#noadd-presetancao').trigger('reset');
            }
          }
        );
      });
      function buscar_apresenacao(consulta) {
        funcao='buscar_apresentacao';
        $.post('../controller/apresentacaoController.php',{ consulta, funcao },(response)=> {
          const listaApresentacao = JSON.parse(response);
          console.log(listaApresentacao);
            let templete='';
            listaApresentacao.forEach(apresentacao => {
                templete +=`
                <tr labid=${apresentacao.pk_apre}>
                <td>${apresentacao.nome}</td>
                <td><button class="editar btn btn-info" title="Editar laboratorio"><i class="fas fa-pencil-alt"></i></button>
                <button class="deletar btn btn-danger" title="deletar"><i class="fas fa-trash-alt"></i></button>
                </td>
                </tr>
                
                `;
            });
            $('#tabelaPresentacao').html(templete);
        })
      }
      $(document).on('keyup','#buscar-presentacao',function(){
        let valor = $(this).val();
        if(valor!=""){
          buscar_apresenacao(valor);
        }else{
          buscar_apresenacao();
        }
    });
      });
  
  