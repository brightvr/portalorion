'use strict'

//format price 
const FormatPrice = (price)=>{

    let format = new Intl.NumberFormat().format(parseInt(price));

    return format;
}


const PullDelivery = (path, data)=>{


    fetch(path,{

        method :'POST',
        body : data
    })
    .then(response=>response.json())
    .then(response=>{

        console.log(response);
        
        setTimeout(()=>{

            PrintDelivery($('.envio'),FormatPrice(response[0].precio3kg),response[1],response[2],response[3],response[4]);

            document.getElementById('destino-entrega').value=response[0].nombre_lugar;


        },500)
        

      
    })
    .catch(wrong=>{

       console.log(wrong);
    })


  
}


const Spinner  = (place)=>{

    place.empty();
    place.append(`
    <div class="p-2 d-flex justify-content-center">
    <div style="width: 5rem; height: 5rem;" class="spinner-border text-success" role="status">
        
        <span class="sr-only">Loading...</span>

    </div>
    </div>
    `);
}



//place must be jquery selector
const PrintDelivery = (place,price,delivery,time,text,pay)=>{

   
    place.empty();
    place.append(`
    <span style="color:#FFAA00">${delivery}<span style="color: green;" class="price-envio">$ ${price} pesos</span><br>
    <br> <div><i class="fas fa-hand-holding-usd"></i>${time}</div>
    <br> <div><i class="fas fa-credit-card"></i>${pay}</div>
    <br> <span style="color: green;"><i class="fas fa-truck"></i>${text} </span>
    `)

}

//cuantity and stock must be int
const MoreCuantity = (cuantity, stock)=>{

    console.log(cuantity)
    console.log(stock);


    if(stock===0){

        cuantity=0;

    }

    if(stock!==0 && cuantity<stock){

        cuantity++;
    }

    if(stock!==0 && cuantity===stock ){

        cuantity=stock;


    }

    return cuantity;
}

//cuantity and stock must be int
const LessCuantity = (cuantity, stock)=>{

    if(stock===0){

        cuantity=0;

    }

    if(stock!==0 && cuantity===stock){

        cuantity--;
    }

    if(stock!==0 && cuantity===0 ){

        cuantity=stock;


    }

    return cuantity;

}





//pull data envio first time
const data = new FormData();
data.append('envio',document.getElementsByClassName('destino')[0].value);
Spinner($('.envio'));
PullDelivery('api/interfaces/buscar-costo-envio.php',data);


//call pull data envio
$('.destino').on('change',function(){

    const data2 = new FormData();
    data2.append('envio',document.getElementsByClassName('destino')[0].value);
    Spinner($('.envio'));
    PullDelivery('api/interfaces/buscar-costo-envio.php',data2);

})



let less = document.querySelector('.menos');
let more = document.querySelector('.mas');
let cuantity = document.querySelector('.cantidad');
let stock = document.querySelector('.stock');


more.addEventListener('click',()=>{
    
    cuantity.value = MoreCuantity(parseInt(cuantity.value),parseInt(stock.value))

});

less.addEventListener('click',()=>{

    cuantity.value = LessCuantity(parseInt(cuantity.value),parseInt(stock.value))

});


//these are all controls of product's cards 

let inputProducts = document.getElementsByClassName('cantidad-1');
let btnMore = document.getElementsByClassName('mas-1');
let btnLess = document.getElementsByClassName('menos-1');
let stockProducts = document.getElementsByClassName('stock-1');
let cart = document.getElementsByClassName('add-carrito-1');
let idProduct = document.getElementsByClassName('id-product');


for(let k = 0;k<inputProducts.length;k++){


    btnMore[k].addEventListener('click',()=>{

      

        if(parseInt(inputProducts[k].value)<parseInt(stockProducts[k].value)){


            inputProducts[k].value=(parseInt(inputProducts[k].value)+1);

     

        }


        if(parseInt(inputProducts[k].value)===0 && stockProducts[k].value!==0){

            inputProducts[k].value=1;
        }



     if(parseInt(inputProducts[k].value)===stockProducts[k].value ){

            inputProducts[k].value=stockProducts[k].value;
        }

       
    });


    btnLess[k].addEventListener('click',()=>{

       // console.log(parseInt(inputProducts[k].value));

        if(parseInt(inputProducts[k].value)===parseInt(stockProducts[k].value) ){

            inputProducts[k].value=(parseInt(inputProducts[k].value)-1);

        }

        if(parseInt(inputProducts[k].value)>1 && parseInt(stockProducts[k].value)!==0  ){

            inputProducts[k].value=(parseInt(inputProducts[k].value)-1);

        }
        if(parseInt(inputProducts[k].value)===1 && parseInt(stockProducts[k].value)!==0  ){

            inputProducts[k].value=1;

        }
        if(parseInt(stockProducts[k].value)===0 ){

            inputProducts[k].value=0;

        }
        
        
        

       
    });


    cart[k].addEventListener('click',()=>{

        //console.log($('.type-user').val());

        if($('.type-user').val()==="desconocido"){

            $('.contenedor-msg').toggleClass('d-none');
        
        }else{

            

            if(parseInt(inputProducts[k].value)===0){

                $('#texto1').empty();
                $('#texto2').empty();

                $('#texto1').append(`No puedes agregar "0" unidades`);
                $('#texto2').append(`Si no te permite añadir unidades es por que no hay stock disponible`);

                $('.contenedor-msg').toggleClass('d-none');

            }else{

                cart[k].innerHTML=`
                <div class="p-2 d-flex justify-content-center">
                   <div style="width: 2rem; height: 2rem;" class="spinner-border text-success" role="status">
                       
                       <span class="sr-only">Loading...</span>
 
                   </div>
                 </div>
                
                `;
 
                 const addCart = new FormData();
                 
                 //console.log("<?php //echo $_SESSION['user'][0]['id_usuario'] ?>");
                 console.log(idProduct[k].value);
                 addCart.append('add-product',idProduct[k].value);
 
                 let path = "api/interfaces/addCart.php";
 
                 fetch(path,{
 
                   method : 'POST',
                   body : addCart
                 
                 })
                 .then(response=>response.json())
                 .then(response=>{
                    
                    console.log(response);
                   cart[k].innerHTML="Añadido";
 
                 })
                 
 


            }

        }


    });


        
 

}


//call btn sell  since phone

let phone = $('.telefofono');

 phone.on('click',function(){

    $('.phone').empty();

    $('.phone').append(`
   
    <p style="color:grey"><h6>
    <br>
    <hr>
    <li>Llamanos al 3038915</li>
    <li>Atencion: </li>
    <li>lunes a viernes 9 a.m. - 6 p. m.</li>
    </h6></p>
    
    `);

 })




 
 //______________________

   
 $('.cart-wrogn').on('click',function(){
            
    $('.contenedor-msg').addClass('d-none');

})


//_______________________


$('.add-carrito-principal').on('click',function(){

 

    if($('.type-user').val()==="desconocido"){

        $('.contenedor-msg').toggleClass('d-none');
    
    }else{


        if(parseInt(cuantity.value)===0){

            $('#texto1').empty();
            $('#texto2').empty();

            $('#texto1').append(`No puedes agregar "0" unidades`);
            $('#texto2').append(`Si no te permite añadir unidades es por que no hay stock disponible`);

            $('.contenedor-msg').toggleClass('d-none');

        }else{
            
            $('.add-carrito-principal').empty();

            $('.add-carrito-principal').append(`
            <div class="p-2 d-flex justify-content-center">
               <div style="width: 2rem; height: 2rem;" class="spinner-border text-success" role="status">
                   
                   <span class="sr-only">Loading...</span>

               </div>
             </div>
            
            `);

             const addCart = new FormData();
             
             //console.log("<?php //echo $_SESSION['user'][0]['id_usuario'] ?>");
             console.log(cuantity.value);
             addCart.append('add-product',cuantity.value);

             let path = "api/interfaces/addCart.php";

             fetch(path,{

               method : 'POST',
               body : addCart
             
             })
             .then(response=>response.json())
             .then(response=>{
                
                console.log(response);
                $('.add-carrito-principal').empty();
                $('.add-carrito-principal').append("Añadido");

             })
             
          


        }


    }

    

})