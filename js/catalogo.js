$(document).ready(function() {
  $('#cat-compra').show();
carregar_produto();
    function carregar_produto() {
        funcao ='carregar_produto';
        $.post('../controller/produtoController.php',{ funcao },(response)=>{
            const listaProduto = JSON.parse(response);
            console.log(listaProduto);
              let templete='';
              listaProduto.forEach(produto => {
                  templete +=`
                  <div proId="${produto.id}" proStock="${produto.stock}" proNome="${produto.nome}" proPreco="${produto.preco}" proConcentracao="${produto.concentracao}" proAdd="${produto.adicional}" proLab="${produto.laboratorio}" proTipo="${produto.tipo}" proApre="${produto.apresentacao}" class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                      <div class="card-header text-muted border-bottom-0">
                        <i class="fas fa-lg fa-cubes mr-1"></i>${produto.stock}

                      </div>
                      <div class="card-body pt-0">
                        <div class="row">
                          <div class="col-7">
                            <h2 class="lead"><b>${produto.nome}</b></h2>
                            <h4 class ="lead"><b>${produto.preco}</b></h4>                    
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                              <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> concentracao: ${produto.concentracao}</li>
                              <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> adicionar: ${produto.adicional}</li>
                              <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> laboratorio: ${produto.laboratorio}</li>
                              <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Tipo: ${produto.tipo}</li>
                              <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Apresentacao: ${produto.apresentacao}</li>
                              </ul>
                          </div>
                          <div class="col-5 text-center">
                            <img src="" alt="user-avatar" class="img-circle img-fluid">
                          </div>
                        </div>
                      </div>
                      <div class="card-footer">
                        <div class="text-right">
                         
                          <button" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus-square"></i> adicionar carrinho
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
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
})