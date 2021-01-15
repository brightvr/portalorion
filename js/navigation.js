$(window).on('load', function(){

    let vinculo = document.getElementsByClassName('vinculo');

    for(let i=0; i<vinculo.length;i++){

        vinculo[i].addEventListener('click',(e)=>{

           switch (i) {
               
                case 0:
                
                    window.location.href="index.php";   

                break;

                case 1:
                
                    window.location.href="tienda.php";   
                    
                break;

                case 2:
                
                    console.log('Pagos');   
                    
                break;

                case 3:
                
                    console.log('Envios');   
                    
                break;
           
               default:
                
               break;
           }
        })
    }
})