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
                        <h6 style="margin-left:-128%;" class="pl-4"><strong>${data.nombre}</strong></h6>
                        <hr>
                        <h6><strong>$ ${formatMoney()} pesos</strong></h6>
                        <hr>
                        <div style="margin-left: -6%;"  class="d-flex p-2 ">
            
                            <div class="btn btn-success mr-2 menos"><h5 style="margin-top:-2px;">-</h5></div>
                            <input class="cantidad" style="width:40px;" type="number" value="0" min="0" max="${data.stock}" readonly>
                            <div class="btn btn-success ml-2 mas"><h5 style="margin-top:-2px;">+</h5></div>
            
                        </div>
                        </div>
            
                      </div>
            
                      <div class="d-flex p-2">
                      <div style="width: 50%;" class="d-block p-2"> <a href="producto.php?id=${data.id_producto}" class="btn btn-danger btn-block">Ver producto</a> </div>     
                        <div style=" background: rgba(0, 0, 0, 0.178); width: 1px; height:50px;"></div>
                        <div style="width: 50%;" class="d-block p-2"> <div class="btn btn-warning btn-block carrito">Añadir <i class="fas fa-cart-plus"></i></div> </div>
                 
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



    //increment products for cart
    const ControlMore = (inputCuantity,response,f)=>{

        if(parseInt(inputCuantity[f].value) === parseInt(response[f].stock)){

            inputCuantity[f].value=parseInt(response[f].stock);

        }else if(parseInt(response[f].stock)===0 ){

            inputCuantity[f].value=0;
        
        }else if(parseInt(inputCuantity[f].value)<parseInt(response[f].stock) &&  parseInt(response[f].stock)!==0){

            inputCuantity[f].value=parseInt(inputCuantity[f].value)+1;
        }

    }





    //decrement product for cart
    const ControlLess = (inputCuantity,response,f)=>{

        if(parseInt(inputCuantity[f].value) === parseInt(response[f].stock) && parseInt(response[f].stock)!==0){

            inputCuantity[f].value=parseInt(inputCuantity[f].value)-1;

        }else if(parseInt(response[f].stock)===0 ){

            inputCuantity[f].value=0;

        }else if(parseInt(inputCuantity[f].value)<parseInt(response[f].stock) &&  parseInt(inputCuantity[f].value)!==0){

            inputCuantity[f].value=parseInt(inputCuantity[f].value)-1;

        }else if(parseInt(inputCuantity[f].value)===0){

            inputCuantity[f].value=0;

        }

    }


    const PrintSpinner=()=>{

        $('.container-cards').empty();
        $('.container-cards').prepend(`
            <div class="p-2 d-flex justify-content-center">
            <div style="width: 20rem; height: 20rem;" class="spinner-border text-success" role="status">
                
                <span class="sr-only">Loading...</span>
        
            </div>
            </div>

       `);

    }


    const LogicCards = (response)=>{

                       
        setTimeout(()=>{

            $('.container-cards').empty();

            //console.log(response);
            for(let i = 0;i<response.length;i++){

                PrintCards($('.container-cards'),Cards(0,response[i]));

            }


            // controls of more and less products for cart
            let inputCuantity = document.getElementsByClassName('cantidad');
            let moreCuantity = document.getElementsByClassName('mas');
            let lessCuantity = document.getElementsByClassName('menos');
            let cart = document.getElementsByClassName('carrito');

        
            for( let f=0; f<inputCuantity.length;f++){

                moreCuantity[f].addEventListener('click',()=>{

                    ControlMore(inputCuantity,response,f);
                
                });

                lessCuantity[f].addEventListener('click',()=>{

                    ControlLess(inputCuantity,response,f);
                
                });


                cart[f].addEventListener('click',()=>{

                    //console.log($('.type-user').val());

                    if($('.type-user').val()==="desconocido"){

                        $('.contenedor-msg').toggleClass('d-none');
                    
                    }else{


                    }
            
            
                });
            

            }

           





        },500);
    }



    const Wrong = ()=>{

        $('.container-cards').empty();
        $('.container-cards').append(`
        
        <div class="bg-light p-2">

            <img style="width:100%;" src="api/assets/img/metodos-pago/oops.png">
            <h6 style="color:grey;padding:8px;">

                Parece que no hay productos disponibles, intenta con otra categria
            
            </h6>
        
        </div>
        
        `);


    }



    //api consult all category products
    const PushCategoryProducts=(data)=>{

        fetch('api/interfaces/category-product.php',{

            method: 'POST',
            body: data
            
        })
        .then(response=>response.json())
        .then(response=>{      


            if(response==="No se encontraron resultados"){

                Wrong();

            }else{

                LogicCards(response);



            }

           


        })
        .catch(wrong=>{

            console.log(wrong);
        })

    }//end PushCategoryProducts




    const PushSubcategoryProducts = (subcategory)=>{

        fetch('api/interfaces/subcategory-product.php',{

            method: 'POST',
            body: subcategory
            
        })
        .then(response=>response.json())
        .then(response=>{

            if(response==="No se encontraron resultados"){

                Wrong();

            }else{

                LogicCards(response);

            }


            

        })

    }




    //first time for print all cards
    let inputCategory = $('.my-category').val();

    const category = new FormData();
    
    category.append('categoria',inputCategory);
    PrintSpinner();
    PushCategoryProducts(category);




    //call show all category products
    let showAll = document.querySelector('.ver-todo');

    showAll.addEventListener('click',()=>{

        PrintSpinner();
        PushCategoryProducts(category);

    })

  

    //call subcategory  products

    let btnSubcategory = document.getElementsByClassName('btn-subcategoria');
 

    for(let i = 0;i<btnSubcategory.length;i++){

        btnSubcategory[i].addEventListener('click',()=>{

            //subcategory's name
            //console.log(btnSubcategory[i].textContent.trim());    

            const sendSubcategory = new FormData();

            sendSubcategory.append('subcategoria',btnSubcategory[i].textContent.trim());

            PrintSpinner();
            PushSubcategoryProducts(sendSubcategory);

        })
    }

   
        $('.cart-wrogn').on('click',function(){
            
            $('.contenedor-msg').addClass('d-none');

        })




