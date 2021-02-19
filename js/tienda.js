$(window).on('load',function(){

    //buscar-categorias
    $('.buscar-categoria').on('click',function(){

        $('.cont-categorias').empty();

        $('.all-category').removeClass('d-none');


        $('.cont-categorias').prepend(`
        
        <div style="width: 20rem; height: 20rem;" class="spinner-border text-success" role="status">
        <span class="sr-only">Loading...</span>
      </div>
        
        
        `);

        const busqueda = new FormData();

        busqueda.append('buscar',$('.buscador-categorias').val());


        let ruta_categorias='api/interfaces/buscar-categoria.php';
        fetch(ruta_categorias,{
            
            method: 'POST',
            body:busqueda

        })
        .then(response=>response.json())
        .then(response=>{
            
            setTimeout(() => {
                
                $('.cont-categorias').empty();

                for(let i=0;i<response.length;i++){

                    if(response[i].nombre===undefined){

                        $('.cont-categorias').append(`

                        <div class=" p-2  pt-5">
                        <div style="width: 350px; box-shadow:5px 5px 8px black;" class="titulo bg-light d-flex justify-content-center p-2"><h4>${response}</h4></div>
                      </div>
    
                        `);
                        break;
                       
                    }else{

                        $('.cont-categorias').append(`

                        <div  class=" p-2  pt-5">
                        <div style=" width: 300px; box-shadow:5px 5px 8px black;" class="titulo bg-light d-flex justify-content-center p-2"><h5>${response[i].nombre}</h5></div>
                        <a href="categoria.php?categoria=${response[i].nombre}"><img  src="${response[i].card}" alt="" style="box-shadow:5px 5px 8px black; background:white; width: 300px; height:150px;"></a>
                      </div>
    
                        `);

                    }



                }

                
            }, 1000);
           //console.log(response);
            
        });//fin fetch
    

    });//fin fucnion 


    //volver a ver todas las categorias

    $('.all-category').on('click',function(){

        $('.all-category').addClass('d-none');

        fetch('api/interfaces/categorias.php')
        .then(response=>response.json())
        .then(response=>{
            console.log(response);

            $('.cont-categorias').empty();

    
    
            $('.cont-categorias').prepend(`
            
            <div style="width: 20rem; height: 20rem;" class="spinner-border text-success" role="status">
            <span class="sr-only">Loading...</span>
          </div>
            
            
            `);

            setTimeout(()=>{

                $('.cont-categorias').empty();
                for(let i=0;i<response.length;i++){

                    $('.cont-categorias').append(`

                    <div  class=" p-2  pt-5">
                    <div style=" width:300px; box-shadow:5px 5px 8px black;" class="titulo bg-light d-flex justify-content-center p-2"><h5>${response[i].nombre}</h5></div>
                    <a href="categoria.php?categoria=${response[i].nombre}"><img  src="${response[i].card}" alt="" style="box-shadow:5px 5px 8px black; background:white; width:300px; height:150px;"></a>
                  </div>
    
                    `);

                }


            },1000)
        })


    })




    //banners principales
    //console.log($('.contra-entrega')[0].attributes[1].value);

    let banners=[
        
        'api/assets/img/Copia de Graphic Design Website Header Template.gif',
        'api/assets/img/banner-pagos.gif',
        'api/assets/img/banner-super-final.gif',
        
        'api/assets/img/categorias-mas.gif',
        'api/assets/img/Graphic Design Website Header Template.gif',
       
        'api/assets/img/banner-cannabis-fin.gif',
        'api/assets/img/banner-tienda.gif']

    let contador=0;
    console.log(banners.length-1);

    setInterval(() => {

        if(contador===0 || contador<(banners.length-1)){
            contador++
        }else if(contador===(banners.length-1)){

            contador=0;
        }

        $('.contra-entrega')[0].attributes[1].value=banners[contador];
        //console.log(contador);

        
    },5660);


    //carrito usuario registrado

    $('.carrito').on('click',function(){

        $('.elcarrito').toggleClass('d-none');
    })
});
