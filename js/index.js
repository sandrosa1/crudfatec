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





function editarComentario(obj){
   

   nome = obj.id;
   id =obj.value;
   console.log(logado);
   console.log(nome);
    if(logado == nome){
        
        (async () => {

            const { value: text } = await Swal.fire({
              input: 'textarea',
              inputLabel: 'Editar comentario',
              inputPlaceholder: 'Type your message here...',
              inputAttributes: {
                'aria-label': 'Type your message here'
              },
              showCancelButton: true
            })
            
            if (text) {
              Swal.fire(text)
              
              setTimeout(function(){ editarCom(text,id); }, 1500);
            }
            
        })()
    }
    
}

function editarCom(text,id)
{
  
    fetch(URL_BASEC,
    {
        method :'PUT',
        body:'id='+id+'&comentario='+text,
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        }
    })
    .then(response => response.json())
    .then(json => retorno(json.mensagem))
    .catch(erro =>  console.log(erro))
    .finally( final => retorno())


}   

function retorno(){

    Swal.fire({

        position: 'top-end',
        icon: 'success',
        title: 'Sucesso',
        showConfirmButton: false,
        timer: 1500
      })
      setTimeout(function(){ window.reload(); }, 1500);
}