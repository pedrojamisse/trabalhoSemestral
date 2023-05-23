$(document).ready(function () {  
    var funcao;
    buscar_tipo();
    $('#submitTipo').click(function (event) {
      
     let nome_tipo = $('#nome-tipo').val();
        console.log(nome_tipo);
      
        funcao = 'guardar';
      
        $.post('../controller/tipoController.php',{ nome_tipo, funcao },(response)=> {
          console.log(response); 
          if (response === 'adicionado') {
              $('#add-Tipo').hide('slow');
              $('#add-Tipo').show(1000);
              $('#add-Tipo').hide(2000);
              $('#add-Tipo').trigger('reset');
              buscar_tipo();
            } else {
              $('#noadd-Tipo').hide('slow');
              $('#noadd-Tipo').show(1000);
              $('#noadd-Tipo').hide(2000);
              $('#noadd-Tipo').trigger('reset');
            }
          }
        );
      });
      function buscar_tipo(consulta) {
        funcao='buscar_tipo';
        $.post('../controller/tipoController.php',{ consulta, funcao },(response)=> {
          const listaTipo = JSON.parse(response);
          console.log(listaTipo);
            let templete='';
            listaTipo.forEach(tipo => {
                templete +=`
                <tr labid=${tipo.pk_tipo}>
                <td>${tipo.nome}</td>
                <td><button class="editar btn btn-info" title="Editar laboratorio"><i class="fas fa-pencil-alt"></i></button>
                <button class="deletar btn btn-danger" title="deletar"><i class="fas fa-trash-alt"></i></button>
                </td>
                </tr>
                
                `;
            });
            $('#tabelaTipo').html(templete);
        })
      }
      $(document).on('keyup','#buscar-tipo',function(){
        let valor = $(this).val();
        if(valor!=""){
          buscar_tipo(valor);
        }else{
          buscar_tipo();
        }
    });
      });
  
  