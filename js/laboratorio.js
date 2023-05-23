$(document).ready(function () {  
  var funcao;
  buscar_lab();
  $('#submit').click(function (event) {
    
   let nome_lab = $('#nome-lab').val();
      console.log(nome_lab);
    
      funcao = 'guardar';
    
      $.post('../controller/laboratorioController.php',{ nome_lab, funcao },(response)=> {
        console.log(response); 
        if (response === 'adicionado') {
            $('#add-laboratorio').hide('slow');
            $('#add-laboratorio').show(1000);
            $('#add-laboratorio').hide(2000);
            $('#add-laboratorio').trigger('reset');
            buscar_lab();
          } else {
            $('#noadd-laboratorio').hide('slow');
            $('#noadd-laboratorio').show(1000);
            $('#noadd-laboratorio').hide(2000);
            $('#noadd-laboratorio').trigger('reset');
          }
        }
      );
    });
    function buscar_lab(consulta) {
      funcao='buscar_laboratorio';
      $.post('../controller/laboratorioController.php',{ consulta, funcao },(response)=> {
        const listaLaboratorio = JSON.parse(response);
        console.log(listaLaboratorio);
          let templete='';
          listaLaboratorio.forEach(laboratorio => {
              templete +=`
              <tr labid=${laboratorio.pk_id}>
              <td>${laboratorio.nome}</td>
              <td><button class="editar btn btn-info" title="Editar laboratorio"><i class="fas fa-pencil-alt"></i></button>
              <button class="deletar btn btn-danger" title="deletar"><i class="fas fa-trash-alt"></i></button>
              </td>
              </tr>
              
              `;
          });
          $('#tabelaLaboratorio').html(templete);
      })
    }
    $(document).on('keyup','#buscar-laboratorio',function(){
      let valor = $(this).val();
      if(valor!=""){
        buscar_lab(valor);
      }else{
        buscar_lab();
      }
  });
    });

