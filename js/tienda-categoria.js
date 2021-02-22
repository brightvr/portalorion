'use strict';

//show-hide categorys
let btnCategory = document.querySelector('.btn-categorias'),
    allCategorys = document.querySelector('.categorias'),
    arrowCategory = document.getElementsByClassName('miflecha');

    btnCategory.addEventListener('click', ()=>{

        allCategorys.classList.toggle('d-none');

        for(let i = 0;i<arrowCategory.length;i++){

            arrowCategory[i].classList.toggle('d-none');
        }
        
    });

    //type card, you need  id (id = int[0-9]) card for use this function
    // data=[array product (id_producto,nombre,precio,img)] ,this contain all data for use with  any card 
    // its reutrn template html
    const Cards = (id,data)=>{

        let card;

        //format price 
        const formatMoney = ()=>{

            let format = new Intl.NumberFormat().format(parseInt(data.precio));
    
            return format;
        }


        switch (id) {
            
            case 0:

                card = `
                <br>
                <div class="contenedor">
        
                <div style="width: 95%;margin-left:2%;background:white;box-shadow:4px 4px 10px black;" class="micard">
                    
                      <div class="d-flex">
            
                        <div style="width: 50%; padding-top:50px;" class="d-block "><img style=" width: 100%;;" src="${data.img}" alt=""> 
                      
                        </div>
            
                        <div style="width: 50%;" class="d-block p-2 pl-3">
                        <h5 style="margin-left:-90%;" class="pl-4"><strong>${data.nombre}</strong></h5>
                        <hr>
                        <h5><strong>$ ${formatMoney()} pesos</strong></h5>
                        <hr>
                        <div style="margin-left: -9%;"  class="d-flex p-2 ">
            
                            <div class="btn btn-success mr-2 menos"><h5 style="margin-top:-2px;">-</h5></div>
                            <input class="cantidad" style="width:40px;" type="number" value="1" min="0" max="${data.stock}" readonly>
                            <div class="btn btn-success ml-2 mas"><h5 style="margin-top:-2px;">+</h5></div>
            
                        </div>
                        </div>
            
                      </div>
            
                      <div class="d-flex p-2">
                      <div style="width: 50%;" class="d-block p-2"> <div class="btn btn-warning btn-block">Añadir <i class="fas fa-cart-plus"></i></div> </div>
                        <div style=" background: rgba(0, 0, 0, 0.178); width: 1px; height:50px;"></div>
                        <div style="width: 50%;" class="d-block p-2"> <a href="producto.php?id=${data.id_producto}" class="btn btn-danger btn-block">Ver producto</a> </div>
                      </div>
                    
                </div>
            
              </div>
              <br>
              <hr>
            
                
                `

                //controlls


            break;
        
            default:

                console.log('default')

            break;
        }



        return card;

    }


    //print cards
    const PrintCards = (place,card)=>{

        place.append(card);





      
    }



    //api consult all category products
    const PushCategoryProducts=(data)=>{

        fetch('api/interfaces/category-product.php',{

            method: 'POST',
            body: data
            
        })
        .then(response=>response.json())
        .then(response=>{      console.log('click');

            //console.log(response);
            for(let i = 0;i<response.length;i++){

                PrintCards($('.container-cards'),Cards(0,response[i]));

            }

            

            let inputCuantity = document.getElementsByClassName('cantidad');
            let moreCuantity = document.getElementsByClassName('mas');
            let lessCuantity = document.getElementsByClassName('menos');

           // console.log(inputCuantity[0].value);

            for(let f = 0; f<inputCuantity.length;f++){

                //increment cuantity product
                moreCuantity[f].addEventListener('click',()=>{

                    console.log('click');

                    if(parseInt(inputCuantity[f].value) === parseInt(response[f].stock)){

                        inputCuantity[f].value=parseInt(response[f].stock);

                    }else if(parseInt(inputCuantity[f].value)===0 &&  parseInt(response[f].stock)===0 ){

                        inputCuantity[f].value=0;
                    }else if(parseInt(inputCuantity[f].value)<parseInt(response[f].stock) &&  parseInt(response[f].stock)!==0){

                        inputCuantity[f].value=parseInt(inputCuantity[f].value)+1;
                    }
                });

                //decrement cuantity product
                lessCuantity[f].addEventListener('click',()=>{

                    if(parseInt(inputCuantity[f].value) === parseInt(response[f].stock) && parseInt(response[f].stock)!==0){

                        inputCuantity[f].value=parseInt(inputCuantity[f].value)-1;

                    }else if(parseInt(inputCuantity[f].value)===0 &&  parseInt(response[f].stock)===0 ){

                        inputCuantity[f].value=0;

                    }else if(parseInt(inputCuantity[f].value)<parseInt(response[f].stock) &&  parseInt(inputCuantity[f].value)!==0){

                        inputCuantity[f].value=parseInt(inputCuantity[f].value)-1;

                    }else if(parseInt(inputCuantity[f].value)===0){

                        inputCuantity[f].value=0

                    }

                });
            }




      


        })
        .catch(wrong=>{

            console.log(wrong);
        })
    }


    //first time for print all cards
    let inputCategory = $('.my-category').val();

    const category = new FormData();
    
    category.append('categoria',inputCategory);

    PushCategoryProducts(category);


    //called function

  




   


    
