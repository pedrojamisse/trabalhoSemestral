$(document).ready(function(){
    buscar_dados();
    var funcao;
    function buscar_dados(consulta) {
        funcao='buscar_dados';
        $.post('../controller/usuarioController.php',{funcao,consulta},(Response)=>{
            const listaUsuario = JSON.parse(Response);
          console.log(listaUsuario);
            let templete='';
        listaUsuario.forEach(usuario => {
                templete +=`
                <tr>
                <td>${usuario.nome}</td>
                <td>${usuario.nome}</td>
                <td>${usuario.nome}</td>
                <td>${usuario.nome}</td>
                <td>${usuario.nome}</td>
                </tr>
                <button class="btn btn-info"><i class="far fa-image"></i></button>

                `;
            });
            $('#tabelaUsuario').html(templete);
        })
    }
    $(document).on('keyup','#buscar',function(){
        let valor = $(this).val();
        if(valor!=""){
           buscar_dados(valor);
        }else{
            buscar_dados();
        }
    });
});