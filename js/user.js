let menu = document.querySelector('.cont-icon-user');


menu.addEventListener('click',()=>{

    $('.new-place2').toggleClass('d-none'); 


    $('.new-place2').prepend(`
    
        <div  class="sabana2 d-flex justify-content-end">
        
            <div class="contenedor-menu p-3">

            <div class="d-flex justify-content-end btn-cerrar-menu"><span style="font-size:30px; color:red;"><i class="fas fa-window-close"></i></span></div>

            <div class="p-2">

            <div class="ver-cate"><img style="width:100%;" src="api/assets/img/metodos-pago/categoria-img.png"></div>
            <br>
            <div style="height:350px;overflow-y:scroll;" class="contenedor-cate d-none bg-light p-3"></div>
            <br>


            <a href="carrito.php" class="btn btn-success btn-block d-flex justify-content-start"><span class="mr-4" style="font-size:18px"><i class="fas fa-cart-plus"></i></span>Carrito <span class="ml-2" style="color:black;"><i class="fas fa-boxes"></i></span></a>

            <!--<div class="btn btn-success btn-block d-flex justify-content-start"><span class="mr-4" style="font-size:18px"><i class="fas fa-bell"></i></span>   Notificaciones</div>-->
            
            <a href="perfil.php" class="btn btn-success btn-block d-flex justify-content-start"><span class="mr-4" style="font-size:18px"><i class="fas fa-user"></i></span>  Perfil</a>
            
            <a href="tiendasoficiales.php" class="btn btn-success btn-block d-flex justify-content-start"><span class="mr-4" style="font-size:18px"><i class="fas fa-store"></i></span>  Tiendas Oficiales <span class="ml-1" style="color:yellow;"> <i class="fas fa-award"></i></span></a>
            
            
            <a href="compras.php" class="btn btn-success btn-block d-flex justify-content-start"><span class="mr-4" style="font-size:18px"><i class="fas fa-shopping-basket"></i></span>  Mis compras</a>
            
            <!--<div class="btn btn-success btn-block d-flex justify-content-start"><span class="mr-4" style="font-size:18px"><i class="fas fa-tags"></i></span>  Promos</div>-->
            
            <a href="salir.php" class="btn btn-danger btn-block d-flex justify-content-start"><span class="mr-4" style="font-size:18px"><i class="fas fa-sign-out-alt"></i></span>  Salir</a>

            </div>
            
            </div>            
        
        </div>
    
    `);


    




    $('.contenedor-cate').empty();

    $('.contenedor-cate').append(`
    <div class="d-flex justify-content-center">
        <div style="width: 5rem; height: 5rem;" class="spinner-border text-success" role="status">
            <span class="sr-only">Loading...</span>
        </div>
  </div>
    
    
    `);

    fetch('api/interfaces/categorias.php')
    .then(response=>response.json())
    .then(response=>{


        //console.log(response);
        $('.contenedor-cate').empty();

        for(let f=0;f<response.length;f++){

            $('.contenedor-cate').append(`

            <a href="categoria.php?categoria=${response[f].nombre}" class="btn btn-success btn-block d-flex justify-content-start"><span style="font-size:20px;margin-right:15px;"><i class="fas fa-hand-point-right"></i></span> ${response[f].nombre}</a>
            <br>
            
            `);
        }


    });


    $('.ver-cate').on('click',function(){

    
        $('.contenedor-cate').toggleClass('d-none');

    });



    $('.btn-cerrar-menu').on('click',function(){

        $('.sabana2').remove();
        $('.new-place2').toggleClass('d-none'); 


    });


//________________________________________________________________________________________





});