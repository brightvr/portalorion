$(window).on('load', function(){


    //esta funcion define la ruta que se usara para traer datos
    const Ruta=(hash)=>{

       switch (hash) {
            
            case '':
           
                 path_fetch ="api/interfaces/productos.php";
           
            break;

            case '#Todo':
           
                path_fetch ="api/interfaces/productos.php";
          
            break;

            case '#Llega_hoy':
           
               path_fetch ="api/interfaces/llegahoy.php";
      
            break;

            case '#Pipas':
           
              path_fetch ="api/interfaces/pipas.php";
     
            break;

            case '#Grinders':
           
              path_fetch ="api/interfaces/grinder.php";
     
            break;

            case '#Bongs':
           
              path_fetch ="api/interfaces/bongs.php";
     
            break;

            case '#Cueros':
           
              path_fetch ="api/interfaces/cueros.php";
     
            break;

            case '#Encendedores':
           
              path_fetch ="api/interfaces/encendedores.php";
     
            break;

            case '#Tecnologia':
           
              path_fetch ="api/interfaces/tecnologia.php";
     
            break;

            case '#Tecnologia':
           
              path_fetch ="api/interfaces/tecnologia.php";
     
            break;


            case '#Usuado':
           
              path_fetch ="api/interfaces/usados.php";
     
            break;

            case '#Promociones':
           
              path_fetch ="api/interfaces/promociones.php";
     
            break;


            case '#Combos':
           
              path_fetch ="api/interfaces/combos.php";
     
            break;


            case '#Pijamas_mujer':
           
                path_fetch ="api/interfaces/pijamasmujer.php";
       
            break;

            case '#Audio_y_sonido':
           
              path_fetch ="api/interfaces/audioysonido.php";
     
            break;

            case '#Electronica':
           
              path_fetch ="api/interfaces/electronica.php";
     
            break;

            case '#Artesanias_Colombianas':
           
              path_fetch ="api/interfaces/artesanias.php";
     
            break;

            case '#Otros':
           
              path_fetch ="api/interfaces/otros.php";
     
            break;
       
            default:
                console.log('Advertencia: Function Ruta esta retornado el valor por defecto')
                path_fetch="api/interfaces/productos.php"
               
            break;
       }

       return path_fetch;

    }// fiin de la funcion ruta 


//______________________________________________________________________________


    //esta funcion define el card que se usara
    const TipoCard=(data, id_card)=>{

        let card;

        switch (id_card) {

            case 0 :

            card = `

            <div class="mi-card">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 360 632">
                <defs>
                  <style>
                    .a6659f80-c209-4bef-95dc-dd2e0fd6d2af, .aec2e71c-a97f-49a9-809e-0ac13d78d69b, .efa87712-205c-4cd0-91cd-2e9d1e9f971d {
                      fill: #fff;
                    }
              
                    .ffff8acb-9f86-4e78-974a-d9aa7de3b931 {
                      fill: #5dac38;
                    }
              
                    .bfeb0313-d199-4e53-be46-c0625923963d {
                      fill: #9e9e9e;
                    }
              
                    .eb7c4729-e31d-48b4-a780-3b04696e694b {
                      font-size: 41px;
                    }
              
                    .a1803540-80f4-4717-9018-54cf33252226, .aec2e71c-a97f-49a9-809e-0ac13d78d69b, .b06f0b4f-9b97-4524-aea2-9bb3af7bd5e7, .eb7c4729-e31d-48b4-a780-3b04696e694b, .efa87712-205c-4cd0-91cd-2e9d1e9f971d {
                      font-family: Rockwell;
                    }
              
                    .efa87712-205c-4cd0-91cd-2e9d1e9f971d {
                      font-size: 23px;
                    }
              
                    .adad19a3-d5af-4ad4-81e6-da2d389be2aa {
                      letter-spacing: -0.05em;
                    }
              
                    .a1803540-80f4-4717-9018-54cf33252226 {
                      font-size: 21px;
                    }
              
                    .a906fe84-e21a-4de8-8ced-3cf3d080ffb0 {
                      letter-spacing: -0.02em;
                    }
              
                    .f5316b5f-c080-4a76-b585-7c0f6110d00d {
                      letter-spacing: 0em;
                    }
              
                    .aec2e71c-a97f-49a9-809e-0ac13d78d69b {
                      font-size: 27px;
                    }
              
                    .b06f0b4f-9b97-4524-aea2-9bb3af7bd5e7 {
                      font-size: 15px;
                    }
              
                    .b4dfc1b3-6e62-4ef7-bd34-fd0c219fabc8 {
                      letter-spacing: -0.02em;
                    }
                  </style>
                </defs>
                <g id="eac8f3ff-0e6a-4077-9ef5-b858bf353610" data-name="Fondo">
                  <g>
                    <rect class="a6659f80-c209-4bef-95dc-dd2e0fd6d2af" x="0.5" y="44.5" width="359" height="587"/>
                    <path class="a6659f80-c209-4bef-95dc-dd2e0fd6d2af" d="M359,46V632H1V46H359m1-1H0V633H360V45Z" transform="translate(0 -1)"/>
                  </g>
                </g>
                <g id="f0e62cbf-4ba9-4ad2-883e-19ebe2817a1a" data-name="card">
                  <g>
                    <rect x="0.5" y="519.5" width="359" height="112"/>
                    <path d="M359,521V632H1V521H359m1-1H0V633H360V520Z" transform="translate(0 -1)"/>
                  </g>
                  <g class="comprar-producto" value="${data.id_producto}">
                    <rect class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" x="23.5" y="541.5" width="313" height="68" rx="1.5"/>
                    <path class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" d="M335,543a1,1,0,0,1,1,1v65a1,1,0,0,1-1,1H25a1,1,0,0,1-1-1V544a1,1,0,0,1,1-1H335m0-1H25a2,2,0,0,0-2,2v65a2,2,0,0,0,2,2H335a2,2,0,0,0,2-2V544a2,2,0,0,0-2-2Z" transform="translate(0 -1)"/>
                  </g>
                  <g>
                    <rect x="0.5" y="391.5" width="359" height="55"/>
                    <path d="M359,393v54H1V393H359m1-1H0v56H360V392Z" transform="translate(0 -1)"/>
                  </g>
                  <rect class="bfeb0313-d199-4e53-be46-c0625923963d" x="27" y="447" width="309" height="56"/>
                  <g>
                    <rect x="0.5" y="0.5" width="359" height="57"/>
                    <path d="M359,2V58H1V2H359m1-1H0V59H360V1Z" transform="translate(0 -1)"/>
                  </g>
                  <g id="f5b5caf2-cc7e-47e9-bf76-71adababa703" data-name="Capa 16">
                    <g>
                      <rect class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" x="280.5" y="452.5" width="46" height="43"/>
                      <path class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" d="M326,454v42H281V454h45m1-1H280v44h47V453Z" transform="translate(0 -1)"/>
                    </g>
                  </g>
                  <g id="a0c5d0e3-40cc-4b22-8274-699a687a664e" data-name="Capa 15">
                    <g>
                      <rect class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" x="0.5" y="60.5" width="179" height="37"/>
                      <path class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" d="M179,62V98H1V62H179m1-1H0V99H180V61Z" transform="translate(0 -1)"/>
                    </g>
                    <g>
                      <rect class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" x="182.5" y="60.5" width="177" height="37"/>
                      <path class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" d="M359,62V98H183V62H359m1-1H182V99H360V61Z" transform="translate(0 -1)"/>
                    </g>
                  </g>
                </g>
                <g id="f21a9b1d-51db-4323-95f1-a9fc47aa2f39" data-name="stock">
                  <text class="eb7c4729-e31d-48b4-a780-3b04696e694b" transform="translate(281.27 485.96)">${data.stock}</text>
                </g>
                <g id="fe99fd18-c861-4898-a1d6-c75f694e2d90" data-name="img">
                  <image width="1322" height="1113" transform="translate(3 102) scale(0.27 0.26)" xlink:href="${data.img}"/>
                </g>
                <g id="e27e2678-efb7-4375-976a-ddb950241a7d" data-name="texto1">
                  <text class="efa87712-205c-4cd0-91cd-2e9d1e9f971d" transform="translate(30.58 31.18)">${data.nombre} </text>
                </g>
                <g data-name="texto1">
                <text class="efa87712-205c-4cd0-91cd-2e9d1e9f971d" transform="translate(200.58 31.18)"></text>
              </g>
                <g id="a6e8d96e-3b1b-458f-bd5b-c6d76359acb6" data-name="check">
                  <text class="a1803540-80f4-4717-9018-54cf33252226" transform="translate(45.33 480.1)">${data.disponibilidad}</text>
                </g>
                <g id="b9f01aeb-e730-46b9-adba-9632a756adc5" data-name="texto2">
                  <text class="aec2e71c-a97f-49a9-809e-0ac13d78d69b" transform="translate(59.76 425.37)">$ ${data.precio} pesos cop</text>
                </g>
                <g id="f132159d-5e27-46d9-88d9-24d5448e63c7" class="${data.id_producto} comprar-producto"  value="${data.id_producto}"  data-name="comprar">
                  <text class="eb7c4729-e31d-48b4-a780-3b04696e694b" transform="translate(72.34 585.92)">COMPRAR</text>
                </g>
               
                <g class="btn-comprar-card" id="eda4ffe1-6d4b-48d4-a5e3-3e450bfe794a" data-name="texto llega hoy">
                  <text class="b06f0b4f-9b97-4524-aea2-9bb3af7bd5e7" transform="translate(10.8 82.22)">Envios toda Colombia</text>
                </g>
                
                <g id="ac5bb496-1782-4a77-a175-3bd9da31e5f8" data-name="texto agregar">
                  <text class="b06f0b4f-9b97-4524-aea2-9bb3af7bd5e7" transform="translate(184.34 81.42)">${data.info_corta}</text>
                </g>
              </svg>
              
        
          </div>
        
            

           
            `;
                
            break;

            case '' : 


            break;
        
            default:
                break;
        }


        return card;

    }//fin de la funcion tipo card

//______________________________________________________________________________________________________


//esta funcion pinta los primeros productos
   const Inicar =()=>{

    $('#cont-cards').append(`
    <div class="elcontenedor2">

    
    <div style="width: 20rem; height: 20rem;" class="spinner-border text-success" role="status">
      <span class="sr-only">Loading...</span>
    </div>

    </div>
    
    `);

    let hash=window.location.hash;
    fetch(Ruta(hash))
    .then(response=>response.json())

    .then(response=>{
             
           
      //console.log(response.length);
      //console.log(Ruta(hash2));

      setTimeout(() => {

        if(response==="Esta categoria se encuentra vacia por el momento"){

          $('#cont-cards').append(`
          <div class="elcontenedor alert alert-danger">
         <h3> Ups esta categoria se encuentra vacia intenta con otra categoria</h3>
           </div>`)


        }else{

          for(let i=0; i<response.length;i++){

         
            $('#cont-cards').append( `<div class="elcontenedor">${TipoCard(response[i],0)}</div>`);
               
  
          }

                          //clcik producto
                          $('.comprar-producto').on('click',function(e){

                              let id=parseInt(e.target.parentNode.attributes[1].nodeValue);
                              

                              window.location.href="producto.php?id="+id.toString();
          
                          });

        }



     $('.elcontenedor2').remove();
        
      }, 1000);


      
   });




   }//fin de la funcion inicar

    
  //______________________________________________________________________________________________________________________

    
   //aqui se detecta el cambio de urly se cambia de productos
        $(window).bind('hashchange', function() { 

          $('.elcontenedor').remove();

          $('#cont-cards').append(`
          <div class="elcontenedor2">

          
          <div style="width: 20rem; height: 20rem;" class="spinner-border text-success" role="status">
            <span class="sr-only">Loading...</span>
          </div>

          </div>
          
          `);

          let hash2=window.location.hash;


          fetch(Ruta(hash2))
          .then(response=>response.json())

          .then(response=>{
             
           
            //console.log(response.length);
            //console.log(Ruta(hash2));
     
            setTimeout(() => {

              if(response==="Esta categoria se encuentra vacia por el momento"){

                $('#cont-cards').append(`
                <div class="elcontenedor alert alert-danger">
               <h3> Ups en el momento esta categoria se encuentra vacia, por favor intenta con otra categoria</h3>
                 </div>`)
      
      
              }else{


                for(let i=0; i<response.length;i++){
 
               
                  $('#cont-cards').append( `<div class="elcontenedor">${TipoCard(response[i],0)}</div>`);
                     
  
                 } 

                 
              //clcik producto
              $('.comprar-producto').on('click',function(e){

                let id=parseInt(e.target.parentNode.attributes[1].nodeValue);
                

                window.location.href="producto.php?id="+id.toString();

            });


              }



           $('.elcontenedor2').remove();
              
            }, 1000);
 

          
            
         });






        })
   

  //inicar tienda

    Inicar();
});