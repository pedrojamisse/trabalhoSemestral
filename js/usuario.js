$(document).ready(function() {
    var  funcao='';
    var edit=false;
    const pkUsuario = document.querySelector('#pk_usuario').value;
    const modal = document.getElementById('criarUsuario');
   
        buscar(pkUsuario);
    function buscar(dados) {
        funcao='buscar';
     
        $.post("../controller/usuarioController.php",{dados,funcao},(Response)=>{
           
            let id_usuario ='';
                let nome ='';
                let apelido ='';
                let idade ='';
                let user ='';
                let senha ='';
                let telefone ='';
                let residencia ='';
                let email ='';
                let sexo ='';
                let inf_adicional ='';
                let nome_us ='';
                const usuario =JSON.parse(Response);
                id_usuario +=`${usuario.id_usuario}`;
                nome +=`${usuario.nome}`;
                apelido +=`${usuario.apelido}`;
                idade +=`${usuario.idade}`;
                user +=`${usuario.user}`;
                senha +=`${usuario.senha}`;
                telefone +=`${usuario.telefone}`;
                residencia +=`${usuario.endereco}`;
                email +=`${usuario.email}`;
                sexo +=`${usuario.sexo}`;
                inf_adicional +=`${usuario.inf_adicional}`;
                nome_us +=`${usuario.tipo_us}`;
                $('#nome').html(nome);
                $('#apelido').html(apelido);
                $('#idade').html(idade);
                $('#user').html(user);
                $('#tipo_us').html(nome_us);
                $('#telefone').html(telefone);
                $('#endereco').html(residencia);
              
                $('#email').html(email);
                $('#sexo').html(sexo);
                $('#inf_adicional').html(inf_adicional);

        });
    }
    $(document).on('click','.editar',(e)=>{
        funcao='capturar_dados';

        edit=true;
        $.post("../controller/usuarioController.php",{funcao,pkUsuario},(Response)=>{
            const usuario = JSON.parse(Response);
       // Define os valores dos campos de entrada
    $('#FTelefone').val(usuario.telefone);
    $('#fEndereco').val(usuario.endereco);
    $('#fEmail').val(usuario.email);
    $('#fSexo').val(usuario.sexo);

        });     
    });
    $('#form-usuario').submit(e=>{
        e.preventDefault();
       if(edit==true){
            let telefone = $('#FTelefone').val();
            let endereco =  $('#fEndereco').val();
            let email = $('#fEmail').val();
            let sexo = $('#fSexo').val();
            let adicinal =$('#adcionar').val();
       
            funcao='editar';
            $.post("../controller/usuarioController.php",{pkUsuario,funcao,telefone,endereco,email,sexo,adicinal},(Response)=>{
            
                if(Response=='editado com sucesso'){
                    $('#editado').hide('slow');
                    $('#editado').show(1000);
                    $('#editado').hide(2000);
                    $('#form-usuario').trigger('reset');
                }
                edit=false;
                buscar(pkUsuario);
                

            })

       }else{
        $('#noeditado').hide('slow');
        $('#noeditado').show(1000);
        $('#noeditado').hide(2000);
        $('#form-usuario').trigger('reset');
      }
 
    });
    $(document).on('click','.criar',(e)=>{
      modal.show();
    });
    
})