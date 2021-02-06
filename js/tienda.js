$(window).on('load',function(){

    //imprimir categorias
    let ruta_categorias='api/interfaces/categorias.php';
    fetch(ruta_categorias)
    .then(response=>response.json())
    .then(response=>{

        for(let i=0; i<response.length;i++)
        $('.categorias').append(`
        <a href="tienda.php#${response[i].nombre}" class="btn btn-success btn-block m-3 categoria pb-5"><h4>${response[i].nombre}</h4></a>
        
        `);
        
    });

        //imprimir categorias fijas
        let ruta_categorias2='api/interfaces/categoriasfijas.php';
        fetch(ruta_categorias2)
        .then(response=>response.json())
        .then(response=>{
            console.log(response);
            for(let i=0; i<response.length;i++)
            $('.categorias').prepend(`
            <a href="tienda.php#${response[i].nombre}" class="btn btn-success btn-block m-3 categoria pb-5"><h4>${response[i].nombre}</h4></a>
            
            `);
            
        });
    





    //abrir cerrar categorias
    $('.category').on('click',function(){

        

        if($('.categorias').hasClass('d-none')){
            
            document.querySelector('.title-categorias').innerHTML="Cerrar categorias";

        }else{
            
            document.querySelector('.title-categorias').innerHTML="Ver categorias";

        }

        $('.categorias').toggleClass('d-none');
    });

    $('.btn-cerrar').on('click',function(){

        $('.manta').remove();
    });

  
    console.log($('.contra-entrega')[0].attributes[1].value);

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
        console.log(contador);

        
    },5660);


    $('.carrito').on('click',function(){

        $('.elcarrito').toggleClass('d-none');
    })
});