$(window).on('load',function(){

    //imprimir categorias
    let ruta_categorias='api/interfaces/categorias.php';
    fetch(ruta_categorias)
    .then(response=>response.json())
    .then(response=>{

        for(let i=0; i<response.length;i++)
        $('.categorias').append(`
        <div class="btn btn-success categoria m-2"><h4>${response[i].nombre}</h4></div>
        
        `);
        
    })





    //abrir cerrar categorias
    $('.category').on('click',function(){

        

        if($('.categorias').hasClass('d-none')){
            
            document.querySelector('.title-categorias').innerHTML="Cerrar categorias";

        }else{
            
            document.querySelector('.title-categorias').innerHTML="Ver categorias";

        }

        $('.categorias').toggleClass('d-none');
    })
})