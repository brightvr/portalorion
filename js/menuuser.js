let menu = document.querySelector('.cont-icon-user');


menu.addEventListener('click',()=>{


    $('.new-place').append(`
    
        <div class="sabana d-flex justify-content-end">
        
            <div class="contenedor-menu p-3">

                <div class="d-flex justify-content-end btn-cerrar-menu"><span style="font-size:30px; color:red;"><i class="fas fa-window-close"></i></span></div>
                <br>
                <div class="btn btn-success btn-block ver-cate"><h6>Ver categorias</h6></div>
                <br>
                <div style="height:350px;overflow-y:scroll;" class="contenedor-cate d-none bg-light p-2">
                <br>
               

                </div>
                      

                <br>
            
                <form class="bg-light text-dark p-2" action="usuarios/autenticacion.php" method="POST">
                    <br>

                    <div class="fondo-verde2 text-light p-2 d-flex justify-content-center">Identificate</div>
                    <br>

                    <label>Correo electronico: </label>
                    <br>
                    <input type="email" name="correo" placeholder="email@email.com" required>
                    <hr>
                    <label>Contraseña: </label>
                    <br>
                    <input type="password" name="contraseña"  required>
                    <br>
                    <hr>
                    <a href="contraseña.php">¿Olvidaste tu contraseña?</a>

                    <br>
                    <br>
                    <button class="btn btn-success btn-block"><h4>Ingresar</h4></button>

                </form>

                <br>
                <br>

                <form class="bg-light text-dark p-2" action="usuarios/registro.php" method="POST">
                    <br>

                    <div class="fondo-verde2 text-light p-2 d-flex justify-content-center">Registrate y empieza a comprar online de forma segura</div>
                    <br>

                    <label>Nombre :</label>
                    <br>
                    <input type="text" name="nombre-usuario"  required>
                    <hr>
                    <label>Ciudad :</label>
                    <br>
                    <input type="text" name="ciudad-usuario"  required>
                    <hr>

                    <label>Correo  :</label>
                    <br>
                    <input type="email" name="correo-usuario" placeholder="email@email.com" required>
                    <hr>

                    <label>Contraseña :</label>
                    <br>
                    <input type="password" name="contraseña-usuario"  required>
                    <br>
                    <hr>
                    <input type="checkbox" name="terminos" value="acepto" required> <label> <a href="terminos.php"> Acepto términos y condiciones</a></label>

                    <br>
                    <br>
                    <button class="btn btn-success btn-block"><h4>Registrarse</h4></button>

                </form>

                <br>
                <br>
                <br>
                <hr>
                <br>
                <br>
                <br>
            
            
            </div>

            <br>
            <br>
            
        
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

            <a href="categoria.php?categoria=${response[f].nombre}" class="btn btn-success btn-block">${response[f].nombre}</a>
            <br>
            
            `);
        }

        

        



    })


   

    let contador=1;
    $('.ver-cate').on('click',function(){

     

        if(contador % 2 === 0){  

            $('.ver-cate').empty();
            $('.ver-cate').append('<h6>Ver Categorias </h6>');
        
        }else{

            $('.ver-cate').empty();
            $('.ver-cate').append('<h6>Cerrar Categorias</h6>');

        }


        $('.contenedor-cate').toggleClass('d-none');

        contador++;



    })




    $('.btn-cerrar-menu').on('click',function(){

        $('.sabana').remove();


    });








});

