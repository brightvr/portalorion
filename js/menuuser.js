let menu = document.querySelector('.cont-icon-user');


menu.addEventListener('click',()=>{


    $('.new-place').append(`
    
        <div class="sabana d-flex justify-content-end">
        
            <div class="contenedor-menu p-3">

                <div class="d-flex justify-content-end btn-cerrar-menu"><span style="font-size:30px; color:red;"><i class="fas fa-window-close"></i></span></div>
            
                <form class="bg-light text-dark p-2" action="usuarios/autenticacion.php" method="POST">
                    <br>

                    <div class="fondo-verde p-2 d-flex justify-content-center">Identificate</div>
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

                    <div class="fondo-verde p-2 d-flex justify-content-center">Registrate y empieza a comprar online de forma segura</div>
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




    $('.btn-cerrar-menu').on('click',function(){

        $('.sabana').remove();


    });




});



