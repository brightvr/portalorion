let menu = document.querySelector('.cont-icon-user');


menu.addEventListener('click',()=>{


    $('body').prepend(`
    
        <div class="sabana d-flex justify-content-end">
        
            <div class="contenedor-menu p-3">

            <div class="d-flex justify-content-end btn-cerrar-menu"><span style="font-size:35px; color:red;"><i class="fas fa-window-close"></i></span></div>

            <div class="p-2">

            <!--<div class="btn btn-success btn-block d-flex justify-content-start"><span class="mr-4" style="font-size:18px"><i class="fas fa-bell"></i></span>   Notificaciones</div>-->
            <a href="perfil.php" class="btn btn-success btn-block d-flex justify-content-start"><span class="mr-4" style="font-size:18px"><i class="fas fa-user"></i></span>  Perfil</a>
            <a href="tiendasoficiales.php" class="btn btn-success btn-block d-flex justify-content-start"><span class="mr-4" style="font-size:18px"><i class="fas fa-store"></i></span>  Tiendas Oficiales <span class="ml-1" style="color:yellow;"> <i class="fas fa-award"></i></span></a>
            <!--<div class="btn btn-success btn-block d-flex justify-content-start"><span class="mr-4" style="font-size:18px"><i class="fas fa-boxes"></i></span>  Paquetes</div>-->
            <a href="compras.php" class="btn btn-success btn-block d-flex justify-content-start"><span class="mr-4" style="font-size:18px"><i class="fas fa-shopping-basket"></i></span>  Mis compras</a>
            <!--<div class="btn btn-success btn-block d-flex justify-content-start"><span class="mr-4" style="font-size:18px"><i class="fas fa-tags"></i></span>  Promos</div>-->
            <a href="salir.php" class="btn btn-danger btn-block d-flex justify-content-start"><span class="mr-4" style="font-size:18px"><i class="fas fa-sign-out-alt"></i></span>  Salir</a>

            </div>
            
            </div>            
        
        </div>
    
    `);




    $('.btn-cerrar-menu').on('click',function(){

        $('.sabana').remove();


    });


//________________________________________________________________________________________

//peticion asincrona notificaciones

let avisoNotificacion=document.querySelector(".cont-icon-user");




});