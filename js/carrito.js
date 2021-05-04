'use strict'

//print spinner

const PrintSpinner = (container)=>{

  
    container.append(`

    <div class="p-2 d-flex justify-content-center">

        <div style="width: 5rem; height: 5rem;" class="spinner-border text-success" role="status">
            
            <span class="sr-only">Loading...</span>

        </div>
    </div>

    `);

}

//print first data
const PrintProducts = (container,data)=>{   

    //format price 
    const FormatMoney = ()=>{

        let format = new Intl.NumberFormat().format(parseInt(data.precio));

        return format;
    }
    
    

    container.append(`
    
        <div style="width:90%;margin-left:5%;box-shadow:0px 0px 5px black;" class="d-block mt-5 mb-5">

            <div class="p-2 d-flex justify-content-center bg-dark text-light">${data.nombre}</div>
            <img style="width:100%;" src="${data.img}">
            <hr style="width:90%;margin-left:5%;">
            <div class="p-2 d-flex justify-content-center ">$ ${FormatMoney()} pesos</div>
            <hr style="width:90%;margin-left:5%;">
            <div style="width:90%;margin-left:5%;" class="btn btn-warning btn-block">Añadir <i class="fas fa-cart-plus"></i></div>
            <br>


        </div>
    
    `);


}


const PrintCategorys = (container,data)=>{

    
    container.append(`
    
        <div style="width:90%;margin-left:5%;box-shadow:0px 0px 5px black;" class="d-block mt-5 mb-5">
            <div class="p-2 d-flex justify-content-center bg-dark text-light">${data.nombre}</div>
            <img style="width:100%;" src="${data.card}">
        </div>
    
    `);

}


// data must be a string if you nothing need send, else data must be an objet FormData(); 
const GetData = (path,data)=>{

    let query;

    if(data===""){

        query = fetch(path)
        .then(response=>response.json())
        .then(response=>{

            //console.log(response);
           return  response;       
        
        })

    }else{



    }

    return query;

}



//pull all products
$('.contenedor-productos').empty();
PrintSpinner($('.contenedor-productos'));

GetData("api/interfaces/productos.php","").then(response=>{

    //console.log(response);
    $('.contenedor-productos').empty();

    for(let i = 0;i<response.length;i++){

    
        PrintProducts($('.contenedor-productos'),response[i]);
    }

});




//pull all categorys
$('.contenedor-categorias').empty();
PrintSpinner($('.contenedor-categorias'));

GetData("api/interfaces/categorias.php","").then(response=>{

    //console.log(response);

    $('.contenedor-categorias').empty();

    for(let i = 0;i<response.length;i++){

    
        PrintCategorys($('.contenedor-categorias'),response[i]);
    }

})


$('.abrir-carrito').on('click',function(){

    $('.pantalla-carrito').toggleClass('d-none');
    
 
    $('.pantalla-carrito').empty();
    $('.pantalla-carrito').append(`

        <div class="d-flex justify-content-end abrir-carrito2 p-2"><span style="color:red;font-size:26px;"><i class="fas fa-window-close"></i></span></div>
        <br>
        
    
    `);

    $('.abrir-carrito2').on('click',function(){

        $('.pantalla-carrito').toggleClass('d-none');

    })

 

});