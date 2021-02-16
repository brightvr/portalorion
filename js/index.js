$(window).on('load',function(){

    //click comprar inderx
    $('.btn-comprar').on('click',function(){

        window.location.href="tienda.php";
    });




    //card producto index
    let path_fetch="api/interfaces/supermercado.php";

    fetch(path_fetch)
    .then(data=>data.json())
    .then(response=>{

      console.log(response);

        for(let f=0; f< response.length;f++){

          const formatearMoneda = ()=>{

            let formato = new Intl.NumberFormat().format(parseInt( response[f].precio));
    
            return formato;
          }
    

         

            $('.mi-container').append(`
        
          

                          <div class="card mb-3" style="width: 90%;margin-left:5%;box-shadow:4px 4px 5px black;">
                <img src="${response[f].img}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title">${response[f].nombre}</h3>
                  <p class="card-text">${response[f].info_corta}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><h5>$ ${formatearMoneda()} pesos</h5></li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
        
        
        
        `);

        }//fina for


                      //clcik producto
                      $('.comprar-producto').on('click',function(e){

                        let id=parseInt(e.target.parentNode.attributes[1].nodeValue);
                        
        
                        window.location.href="producto.php?id="+id.toString();
        
                    });


        $('.micard').on('click',function(){

            console.log('click')
            window.location.href="tienda.php";
        })
        
        
    })//final then
    .catch(error=>{
        console.log(error);
    });



  $('.cannabisShop').on('click',function(){


    window.location.href="https://cannabisshop.portalorion.store";

  });

  $('.runalotusArtesanias').on('click',function(){


    window.location.href="https://runalotus.com";

  });


  fetch('api/interfaces/categorias.php')
  .then(response=>response.json())
  .then(response=>{

    $('categorias').empty();

    for(let i=0; i<response.length;i++){

      $('categorias').append(`
    
      <a  href="categoria.php?categoria=${response[i].nombre}"><img class="m-2 mb-4" style="width:300px; border:0.5px solidgrey; box-shadow:3px 3px 5px black;" src="${response[i].card}"></a>
    
    `)

     
    }




    
    //console.log(response);
  });




})