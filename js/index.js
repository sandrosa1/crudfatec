const URL_BASEC ='http://localhost/endPoint/comentario.php/';
const URL_BASEU ='http://localhost/endPoint/usuario.php/';


function excluirComentario(obj){
    id = obj.id;
    valida = obj.value;
 
     if(valida == 1)
    {
        excluirCom(id);

    }else{
        excluirCom("error");
    }

    
}

function excluirCom(obj)
{

    //CarregandoLoading()
    swal({
        title: `Deseja excluir o Comentario?`,
        text: 'Ação irreversivel!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, tenho certeza!',
        cancelButtonText: 'Cancelar...'
        })
        .then((result) => { if (result.value) 
        { 
            fetch(URL_BASEC +obj,{
                method:'DELETE'
            })
            .then(response => response.json())
            .then(json => swal(json.mensagem ))
            .catch(erro =>  console.log(erro))
            .finally( final => window.location.reload())  
        }
    })
    .catch(erro =>  console.log(erro))  
    
}   

function excluirUsuario(obj){
    id= obj.id;
    usuario = obj.value;
   
     if(id == usuario)
    {
        console.log(id);
        console.log(usuario);     
        excluirUsu(id);
    }else{
        excluirUsu("error");

    }
   
    
}

function excluirUsu(obj)
{


   swal({
       title: `Deseja excluir o Usuario?`,
       text: 'Ação irreversivel!',
       type: 'warning',
       showCancelButton: true,
       confirmButtonColor: '#3085d6',
       cancelButtonColor: '#d33',
       confirmButtonText: 'Sim, tenho certeza!',
       cancelButtonText: 'Cancelar...'
       })
       .then((result) => { if (result.value) 
       { 
           fetch(URL_BASEU +obj,{
               method:'DELETE'
           })
           .then(response => response.json())
           .then(json => swal(json.mensagem ))
           .catch(erro =>  console.log(erro))
           .finally( final => window.location.reload())  
       }
   })
   .catch(erro =>  console.log(erro))  
}   
