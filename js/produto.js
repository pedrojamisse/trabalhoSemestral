$(document).ready(function () {  
    var funcao;
    carregar_laboratorio();
    carregar_apresentacao();
    carregar_tipo();
    carregar_produto();


   $('#gradarProduto').click(function (event){
    let nomepro = $('#nomepro').val();
    let consentracao = $('#concentracao').val();
    let preco = $('#preco').val();
    let adicionarpro = $('#adicionarpro').val();
    let tipo = $('#tipo').val();
    let laboratorio = $('#laboratorio').val();
    let apresentacao = $('#presentacao').val();
    
   console.log(nomepro)
    console.log(consentracao)
    console.log(preco)
    console.log(adicionarpro)
    console.log(tipo)
    console.log(laboratorio)
    console.log(apresentacao)
    funcao = 'guardar';
    $.post('../controller/produtoController.php',{nomepro,consentracao,preco,adicionarpro,tipo,laboratorio,apresentacao,funcao},(Response)=>{
console.log(Response);
    });


   })
   function carregar_laboratorio() {
    funcao = "carregar_laboratorio";
    $.post('../controller/laboratorioController.php',{funcao},(Response)=>{
        const listaLaboratorio = JSON.parse(Response);
        console.log(listaLaboratorio);
          let templete='';
          listaLaboratorio.forEach(laboratorio => {
              templete +=`
          <option value="${laboratorio.id}">${laboratorio.nome}</option>
              
              `;
          });
          $('#laboratorio').html(templete);    
    });

   }
 

   
   function carregar_tipo() {
    funcao = "carregar_tipo";
    $.post('../controller/tipoController.php',{funcao},(Response)=>{
        const listaTipo = JSON.parse(Response);
        console.log(listaTipo);
          let templete='';
          listaTipo.forEach(tipo => {
              templete +=`
          <option value="${tipo.id}">${tipo.nome}</option>
              
              `;
          });
          $('#tipo').html(templete);    
    });

   }
   function carregar_apresentacao() {
    funcao = "carregar_apresentacao";
    $.post('../controller/apresentacaoController.php',{funcao},(Response)=>{
        const listaApresentacao = JSON.parse(Response);
        console.log(listaApresentacao);
          let templete='';
          listaApresentacao.forEach(apresentacao => {
              templete +=`
              <option value="${apresentacao.id}" >${apresentacao.nome}</option>
              
              `;
          });
          $('#presentacao').html(templete);    
    });

   }

   function buscar_produto(consulta) {
    funcao='buscar_produto';
    $.post('../controller/produtoController.php',{consulta, funcao },(response)=> {
      const listaProduto = JSON.parse(response);
        console.log(listaProduto);
          let templete='';
          listaProduto.forEach(produto => {
              templete +=`
              <tr labid=${produto.id}>
              <td>${produto.nome}</td>
              <td>${produto.concentracao}</td>
              <td>${produto.adicional}</td>
              <td>${produto.preco}</td>
              <td>${produto.stock}</td>
              <td>${produto.laboratorio}</td>
              <td>${produto.tipo}</td>
              <td>${produto.apresentacao}</td>
              <td><button class="editar btn btn-info" title="Editar laboratorio"><i class="fas fa-pencil-alt"></i></button>
              <button class="deletar btn btn-danger" title="deletar"><i class="fas fa-trash-alt"></i></button>
              </td>
              </tr>
              
              `;
          });
          $('#tabelaProduto').html(templete);

    })
  }
  function carregar_produto() {
    funcao ='carregar_produto';
    $.post('../controller/produtoController.php',{ funcao },(response)=>{
        const listaProduto = JSON.parse(response);
        console.log(listaProduto);
          let templete='';
          listaProduto.forEach(produto => {
              templete +=`
              <tr labid=${produto.id}>
              <td>${produto.nome}</td>
              <td>${produto.concentracao}</td>
              <td>${produto.adicional}</td>
              <td>${produto.preco}</td>
              <td>${produto.stock}</td>
              <td>${produto.laboratorio}</td>
              <td>${produto.tipo}</td>
              <td>${produto.apresentacao}</td>
              <td><button class="editar btn btn-info" title="Editar laboratorio"><i class="fas fa-pencil-alt"></i></button>
              <button class="deletar btn btn-danger" title="deletar"><i class="fas fa-trash-alt"></i></button>
              </td>
              </tr>
              
              `;
          });
          $('#tabelaProduto').html(templete);
    })
  }
  $(document).on('keyup','#buscar',function(){
    let valor = $(this).val();
    if(valor!=""){
       buscar_produto(valor);
    }else{
        buscar_produto();
    }
});
});