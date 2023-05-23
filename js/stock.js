$(document).ready(function () {  
    var funcao;
   buscar_for();
    carregar_produto();
    carregar_stock();
    $('#guardarStock').click(function (event){
   
    let produto = $('#produto').val();
    let fornecedor = $('#fornecedor').val();
    let stock = $('#stock').val();
    let lote = $('#lote').val();
    let data = $('#data').val();
    
    console.log(produto)
    console.log(fornecedor)
    console.log(stock)
    console.log(lote)
    console.log(data)
   
    funcao = 'guardar';
    $.post('../controller/stockController.php',{produto,fornecedor,stock,lote,data,funcao},(Response)=>{
console.log(Response);
    });


   })
   function buscar_for() {
    funcao='buscar_fornecedor';
    $.post('../controller/fornecedorController.php',{ funcao },(response)=> {
      const listaFornecedor = JSON.parse(response);
      console.log(listaFornecedor);
        let templete='';
        listaFornecedor.forEach(fornecedor => {
            templete +=`
            <option value='${fornecedor.id}'>${fornecedor.nome}</option>
            `;
        });
        $('#fornecedor').html(templete);
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
              <option value='${produto.id}'>${produto.nome},${produto.concentracao}</option>
              
              `;
          });
          $('#produto').html(templete);
    })
  }
  
  function carregar_stock() {
    funcao ='carregar_stock';
    $.post('../controller/stockController.php',{ funcao },(response)=>{
        const listaStrock = JSON.parse(response);
        console.log(listaStrock);
          let templete='';
          listaStrock.forEach(stock => {
              templete +=`
              <tr labid=${stock.id}>
              <td>${stock.stock}</td>
              <td>${stock.validade}</td>
              <td>${stock.lote}</td>
              <td>${stock.fornecedor}</td>
              <td>${stock.produto}</td>
              <td><button class="editar btn btn-info" title="Editar laboratorio"><i class="fas fa-pencil-alt"></i></button>
              <button class="deletar btn btn-danger" title="deletar"><i class="fas fa-trash-alt"></i></button>
              </td>
              </tr>
              `;
          });
          $('#tabelaStock').html(templete);
    })
  }
});