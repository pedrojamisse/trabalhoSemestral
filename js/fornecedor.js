$(document).ready(function () {  
    var funcao;
    buscar_for();
    $('#guardar').click(function (event) {
      
     let nome_for = $('#nome').val();
     let telefone = $('#telefone').val();
     let endereco = $('#endereco').val();
     let pais = $('#pais').val();
    
        console.log(nome_for);
        console.log(telefone);
        console.log(endereco);
        console.log(pais);
      
        funcao = 'guardar';
      
        $.post('../controller/fornecedorController.php',{ nome_for,telefone,endereco,pais, funcao },(response)=> {
          console.log(response); 
          if (response === 'adicionado') {
              $('#add-fornecedor').hide('slow');
              $('#add-fornecedor').show(1000);
              $('#add-fornecedor').hide(2000);
              $('#add-fornecedor').trigger('reset');
              buscar_for();
            } else {
              $('#noadd-fornecedor').hide('slow');
              $('#noadd-fornecedor').show(1000);
              $('#noadd-fornecedor').hide(2000);
              $('#noadd-fornecedor').trigger('reset');
            }
          }
        );
      });
      function buscar_for(consulta) {
        funcao='buscar_fornecedor';
        $.post('../controller/fornecedorController.php',{ consulta, funcao },(response)=> {
          const listaFornecedor = JSON.parse(response);
          console.log(listaFornecedor);
            let templete='';
            listaFornecedor.forEach(fornecedor => {
                templete +=`
                <tr labid=${fornecedor.pk_id}>
                <td>${fornecedor.nome}</td>
                <td><button class="editar btn btn-info" title="Editar laboratorio"><i class="fas fa-pencil-alt"></i></button>
                <button class="deletar btn btn-danger" title="deletar"><i class="fas fa-trash-alt"></i></button>
                </td>
                </tr>
                
                `;
            });
            $('#tabelaFornecedor').html(templete);
        })
      }
      $(document).on('keyup','#buscar-fornecedor',function(){
        let valor = $(this).val();
        if(valor!=""){
          buscar_for(valor);
        }else{
          buscar_for();
        }
    });
      });
  
  