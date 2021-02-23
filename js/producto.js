'use strict'

//format price 
const FormatMoney = (price)=>{

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

        //console.log(response);
        
        setTimeout(()=>{

            PrintDelivery($('.envio'),FormatMoney(response[0].precio3kg),response[1],response[2],response[3],response[4]);


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

