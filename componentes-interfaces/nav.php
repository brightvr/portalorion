


<nav style="z-index:999999999;" class="position-fixed container-fluid p-1 pt-2 pb-1 navbar navbar-expand-lg navbar-dark fondo-negro d-flex justify-content-between">
   
   <a class="navbar-brand ml-1" href="index.php"><img class="logo-orion" src="api/assets/img/logo-orion-claro.png" alt=""></a>

   <form style="width: 48%; margin-left:-25px;" class="d-flex justify-content-center">
     <input style="width: 100%;" class="form-control" type="search" placeholder="buscar producto" aria-label="Search">
    

   </form>

   <button class="cont-icon-user mr-1" type="button" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span class="icono-user"><i class="fas fa-user"></i></span>
   </button>

   
<div class="new-place position-absolute d-flex justify-content-end"></div>
   
 </nav>
<script>

  

  setTimeout(()=>{

    setInterval(()=>{
      console.log(window.screen.width);
    if(window.screen.width>= 700){

      while(document.getElementsByTagName('body')[0].firstChild){

        document.getElementsByTagName('body')[0].removeChild(document.getElementsByTagName('body')[0].firstChild);
      

      }

    document.getElementsByTagName('body')[0].innerHTML='<img style="width:100%;" src="api/assets/img/metodos-pago/banner-escritorio.jpg" >'
    }



  },1000);



  },1000);


</script>
 <div style="height: 72px;" class="espaciado"></div>