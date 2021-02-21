<?php
  session_start();

 require_once 'conexion.php';
 $select="select * from productos  order by rand() limit 14";
 $query=mysqli_query($miconexion->Conectando(),$select);

 while($response=mysqli_fetch_assoc($query)){

  $productos[]=$response;
 }


 $select="select * from productos where TiendaOficial=0 limit 6";
 $query=mysqli_query($miconexion->Conectando(),$select);

 while($response=mysqli_fetch_assoc($query)){

  $productos2[]=$response;
 }




 $select="select * from productos order by rand() limit 40";
 $query=mysqli_query($miconexion->Conectando(),$select);

 while($response=mysqli_fetch_assoc($query)){

  $productos3[]=$response;
 }





 $select="select * from productos order by rand() limit 19";
 $query=mysqli_query($miconexion->Conectando(),$select);

 while($response=mysqli_fetch_assoc($query)){

  $productos4[]=$response;
 }



  
  if(isset($_GET['response'])){

    echo '

      <div  style="width:100%; position:fixed; z-index:9999999999999999;"  class="bg-success respuestas">
      <span class="btn-cerrar" style="font-size:30px; color:red;"><i class="fas fa-window-close"></i></span>
      <div class="container  p-3  text-white d-flex justify-content-center"><h5>'.$_GET['response'].'</h5></div>
      </div>



    ';

    echo '
    
    <script>

     let btn= document.querySelector(".btn-cerrar");
     btn.addEventListener("click",()=>{


     

      let padre= document.querySelector(".respuestas").parentNode;
      let hijo= document.querySelector(".respuestas")
      padre.removeChild(hijo);

    });

    </script>
    
    ';

  }


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Orion</title>

    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/icons/css/all.css">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/index.css">

</head>
<body>

<?php

require 'componentes-interfaces/nav.php';

?>
  <div class="menu-apps">

        <div  class="vinculo iconos-menu-escogido " href="#"><i class="fas fa-house-user"></i></div>
        <div  class="vinculo iconos-menu" href="#"><i class="fas fa-store"></i></div>
        <div class="vinculo iconos-menu" href="#"><i class="fas fa-money-check-alt"></i></div>
        <div  class="vinculo iconos-menu " href="#"><i class="fas fa-truck"></i></div>
      </div>
  <br>
 

  <div class="contenedor fondo-blanco ">

  <?php

    if(isset($_SESSION['user'])){

      //var_dump($_SESSION);


    echo '

      <br>
      <a style="text-deoration:none;" href="perfil.php"><div style="width:90%;margin-left:4%;border-radius:4px;box-shadow:5px 5px 8px black;" class="fondo-verde2 text-white p-2 d-flex justify-content-center"><h3><i class="fas fa-user"></i> '.strtoupper($_SESSION['user'][0]['nombre']).'</h3>
      </div>

      <br><br></a>
      
    
    ';

    }

  ?>

    <div class=" principal fondo-verde">
      Compras protegidas y pagos contra entrega
    </div>

    <div class="vector">

   

    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 463.37 198.68">
      <defs>
        <style>
          .a83109d4-c7b6-4fce-baef-50731dce8f2e, .ecc2b530-9db7-486d-9a9a-b9d23e44befb, .f8f0cba3-2bde-4072-a709-4990b29e92d0 {
            fill: #0a9b02;
          }
    
          .f8f0cba3-2bde-4072-a709-4990b29e92d0 {
            clip-rule: evenodd;
          }
    
          .a70bd53a-d6e4-47f4-a0b0-c64a9e85cdbd {
            isolation: isolate;
          }
    
          .bb592b58-ff40-4d2c-97c7-3a878f020908 {
            fill: #34933d;
          }
    
          .a02a437c-bcf6-4139-b4ec-2ee0886270ee, .a05e620a-91e0-451e-a178-4b77cbee779f, .a05f4af2-9a85-4caf-af0d-284df988ad8e, .a06f4c84-de19-4c0d-9f4d-7b44bbaa6d88, .a0cab592-4a83-4bb5-8f9e-d2207075e5f5, .a11e7103-4e9e-4d55-8873-cee632d38551, .a207f40d-f3fe-4fe6-961c-e37ffd5b37dd, .a2889555-04e5-48a6-98f1-8536a7d3168a, .a298ec22-99ea-4d73-9ec5-cc37244bf5f3, .a2a69e66-0fe5-494e-aaf7-bdc62c6dd191, .a371df58-0eb2-4b82-9c7e-4f1af5b1404d, .a3ffc2de-1e6e-414e-989e-a00b9272e2d3, .a45e1e78-60d3-45ae-818e-31104783343c, .a57ad363-e06b-45f6-879c-4fefdf46876b, .a59eb5b3-469f-492c-a648-06fdbdd1582b, .a5b33315-5b27-46d5-a52f-6c3da65d8ef3, .a5fb9198-1808-4612-bd63-44b945a60edb, .a61369a5-ee3c-4ee6-9532-60c069646cc6, .a6e71904-3572-4cee-87b7-f29dd5e20657, .a737dd5e-b6c7-45d5-8457-e69946d107f5, .a7a8331a-9a61-40e7-a58f-8aa9a70a1b7c, .a7e92202-a395-41b1-8b9b-a1090d2f7993, .a9001304-7190-42ee-94fc-c97745cc6226, .a96ba5a6-6e7a-49f2-854d-ed7d00e446fe, .a98dbc93-5d78-4abd-8e86-195dac752a7a, .a99dccd1-3f8e-4fe9-9a37-390e35c215d9, .aa80f058-790d-4a46-8d2f-c96972e50846, .aadef795-996e-46d2-ab1c-123e4c34b6a4, .ab9a90fa-b50b-4083-9e71-5f4b6c14bf15, .ac456664-121f-43c8-8f20-f7391ce3f9a1, .acb17c08-c3fc-4b49-bf4b-3a26caf3e41c, .ad0b5977-9fc1-4661-91fb-29b930a1dbfa, .ad55274f-b850-4bf5-9f5f-44c384bc2e45, .ad9796e8-4304-400f-a88b-5aadba6e6578, .adb6c3e7-55f4-4acb-b649-2aa82287cc1d, .ae54d307-d2c5-4c06-9f3a-3a1bed0afae2, .ae7bde7e-c745-4e74-8637-a5d2d14b3c64, .ae8128c1-815a-432c-ab1c-cb6428ae4cc5, .aeafe1e9-ceb1-4b79-98e4-844664b1304b, .aefe183a-891c-403a-a221-5367d50b1c9c, .b060923e-ec42-4302-9869-79d20d7883ec, .b1419cad-2508-450f-ab7e-1dcf66d93418, .b1ce08c5-1760-4930-a7cb-da23c4f44600, .b1dc71b7-a1cd-4212-b40c-f3d65c52bb69, .b25c96bd-ca55-44b5-8af6-13577efec909, .b346f4b8-479e-4b3e-8abc-c374ce44db2f, .b3da5c90-8a47-49ce-861f-d464828af9e0, .b48ad613-5d88-4aeb-b1ae-ab7ff7ae055f, .b4b4894a-a984-45c6-873e-466904238cc5, .b4e51697-0c48-4477-9db3-d6aaa30fb166, .b5398fd8-1ce1-4c29-a1f0-75ec6de46493, .b79c211a-570e-4681-9a23-192a2c9044e5, .b7c5ee6d-b899-4d23-85c2-7c307d59fe7b, .b811e8ff-6984-4f17-bc23-3ad71f17f646, .b84db1da-117f-436d-bc82-10387e2581b1, .b86f43ee-bf4f-4e32-b807-9376bc3e5616, .b92d1f70-c671-40f5-ad03-8012806c4bcf, .b99e5a73-f848-435d-90a3-3e92b4057de9, .ba94e3d2-5982-471d-867e-1d28b761a995, .bac01252-22d9-4c88-ae40-7538deba22d0, .bb592b58-ff40-4d2c-97c7-3a878f020908, .bb63e891-adfd-4180-89fe-a2e9b1eb9520, .bbf6f969-b4f5-4275-819a-48ce5692b366, .bc3d6472-354d-42ab-a933-872e82c13c23, .bc57e0ca-78e2-407a-9935-6d50403ef128, .bc9a7089-0adf-4a7c-a134-86562fa5789a, .bcc0a688-c777-4854-a513-95c39a5587f7, .bd1a61ad-0bf7-4a4d-8fcf-3d32c003eee4, .be7e6e06-e58e-40e7-9084-548c47b3e6f8, .bef19b56-8712-4b59-a757-fe11cfa77f5c, .bf2c9185-81c3-41aa-b130-5d3c5eb8fce3, .e0ccbaa8-435a-41a1-962e-598c71c3f86f, .e13306f2-37a4-433c-9f0b-8e0111218d87, .e1347fd1-1eca-460b-ab3d-e9772f0fbb63, .e13bc83e-1c0c-45b9-aea3-dbcdf84ebda1, .e3a426b5-a93a-4eb3-add5-6a77d3cfa2bd, .e4a154b5-74a1-45c9-a56f-30c9ab060db2, .e5dfd208-9124-474e-ad5e-cfd3281a089d, .e64e353c-c8a5-4411-870d-b63feec6100e, .e7f19b95-7a69-459d-8477-b0a6f5002412, .e8210d44-a99f-4d98-9a52-e242e9e05e3e, .e84ab866-6122-4389-842e-8ed2a822d271, .e8971598-2adb-4691-b9f4-f6a053c64399, .ea756caa-9f2a-4d9d-8a0b-b08432284433, .eb4d7127-2194-467d-b69b-f92c1bab541f, .eba70fc0-f836-4eac-93b5-254f7a84cd94, .ec64ee0c-15c3-447f-a5a1-885c36c2c047, .ecc2b530-9db7-486d-9a9a-b9d23e44befb, .ef04d281-5d85-4884-a07c-32b7ece2daac, .ef13590e-dd9f-44bf-ab48-4ff89ac16081, .ef6f8cb8-5b93-4b54-b0c3-08cd6728d0e5, .f0d52c32-7ed5-4adb-afa5-80cea995ed96, .f1051b7b-06d8-43cf-947e-6c2b9b0437b0, .f1c77aad-ffc1-4be2-b554-b3231200649c, .f287f1fa-95e9-44b9-8a7a-718600c2de0d, .f31f221b-bc63-454b-b5b3-44b70200a72b, .f40855c2-1065-4a83-9a53-6bd4815f083b, .f4099382-ed55-4968-86c2-0a9387f16917, .f4352a62-8e36-4c95-a3d7-dae0bfad9c80, .f6ad665e-a7e1-48ab-8af8-b33a2f91cc38, .f6e05870-5ff4-42cb-ba4a-148e645c49e4, .f778d720-0704-491b-b16a-8d7497bc7df7, .f7e26bd2-ff63-43d8-90f9-6bfde7331973, .f7faa69d-8150-4afe-ad1d-a5748bda865b, .f84114bb-33f2-465c-853e-8c8759260c78, .f94c47bd-5944-480c-9541-c6c76c7ca5b8, .f95625f7-caed-49a2-81c2-9e1586e022b2, .f98ed171-af74-4efa-a954-3ab52bc176e5, .f9a3d940-3004-4b46-9294-7917e0e2045e, .fa4c6451-7162-450d-a522-37647a04a01d, .fa8791ea-e311-44e2-b3a3-4e4325950b94, .fa8aa5a2-ea71-41f2-a813-1024b4cfd2c1, .faa324cc-9562-4ac9-8e7b-496fa00a5cc9, .fae2f4ac-ecaa-4515-97d0-26167b6f9901, .fba74e30-00f3-443d-adf7-8926d87fab6b, .fc0f44df-b495-4e60-83a2-2c66410386e4, .fc4a7879-1831-4660-b73b-45c06db512cc, .fc7767f7-dfb1-4852-8b5d-06efcd32f0ec, .fdf989ef-3a70-4063-9fcb-db0932616bdb, .ff91399d-ab11-4459-868c-a2e9c225902a {
            fill-rule: evenodd;
          }
    
          .bbf6f969-b4f5-4275-819a-48ce5692b366 {
            fill: #aea1cf;
          }
    
          .b86f43ee-bf4f-4e32-b807-9376bc3e5616, .bbf6f969-b4f5-4275-819a-48ce5692b366 {
            opacity: 0.63;
          }
    
          .a2a69e66-0fe5-494e-aaf7-bdc62c6dd191, .a57ad363-e06b-45f6-879c-4fefdf46876b, .a7a8331a-9a61-40e7-a58f-8aa9a70a1b7c, .a9001304-7190-42ee-94fc-c97745cc6226, .a96ba5a6-6e7a-49f2-854d-ed7d00e446fe, .a99dccd1-3f8e-4fe9-9a37-390e35c215d9, .aa80f058-790d-4a46-8d2f-c96972e50846, .aadef795-996e-46d2-ab1c-123e4c34b6a4, .ad55274f-b850-4bf5-9f5f-44c384bc2e45, .ad95637f-f8c4-4b90-8648-01e483378c8c, .aeafe1e9-ceb1-4b79-98e4-844664b1304b, .b1419cad-2508-450f-ab7e-1dcf66d93418, .b4e51697-0c48-4477-9db3-d6aaa30fb166, .b5398fd8-1ce1-4c29-a1f0-75ec6de46493, .b86f43ee-bf4f-4e32-b807-9376bc3e5616, .b92d1f70-c671-40f5-ad03-8012806c4bcf, .bbf6f969-b4f5-4275-819a-48ce5692b366, .bd782de1-3a79-4096-b4f4-c05d7ab93dfa, .be7e6e06-e58e-40e7-9084-548c47b3e6f8, .bef19b56-8712-4b59-a757-fe11cfa77f5c, .e4a154b5-74a1-45c9-a56f-30c9ab060db2, .e7f19b95-7a69-459d-8477-b0a6f5002412, .ed27aaa1-e96a-4fd9-bbda-556e6360f3b1, .f1c77aad-ffc1-4be2-b554-b3231200649c, .f6ad665e-a7e1-48ab-8af8-b33a2f91cc38, .f778d720-0704-491b-b16a-8d7497bc7df7, .f7e26bd2-ff63-43d8-90f9-6bfde7331973, .f84114bb-33f2-465c-853e-8c8759260c78, .f98ed171-af74-4efa-a954-3ab52bc176e5, .faa324cc-9562-4ac9-8e7b-496fa00a5cc9, .fc4a7879-1831-4660-b73b-45c06db512cc, .fc7767f7-dfb1-4852-8b5d-06efcd32f0ec, .ff91399d-ab11-4459-868c-a2e9c225902a {
            mix-blend-mode: multiply;
          }
    
          .bc9a7089-0adf-4a7c-a134-86562fa5789a {
            fill: #69d366;
          }
    
          .b86f43ee-bf4f-4e32-b807-9376bc3e5616 {
            fill: #58993d;
          }
    
          .e13306f2-37a4-433c-9f0b-8e0111218d87 {
            fill: #174402;
          }
    
          .a57ad363-e06b-45f6-879c-4fefdf46876b, .aa80f058-790d-4a46-8d2f-c96972e50846, .aeafe1e9-ceb1-4b79-98e4-844664b1304b, .b1419cad-2508-450f-ab7e-1dcf66d93418, .b5398fd8-1ce1-4c29-a1f0-75ec6de46493, .b92d1f70-c671-40f5-ad03-8012806c4bcf, .bd782de1-3a79-4096-b4f4-c05d7ab93dfa, .be7e6e06-e58e-40e7-9084-548c47b3e6f8, .bef19b56-8712-4b59-a757-fe11cfa77f5c, .ed27aaa1-e96a-4fd9-bbda-556e6360f3b1, .f1c77aad-ffc1-4be2-b554-b3231200649c, .f778d720-0704-491b-b16a-8d7497bc7df7, .f7e26bd2-ff63-43d8-90f9-6bfde7331973, .f84114bb-33f2-465c-853e-8c8759260c78, .f98ed171-af74-4efa-a954-3ab52bc176e5, .faa324cc-9562-4ac9-8e7b-496fa00a5cc9, .ff91399d-ab11-4459-868c-a2e9c225902a {
            opacity: 0.3;
          }
    
          .e0ccbaa8-435a-41a1-962e-598c71c3f86f {
            fill: #045100;
          }
    
          .a5b33315-5b27-46d5-a52f-6c3da65d8ef3 {
            mix-blend-mode: hard-light;
            fill: url(#b1aa19a5-f035-4242-bd72-650b9cba0a84);
          }
    
          .a61369a5-ee3c-4ee6-9532-60c069646cc6, .f9a3d940-3004-4b46-9294-7917e0e2045e {
            fill: #f94852;
          }
    
          .a207f40d-f3fe-4fe6-961c-e37ffd5b37dd, .a2a69e66-0fe5-494e-aaf7-bdc62c6dd191, .a61369a5-ee3c-4ee6-9532-60c069646cc6, .a7a8331a-9a61-40e7-a58f-8aa9a70a1b7c, .a96ba5a6-6e7a-49f2-854d-ed7d00e446fe, .a99dccd1-3f8e-4fe9-9a37-390e35c215d9, .aadef795-996e-46d2-ab1c-123e4c34b6a4, .e4a154b5-74a1-45c9-a56f-30c9ab060db2, .e64e353c-c8a5-4411-870d-b63feec6100e, .f0d52c32-7ed5-4adb-afa5-80cea995ed96, .f6ad665e-a7e1-48ab-8af8-b33a2f91cc38, .fa4c6451-7162-450d-a522-37647a04a01d, .fc4a7879-1831-4660-b73b-45c06db512cc {
            opacity: 0.5;
          }
    
          .a2a69e66-0fe5-494e-aaf7-bdc62c6dd191 {
            fill: #8d3c67;
          }
    
          .a737dd5e-b6c7-45d5-8457-e69946d107f5 {
            fill: #4f4f4f;
          }
    
          .adb6c3e7-55f4-4acb-b649-2aa82287cc1d {
            fill: #020202;
          }
    
          .aeafe1e9-ceb1-4b79-98e4-844664b1304b {
            fill: #540041;
          }
    
          .ae54d307-d2c5-4c06-9f3a-3a1bed0afae2, .ef7afe03-36b4-47ba-9f7b-f6b261ed2f5c {
            fill: #81e281;
          }
    
          .ad55274f-b850-4bf5-9f5f-44c384bc2e45 {
            fill: #b01734;
          }
    
          .a9001304-7190-42ee-94fc-c97745cc6226, .ad55274f-b850-4bf5-9f5f-44c384bc2e45, .b4e51697-0c48-4477-9db3-d6aaa30fb166, .e7f19b95-7a69-459d-8477-b0a6f5002412, .fc7767f7-dfb1-4852-8b5d-06efcd32f0ec {
            opacity: 0.2;
          }
    
          .a45e1e78-60d3-45ae-818e-31104783343c {
            fill: url(#ecb79b89-ab3d-4921-bb9d-d3b715b6e2af);
          }
    
          .a05f4af2-9a85-4caf-af0d-284df988ad8e, .a207f40d-f3fe-4fe6-961c-e37ffd5b37dd, .a6e71904-3572-4cee-87b7-f29dd5e20657, .a905358e-5822-40f0-bc59-7221e1c1e102, .ba94e3d2-5982-471d-867e-1d28b761a995, .bfb514c0-5c05-4e32-ac63-01bebc26bfa9, .e2a9fb11-fe2d-408f-a029-4565b9ab95b8, .e64e353c-c8a5-4411-870d-b63feec6100e, .e8971598-2adb-4691-b9f4-f6a053c64399, .ef13590e-dd9f-44bf-ab48-4ff89ac16081, .f287f1fa-95e9-44b9-8a7a-718600c2de0d, .f94c47bd-5944-480c-9541-c6c76c7ca5b8, .fa4c6451-7162-450d-a522-37647a04a01d {
            mix-blend-mode: soft-light;
          }
    
          .a05f4af2-9a85-4caf-af0d-284df988ad8e {
            fill: #ff9f57;
          }
    
          .b4e51697-0c48-4477-9db3-d6aaa30fb166 {
            fill: #811734;
          }
    
          .f31f221b-bc63-454b-b5b3-44b70200a72b {
            fill: url(#bbc97b21-60d8-4499-99e8-84b2b9d6bd26);
          }
    
          .fae2f4ac-ecaa-4515-97d0-26167b6f9901 {
            fill: url(#a261fcc5-af19-4e28-bb02-17dd7b2386b0);
          }
    
          .bac01252-22d9-4c88-ae40-7538deba22d0 {
            fill: url(#b8dcacba-c3a8-4097-b044-3a9f54268a06);
          }
    
          .b4b4894a-a984-45c6-873e-466904238cc5 {
            fill: #037c09;
          }
    
          .f4352a62-8e36-4c95-a3d7-dae0bfad9c80 {
            fill: #5bbf51;
          }
    
          .f95625f7-caed-49a2-81c2-9e1586e022b2 {
            fill: #025e0b;
          }
    
          .bb63e891-adfd-4180-89fe-a2e9b1eb9520 {
            fill: url(#ba8484f3-fbfa-4003-816b-e41d7f8c1355);
          }
    
          .f7faa69d-8150-4afe-ad1d-a5748bda865b {
            fill: #037e00;
          }
    
          .f5834e75-3fbd-437f-b216-4fbbff5d5d84 {
            clip-path: url(#f05be864-00f6-4f6e-b258-2ed48afeb04e);
          }
    
          .a70874db-6c98-46ff-bd60-cabc4678f9e0 {
            clip-path: url(#b1cf1c0c-49bf-4625-bfec-d6ba4c4292e2);
          }
    
          .bf4000bc-90b9-474b-b084-63a9e42f83e4 {
            clip-path: url(#be643806-2a05-4a7f-bf2f-090f03d7a557);
          }
    
          .b481ae36-0934-4b18-8f86-62de4d49523f {
            clip-path: url(#a2142ac2-8c0d-440d-ad18-96b4bedf08a1);
          }
    
          .f11521b7-3941-4b0b-9b8f-2a57e793d389 {
            clip-path: url(#ac54921d-b613-4d14-b9dc-b74499c91bd1);
          }
    
          .a7a8331a-9a61-40e7-a58f-8aa9a70a1b7c {
            fill: #036b06;
          }
    
          .a0cab592-4a83-4bb5-8f9e-d2207075e5f5, .a5fb9198-1808-4612-bd63-44b945a60edb, .bd1a61ad-0bf7-4a4d-8fcf-3d32c003eee4, .f0d52c32-7ed5-4adb-afa5-80cea995ed96, .fdf989ef-3a70-4063-9fcb-db0932616bdb {
            mix-blend-mode: screen;
          }
    
          .bd1a61ad-0bf7-4a4d-8fcf-3d32c003eee4 {
            fill: url(#ab447e55-5f5c-4ee9-97e6-0697cf8ad36f);
          }
    
          .fdf989ef-3a70-4063-9fcb-db0932616bdb {
            fill: url(#a1d37303-0348-4857-b756-6a92ef4f18a3);
          }
    
          .e4a154b5-74a1-45c9-a56f-30c9ab060db2 {
            fill: #816090;
          }
    
          .a6e71904-3572-4cee-87b7-f29dd5e20657, .b84db1da-117f-436d-bc82-10387e2581b1, .bad282a8-bb46-4670-b49a-365fef85eec0 {
            fill: #fff;
          }
    
          .a3ffc2de-1e6e-414e-989e-a00b9272e2d3 {
            fill: #0a8c03;
          }
    
          .ef13590e-dd9f-44bf-ab48-4ff89ac16081 {
            fill: #ffb657;
          }
    
          .bf2c9185-81c3-41aa-b130-5d3c5eb8fce3 {
            fill: url(#a23c62c7-91a2-45b7-80e8-731e39db3525);
          }
    
          .aefe183a-891c-403a-a221-5367d50b1c9c {
            fill: url(#a8f13275-02dc-4b36-adb3-d24736c93418);
          }
    
          .bcc0a688-c777-4854-a513-95c39a5587f7 {
            fill: url(#a6dcaec3-3ebe-492b-80d1-62913851fb20);
          }
    
          .fa4c6451-7162-450d-a522-37647a04a01d {
            fill: #ffe856;
          }
    
          .f778d720-0704-491b-b16a-8d7497bc7df7 {
            fill: #d67995;
          }
    
          .a0cab592-4a83-4bb5-8f9e-d2207075e5f5 {
            fill: url(#afe28130-cf8c-48e9-bb5a-1e86f8723e13);
          }
    
          .ea756caa-9f2a-4d9d-8a0b-b08432284433 {
            fill: #ffe53b;
          }
    
          .a5fb9198-1808-4612-bd63-44b945a60edb {
            fill: url(#a5651c3f-fec7-4f44-9a5b-ea99319f2bd7);
          }
    
          .b811e8ff-6984-4f17-bc23-3ad71f17f646 {
            fill: #515151;
          }
    
          .ac456664-121f-43c8-8f20-f7391ce3f9a1 {
            fill: #050505;
          }
    
          .ae8128c1-815a-432c-ab1c-cb6428ae4cc5 {
            fill: #186000;
          }
    
          .ec64ee0c-15c3-447f-a5a1-885c36c2c047 {
            fill: #1c9b02;
          }
    
          .aadef795-996e-46d2-ab1c-123e4c34b6a4 {
            fill: url(#b697eecc-c75e-4615-8406-12ac9b554a74);
          }
    
          .ae7bde7e-c745-4e74-8637-a5d2d14b3c64 {
            fill: #86ed83;
          }
    
          .f98ed171-af74-4efa-a954-3ab52bc176e5 {
            fill: #225b18;
          }
    
          .e006935c-8f8e-427d-a7eb-9a12f67b022f {
            fill: #878584;
          }
    
          .a11e7103-4e9e-4d55-8873-cee632d38551 {
            fill: url(#ea388732-ce75-44d4-8a1e-d8ab8e2b7dac);
          }
    
          .b31fe1f1-fc82-4373-9653-f9efab5ad5d2 {
            fill: url(#b39e8438-be4f-4a9d-a294-5240224b04a0);
          }
    
          .f287f1fa-95e9-44b9-8a7a-718600c2de0d {
            fill: #fbf9fa;
          }
    
          .a05e620a-91e0-451e-a178-4b77cbee779f {
            fill: url(#a1dfa5e7-0e94-4251-9142-ec14fe2145c2);
          }
    
          .a2889555-04e5-48a6-98f1-8536a7d3168a {
            fill: url(#b5ed17ee-235d-4f9e-bd68-00ce4bc5aac5);
          }
    
          .a8df3acc-1543-4df1-8fc8-c22c4e28f64a {
            fill: url(#ed14b1be-ad8d-463d-a4b9-ae597c175347);
          }
    
          .e5172f67-6424-4d2f-be35-81a1e40d76e8 {
            fill: url(#ad685ac8-ef74-4baf-97ce-bf6fe3a5810a);
          }
    
          .b1d8df59-3a4b-44ff-aaca-12b36df5c97e {
            fill: #d03b48;
          }
    
          .bfb514c0-5c05-4e32-ac63-01bebc26bfa9 {
            fill: #fbe569;
          }
    
          .b25c96bd-ca55-44b5-8af6-13577efec909 {
            fill: #fbf9b8;
          }
    
          .a02a437c-bcf6-4139-b4ec-2ee0886270ee {
            fill: url(#abaefb4c-60b7-4767-b6ce-ef67974f21fe);
          }
    
          .f997fc81-abfe-490e-9dad-47348f43a5c3 {
            fill: url(#a5572cff-a719-4363-a61c-708b62750fe2);
          }
    
          .fc0f44df-b495-4e60-83a2-2c66410386e4 {
            fill: url(#a3e2e2b6-8c1c-4fd7-9ed8-79dc8dbf2e52);
          }
    
          .e13bc83e-1c0c-45b9-aea3-dbcdf84ebda1 {
            fill: url(#e49b9ea5-0492-4441-a2a5-44d706f68a9d);
          }
    
          .a0ee92f6-a1af-4e44-b5c8-78f7eb2a0c39 {
            fill: url(#b8faa537-2c6d-4f6c-bb68-91091d19ef4f);
          }
    
          .ba1db9b6-b126-4884-80ee-897cce014f94 {
            fill: url(#a6d56f2a-45e4-4e18-8616-f997127bc77d);
          }
    
          .bf4313d3-dba7-46a6-bd18-c5e61651e8ea {
            fill: url(#e642f160-39d8-4bf7-864d-9449da327bf4);
          }
    
          .ff012cbd-1429-4f58-81e4-87603588490a {
            opacity: 0.43;
          }
    
          .b1dc71b7-a1cd-4212-b40c-f3d65c52bb69 {
            fill: url(#add76811-a7f0-4938-8a44-213f09a7fc69);
          }
    
          .bc3d6472-354d-42ab-a933-872e82c13c23 {
            fill: url(#a83ad05e-dfd4-4fee-8df7-7915fb0a3959);
          }
    
          .a371df58-0eb2-4b82-9c7e-4f1af5b1404d {
            fill: url(#fa044fdf-0408-4630-9f33-aae4cf4667f1);
          }
    
          .e1347fd1-1eca-460b-ab3d-e9772f0fbb63 {
            fill: url(#b421a144-0a8d-487f-a417-6be4038a8589);
          }
    
          .a0efca72-91f7-4b06-a463-8af834bf0512 {
            fill: #999;
          }
    
          .a54f0a20-2048-4b4b-9330-1b76f4f1464a, .b1ce08c5-1760-4930-a7cb-da23c4f44600 {
            fill: #3aa33c;
          }
    
          .a06f4c84-de19-4c0d-9f4d-7b44bbaa6d88 {
            fill: #8fd877;
          }
    
          .fc4a7879-1831-4660-b73b-45c06db512cc {
            fill: #1d911d;
          }
    
          .e2a9fb11-fe2d-408f-a029-4565b9ab95b8 {
            fill: #ffe557;
          }
    
          .b99e5a73-f848-435d-90a3-3e92b4057de9 {
            fill: #5bba56;
          }
    
          .ad0b5977-9fc1-4661-91fb-29b930a1dbfa {
            fill: #007506;
          }
    
          .b346f4b8-479e-4b3e-8abc-c374ce44db2f, .f0d52c32-7ed5-4adb-afa5-80cea995ed96 {
            fill: #3f3f3f;
          }
    
          .ef6f8cb8-5b93-4b54-b0c3-08cd6728d0e5 {
            fill: url(#b33ea5a5-42a1-42f2-94aa-b82cc91c8225);
          }
    
          .ff91399d-ab11-4459-868c-a2e9c225902a {
            fill: url(#be3ca3f7-732a-442a-a611-db8d8fab203f);
          }
    
          .a57ad363-e06b-45f6-879c-4fefdf46876b {
            fill: url(#ae0a77fa-0c1c-4749-a585-b8a8e561bd26);
          }
    
          .fa8791ea-e311-44e2-b3a3-4e4325950b94 {
            fill: url(#aad3505e-2191-466d-a59f-61c0194e8e87);
          }
    
          .b48ad613-5d88-4aeb-b1ae-ab7ff7ae055f {
            fill: #ce5964;
          }
    
          .f7e26bd2-ff63-43d8-90f9-6bfde7331973 {
            fill: url(#e2ee5878-615f-4d9a-96aa-3c949499aa9a);
          }
    
          .be7e6e06-e58e-40e7-9084-548c47b3e6f8 {
            fill: url(#aa2228b5-04c0-411a-bc92-dc48ab1cf40d);
          }
    
          .b92d1f70-c671-40f5-ad03-8012806c4bcf {
            fill: url(#fbd4a012-4676-4a69-988d-6191347a2076);
          }
    
          .f1c77aad-ffc1-4be2-b554-b3231200649c {
            fill: url(#b9790213-eaf6-4927-b90b-34ac927cbb84);
          }
    
          .aa80f058-790d-4a46-8d2f-c96972e50846 {
            fill: url(#b3735e58-0278-41ad-bb64-a98cceaa544c);
          }
    
          .b060923e-ec42-4302-9869-79d20d7883ec {
            fill: url(#ffaeccce-ff7e-4652-928e-15b04d774cd5);
          }
    
          .f84114bb-33f2-465c-853e-8c8759260c78 {
            fill: url(#b2be9eeb-0d01-46c5-ad15-c6b1c45dbd38);
          }
    
          .acb17c08-c3fc-4b49-bf4b-3a26caf3e41c {
            fill: url(#b7a0cbb9-586a-49c4-9458-fe11abd4fa44);
          }
    
          .ef04d281-5d85-4884-a07c-32b7ece2daac {
            fill: url(#ac544909-b0ab-40aa-a4cf-8ceeb36047b3);
          }
    
          .e8210d44-a99f-4d98-9a52-e242e9e05e3e {
            fill: url(#eba72792-8c6e-4917-ae67-df440773f0ca);
          }
    
          .eba70fc0-f836-4eac-93b5-254f7a84cd94 {
            fill: url(#a51b126d-52ba-45e5-b5d1-038d00c0b879);
          }
    
          .b7c5ee6d-b899-4d23-85c2-7c307d59fe7b {
            fill: #e5e3e8;
            mix-blend-mode: lighten;
          }
    
          .e5dfd208-9124-474e-ad5e-cfd3281a089d {
            fill: url(#a7547804-b8c3-429f-a846-9b797b7a5662);
          }
    
          .ad95637f-f8c4-4b90-8648-01e483378c8c {
            opacity: 0.6;
            fill: url(#a3c729de-3bc2-4ec1-9722-094b2c01802c);
          }
    
          .bc57e0ca-78e2-407a-9935-6d50403ef128 {
            fill: #a498d8;
          }
    
          .ed27aaa1-e96a-4fd9-bbda-556e6360f3b1 {
            fill: #309328;
          }
    
          .a7e92202-a395-41b1-8b9b-a1090d2f7993 {
            fill: #008200;
          }
    
          .b5398fd8-1ce1-4c29-a1f0-75ec6de46493 {
            fill: #565656;
          }
    
          .a98dbc93-5d78-4abd-8e86-195dac752a7a {
            fill: url(#b2328080-3d2f-49f4-bdb6-55936177b55b);
          }
    
          .f4099382-ed55-4968-86c2-0a9387f16917 {
            fill: url(#ff9ec897-fb88-4245-813d-61238f9a6aaf);
          }
    
          .a207f40d-f3fe-4fe6-961c-e37ffd5b37dd {
            fill: url(#e0f2d24f-e314-4363-a297-1a85cac0ff00);
          }
    
          .e64e353c-c8a5-4411-870d-b63feec6100e {
            fill: url(#ad7c226a-ca06-4b39-91f1-d6c8735176c1);
          }
    
          .fa8aa5a2-ea71-41f2-a813-1024b4cfd2c1 {
            fill: url(#a953a6ea-fd1a-452f-ac2c-2f67e600b43e);
          }
    
          .f049c585-e30d-4eb1-ad49-66890cba2f33 {
            fill: url(#be074ae3-350c-4f3b-b02d-f6d13f1f549b);
          }
    
          .b1419cad-2508-450f-ab7e-1dcf66d93418 {
            fill: #962765;
          }
    
          .fba74e30-00f3-443d-adf7-8926d87fab6b {
            fill: #383838;
          }
    
          .ad9796e8-4304-400f-a88b-5aadba6e6578 {
            fill: #398c1e;
          }
    
          .a59eb5b3-469f-492c-a648-06fdbdd1582b {
            fill: #074400;
          }
    
          .a99dccd1-3f8e-4fe9-9a37-390e35c215d9 {
            fill: #3d9328;
          }
    
          .ab9a90fa-b50b-4083-9e71-5f4b6c14bf15 {
            fill: url(#a285fb35-dd63-413d-af4e-6ca15aa011d3);
          }
    
          .a298ec22-99ea-4d73-9ec5-cc37244bf5f3 {
            fill: url(#afc31418-9cfe-4743-b040-31c974120fe5);
          }
    
          .eb4d7127-2194-467d-b69b-f92c1bab541f {
            fill: url(#a174df53-8bef-451e-9f8d-dd69ea1ed114);
          }
    
          .a905358e-5822-40f0-bc59-7221e1c1e102, .f94c47bd-5944-480c-9541-c6c76c7ca5b8 {
            fill: #ffd8cb;
          }
    
          .e3a426b5-a93a-4eb3-add5-6a77d3cfa2bd {
            fill: #e37c69;
          }
    
          .e7f19b95-7a69-459d-8477-b0a6f5002412 {
            fill: url(#eb19c1ce-18da-4b68-aa44-36bfe14f40f6);
          }
    
          .b3da5c90-8a47-49ce-861f-d464828af9e0 {
            fill: url(#ab835604-6a9a-4b28-9090-d22271e6bb3a);
          }
    
          .ba94e3d2-5982-471d-867e-1d28b761a995 {
            fill: url(#b553becc-0e55-4c64-b710-0abcca75760b);
          }
    
          .f6ad665e-a7e1-48ab-8af8-b33a2f91cc38 {
            fill: #3f9328;
          }
    
          .e84ab866-6122-4389-842e-8ed2a822d271 {
            fill: url(#e5160df7-a47e-4922-a12d-717346d62110);
          }
    
          .f1051b7b-06d8-43cf-947e-6c2b9b0437b0 {
            fill: url(#f814270f-e38c-4769-adb0-2947f073a67e);
          }
    
          .fc7767f7-dfb1-4852-8b5d-06efcd32f0ec {
            fill: url(#a08e79a5-4d53-436d-b7bc-988952bf417e);
          }
    
          .f40855c2-1065-4a83-9a53-6bd4815f083b {
            fill: url(#ac74a044-e589-4d43-9d64-b3e8508f15f9);
          }
    
          .bef19b56-8712-4b59-a757-fe11cfa77f5c {
            fill: url(#a8887440-a725-492d-96d7-b6ae0fca8fca);
          }
    
          .f6e05870-5ff4-42cb-ba4a-148e645c49e4 {
            fill: url(#f63285ea-0a9a-426a-9547-747ccb2ebe3e);
          }
    
          .faa324cc-9562-4ac9-8e7b-496fa00a5cc9 {
            fill: url(#aaf333b8-ddff-41fe-8b43-5692cc691be0);
          }
    
          .a1ab3345-a5c1-4e5a-9720-cc452dcf0ade {
            font-size: 25.58px;
            fill: #f4f2f3;
            font-family: Rockwell;
          }
    
          .e092f010-c333-4b29-9028-33eda506881f {
            letter-spacing: -0.02em;
          }
    
          .eadc15e9-fde7-4a80-9b7d-b67e70d2ef7b {
            letter-spacing: -0.02em;
          }
        </style>
        <linearGradient id="b1aa19a5-f035-4242-bd72-650b9cba0a84" data-name="Áåçûìÿííûé ãðàäèåíò 285" x1="49.14" y1="154.36" x2="192.97" y2="154.36" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#e03347"/>
          <stop offset="1" stop-color="#ff6e27"/>
        </linearGradient>
        <linearGradient id="ecb79b89-ab3d-4921-bb9d-d3b715b6e2af" data-name="Degradado sin nombre 86" x1="158.95" y1="130.03" x2="158.95" y2="60.46" gradientUnits="userSpaceOnUse">
          <stop offset="0.02" stop-color="#383838"/>
          <stop offset="0.52"/>
        </linearGradient>
        <radialGradient id="bbc97b21-60d8-4499-99e8-84b2b9d6bd26" data-name="Áåçûìÿííûé ãðàäèåíò 13" cx="113.79" cy="89.3" r="8.08" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#ebd7e3"/>
          <stop offset="0.98" stop-color="#bdafd2"/>
        </radialGradient>
        <radialGradient id="a261fcc5-af19-4e28-bb02-17dd7b2386b0" cx="557.71" cy="89.3" r="8.08" gradientTransform="matrix(-1, 0, 0, 1, 760.63, 0)" xlink:href="#bbc97b21-60d8-4499-99e8-84b2b9d6bd26"/>
        <radialGradient id="b8dcacba-c3a8-4097-b044-3a9f54268a06" data-name="Áåçûìÿííûé ãðàäèåíò 192" cx="140.77" cy="119" r="29.37" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="aqua"/>
          <stop offset="0.99" stop-color="#26a9ff"/>
        </radialGradient>
        <radialGradient id="ba8484f3-fbfa-4003-816b-e41d7f8c1355" cx="181.64" cy="119.67" r="17.72" xlink:href="#b8dcacba-c3a8-4097-b044-3a9f54268a06"/>
        <clipPath id="f05be864-00f6-4f6e-b258-2ed48afeb04e" transform="translate(0 -12.33)">
          <polygon class="f8f0cba3-2bde-4072-a709-4990b29e92d0" points="113.09 78.83 120.55 70.43 126.83 70.36 123.22 79.29 113.09 78.83"/>
        </clipPath>
        <clipPath id="b1cf1c0c-49bf-4625-bfec-d6ba4c4292e2" transform="translate(0 -12.33)">
          <polygon class="f8f0cba3-2bde-4072-a709-4990b29e92d0" points="133.44 79.67 135.56 70.31 144.26 70.26 143.39 79.92 133.44 79.67"/>
        </clipPath>
        <clipPath id="be643806-2a05-4a7f-bf2f-090f03d7a557" transform="translate(0 -12.33)">
          <polygon class="f8f0cba3-2bde-4072-a709-4990b29e92d0" points="153.76 80.08 153.44 70.32 162.89 70.27 163.77 80.08 153.76 80.08"/>
        </clipPath>
        <clipPath id="a2142ac2-8c0d-440d-ad18-96b4bedf08a1" transform="translate(0 -12.33)">
          <polygon class="f8f0cba3-2bde-4072-a709-4990b29e92d0" points="173.98 79.93 171.55 70.1 180.03 70.05 184.2 79.67 173.98 79.93"/>
        </clipPath>
        <clipPath id="ac54921d-b613-4d14-b9dc-b74499c91bd1" transform="translate(0 -12.33)">
          <polygon class="f8f0cba3-2bde-4072-a709-4990b29e92d0" points="194.36 79.3 190.32 69.99 197.69 69.91 204.47 78.83 194.36 79.3"/>
        </clipPath>
        <linearGradient id="ab447e55-5f5c-4ee9-97e6-0697cf8ad36f" data-name="Áåçûìÿííûé ãðàäèåíò 267" x1="144.25" y1="117.91" x2="144.25" y2="91.16" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#953d5e"/>
          <stop offset="1" stop-color="#86ccd9"/>
        </linearGradient>
        <linearGradient id="a1d37303-0348-4857-b756-6a92ef4f18a3" x1="182.33" y1="119.65" x2="182.33" y2="96.88" xlink:href="#ab447e55-5f5c-4ee9-97e6-0697cf8ad36f"/>
        <linearGradient id="a23c62c7-91a2-45b7-80e8-731e39db3525" data-name="Áåçûìÿííûé ãðàäèåíò 289" x1="212.13" y1="158.13" x2="212.13" y2="127.26" gradientTransform="translate(-8.64 11.4) rotate(-1.62)" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#ff7747"/>
          <stop offset="1" stop-color="#ffad23"/>
        </linearGradient>
        <linearGradient id="a8f13275-02dc-4b36-adb3-d24736c93418" data-name="Áåçûìÿííûé ãðàäèåíò 7" x1="213.14" y1="158.13" x2="213.14" y2="124.85" gradientTransform="translate(-8.64 11.4) rotate(-1.62)" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#ff8647"/>
          <stop offset="1" stop-color="#ffb934"/>
        </linearGradient>
        <linearGradient id="a6dcaec3-3ebe-492b-80d1-62913851fb20" data-name="Áåçûìÿííûé ãðàäèåíò 194" x1="210.63" y1="158.13" x2="210.63" y2="124.54" gradientTransform="translate(-8.64 11.4) rotate(-1.62)" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#ffa700"/>
          <stop offset="1" stop-color="#ffd328"/>
        </linearGradient>
        <linearGradient id="afe28130-cf8c-48e9-bb5a-1e86f8723e13" data-name="Áåçûìÿííûé ãðàäèåíò 302" x1="193.35" y1="143.75" x2="218.11" y2="143.75" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#983b4a"/>
          <stop offset="1" stop-color="#e29d68"/>
        </linearGradient>
        <radialGradient id="a5651c3f-fec7-4f44-9a5b-ea99319f2bd7" data-name="Áåçûìÿííûé ãðàäèåíò 310" cx="202.22" cy="146.43" r="4.49" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#ffc206"/>
          <stop offset="1"/>
        </radialGradient>
        <linearGradient id="b697eecc-c75e-4615-8406-12ac9b554a74" data-name="Áåçûìÿííûé ãðàäèåíò 321" x1="199.85" y1="152.21" x2="213.65" y2="152.21" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#af8190"/>
          <stop offset="1" stop-color="#efe0d8"/>
        </linearGradient>
        <linearGradient id="ea388732-ce75-44d4-8a1e-d8ab8e2b7dac" data-name="Áåçûìÿííûé ãðàäèåíò 70" x1="209.87" y1="182.21" x2="209.87" y2="153" gradientTransform="matrix(0.94, 0.34, -0.34, 0.94, 93.68, -157.92)" gradientUnits="userSpaceOnUse">
          <stop offset="0.04" stop-color="#ff8447"/>
          <stop offset="0.26" stop-color="#ed3d47"/>
          <stop offset="1" stop-color="#ff8427"/>
        </linearGradient>
        <linearGradient id="b39e8438-be4f-4a9d-a294-5240224b04a0" data-name="Áåçûìÿííûé ãðàäèåíò 135" x1="205.8" y1="181.96" x2="205.8" y2="153.33" gradientTransform="translate(396.72 -135.4) rotate(90)" xlink:href="#a6dcaec3-3ebe-492b-80d1-62913851fb20"/>
        <linearGradient id="a1dfa5e7-0e94-4251-9142-ec14fe2145c2" x1="205.47" y1="180.62" x2="205.47" y2="154.59" xlink:href="#ea388732-ce75-44d4-8a1e-d8ab8e2b7dac"/>
        <linearGradient id="b5ed17ee-235d-4f9e-bd68-00ce4bc5aac5" data-name="Áåçûìÿííûé ãðàäèåíò 73" x1="205.93" y1="180.58" x2="205.93" y2="154.63" gradientTransform="matrix(0.94, 0.34, -0.34, 0.94, 93.68, -157.92)" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#ffa700"/>
          <stop offset="1" stop-color="#ff9c28"/>
        </linearGradient>
        <linearGradient id="ed14b1be-ad8d-463d-a4b9-ae597c175347" x1="909.62" y1="436.78" x2="909.62" y2="421.35" gradientTransform="matrix(-0.73, -0.26, 0.39, -1.1, 723.32, 778.96)" xlink:href="#ea388732-ce75-44d4-8a1e-d8ab8e2b7dac"/>
        <linearGradient id="ad685ac8-ef74-4baf-97ce-bf6fe3a5810a" data-name="Áåçûìÿííûé ãðàäèåíò 135" x1="910.37" y1="436.78" x2="910.37" y2="421.35" gradientTransform="matrix(-0.73, -0.26, 0.39, -1.1, 723.32, 778.96)" xlink:href="#a6dcaec3-3ebe-492b-80d1-62913851fb20"/>
        <linearGradient id="abaefb4c-60b7-4767-b6ce-ef67974f21fe" x1="247.93" y1="256.41" x2="247.93" y2="240.03" gradientTransform="translate(227.74 -294.52) rotate(41.41)" xlink:href="#ea388732-ce75-44d4-8a1e-d8ab8e2b7dac"/>
        <linearGradient id="a5572cff-a719-4363-a61c-708b62750fe2" data-name="Áåçûìÿííûé ãðàäèåíò 135" x1="245.65" y1="256.28" x2="245.65" y2="240.22" gradientTransform="matrix(0, 1, -1, 0, 496.01, -191.51)" xlink:href="#a6dcaec3-3ebe-492b-80d1-62913851fb20"/>
        <linearGradient id="a3e2e2b6-8c1c-4fd7-9ed8-79dc8dbf2e52" x1="245.47" y1="255.52" x2="245.47" y2="240.92" gradientTransform="translate(227.74 -294.52) rotate(41.41)" xlink:href="#ea388732-ce75-44d4-8a1e-d8ab8e2b7dac"/>
        <linearGradient id="e49b9ea5-0492-4441-a2a5-44d706f68a9d" x1="245.73" y1="255.5" x2="245.73" y2="240.95" gradientTransform="translate(227.74 -294.52) rotate(41.41)" xlink:href="#b5ed17ee-235d-4f9e-bd68-00ce4bc5aac5"/>
        <linearGradient id="b8faa537-2c6d-4f6c-bb68-91091d19ef4f" x1="859.14" y1="363.72" x2="859.14" y2="355.07" gradientTransform="matrix(-0.58, -0.51, 0.76, -0.88, 475.39, 806.71)" xlink:href="#ea388732-ce75-44d4-8a1e-d8ab8e2b7dac"/>
        <linearGradient id="a6d56f2a-45e4-4e18-8616-f997127bc77d" data-name="Áåçûìÿííûé ãðàäèåíò 135" x1="859.56" y1="363.72" x2="859.56" y2="355.07" gradientTransform="matrix(-0.58, -0.51, 0.76, -0.88, 475.39, 806.71)" xlink:href="#a6dcaec3-3ebe-492b-80d1-62913851fb20"/>
        <radialGradient id="e642f160-39d8-4bf7-864d-9449da327bf4" data-name="Degradado sin nombre 41" cx="360.85" cy="14.96" r="17.78" gradientTransform="translate(-62.78 325.96) rotate(-32.8)" gradientUnits="userSpaceOnUse">
          <stop offset="0.02" stop-color="#2aff44"/>
          <stop offset="0.14" stop-color="#21e53c"/>
          <stop offset="0.37" stop-color="#13b92f"/>
          <stop offset="0.58" stop-color="#099925"/>
          <stop offset="0.76" stop-color="#02861f"/>
          <stop offset="0.88" stop-color="#007f1d"/>
          <stop offset="0.98" stop-color="#3fff91"/>
        </radialGradient>
        <radialGradient id="add76811-a7f0-4938-8a44-213f09a7fc69" data-name="Degradado sin nombre 45" cx="360.37" cy="14.94" r="15.56" gradientTransform="translate(-62.78 325.96) rotate(-32.8)" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#a998ff"/>
          <stop offset="0.99" stop-color="#0d2a00"/>
        </radialGradient>
        <radialGradient id="a83ad05e-dfd4-4fee-8df7-7915fb0a3959" cx="257.74" cy="120.37" r="15.56" gradientTransform="translate(-11.98 44.18) rotate(-6.99)" xlink:href="#add76811-a7f0-4938-8a44-213f09a7fc69"/>
        <radialGradient id="fa044fdf-0408-4630-9f33-aae4cf4667f1" cx="360.37" cy="14.94" r="15.56" xlink:href="#add76811-a7f0-4938-8a44-213f09a7fc69"/>
        <linearGradient id="b421a144-0a8d-487f-a417-6be4038a8589" data-name="Áåçûìÿííûé ãðàäèåíò 132" x1="360.35" y1="8.27" x2="360.35" y2="8.16" gradientTransform="translate(-62.78 325.96) rotate(-32.8)" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#fdcdd3"/>
          <stop offset="1" stop-color="#ffeacd"/>
        </linearGradient>
        <linearGradient id="b33ea5a5-42a1-42f2-94aa-b82cc91c8225" data-name="Áåçûìÿííûé ãðàäèåíò 81" x1="435.14" y1="218.98" x2="435.14" y2="44.94" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#ffac81"/>
          <stop offset="1" stop-color="#ff8a73"/>
        </linearGradient>
        <linearGradient id="be3ca3f7-732a-442a-a611-db8d8fab203f" data-name="Áåçûìÿííûé ãðàäèåíò 237" x1="425.46" y1="198.1" x2="425.46" y2="77.08" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#dd899f"/>
          <stop offset="0.99" stop-color="#d360ae"/>
        </linearGradient>
        <linearGradient id="ae0a77fa-0c1c-4749-a585-b8a8e561bd26" x1="424.95" y1="161.07" x2="424.95" y2="132.78" xlink:href="#be3ca3f7-732a-442a-a611-db8d8fab203f"/>
        <linearGradient id="aad3505e-2191-466d-a59f-61c0194e8e87" x1="334.39" y1="218.98" x2="334.39" y2="24.64" xlink:href="#b33ea5a5-42a1-42f2-94aa-b82cc91c8225"/>
        <linearGradient id="e2ee5878-615f-4d9a-96aa-3c949499aa9a" x1="415.49" y1="175.26" x2="415.49" y2="163.95" xlink:href="#be3ca3f7-732a-442a-a611-db8d8fab203f"/>
        <linearGradient id="aa2228b5-04c0-411a-bc92-dc48ab1cf40d" x1="327.68" y1="177.91" x2="327.68" y2="172.15" xlink:href="#be3ca3f7-732a-442a-a611-db8d8fab203f"/>
        <linearGradient id="fbd4a012-4676-4a69-988d-6191347a2076" x1="317.96" y1="206.62" x2="317.96" y2="158.59" xlink:href="#be3ca3f7-732a-442a-a611-db8d8fab203f"/>
        <linearGradient id="b9790213-eaf6-4927-b90b-34ac927cbb84" x1="342.57" y1="147.22" x2="342.57" y2="28.64" xlink:href="#be3ca3f7-732a-442a-a611-db8d8fab203f"/>
        <linearGradient id="b3735e58-0278-41ad-bb64-a98cceaa544c" x1="298.93" y1="134.02" x2="298.93" y2="94.85" xlink:href="#be3ca3f7-732a-442a-a611-db8d8fab203f"/>
        <linearGradient id="ffaeccce-ff7e-4652-928e-15b04d774cd5" data-name="Áåçûìÿííûé ãðàäèåíò 120" x1="322.62" y1="160.2" x2="322.62" y2="126.68" gradientUnits="userSpaceOnUse">
          <stop offset="0.01" stop-color="#ff8166"/>
          <stop offset="1" stop-color="#d9707e"/>
        </linearGradient>
        <linearGradient id="b2be9eeb-0d01-46c5-ad15-c6b1c45dbd38" x1="333.7" y1="147.22" x2="333.7" y2="110.44" xlink:href="#be3ca3f7-732a-442a-a611-db8d8fab203f"/>
        <linearGradient id="b7a0cbb9-586a-49c4-9458-fe11abd4fa44" data-name="Áåçûìÿííûé ãðàäèåíò 37" x1="423.28" y1="67.19" x2="423.28" y2="37.37" gradientUnits="userSpaceOnUse">
          <stop offset="0.01" stop-color="#281742"/>
          <stop offset="1" stop-color="#322d45"/>
        </linearGradient>
        <linearGradient id="ac544909-b0ab-40aa-a4cf-8ceeb36047b3" x1="422.02" y1="87.42" x2="422.02" y2="73.15" xlink:href="#b7a0cbb9-586a-49c4-9458-fe11abd4fa44"/>
        <radialGradient id="eba72792-8c6e-4917-ae67-df440773f0ca" data-name="Degradado sin nombre 54" cx="373.61" cy="16.64" r="36" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#3fff46"/>
          <stop offset="0.99" stop-color="#1aaa00"/>
        </radialGradient>
        <radialGradient id="a51b126d-52ba-45e5-b5d1-038d00c0b879" data-name="Degradado sin nombre 50" cx="373.44" cy="98.68" r="69.48" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#48ff3f"/>
          <stop offset="0.99" stop-color="#006a12"/>
        </radialGradient>
        <linearGradient id="a7547804-b8c3-429f-a846-9b797b7a5662" data-name="Áåçûìÿííûé ãðàäèåíò 4" x1="375.88" y1="23.33" x2="375.88" y2="18.19" gradientUnits="userSpaceOnUse">
          <stop offset="0.01" stop-color="#514365"/>
          <stop offset="1" stop-color="#49455a"/>
        </linearGradient>
        <linearGradient id="a3c729de-3bc2-4ec1-9722-094b2c01802c" data-name="Áåçûìÿííûé ãðàäèåíò 22" x1="375.88" y1="9.79" x2="375.88" y2="7.07" gradientUnits="userSpaceOnUse">
          <stop offset="0.01" stop-color="#90609a"/>
          <stop offset="1" stop-color="#9783c0"/>
        </linearGradient>
        <radialGradient id="b2328080-3d2f-49f4-bdb6-55936177b55b" data-name="Degradado sin nombre 70" cx="373.99" cy="91.13" r="30.54" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#fff"/>
          <stop offset="0.99"/>
        </radialGradient>
        <radialGradient id="ff9ec897-fb88-4245-813d-61238f9a6aaf" data-name="Degradado sin nombre 78" cx="373.99" cy="68.63" r="25.38" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#fff"/>
          <stop offset="0.99" stop-color="#fff"/>
        </radialGradient>
        <linearGradient id="e0f2d24f-e314-4363-a297-1a85cac0ff00" data-name="Áåçûìÿííûé ãðàäèåíò 19" x1="342.16" y1="77.96" x2="384.1" y2="77.96" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#f3e6ee"/>
          <stop offset="0.98" stop-color="#e5dfed"/>
        </linearGradient>
        <linearGradient id="ad7c226a-ca06-4b39-91f1-d6c8735176c1" x1="390.91" y1="77.74" x2="406.3" y2="77.74" xlink:href="#e0f2d24f-e314-4363-a297-1a85cac0ff00"/>
        <linearGradient id="a953a6ea-fd1a-452f-ac2c-2f67e600b43e" data-name="Áåçûìÿííûé ãðàäèåíò 46" x1="393.43" y1="91.38" x2="405.45" y2="91.38" xlink:href="#b1aa19a5-f035-4242-bd72-650b9cba0a84"/>
        <linearGradient id="be074ae3-350c-4f3b-b02d-f6d13f1f549b" x1="393.43" y1="96.43" x2="393.43" y2="86.09" gradientTransform="matrix(1, 0, 0, 1, 0, 0)" xlink:href="#a8f13275-02dc-4b36-adb3-d24736c93418"/>
        <linearGradient id="a285fb35-dd63-413d-af4e-6ca15aa011d3" data-name="Áåçûìÿííûé ãðàäèåíò 89" x1="313.43" y1="155.91" x2="313.43" y2="88.49" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#ffae7f"/>
          <stop offset="1" stop-color="#ff9d84"/>
        </linearGradient>
        <linearGradient id="afc31418-9cfe-4743-b040-31c974120fe5" data-name="Áåçûìÿííûé ãðàäèåíò 91" x1="324.73" y1="112.06" x2="324.73" y2="88.49" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#ffae7f"/>
          <stop offset="1" stop-color="#ffb384"/>
        </linearGradient>
        <linearGradient id="a174df53-8bef-451e-9f8d-dd69ea1ed114" data-name="Áåçûìÿííûé ãðàäèåíò 112" x1="335.57" y1="102.61" x2="335.57" y2="88.49" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#ffb693"/>
          <stop offset="1" stop-color="#ffcf9c"/>
        </linearGradient>
        <linearGradient id="eb19c1ce-18da-4b68-aa44-36bfe14f40f6" data-name="Áåçûìÿííûé ãðàäèåíò 242" x1="297.71" y1="155.91" x2="297.71" y2="104.75" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#ff89ab"/>
          <stop offset="0.99" stop-color="#ea609a"/>
        </linearGradient>
        <linearGradient id="ab835604-6a9a-4b28-9090-d22271e6bb3a" x1="314.31" y1="116.75" x2="314.31" y2="112.41" xlink:href="#ffaeccce-ff7e-4652-928e-15b04d774cd5"/>
        <linearGradient id="b553becc-0e55-4c64-b710-0abcca75760b" x1="290.77" y1="149.65" x2="290.77" y2="128.57" xlink:href="#afc31418-9cfe-4743-b040-31c974120fe5"/>
        <linearGradient id="e5160df7-a47e-4922-a12d-717346d62110" x1="413.67" y1="202.31" x2="413.67" y2="126.22" xlink:href="#a285fb35-dd63-413d-af4e-6ca15aa011d3"/>
        <linearGradient id="f814270f-e38c-4769-adb0-2947f073a67e" x1="393.44" y1="142.9" x2="393.44" y2="126.35" xlink:href="#a174df53-8bef-451e-9f8d-dd69ea1ed114"/>
        <linearGradient id="a08e79a5-4d53-436d-b7bc-988952bf417e" data-name="Áåçûìÿííûé ãðàäèåíò 128" x1="397.17" y1="176.29" x2="442.88" y2="176.29" gradientUnits="userSpaceOnUse">
          <stop offset="0.01" stop-color="#b060f4"/>
          <stop offset="1" stop-color="#ffb9cd"/>
        </linearGradient>
        <linearGradient id="ac74a044-e589-4d43-9d64-b3e8508f15f9" x1="409" y1="156.64" x2="409" y2="146.15" xlink:href="#afc31418-9cfe-4743-b040-31c974120fe5"/>
        <linearGradient id="a8887440-a725-492d-96d7-b6ae0fca8fca" x1="396.17" y1="159.13" x2="396.17" y2="137.95" xlink:href="#be3ca3f7-732a-442a-a611-db8d8fab203f"/>
        <linearGradient id="f63285ea-0a9a-426a-9547-747ccb2ebe3e" x1="436.08" y1="178.07" x2="436.08" y2="164.09" xlink:href="#afc31418-9cfe-4743-b040-31c974120fe5"/>
        <linearGradient id="aaf333b8-ddff-41fe-8b43-5692cc691be0" x1="433.66" y1="218.4" x2="433.66" y2="198.1" xlink:href="#be3ca3f7-732a-442a-a611-db8d8fab203f"/>
      </defs>
      <g class="a70bd53a-d6e4-47f4-a0b0-c64a9e85cdbd">
        <g id="f134088b-fe8b-4e59-abc4-8e220f5a95f1" data-name="store">
          <g>
            <g>
              <g>
                <path class="bb592b58-ff40-4d2c-97c7-3a878f020908" d="M19.23,179.55l52.07-9.9,53.28,14.86,23.3-15.42,5.79,15.42,60-17.72c24.4,11.09,42.88,16.35,65.33,17.19l19.93-2-33.09-7.95-37-16-25.57-11.25-42.62,10.68-3.05-8.77-15.28,13.86-35.57-11.47L71.3,160.65Z" transform="translate(0 -12.33)"/>
                <path class="bbf6f969-b4f5-4275-819a-48ce5692b366" d="M213.65,166.79l-10.44-20,63.88,27.83L279,184C255.7,182.92,238.83,178.12,213.65,166.79Z" transform="translate(0 -12.33)"/>
                <polygon class="bc9a7089-0adf-4a7c-a134-86562fa5789a" points="160.59 145.13 153.67 172.17 147.88 156.76 157.54 136.36 160.59 145.13"/>
                <polygon class="b86f43ee-bf4f-4e32-b807-9376bc3e5616" points="142.26 150.23 124.58 172.17 71.3 157.32 106.69 138.75 142.26 150.23"/>
                <path class="e13306f2-37a4-433c-9f0b-8e0111218d87" d="M298.91,182l-1,1.7-20.07,1.63c-24.77-2.81-40.58-6.92-64.88-16.64l-60,17.07-5.15-15.33-23.31,15.14L71.3,170.9c-20.89,2.22-32.19,4.74-50.94,10.6l-1.13-1.95c19.94-5.08,32-7.64,52.07-9.9l53.28,14.86,23.3-15.42,5.79,15.42,60-17.72c22,9.48,36.46,15.56,65.33,17.19Z" transform="translate(0 -12.33)"/>
                <g class="bd782de1-3a79-4096-b4f4-c05d7ab93dfa">
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="77.95 156.36 88.13 153.07 98.47 156.36 95.28 161.32 77.95 156.36"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="46.82 157.2 76.11 151.94 65.63 157.2 26.46 164.59 46.82 157.2"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="78.93 146.25 71.3 149.76 90.03 146.25 95.91 141.67 78.93 146.25"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="105.46 139.4 98.47 143.06 97.6 147.11 114.64 151.94 122.97 144.9 105.46 139.4"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="125.36 145.65 117.44 153.07 129.94 156.36 134.51 155.46 138.33 149.76 125.36 145.65"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="108.13 165.01 115.78 156.36 127.88 159.42 131.11 164.07 139.59 158.26 137.84 162.07 126.18 170.19 108.13 165.01"/>
                  <polygon class="bc9a7089-0adf-4a7c-a134-86562fa5789a" points="130.3 157.2 132.95 161.32 136.6 156.36 130.3 157.2"/>
                  <polygon class="bc9a7089-0adf-4a7c-a134-86562fa5789a" points="135.46 159.51 143.77 153.99 147.88 145.13 141.75 150.8 135.46 159.51"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="139.59 160.85 140.86 157.2 148.38 152.32 147.34 155.46 139.59 160.85"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="150.17 143.26 147.32 149.76 152.73 146.51 157.3 136.87 150.17 143.26"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="152.85 147.87 151.65 155.97 157.3 158 159.95 147.63 157.59 137.7 152.85 147.87"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="154.42 168.88 151.65 158.84 156.9 159.56 154.42 168.88"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="155.8 169.47 157.75 159.51 166.13 158.26 172.26 160.85 181.23 161.32 155.8 169.47"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="183.76 160.51 174.49 159.51 176.42 157.2 187.22 154.9 194.1 157.2 183.76 160.51"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="173.87 158.84 170.23 158.26 175.05 156.59 173.87 158.84"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="158.32 157.71 165.42 157.2 167.05 151.94 159.54 153.07 158.32 157.71"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="168.51 150.51 175.42 141.81 162.54 145.71 160.96 147.37 159.95 151.94 168.51 150.51"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="97.6 161.99 100.44 156.36 115.51 155.46 108.13 163.27 104.85 163.86 97.6 161.99"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="88.21 151.94 99.47 155.46 114.59 154.45 92.01 148.79 88.21 148.79 78.93 153.99 88.21 151.94"/>
                  <polygon class="bc9a7089-0adf-4a7c-a134-86562fa5789a" points="55.66 153.99 68.3 151.66 71.3 148.31 55.66 153.99"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="167.68 156.59 168.51 152.13 178.29 149.97 174.49 154.83 167.68 156.59"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="169.82 151 176.87 141.44 187.07 139.4 178.91 148.79 169.82 151"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="175.05 156.59 180.04 149.97 186.36 153.99 177.49 156.36 175.05 156.59"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="181.23 148.79 185.47 144.53 205.22 141.81 210.92 151.81 196.74 156.36 181.23 148.79"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="186.36 143.32 189.25 138.28 201.12 135.25 203.97 135.91 206.24 140.26 186.36 143.32"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="207.68 140.86 233.24 152.32 237.31 157.2 235.8 157.71 213.01 151.69 207.68 140.86"/>
                  <polygon class="e0ccbaa8-435a-41a1-962e-598c71c3f86f" points="206.24 135.77 207.4 139.28 213.01 142.38 231.63 150.52 233.74 147.85 206.24 135.77"/>
                  <polygon class="bc9a7089-0adf-4a7c-a134-86562fa5789a" points="238.17 149.76 234.85 150.52 264.51 165.67 275.95 166.07 238.17 149.76"/>
                  <polygon class="bc9a7089-0adf-4a7c-a134-86562fa5789a" points="237.31 158.29 245.07 157.17 259.99 164.44 237.31 158.29"/>
                </g>
                <polygon class="a5b33315-5b27-46d5-a52f-6c3da65d8ef3" points="49.14 156.36 77.95 150.57 90.73 147.16 98.12 148.79 119.06 155.46 129.94 158.26 132.12 162.28 145.82 153.07 146.61 151 151.88 148.31 150.79 156.59 157.08 158.84 166.34 157.71 167.68 151.94 179.26 149.76 190.41 155.49 192.97 154.83 179.58 148.93 167.34 151.38 165.92 157.35 157.61 158.26 151.4 155.93 152.56 146.88 146.23 150.76 145.45 153.02 132.95 161.32 130.63 157.71 120.06 154.9 98.08 147.59 91.87 146.45 52.31 155.21 49.14 156.36"/>
                <path class="f9a3d940-3004-4b46-9294-7917e0e2045e" d="M194.87,166.85c.11.59-1.25,1.35-3,1.68s-3.34.12-3.45-.47,1.25-1.36,3-1.69S194.76,166.25,194.87,166.85Z" transform="translate(0 -12.33)"/>
                <path class="a61369a5-ee3c-4ee6-9532-60c069646cc6" d="M198.3,166.21c.23,1.22-2.58,2.78-6.26,3.46s-6.86.25-7.09-1,2.58-2.79,6.26-3.47S198.07,165,198.3,166.21Z" transform="translate(0 -12.33)"/>
                <polygon class="a2a69e66-0fe5-494e-aaf7-bdc62c6dd191" points="97.6 141.21 89.2 145.39 99.47 143.15 138.04 155.46 155.68 141.81 159.21 150.52 207.05 141.81 228.41 150.15 224.13 143.75 203.21 134.45 160.59 145.13 157.54 136.36 142.26 150.23 106.69 138.75 97.6 141.21"/>
              </g>
              <g>
                <g>
                  <polygon class="a737dd5e-b6c7-45d5-8457-e69946d107f5" points="112.35 133.18 87.17 138.8 232.52 134.99 209.32 129.35 112.35 133.18"/>
                  <polygon class="adb6c3e7-55f4-4acb-b649-2aa82287cc1d" points="87.17 138.8 89.15 141.6 230 139.26 232.52 134.99 87.17 138.8"/>
                  <polygon class="aeafe1e9-ceb1-4b79-98e4-844664b1304b" points="210.14 139.59 211.98 135.59 221.79 135.31 219.93 139.31 210.14 139.59"/>
                </g>
                <polygon class="ae54d307-d2c5-4c06-9f3a-3a1bed0afae2" points="107.19 30.99 109.53 64.17 208.56 65.51 210.38 30.67 107.19 30.99"/>
                <polygon class="ad55274f-b850-4bf5-9f5f-44c384bc2e45" points="107.19 30.99 109.67 50.08 209.26 48.09 208.78 61.32 109.31 61.03 107.19 30.99"/>
                <polygon class="a45e1e78-60d3-45ae-818e-31104783343c" points="114.23 129.67 111.3 60.76 206.6 60.46 203.48 130.03 114.23 129.67"/>
                <polygon class="ae54d307-d2c5-4c06-9f3a-3a1bed0afae2" points="112.05 128.96 112.4 132.25 204.52 132.25 204.76 128.69 168.92 129.67 112.05 128.96"/>
                <polygon class="adb6c3e7-55f4-4acb-b649-2aa82287cc1d" points="115.08 122.89 126.77 122.44 126.77 126.54 115.09 126.54 115.08 122.89"/>
                <polygon class="adb6c3e7-55f4-4acb-b649-2aa82287cc1d" points="163.05 119.04 174.75 118.58 174.74 122.69 163.06 122.69 163.05 119.04"/>
                <polygon class="adb6c3e7-55f4-4acb-b649-2aa82287cc1d" points="134.52 127.09 146.22 126.64 146.21 129.39 134.53 129.24 134.52 127.09"/>
                <polygon class="e8971598-2adb-4691-b9f4-f6a053c64399" points="189.07 99.36 200.77 98.9 200.76 103.01 189.08 103.01 189.07 99.36"/>
                <polygon class="a05f4af2-9a85-4caf-af0d-284df988ad8e" points="169.62 80.96 181.32 80.5 181.31 84.61 169.63 84.61 169.62 80.96"/>
                <polygon class="adb6c3e7-55f4-4acb-b649-2aa82287cc1d" points="118.85 118.79 130.54 118.33 130.53 122.44 118.86 122.44 118.85 118.79"/>
                <polygon class="a9001304-7190-42ee-94fc-c97745cc6226" points="117.67 105.03 129.37 104.57 129.36 108.68 117.69 108.68 117.67 105.03"/>
                <polygon class="adb6c3e7-55f4-4acb-b649-2aa82287cc1d" points="156.63 123.42 167.04 123.02 167.03 126.67 156.64 126.67 156.63 123.42"/>
                <polygon class="b4e51697-0c48-4477-9db3-d6aaa30fb166" points="121.62 80.3 132.04 79.9 132.03 83.55 121.63 83.55 121.62 80.3"/>
                <polygon class="b4e51697-0c48-4477-9db3-d6aaa30fb166" points="163.69 85.73 174.11 85.33 174.1 88.98 163.7 88.98 163.69 85.73"/>
                <polygon class="b4e51697-0c48-4477-9db3-d6aaa30fb166" points="193.97 103.95 204.67 103.53 204.37 107.2 193.98 107.2 193.97 103.95"/>
                <polygon class="b4e51697-0c48-4477-9db3-d6aaa30fb166" points="174.75 85.55 185.45 85.14 185.16 88.8 174.76 88.8 174.75 85.55"/>
                <polygon class="e8971598-2adb-4691-b9f4-f6a053c64399" points="115.28 100.95 128.11 101.08 128.11 104.45 115.28 104.57 115.28 100.95"/>
                <path class="f31f221b-bc63-454b-b5b3-44b70200a72b" d="M118,99l-9.69-19.66h3l8,19.66A.84.84,0,0,1,118,99Z" transform="translate(0 -12.33)"/>
                <path class="fae2f4ac-ecaa-4515-97d0-26167b6f9901" d="M198.73,99l9.69-19.66h-3L197.4,99S198.12,99.75,198.73,99Z" transform="translate(0 -12.33)"/>
                <g>
                  <polygon class="ae54d307-d2c5-4c06-9f3a-3a1bed0afae2" points="123.2 122.62 122.39 84.47 160.73 84.47 159.84 122.18 123.2 122.62"/>
                  <polygon class="bac01252-22d9-4c88-ae40-7538deba22d0" points="124.77 120.63 158.05 120.28 158.82 86.36 124.29 86.37 124.77 120.63"/>
                  <polygon class="b4b4894a-a984-45c6-873e-466904238cc5" points="160.73 84.47 161.36 84.47 160.73 122.18 159.84 122.18 160.73 84.47"/>
                  <polygon class="b4b4894a-a984-45c6-873e-466904238cc5" points="124.77 120.63 124.29 86.37 125.12 86.36 125.12 120.63 124.77 120.63"/>
                </g>
                <g>
                  <polygon class="f4352a62-8e36-4c95-a3d7-dae0bfad9c80" points="168.9 132.05 169.19 92.3 194.92 92.64 193 132.25 168.9 132.05"/>
                  <polygon class="b79c211a-570e-4681-9a23-192a2c9044e5" points="170.69 132.25 171.38 94.47 192.93 94.47 191.25 132.25 170.69 132.25"/>
                  <polygon class="f95625f7-caed-49a2-81c2-9e1586e022b2" points="192.93 94.47 192.01 94.47 190.52 132.24 191.25 132.25 192.93 94.47"/>
                  <polygon class="bb63e891-adfd-4180-89fe-a2e9b1eb9520" points="173.15 124.62 173.15 96.35 190.54 96.35 189.04 124.62 173.15 124.62"/>
                </g>
                <polygon class="a96ba5a6-6e7a-49f2-854d-ed7d00e446fe" points="205.21 91.37 206.14 70.67 111.83 73.31 112.48 88.67 205.21 91.37"/>
                <g>
                  <polygon class="b79c211a-570e-4681-9a23-192a2c9044e5" points="113.13 58.11 112.4 53.93 205.17 53.93 204 57.58 113.13 58.11"/>
                  <g>
                    <path class="f7faa69d-8150-4afe-ad1d-a5748bda865b" d="M109.08,91.31h0a5.64,5.64,0,0,1-5.45-5.08l-.74-8h10.16l.61,8A4.59,4.59,0,0,1,109.08,91.31Z" transform="translate(0 -12.33)"/>
                    <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M119,91.31h0a5.51,5.51,0,0,1-5.35-5.08l-.61-8h10.17l.46,8A4.69,4.69,0,0,1,119,91.31Z" transform="translate(0 -12.33)"/>
                    <path class="f7faa69d-8150-4afe-ad1d-a5748bda865b" d="M128.94,91.31h0a5.39,5.39,0,0,1-5.26-5.08l-.46-8h10.16l.32,8A4.78,4.78,0,0,1,128.94,91.31Z" transform="translate(0 -12.33)"/>
                    <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M138.88,91.31h0a5.28,5.28,0,0,1-5.18-5.08l-.32-8h10.16l.19,8A4.89,4.89,0,0,1,138.88,91.31Z" transform="translate(0 -12.33)"/>
                    <path class="f7faa69d-8150-4afe-ad1d-a5748bda865b" d="M148.81,91.31h0a5.16,5.16,0,0,1-5.08-5.08l-.19-8H153.7l.05,8A5,5,0,0,1,148.81,91.31Z" transform="translate(0 -12.33)"/>
                    <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M158.74,91.31h0a5.06,5.06,0,0,1-5-5.08l-.05-8h10.17l-.1,8A5.09,5.09,0,0,1,158.74,91.31Z" transform="translate(0 -12.33)"/>
                    <path class="f7faa69d-8150-4afe-ad1d-a5748bda865b" d="M168.68,91.31h0a5,5,0,0,1-4.91-5.08l.1-8H174l-.23,8A5.21,5.21,0,0,1,168.68,91.31Z" transform="translate(0 -12.33)"/>
                    <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M178.61,91.31h0a4.84,4.84,0,0,1-4.81-5.08l.23-8h10.16l-.37,8A5.32,5.32,0,0,1,178.61,91.31Z" transform="translate(0 -12.33)"/>
                    <path class="f7faa69d-8150-4afe-ad1d-a5748bda865b" d="M188.55,91.31h0a4.75,4.75,0,0,1-4.73-5.08l.37-8h10.17l-.52,8A5.43,5.43,0,0,1,188.55,91.31Z" transform="translate(0 -12.33)"/>
                    <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M198.48,91.31h0a4.65,4.65,0,0,1-4.64-5.08l.52-8h10.16l-.66,8A5.55,5.55,0,0,1,198.48,91.31Z" transform="translate(0 -12.33)"/>
                    <path class="f7faa69d-8150-4afe-ad1d-a5748bda865b" d="M208.41,91.31h0a4.56,4.56,0,0,1-4.55-5.08l.66-8h10.16l-.79,8A5.68,5.68,0,0,1,208.41,91.31Z" transform="translate(0 -12.33)"/>
                  </g>
                  <path class="f7faa69d-8150-4afe-ad1d-a5748bda865b" d="M113.13,70.44l-10.24,7.84c41.37,2.35,69.38,2.45,111.79,0L204,69.91Z" transform="translate(0 -12.33)"/>
                  <g>
                    <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="113.09 66.49 120.55 58.1 126.83 58.03 123.22 66.96 113.09 66.49"/>
                    <g class="f5834e75-3fbd-437f-b216-4fbbff5d5d84">
                      <rect class="a83109d4-c7b6-4fce-baef-50731dce8f2e" x="113.09" y="58.03" width="13.73" height="8.93"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="127.44 65.52 127.44 67.57 112.48 67.57 112.48 57.42 127.44 57.42 127.44 65.52"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="127.44 65.5 127.44 67.57 112.48 67.57 112.48 57.42 127.44 57.42 127.44 65.5"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="127.44 65.49 127.44 67.57 112.48 67.57 112.48 57.42 127.44 57.42 127.44 65.49"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="127.44 65.48 127.44 67.57 112.48 67.57 112.48 57.42 127.44 57.42 127.44 65.48"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="127.44 65.47 127.44 67.57 112.48 67.57 112.48 57.42 127.44 57.42 127.44 65.47"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="127.44 65.45 127.44 67.57 112.48 67.57 112.48 57.42 127.44 57.42 127.44 65.45"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="127.44 65.44 127.44 67.57 112.48 67.57 112.48 57.42 127.44 57.42 127.44 65.44"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="127.44 65.43 127.44 67.57 112.48 67.57 112.48 57.42 127.44 57.42 127.44 65.43"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="127.44 65.42 127.44 67.57 112.48 67.57 112.48 57.42 127.44 57.42 127.44 65.42"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="127.44 65.4 127.44 67.57 112.48 67.57 112.48 57.42 127.44 57.42 127.44 65.4"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="127.44 65.39 127.44 67.57 112.48 67.57 112.48 57.42 127.44 57.42 127.44 65.39"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="127.44 65.38 127.44 67.57 112.48 67.57 112.48 57.42 127.44 57.42 127.44 65.38"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="127.44 65.37 127.44 67.57 112.48 67.57 112.48 57.42 127.44 57.42 127.44 65.37"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="127.44 65.35 127.44 67.57 112.48 67.57 112.48 57.42 127.44 57.42 127.44 65.35"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="127.44 65.34 127.44 67.57 112.48 67.57 112.48 57.42 127.44 57.42 127.44 65.34"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="127.44 65.33 127.44 67.57 112.48 67.57 112.48 57.42 127.44 57.42 127.44 65.33"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="127.44 65.32 127.44 67.57 112.48 67.57 112.48 57.42 127.44 57.42 127.44 65.32"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.64V79.9h-15V76.77h-.86a30,30,0,0,1,1-7.53v.52h14.78Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.63V79.9H113.85v4.21A29.12,29.12,0,0,1,114,69.47v.29h13.46Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.61V79.9H115.17v4a28.56,28.56,0,0,1-.84-7.12,28.87,28.87,0,0,1,1-7.09v.06h12.14Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.6v2.3H116.5v3.8a26.8,26.8,0,0,1-.81-6.89,27.19,27.19,0,0,1,.94-6.88,29.15,29.15,0,0,1,1.09-3.27v3.1h9.72Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.59V79.9h-9.61v3.6A26.64,26.64,0,0,1,118,70.15,27.26,27.26,0,0,1,119,67v2.77h8.43Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.58V79.9h-8.29v3.4a25.86,25.86,0,0,1,.12-12.92,27.49,27.49,0,0,1,1-3.06v2.44h7.14Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.56V79.9h-7v3.19a25,25,0,0,1-.74-6.25,24.45,24.45,0,0,1,.86-6.23,25.07,25.07,0,0,1,1-3v2.11h5.85Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.55V79.9h-5.63v3a23.76,23.76,0,0,1-.72-6,24.09,24.09,0,0,1,.83-6,23.42,23.42,0,0,1,1-2.86v1.78h4.56Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.54V79.9h-4.31v2.79a23,23,0,0,1-.68-5.82,23.56,23.56,0,0,1,3-11.2v4.09h2Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.53V79.9h-3v2.59a22.32,22.32,0,0,1-.66-5.61,22.68,22.68,0,0,1,2.86-10.78v3.66h.78Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.52V79.9h-1.65v2.38a21,21,0,0,1-.64-5.39,21.88,21.88,0,0,1,2.75-10.37l-.46,3.24Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.5v2.4h-.33v2.18a20.67,20.67,0,0,1-.61-5.17,21,21,0,0,1,2.64-10l-1.7,2.81Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.49v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.48v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.47v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.45v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.44v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.43v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.42v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.4v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.39v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.38v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.37v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.35v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.34v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.33v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.32v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.3v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.29v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.28v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.27v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.25v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.24v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.23v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M127.44,77.22v0Z" transform="translate(0 -12.33)"/>
                    </g>
                  </g>
                  <g>
                    <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="133.44 67.33 135.56 57.97 144.26 57.93 143.39 67.59 133.44 67.33"/>
                    <g class="a70874db-6c98-46ff-bd60-cabc4678f9e0">
                      <rect class="a83109d4-c7b6-4fce-baef-50731dce8f2e" x="133.44" y="57.93" width="10.82" height="9.66"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 66 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 66"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.99 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.99"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.98 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.98"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.97 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.97"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.95 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.95"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.94 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.94"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.93 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.93"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.92 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.92"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.91 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.91"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.89 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.89"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.88 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.88"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.87 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.87"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.86 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.86"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.84 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.84"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.83 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.83"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.82 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.82"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.81 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.81"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.79 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.79"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.78 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.78"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.77 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.77"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.76 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.76"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.74 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.74"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.73 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.73"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.72 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.72"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.71 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.71"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.69 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.69"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.68 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.68"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.67 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.67"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.66 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.66"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.64 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.64"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="144.87 65.63 144.87 68.2 132.83 68.2 132.83 57.32 144.87 57.32 144.87 65.63"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,78v2.58h-12v-3.1h-2.28a18.49,18.49,0,0,1,2.31-8.72v.94h12Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.94v2.59h-12V77.44h-.93a17.5,17.5,0,0,1,2.21-8.3v.51h10.76Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.93v2.6H133.74v1a16,16,0,0,1-.48-4.1,16.62,16.62,0,0,1,2.09-7.89v.08h9.52Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.92v2.61h-9.8v.82a15.61,15.61,0,0,1-.46-3.88,15.86,15.86,0,0,1,2-7.47,18,18,0,0,1,2.28-3.25v2.9h6Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.9v2.63h-7.16v4a14.7,14.7,0,0,1,.13-14.15A17.16,17.16,0,0,1,140,67.35v2.3h4.88Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.89v2.64H139v3.64a14,14,0,0,1-1.64-6.68c0-4.72,2.5-9,6.45-12v4.19h1.1Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.88v2.65h-4.66v3.23a13.11,13.11,0,0,1-1.54-6.25,14.54,14.54,0,0,1,6.05-11.29v3.43h.15Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.87v2.66h-3.41v2.83A12.29,12.29,0,0,1,140,77.52,13.59,13.59,0,0,1,145.67,67l-.8,2.67Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.85v2.68h-2.16V83a11.29,11.29,0,0,1-1.33-5.42,12.57,12.57,0,0,1,5.24-9.78l-1.75,1.9Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.84v2.69H144v2a10.47,10.47,0,0,1-1.23-5,11.63,11.63,0,0,1,4.84-9l-2.7,1.14Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.83v2.7l.34,1.61a9.67,9.67,0,0,1-1.13-4.58,10.67,10.67,0,0,1,4.44-8.28l-3.65.37Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.82v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.8v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.79v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.78v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.77v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.75v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.74v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.73v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.72v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M144.87,77.71v0Z" transform="translate(0 -12.33)"/>
                    </g>
                  </g>
                  <g>
                    <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="153.76 67.75 153.44 57.98 162.89 57.94 163.77 67.75 153.76 67.75"/>
                    <g class="bf4000bc-90b9-474b-b084-63a9e42f83e4">
                      <rect class="a83109d4-c7b6-4fce-baef-50731dce8f2e" x="153.45" y="57.94" width="10.33" height="9.81"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 66.14 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 66.14"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 66.13 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 66.13"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 66.11 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 66.11"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 66.1 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 66.1"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 66.09 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 66.09"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 66.08 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 66.08"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 66.06 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 66.06"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 66.05 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 66.05"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 66.04 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 66.04"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 66.03 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 66.03"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 66.01 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 66.01"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 66 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 66"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.99 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.99"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.97 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.97"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.96 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.96"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.95 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.95"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.94 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.94"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.92 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.92"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.91 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.91"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.9 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.9"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.89 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.89"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.87 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.87"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.86 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.86"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.85 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.85"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.83 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.83"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.82 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.82"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.81 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.81"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.8 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.8"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.78 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.78"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.77 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.77"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.76 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.76"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.75 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.75"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.73 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.73"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.72 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.72"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.71 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.71"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.69 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.69"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.68 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.68"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.67 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.67"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.66 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.66"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.64 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.64"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.63 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.63"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="164.38 65.62 164.38 68.35 152.84 68.35 152.84 57.33 164.38 57.33 164.38 65.62"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M164.38,77.94v2.75H152.84V70h-3.59a15.86,15.86,0,0,1,9.85-3.12v2.81h5.28Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M164.38,77.93v2.76H152.84V70.75h-2.61a14.93,14.93,0,0,1,17.66.16h-3.51Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M164.38,77.91v2.78H152.84V71.54H151.2a13.27,13.27,0,0,1,15.7.14h-2.52Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M164.38,77.9v2.79H152.84v-3h-3.56c0-4.24,4.42-7.63,9.79-7.58a11,11,0,0,1,6.84,2.31h-1.53Z" transform="translate(0 -12.33)"/>
                      <ellipse class="a83109d4-c7b6-4fce-baef-50731dce8f2e" cx="158.99" cy="77.81" rx="6.58" ry="8.33" transform="translate(79.72 223.75) rotate(-89.47)"/>
                      <ellipse class="a83109d4-c7b6-4fce-baef-50731dce8f2e" cx="158.99" cy="77.81" rx="5.48" ry="6.94" transform="translate(79.72 223.75) rotate(-89.47)"/>
                      <ellipse class="a83109d4-c7b6-4fce-baef-50731dce8f2e" cx="158.99" cy="77.81" rx="4.39" ry="5.55" transform="translate(79.73 223.75) rotate(-89.47)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M163.16,77.85c0,1.82-1.9,3.27-4.2,3.25s-4.15-1.51-4.13-3.33,1.9-3.27,4.2-3.25S163.18,76,163.16,77.85Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M161.77,77.84A2.85,2.85,0,1,1,159,75.62,2.54,2.54,0,0,1,161.77,77.84Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M160.38,77.83A1.42,1.42,0,1,1,159,76.72,1.26,1.26,0,0,1,160.38,77.83Z" transform="translate(0 -12.33)"/>
                    </g>
                  </g>
                  <g>
                    <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="173.98 67.6 171.55 57.77 180.03 57.72 184.2 67.34 173.98 67.6"/>
                    <g class="b481ae36-0934-4b18-8f86-62de4d49523f">
                      <rect class="a83109d4-c7b6-4fce-baef-50731dce8f2e" x="171.55" y="57.72" width="12.65" height="9.88"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 66.02 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 66.02"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 66.01 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 66.01"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 66 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 66"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.99 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.99"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.97 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.97"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.96 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.96"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.95 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.95"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.94 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.94"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.92 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.92"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.91 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.91"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.9 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.9"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.89 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.89"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.87 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.87"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.86 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.86"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.85 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.85"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.84 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.84"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.82 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.82"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.81 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.81"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.8 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.8"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.79 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.79"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.77 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.77"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.76 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.76"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.75 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.75"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.74 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.74"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.72 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.72"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.71 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.71"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.7 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.7"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.69 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.69"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.67 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.67"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.66 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.66"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.65 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.65"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="184.81 65.64 184.81 68.21 170.94 68.21 170.94 57.11 184.81 57.11 184.81 65.64"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M184.81,78v2.58H170.94V69.45h10.72V65.93a19.93,19.93,0,0,1,2.47,3.66A17.69,17.69,0,0,1,186.19,78Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M184.83,78a16.54,16.54,0,0,1-.56,4.1V80.54H170.94V69.45h9.59V66.52A19,19,0,0,1,182.88,70,16.67,16.67,0,0,1,184.83,78Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M183.47,77.93a15.21,15.21,0,0,1-.53,3.89V80.54h-12V69.45h8.46V67.1a18.17,18.17,0,0,1,2.22,3.3A15.72,15.72,0,0,1,183.47,77.93Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M182.12,77.92a14.91,14.91,0,0,1-.51,3.67v-1H170.94V69.45h7.33V67.69a17.23,17.23,0,0,1,2.1,3.12A14.94,14.94,0,0,1,182.12,77.92Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M180.76,77.91A14,14,0,0,1,179,84.57v-4h-8.05V69.45h3.57V65.72C178.41,68.86,180.8,73.17,180.76,77.91Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M179.4,77.9a13.23,13.23,0,0,1-1.65,6.24v-3.6h-6.81V69.45h2.6v-3A14.57,14.57,0,0,1,179.4,77.9Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M178.05,77.88a12.26,12.26,0,0,1-1.55,5.83V80.54h-5.56V69.45h1.64V67.22A13.64,13.64,0,0,1,178.05,77.88Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M176.69,77.87a11.38,11.38,0,0,1-1.44,5.41V80.54h-4.31V69.45h.67V68A12.64,12.64,0,0,1,176.69,77.87Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M175.33,77.86a10.71,10.71,0,0,1-1.32,5V80.54h-3.07V69.45l-.3-.73A11.65,11.65,0,0,1,175.33,77.86Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M174,77.85a9.61,9.61,0,0,1-1.21,4.58V80.54h-1.82V69.47h-1.26A10.68,10.68,0,0,1,174,77.85Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M172.62,77.83A8.89,8.89,0,0,1,171.51,82V80.54h-.57V70.22h-2.23A9.72,9.72,0,0,1,172.62,77.83Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M171.26,77.82a8.7,8.7,0,0,1-3.64,6.79l3.32-4.07V71h-3.19A8.75,8.75,0,0,1,171.26,77.82Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M170.94,77.81v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M170.94,77.8v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M170.94,77.78v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M170.94,77.77v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M170.94,77.76v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M170.94,77.75v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M170.94,77.73v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M170.94,77.72v0Z" transform="translate(0 -12.33)"/>
                    </g>
                  </g>
                  <g>
                    <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="194.36 66.97 190.32 57.66 197.69 57.58 204.47 66.5 194.36 66.97"/>
                    <g class="f11521b7-3941-4b0b-9b8f-2a57e793d389">
                      <rect class="a83109d4-c7b6-4fce-baef-50731dce8f2e" x="190.33" y="57.58" width="14.15" height="9.39"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="205.08 65.53 205.08 67.58 189.72 67.58 189.72 56.97 205.08 56.97 205.08 65.53"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="205.08 65.52 205.08 67.58 189.72 67.58 189.72 56.97 205.08 56.97 205.08 65.52"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="205.08 65.51 205.08 67.58 189.72 67.58 189.72 56.97 205.08 56.97 205.08 65.51"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="205.08 65.5 205.08 67.58 189.72 67.58 189.72 56.97 205.08 56.97 205.08 65.5"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="205.08 65.49 205.08 67.58 189.72 67.58 189.72 56.97 205.08 56.97 205.08 65.49"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="205.08 65.47 205.08 67.58 189.72 67.58 189.72 56.97 205.08 56.97 205.08 65.47"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="205.08 65.46 205.08 67.58 189.72 67.58 189.72 56.97 205.08 56.97 205.08 65.46"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="205.08 65.45 205.08 67.58 189.72 67.58 189.72 56.97 205.08 56.97 205.08 65.45"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="205.08 65.44 205.08 67.58 189.72 67.58 189.72 56.97 205.08 56.97 205.08 65.44"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="205.08 65.42 205.08 67.58 189.72 67.58 189.72 56.97 205.08 56.97 205.08 65.42"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="205.08 65.41 205.08 67.58 189.72 67.58 189.72 56.97 205.08 56.97 205.08 65.41"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="205.08 65.4 205.08 67.58 189.72 67.58 189.72 56.97 205.08 56.97 205.08 65.4"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="205.08 65.39 205.08 67.58 189.72 67.58 189.72 56.97 205.08 56.97 205.08 65.39"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="205.08 65.37 205.08 67.58 189.72 67.58 189.72 56.97 205.08 56.97 205.08 65.37"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="205.08 65.36 205.08 67.58 189.72 67.58 189.72 56.97 205.08 56.97 205.08 65.36"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="205.08 65.35 205.08 67.58 189.72 67.58 189.72 56.97 205.08 56.97 205.08 65.35"/>
                      <polygon class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" points="205.08 65.34 205.08 67.58 189.72 67.58 189.72 56.97 205.08 56.97 205.08 65.34"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M205.08,77.66v2.25H189.72V69.31h14.7V66.53a29.9,29.9,0,0,1,1.13,3.59h-.47Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M205.09,77.65a28.54,28.54,0,0,1-.27,3.71V79.91h-15.1V69.31h13.41V66.83a30.69,30.69,0,0,1,1.1,3.49A28.84,28.84,0,0,1,205.09,77.65Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M203.74,77.63a28.5,28.5,0,0,1-.26,3.6V79.91H189.72V69.31h12.11V67.14a26.53,26.53,0,0,1,1.07,3.38A27.63,27.63,0,0,1,203.74,77.63Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M202.39,77.62a28.66,28.66,0,0,1-.25,3.49v-1.2H189.72V69.31h10.82V67.44a29.2,29.2,0,0,1,1,3.29A27.71,27.71,0,0,1,202.39,77.62Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M201,77.61a25.25,25.25,0,0,1-.25,3.38V79.91H189.72V69.31h9.53V67.75a27.26,27.26,0,0,1,1,3.18A26.5,26.5,0,0,1,201,77.61Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M199.69,77.6a25.59,25.59,0,0,1-.88,6.44V79.91h-9.09V69.31h6.9V65.1A26.34,26.34,0,0,1,199.69,77.6Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M198.34,77.58a24.92,24.92,0,0,1-.86,6.24V79.91h-7.76V69.31h5.65V65.5A25.41,25.41,0,0,1,198.34,77.58Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M197,77.57a24.09,24.09,0,0,1-.83,6V79.91h-6.44V69.31h4.4v-3.4A24.6,24.6,0,0,1,197,77.57Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M195.63,77.56a22.86,22.86,0,0,1-.79,5.8V79.91h-5.12V69.31h3.15v-3A23.56,23.56,0,0,1,195.63,77.56Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M194.28,77.55a22.23,22.23,0,0,1-.76,5.59V79.91h-3.8V69.31h1.9V66.72A22.64,22.64,0,0,1,194.28,77.55Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M192.93,77.53a21.88,21.88,0,0,1-.73,5.38v-3h-2.48V69.31h.65V67.12A21.83,21.83,0,0,1,192.93,77.53Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M191.58,77.52a20.59,20.59,0,0,1-.71,5.16V79.91h-1.15V69.31l-.6-1.79A21,21,0,0,1,191.58,77.52Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M190.23,77.51a19.76,19.76,0,0,1-.68,4.94l.17-2.54V69.31l-1.85-1.38A20.1,20.1,0,0,1,190.23,77.51Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.5v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.48v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.47v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.46v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.45v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.44v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.42v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.41v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.4v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.39v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.37v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.36v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.35v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.34v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.32v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.31v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.3v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.29v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.27v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.26v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.25v0Z" transform="translate(0 -12.33)"/>
                      <path class="ecc2b530-9db7-486d-9a9a-b9d23e44befb" d="M189.72,77.24v0Z" transform="translate(0 -12.33)"/>
                    </g>
                  </g>
                </g>
                <polygon class="ae54d307-d2c5-4c06-9f3a-3a1bed0afae2" points="120.69 122.18 120.77 123.64 160.9 123.64 160.9 121.68 120.69 122.18"/>
                <polygon class="a7a8331a-9a61-40e7-a58f-8aa9a70a1b7c" points="123.22 123.64 124.69 126.67 158.99 126.64 160.6 123.64 123.22 123.64"/>
                <polygon class="b4b4894a-a984-45c6-873e-466904238cc5" points="160.9 121.68 162.13 121.91 162.12 123.64 160.9 123.64 160.9 121.68"/>
                <polygon class="bd1a61ad-0bf7-4a4d-8fcf-3d32c003eee4" points="129.71 91.37 131.23 110.49 138.28 110.49 138.73 117.91 140.13 117.91 139.51 112.17 147.79 112.17 148.18 117.91 149.81 117.91 150.04 108.52 158.35 106.98 158.79 91.16 129.71 91.37"/>
                <polygon class="fdf989ef-3a70-4063-9fcb-db0932616bdb" points="174.75 97.22 175.47 111.29 178.99 111.29 178.99 117.06 180.43 117.06 180.1 113.14 183.97 113.14 183.92 117.06 187.22 117.06 189.07 119.65 189.91 96.88 174.75 97.22"/>
                <polygon class="e4a154b5-74a1-45c9-a56f-30c9ab060db2" points="128.11 104.45 130.06 113.51 149.53 111.65 150.38 102.17 128.11 104.45"/>
                <polygon class="b79c211a-570e-4681-9a23-192a2c9044e5" points="128.11 104.45 150.38 102.17 151.22 110.69 129.37 112.77 128.11 104.45"/>
                <polygon class="b79c211a-570e-4681-9a23-192a2c9044e5" points="150.38 102.17 142.47 97.52 128.11 104.45 128.92 104.36 142.44 97.81 149.92 102.22 150.38 102.17"/>
                <g>
                  <path class="bad282a8-bb46-4670-b49a-365fef85eec0" d="M133.63,119.34a1.79,1.79,0,0,1,.55-.67,1.66,1.66,0,0,1,.81-.3,1.57,1.57,0,0,1,.85.15,1.76,1.76,0,0,1,.66.55,1.58,1.58,0,0,1,.31.81,1.56,1.56,0,0,1-.15.85,1.71,1.71,0,0,1-.56.66,1.66,1.66,0,0,1-.8.3,1.54,1.54,0,0,1-.85-.15,1.58,1.58,0,0,1-.66-.54,1.49,1.49,0,0,1-.3-.81A1.65,1.65,0,0,1,133.63,119.34Zm.7,1.3a1.09,1.09,0,0,0,.4.34,1,1,0,0,0,.53.09,1,1,0,0,0,.49-.19,1,1,0,0,0,.32-.41,1,1,0,0,0,.07-.53,1,1,0,0,0-.18-.52,1,1,0,0,0-.39-.34.93.93,0,0,0-.52-.09.91.91,0,0,0-.49.18,1,1,0,0,0-.33.41,1.12,1.12,0,0,0-.08.55A1.16,1.16,0,0,0,134.33,120.64Z" transform="translate(0 -12.33)"/>
                  <path class="bad282a8-bb46-4670-b49a-365fef85eec0" d="M139.23,118.3a1,1,0,0,1,.4.77,1.31,1.31,0,0,1-.06.56.92.92,0,0,1-.33.45,1.19,1.19,0,0,1-.64.23l-.46,0,.1,1-.64.06-.3-3.25,1-.09A1.35,1.35,0,0,1,139.23,118.3Zm-.41,1.28a.46.46,0,0,0,.14-.21.44.44,0,0,0,0-.22.59.59,0,0,0-.13-.32.46.46,0,0,0-.41-.13l-.46,0,.09,1,.46,0A.47.47,0,0,0,138.82,119.58Z" transform="translate(0 -12.33)"/>
                  <path class="bad282a8-bb46-4670-b49a-365fef85eec0" d="M142.32,117.72l.06.62-1.58.14.07.7,1.39-.13.06.61-1.4.14.07.7,1.64-.16.06.62-2.28.22-.31-3.25Z" transform="translate(0 -12.33)"/>
                  <path class="bad282a8-bb46-4670-b49a-365fef85eec0" d="M146,117.38l.32,3.38h0l-2.47-1.84.2,1.92-.65.06-.32-3.38h0l2.46,1.87-.19-2Z" transform="translate(0 -12.33)"/>
                </g>
                <polygon class="a3ffc2de-1e6e-414e-989e-a00b9272e2d3" points="128.11 53.93 146.22 25.78 218.22 20.51 216.49 44.51 173.79 53.93 128.11 53.93"/>
                <polygon class="f7faa69d-8150-4afe-ad1d-a5748bda865b" points="216.49 44.51 209.26 49.76 209.26 48.09 178.99 53.93 173.79 53.93 216.49 44.51"/>
                <polygon class="ef13590e-dd9f-44bf-ab48-4ff89ac16081" points="173.79 53.93 133.11 46.15 128.11 53.93 173.79 53.93"/>
                <polygon class="ef13590e-dd9f-44bf-ab48-4ff89ac16081" points="146.22 25.78 173.79 53.93 139.67 35.96 146.22 25.78"/>
                <polygon class="ef13590e-dd9f-44bf-ab48-4ff89ac16081" points="160.6 24.73 173.79 53.93 171.55 23.93 160.6 24.73"/>
                <polygon class="ef13590e-dd9f-44bf-ab48-4ff89ac16081" points="186.94 22.8 173.79 53.93 199.17 21.91 186.94 22.8"/>
                <polygon class="ef13590e-dd9f-44bf-ab48-4ff89ac16081" points="218.22 20.51 173.79 53.93 216.49 37.22 218.22 20.51"/>
                <polygon class="f7faa69d-8150-4afe-ad1d-a5748bda865b" points="116.17 133.03 110.5 136.01 204.52 132.25 137.27 132.25 116.17 133.03"/>
              </g>
              <g>
                <path class="bf2c9185-81c3-41aa-b130-5d3c5eb8fce3" d="M214.05,132.5a16.62,16.62,0,0,0-3,.09l-.67.09c-9.28,1.4-17.33,11.53-15,18.36l4.9,12.66,14.09-14.06C221.4,142.21,221.62,133.1,214.05,132.5Zm-8.72,16.43c-2.94.23-4.48-2.06-3.44-5.13a9.88,9.88,0,0,1,7.58-6.16c3.15-.34,4.7,2,3.45,5.13S208.28,148.7,205.33,148.93Z" transform="translate(0 -12.33)"/>
                <path class="aefe183a-891c-403a-a221-5367d50b1c9c" d="M197.33,163.78l2.89-.08s14.93-14.22,17.47-18.58a12.5,12.5,0,0,0,2-7.78s-.31-6-5.88-7.32c0,0,2.81,4.16,1.81,8.58S197.33,163.78,197.33,163.78Z" transform="translate(0 -12.33)"/>
                <path class="bcc0a688-c777-4854-a513-95c39a5587f7" d="M212.48,129.82a16.71,16.71,0,0,0-3,.09l-.67.09c-6.38,1-12.18,6.05-14.43,11.36a9.88,9.88,0,0,0-.6,7l.66,2.84,2.92,12.58L212.73,147a24,24,0,0,0,2.66-3.32,15.15,15.15,0,0,0,2.7-7.34C218.27,132.78,216.44,130.14,212.48,129.82Zm-1.14,10.27c-1.24,3.17-4.64,5.93-7.59,6.16s-4.48-2.07-3.43-5.13a7.17,7.17,0,0,1,.5-1.14,10,10,0,0,1,7.08-5c2.26-.24,3.69.87,3.86,2.69A5.24,5.24,0,0,1,211.34,140.09Z" transform="translate(0 -12.33)"/>
                <path class="fa4c6451-7162-450d-a522-37647a04a01d" d="M215.35,143.68l2.34,1.44a14.78,14.78,0,0,0,2-7.51l-1.61-1.31A15.84,15.84,0,0,1,215.35,143.68Z" transform="translate(0 -12.33)"/>
                <path class="f778d720-0704-491b-b16a-8d7497bc7df7" d="M202.93,137.35l2.23,2.14s3.68-2.87,6.62-1.52C211.87,136.3,209.54,132.47,202.93,137.35Z" transform="translate(0 -12.33)"/>
                <path class="a0cab592-4a83-4bb5-8f9e-d2207075e5f5" d="M218.11,136.3a13.84,13.84,0,0,1-2.72,7.34l0,.05-20.94,7.51-.66-2.84a9.88,9.88,0,0,1,.6-7l6.47-1.38a7.17,7.17,0,0,0-.5,1.14c-1,3.06.49,5.36,3.43,5.13s6.35-3,7.59-6.16a5.24,5.24,0,0,0,.42-2.44l6.33-1.35Z" transform="translate(0 -12.33)"/>
                <polygon class="f778d720-0704-491b-b16a-8d7497bc7df7" points="195.91 145.31 202.93 145.33 203.24 148.44 200.22 151.37 197.33 151.45 195.91 145.31"/>
                <path class="ea756caa-9f2a-4d9d-8a0b-b08432284433" d="M199.49,161.45s11.21-11.94,15.29-17.77c4.26-6.07,3.07-10.53,1.69-12.22,0,0,3,3,1.06,8.33C215.35,145.83,199.49,161.45,199.49,161.45Z" transform="translate(0 -12.33)"/>
                <path class="a5fb9198-1808-4612-bd63-44b945a60edb" d="M200.32,141.12s-2,5.11,1.85,5.67,8.19-3.78,8.82-5.91c0,.23-3.27,6.06-8.36,5.33C198.89,145.67,200.32,141.12,200.32,141.12Z" transform="translate(0 -12.33)"/>
                <path class="b84db1da-117f-436d-bc82-10387e2581b1" d="M217.25,139a3.77,3.77,0,0,0-1.6,1.65c-.31.94.8,1.42.8,1.42S218.18,139.86,217.25,139Z" transform="translate(0 -12.33)"/>
              </g>
              <g>
                <polygon class="b811e8ff-6984-4f17-bc23-3ad71f17f646" points="78.87 105.92 68.92 145.03 70.38 144.8 81.64 106.47 78.87 105.92"/>
                <polygon class="ac456664-121f-43c8-8f20-f7391ce3f9a1" points="70.38 144.8 71.53 144.62 84.31 107.14 81.64 106.47 70.38 144.8"/>
                <polygon class="ac456664-121f-43c8-8f20-f7391ce3f9a1" points="62.89 96.94 61.64 98.56 82.83 144.13 84.03 143.85 62.89 96.94"/>
                <polygon class="b811e8ff-6984-4f17-bc23-3ad71f17f646" points="84.03 143.85 85.37 143.32 81.55 133.36 100.09 126.86 104.2 136.42 105.56 135.86 87.21 90.78 62.89 96.94 84.03 143.85"/>
                <polygon class="b79c211a-570e-4681-9a23-192a2c9044e5" points="98.28 127.5 102.76 136.69 104.2 136.42 100.09 126.86 98.28 127.5"/>
                <polygon class="ae8128c1-815a-432c-ab1c-cb6428ae4cc5" points="66.15 97.58 65.89 99.41 80.31 131.13 99.79 124.81 100.05 124.36 66.15 97.58"/>
                <polygon class="ec64ee0c-15c3-447f-a5a1-885c36c2c047" points="66.15 97.58 80.98 130.42 100.05 124.36 86.75 92.38 66.15 97.58"/>
                <polygon class="a96ba5a6-6e7a-49f2-854d-ed7d00e446fe" points="99.79 124.81 98.96 125.68 80.46 132.5 65.42 100.44 65.89 99.41 80.31 131.13 99.79 124.81"/>
              </g>
              <polygon class="aadef795-996e-46d2-ab1c-123e4c34b6a4" points="199.85 153.31 207.12 151 211.64 149.97 213.65 154.45 200.74 154.37 199.85 153.31"/>
              <g>
                <path class="ef7afe03-36b4-47ba-9f7b-f6b261ed2f5c" d="M78,90.8l-1.59-2.41a13.5,13.5,0,0,1,7.13-4.11,13.35,13.35,0,0,1,8.06.89L91.13,88a11.42,11.42,0,0,0-6.95-.77A11.58,11.58,0,0,0,78,90.8Z" transform="translate(0 -12.33)"/>
                <path class="ef7afe03-36b4-47ba-9f7b-f6b261ed2f5c" d="M80.68,94.44,79.09,92a10.36,10.36,0,0,1,5.43-3.13,10.25,10.25,0,0,1,6.15.68l-.5,2.84A8.33,8.33,0,0,0,80.68,94.44Z" transform="translate(0 -12.33)"/>
                <path class="ef7afe03-36b4-47ba-9f7b-f6b261ed2f5c" d="M83.52,98l-1.61-2.39A6.63,6.63,0,0,1,89.52,94L89,96.81A4.79,4.79,0,0,0,83.52,98Z" transform="translate(0 -12.33)"/>
              </g>
              <g>
                <polygon class="b79c211a-570e-4681-9a23-192a2c9044e5" points="17.72 78.04 14.68 81.43 29.15 108.96 47.25 105.95 49.2 104.75 17.72 78.04"/>
                <polygon class="ae7bde7e-c745-4e74-8637-a5d2d14b3c64" points="49.2 104.75 38.29 77.74 17.72 78.04 30.26 107.26 49.2 104.75"/>
                <polygon class="f98ed171-af74-4efa-a954-3ab52bc176e5" points="39.05 100 29.38 105.34 19.96 83.27 31.21 80.78 39.05 100"/>
                <g>
                  <path d="M38.68,107.41a10.65,10.65,0,0,0-.85-2.49c-.27-.49-.53-.71-.75-.66a.42.42,0,0,0-.28.26,1.59,1.59,0,0,0-.12.63,6.65,6.65,0,0,0,.09,1.07c.06.43.17,1,.32,1.57a10.13,10.13,0,0,0,.86,2.52c.28.49.53.71.76.66s.35-.37.37-.94A10.6,10.6,0,0,0,38.68,107.41Zm-6-9.41a10.82,10.82,0,0,1,.33,2.17,5.48,5.48,0,0,1-.17,1.61,2.44,2.44,0,0,1-.56,1.06,1.7,1.7,0,0,1-.86.51,1.84,1.84,0,0,1-1,0,2.46,2.46,0,0,1-1-.66,5.53,5.53,0,0,1-.88-1.35,12.46,12.46,0,0,1-1.06-4.36,4.9,4.9,0,0,1,.17-1.58,2.09,2.09,0,0,1,.58-1,1.94,1.94,0,0,1,.88-.47,1.79,1.79,0,0,1,1,0,2.5,2.5,0,0,1,1,.65,5.65,5.65,0,0,1,.88,1.34A10.57,10.57,0,0,1,32.63,98Zm3-4.4q-.19,1.65-.39,3.69c-.13,1.36-.26,2.83-.38,4.42s-.23,3.27-.33,5.05-.19,3.65-.28,5.6l-.75,0h-.66a2.77,2.77,0,0,0-.58.1c.14-.92.27-1.93.4-3s.24-2.23.35-3.4.21-2.34.3-3.52.16-2.31.22-3.4.1-2.09.13-3,0-1.73,0-2.41ZM31,98.4a10.59,10.59,0,0,0-.85-2.5c-.29-.48-.54-.7-.75-.64a.43.43,0,0,0-.29.24,1.45,1.45,0,0,0-.11.63,6.48,6.48,0,0,0,.08,1.07q.11.66.33,1.59a10.45,10.45,0,0,0,.86,2.52c.28.5.54.72.76.67s.35-.38.37-1A11,11,0,0,0,31,98.4ZM40.33,107a10.72,10.72,0,0,1,.32,2.18,5.44,5.44,0,0,1-.16,1.6,2.41,2.41,0,0,1-.57,1,1.78,1.78,0,0,1-1.88.46,2.46,2.46,0,0,1-1-.65,5.53,5.53,0,0,1-.88-1.35A12.5,12.5,0,0,1,35.11,106a5.19,5.19,0,0,1,.17-1.58,2.23,2.23,0,0,1,.58-1,2,2,0,0,1,.88-.48,1.83,1.83,0,0,1,1,0,2.24,2.24,0,0,1,1,.65,5.11,5.11,0,0,1,.88,1.33A11.34,11.34,0,0,1,40.33,107Z" transform="translate(0 -12.33)"/>
                  <path d="M38.74,107.35a10.86,10.86,0,0,0-.84-2.5c-.28-.49-.54-.71-.76-.66a.46.46,0,0,0-.29.26,1.62,1.62,0,0,0-.11.63,5.61,5.61,0,0,0,.09,1.07c.06.44.17,1,.32,1.58a10.69,10.69,0,0,0,.86,2.53c.28.49.54.71.76.65s.36-.37.37-.94A10.6,10.6,0,0,0,38.74,107.35Zm-6.06-9.43A10.81,10.81,0,0,1,33,100.1a5.56,5.56,0,0,1-.17,1.61,2.44,2.44,0,0,1-.56,1.06,1.74,1.74,0,0,1-.86.51,1.84,1.84,0,0,1-1,0,2.33,2.33,0,0,1-1-.66,5.52,5.52,0,0,1-.89-1.36,11.6,11.6,0,0,1-.72-2.1,10.78,10.78,0,0,1-.34-2.26,5,5,0,0,1,.17-1.59,2.14,2.14,0,0,1,.58-1,2.06,2.06,0,0,1,.88-.48,1.93,1.93,0,0,1,1,0,2.47,2.47,0,0,1,1,.65A5.37,5.37,0,0,1,32,95.82,10.92,10.92,0,0,1,32.68,97.92Zm3-4.41c-.14,1.1-.27,2.33-.4,3.7s-.25,2.84-.37,4.42-.23,3.28-.34,5.07-.19,3.65-.27,5.6l-.76,0c-.21,0-.43,0-.66,0a2.77,2.77,0,0,0-.58.1c.14-.92.27-1.93.4-3s.24-2.24.35-3.41.21-2.34.3-3.52.16-2.32.22-3.4.1-2.1.13-3,0-1.73,0-2.41ZM31,98.32a10.15,10.15,0,0,0-.85-2.5c-.28-.49-.53-.7-.75-.65a.43.43,0,0,0-.28.25A1.5,1.5,0,0,0,29,96a5.83,5.83,0,0,0,.09,1.08c.06.44.17,1,.32,1.59a10.91,10.91,0,0,0,.86,2.52c.29.5.54.73.77.67s.35-.37.37-1A11.17,11.17,0,0,0,31,98.32Zm9.35,8.62a11,11,0,0,1,.33,2.19,5.51,5.51,0,0,1-.16,1.61,2.41,2.41,0,0,1-.57,1,1.79,1.79,0,0,1-1.89.46,2.46,2.46,0,0,1-1-.66,5.27,5.27,0,0,1-.88-1.34,10.14,10.14,0,0,1-.72-2.11,11.11,11.11,0,0,1-.34-2.24,5,5,0,0,1,.17-1.59,2.23,2.23,0,0,1,.58-1,2,2,0,0,1,.88-.48,1.83,1.83,0,0,1,1,0,2.24,2.24,0,0,1,1,.65,4.94,4.94,0,0,1,.88,1.34A9.93,9.93,0,0,1,40.39,106.94Z" transform="translate(0 -12.33)"/>
                  <path d="M38.81,107.28a10.94,10.94,0,0,0-.85-2.5c-.28-.49-.53-.71-.76-.65a.42.42,0,0,0-.29.25,1.64,1.64,0,0,0-.11.64,5.67,5.67,0,0,0,.09,1.07c.06.43.17,1,.32,1.58a10.52,10.52,0,0,0,.86,2.53c.28.5.54.71.77.66s.35-.37.37-.94A11.31,11.31,0,0,0,38.81,107.28Zm-6.08-9.44a10.14,10.14,0,0,1,.33,2.18,5.51,5.51,0,0,1-.16,1.61,2.49,2.49,0,0,1-.57,1.06,1.79,1.79,0,0,1-.87.52,1.84,1.84,0,0,1-1,0,2.39,2.39,0,0,1-1-.67,5.54,5.54,0,0,1-.89-1.35A11.73,11.73,0,0,1,27.85,99a10.77,10.77,0,0,1-.34-2.27,5,5,0,0,1,.17-1.59,2.19,2.19,0,0,1,.58-1,2,2,0,0,1,.89-.48,1.89,1.89,0,0,1,1,0,2.36,2.36,0,0,1,1,.66A4.78,4.78,0,0,1,32,95.74,9.83,9.83,0,0,1,32.73,97.84Zm3-4.42c-.13,1.1-.26,2.34-.39,3.7s-.26,2.85-.38,4.44-.23,3.28-.33,5.07-.19,3.67-.28,5.62l-.75,0c-.21,0-.43,0-.66,0a2.25,2.25,0,0,0-.59.1c.14-.92.27-1.94.4-3s.24-2.25.36-3.42.21-2.35.29-3.53.16-2.32.22-3.41.11-2.1.13-3,0-1.73,0-2.41Zm-4.67,4.82a10.71,10.71,0,0,0-.85-2.51c-.29-.49-.54-.7-.76-.65a.45.45,0,0,0-.28.25,1.55,1.55,0,0,0-.12.63A8.32,8.32,0,0,0,29.17,97c.07.44.17,1,.33,1.59a10.73,10.73,0,0,0,.86,2.53c.28.5.54.72.77.67s.35-.38.37-1A11.17,11.17,0,0,0,31.09,98.24Zm9.37,8.64a11,11,0,0,1,.33,2.19,5.48,5.48,0,0,1-.17,1.61,2.31,2.31,0,0,1-.57,1,1.8,1.8,0,0,1-.88.51,1.84,1.84,0,0,1-1,0,2.46,2.46,0,0,1-1-.66,5.53,5.53,0,0,1-.88-1.35,10.14,10.14,0,0,1-.72-2.11,10.43,10.43,0,0,1-.34-2.25,5,5,0,0,1,.17-1.59,2.14,2.14,0,0,1,.58-1,2,2,0,0,1,.88-.48,1.83,1.83,0,0,1,1,0,2.33,2.33,0,0,1,1,.65,5.18,5.18,0,0,1,.88,1.34A9.83,9.83,0,0,1,40.46,106.88Z" transform="translate(0 -12.33)"/>
                  <path d="M38.87,107.22a10.76,10.76,0,0,0-.85-2.5c-.28-.5-.53-.72-.76-.66a.44.44,0,0,0-.29.25,1.72,1.72,0,0,0-.11.64A5.83,5.83,0,0,0,37,106c.06.43.17,1,.32,1.58a10.8,10.8,0,0,0,.86,2.54c.29.49.54.71.77.65s.36-.37.37-.94A10.79,10.79,0,0,0,38.87,107.22Zm-6.08-9.46a10.07,10.07,0,0,1,.32,2.18,5.62,5.62,0,0,1-.16,1.62,2.49,2.49,0,0,1-.57,1.06,1.87,1.87,0,0,1-.87.52,1.84,1.84,0,0,1-1,0,2.27,2.27,0,0,1-1-.67,4.93,4.93,0,0,1-.89-1.36A10.72,10.72,0,0,1,27.89,99a10.87,10.87,0,0,1-.34-2.27,4.93,4.93,0,0,1,.17-1.59,2.17,2.17,0,0,1,.58-1,2,2,0,0,1,.89-.48,1.93,1.93,0,0,1,1,0,2.43,2.43,0,0,1,1,.66,5.18,5.18,0,0,1,.88,1.34A10.72,10.72,0,0,1,32.79,97.76Zm3-4.43c-.13,1.1-.26,2.34-.39,3.71s-.26,2.85-.38,4.45-.23,3.28-.34,5.08-.19,3.67-.27,5.63l-.76,0c-.21,0-.43,0-.66,0a2.33,2.33,0,0,0-.59.1c.14-.93.27-1.94.4-3.05s.25-2.25.36-3.43.21-2.35.29-3.54.17-2.32.23-3.41.1-2.11.13-3,0-1.74,0-2.42Zm-4.68,4.83a10.45,10.45,0,0,0-.86-2.51q-.42-.74-.75-.66a.47.47,0,0,0-.29.25,1.45,1.45,0,0,0-.11.63A6.59,6.59,0,0,0,29.21,97c.07.44.18,1,.33,1.6a11,11,0,0,0,.86,2.53c.29.51.55.73.78.68s.35-.38.36-1A10.54,10.54,0,0,0,31.14,98.16Zm9.39,8.66a10.23,10.23,0,0,1,.32,2.19,5.22,5.22,0,0,1-.16,1.62,2.51,2.51,0,0,1-.57,1.05,1.82,1.82,0,0,1-.88.5,1.78,1.78,0,0,1-1,0,2.46,2.46,0,0,1-1-.66,5.25,5.25,0,0,1-.88-1.35,10.84,10.84,0,0,1-.73-2.12,11.19,11.19,0,0,1-.34-2.25,4.93,4.93,0,0,1,.17-1.59,2.22,2.22,0,0,1,.59-1,1.91,1.91,0,0,1,.88-.48,1.83,1.83,0,0,1,1,0,2.22,2.22,0,0,1,1,.65,5.37,5.37,0,0,1,.89,1.34A11.46,11.46,0,0,1,40.53,106.82Z" transform="translate(0 -12.33)"/>
                  <path d="M38.93,107.16a10.42,10.42,0,0,0-.85-2.51c-.28-.5-.53-.72-.76-.66a.43.43,0,0,0-.29.26,1.62,1.62,0,0,0-.11.63A5.7,5.7,0,0,0,37,106c.06.44.17,1,.32,1.59a10.12,10.12,0,0,0,.87,2.54c.28.5.54.72.77.66s.35-.37.37-1A10.92,10.92,0,0,0,38.93,107.16Zm-6.09-9.48a10.23,10.23,0,0,1,.32,2.19,5.62,5.62,0,0,1-.16,1.62,2.55,2.55,0,0,1-.57,1.06,1.76,1.76,0,0,1-1.89.47,2.39,2.39,0,0,1-1-.67,5.34,5.34,0,0,1-.89-1.36,13,13,0,0,1-1.07-4.4A5,5,0,0,1,27.76,95a2.17,2.17,0,0,1,.58-1,2,2,0,0,1,.89-.48,1.93,1.93,0,0,1,1,0,2.46,2.46,0,0,1,1,.66,5.36,5.36,0,0,1,.88,1.34A10.84,10.84,0,0,1,32.84,97.68Zm3-4.44c-.13,1.11-.27,2.34-.4,3.72s-.25,2.85-.38,4.45-.23,3.3-.33,5.1-.2,3.68-.28,5.64l-.76,0-.66,0a2,2,0,0,0-.59.1c.14-.93.27-1.95.4-3.06s.25-2.25.36-3.43.21-2.36.3-3.55.16-2.33.22-3.42.1-2.11.13-3,0-1.74,0-2.42Zm-4.69,4.84a10.57,10.57,0,0,0-.86-2.52c-.29-.49-.54-.71-.76-.65a.44.44,0,0,0-.28.24,1.45,1.45,0,0,0-.12.64,5.83,5.83,0,0,0,.09,1.08c.06.44.17,1,.32,1.6a10.6,10.6,0,0,0,.87,2.54c.29.5.54.73.77.67s.36-.37.37-1A11.17,11.17,0,0,0,31.19,98.08Zm9.4,8.68a9.71,9.71,0,0,1,.33,2.2,5.19,5.19,0,0,1-.16,1.61,2.4,2.4,0,0,1-.58,1.06,1.86,1.86,0,0,1-.88.5,1.83,1.83,0,0,1-1,0,2.33,2.33,0,0,1-1-.66,4.93,4.93,0,0,1-.89-1.36,10.84,10.84,0,0,1-.73-2.12,10.6,10.6,0,0,1-.34-2.26,5,5,0,0,1,.17-1.59,2.21,2.21,0,0,1,.58-1,2,2,0,0,1,.89-.48,2,2,0,0,1,1,0,2.36,2.36,0,0,1,1,.66,5.11,5.11,0,0,1,.89,1.34A10.25,10.25,0,0,1,40.59,106.76Z" transform="translate(0 -12.33)"/>
                  <path d="M39,107.1a10.91,10.91,0,0,0-.86-2.52c-.28-.49-.53-.71-.76-.66a.46.46,0,0,0-.29.26,1.64,1.64,0,0,0-.11.64,5.83,5.83,0,0,0,.09,1.08c.06.43.17,1,.32,1.59a10.39,10.39,0,0,0,.87,2.55c.28.49.54.71.77.66s.35-.38.37-1A10.79,10.79,0,0,0,39,107.1Zm-6.11-9.51a10.4,10.4,0,0,1,.32,2.2,5.29,5.29,0,0,1-.16,1.62,2.43,2.43,0,0,1-.57,1.07,1.76,1.76,0,0,1-1.89.47,2.35,2.35,0,0,1-1-.67,5.7,5.7,0,0,1-.89-1.37,13,13,0,0,1-1.07-4.4,5,5,0,0,1,.17-1.6,2.1,2.1,0,0,1,.59-1,1.94,1.94,0,0,1,.89-.48,1.83,1.83,0,0,1,1,0,2.36,2.36,0,0,1,1,.66,5,5,0,0,1,.89,1.35A10.72,10.72,0,0,1,32.89,97.59Zm3-4.44c-.14,1.11-.27,2.35-.4,3.72s-.26,2.87-.38,4.47-.23,3.3-.34,5.1-.19,3.69-.27,5.66l-.77,0c-.21,0-.43,0-.66,0a2.36,2.36,0,0,0-.59.09c.14-.92.28-1.94.4-3.06s.25-2.26.36-3.44.21-2.36.3-3.55.16-2.34.22-3.43.11-2.12.13-3,0-1.75,0-2.43ZM31.23,98a10.24,10.24,0,0,0-.86-2.53c-.28-.49-.53-.71-.75-.65a.44.44,0,0,0-.29.25,1.59,1.59,0,0,0-.12.63,8.45,8.45,0,0,0,.09,1.09c.07.44.18,1,.33,1.6a11,11,0,0,0,.86,2.54c.29.51.55.74.78.68s.35-.38.37-1A10.79,10.79,0,0,0,31.23,98Zm9.43,8.69A11.07,11.07,0,0,1,41,108.9a5.58,5.58,0,0,1-.16,1.62,2.42,2.42,0,0,1-.58,1,1.84,1.84,0,0,1-.88.51,1.87,1.87,0,0,1-1,0,2.36,2.36,0,0,1-1-.67,5.27,5.27,0,0,1-.9-1.35,11,11,0,0,1-.72-2.13,11.38,11.38,0,0,1-.35-2.26,5.33,5.33,0,0,1,.17-1.6,2.31,2.31,0,0,1,.59-1,2,2,0,0,1,.89-.48,1.87,1.87,0,0,1,1,0,2.46,2.46,0,0,1,1,.66,5.54,5.54,0,0,1,.89,1.35A10.76,10.76,0,0,1,40.66,106.69Z" transform="translate(0 -12.33)"/>
                  <path d="M39.06,107a10.66,10.66,0,0,0-.85-2.52c-.29-.5-.54-.72-.77-.67a.46.46,0,0,0-.29.26,1.68,1.68,0,0,0-.11.64,5.7,5.7,0,0,0,.09,1.08c.06.44.17,1,.32,1.6a10.39,10.39,0,0,0,.87,2.55c.28.5.54.72.77.66s.36-.37.38-1A11,11,0,0,0,39.06,107Zm-6.12-9.53a11.19,11.19,0,0,1,.33,2.2,5.63,5.63,0,0,1-.17,1.63,2.43,2.43,0,0,1-.57,1.07,1.81,1.81,0,0,1-1.89.47,2.45,2.45,0,0,1-1-.67,5.6,5.6,0,0,1-.9-1.37,13.13,13.13,0,0,1-1.07-4.41,5.09,5.09,0,0,1,.17-1.61,2.19,2.19,0,0,1,.59-1,2,2,0,0,1,.89-.48,1.83,1.83,0,0,1,1,0,2.39,2.39,0,0,1,1,.66,5,5,0,0,1,.89,1.35A10.84,10.84,0,0,1,32.94,97.51ZM36,93.06c-.13,1.11-.26,2.35-.39,3.73s-.26,2.87-.38,4.47-.24,3.31-.34,5.12-.2,3.7-.28,5.67l-.76,0c-.21,0-.44,0-.67,0a2.36,2.36,0,0,0-.59.09c.14-.93.28-1.95.4-3.06s.25-2.27.36-3.45.21-2.37.3-3.56.16-2.34.22-3.44S34,96.5,34,95.56s0-1.75,0-2.43Zm-4.71,4.86a10.52,10.52,0,0,0-.86-2.53c-.29-.49-.54-.71-.76-.66a.44.44,0,0,0-.29.25,1.45,1.45,0,0,0-.11.63,6.7,6.7,0,0,0,.08,1.09c.07.45.18,1,.33,1.61a10.71,10.71,0,0,0,.87,2.55c.29.51.55.73.78.68s.35-.38.37-1A10.79,10.79,0,0,0,31.28,97.92Zm9.45,8.71a11.07,11.07,0,0,1,.33,2.21,5.2,5.2,0,0,1-.17,1.62,2.39,2.39,0,0,1-.57,1.06,1.83,1.83,0,0,1-.89.51,1.87,1.87,0,0,1-1,0,2.46,2.46,0,0,1-1-.67,5.17,5.17,0,0,1-.9-1.36,10.72,10.72,0,0,1-.73-2.13,11.37,11.37,0,0,1-.34-2.27,5,5,0,0,1,.17-1.6,2.22,2.22,0,0,1,.59-1,2.11,2.11,0,0,1,.89-.49,2,2,0,0,1,1,0,2.39,2.39,0,0,1,1,.66,5,5,0,0,1,.89,1.35A10.84,10.84,0,0,1,40.73,106.63Z" transform="translate(0 -12.33)"/>
                  <path d="M39.12,107a11,11,0,0,0-.85-2.53c-.28-.5-.54-.72-.77-.67a.46.46,0,0,0-.29.26,1.55,1.55,0,0,0-.11.65,5.83,5.83,0,0,0,.09,1.08c.06.44.17,1,.32,1.6a11.45,11.45,0,0,0,.87,2.56q.43.73.78.66c.23-.06.35-.38.37-1A10.5,10.5,0,0,0,39.12,107ZM33,97.43a11.17,11.17,0,0,1,.33,2.21,5.59,5.59,0,0,1-.17,1.62,2.37,2.37,0,0,1-.57,1.08,1.75,1.75,0,0,1-.88.51,1.78,1.78,0,0,1-1,0,2.45,2.45,0,0,1-1-.67,5.32,5.32,0,0,1-.89-1.37,12.94,12.94,0,0,1-1.08-4.43,5,5,0,0,1,.17-1.6,2.22,2.22,0,0,1,.59-1,2,2,0,0,1,.89-.48,1.87,1.87,0,0,1,1,0,2.46,2.46,0,0,1,1,.66,5.16,5.16,0,0,1,.89,1.36A10.84,10.84,0,0,1,33,97.43ZM36.05,93c-.13,1.11-.27,2.36-.4,3.74s-.26,2.87-.38,4.48-.23,3.32-.34,5.13-.19,3.7-.28,5.68l-.76,0c-.21,0-.44,0-.67,0a2.36,2.36,0,0,0-.59.09c.14-.93.28-2,.4-3.07s.25-2.27.36-3.45.22-2.38.3-3.58.17-2.34.23-3.44.1-2.12.13-3.06,0-1.76,0-2.44Zm-4.72,4.86a10.17,10.17,0,0,0-.87-2.53c-.28-.49-.53-.71-.76-.66a.45.45,0,0,0-.28.25,1.45,1.45,0,0,0-.12.64,5.93,5.93,0,0,0,.09,1.09,14.93,14.93,0,0,0,.33,1.61,10.55,10.55,0,0,0,.87,2.55c.28.51.54.74.78.68s.35-.38.37-1A11.51,11.51,0,0,0,31.33,97.83Zm9.47,8.74a11.07,11.07,0,0,1,.33,2.21,5.63,5.63,0,0,1-.17,1.63,2.4,2.4,0,0,1-.58,1.06,1.8,1.8,0,0,1-.88.51,1.82,1.82,0,0,1-1,0,2.39,2.39,0,0,1-1-.66,5.34,5.34,0,0,1-.9-1.36,11.07,11.07,0,0,1-.73-2.14,10.68,10.68,0,0,1-.34-2.27,5.09,5.09,0,0,1,.17-1.61,2.14,2.14,0,0,1,.59-1,2,2,0,0,1,.89-.49,1.87,1.87,0,0,1,1,0,2.42,2.42,0,0,1,1,.66,5.54,5.54,0,0,1,.89,1.35A10.72,10.72,0,0,1,40.8,106.57Z" transform="translate(0 -12.33)"/>
                  <path d="M39.19,106.91a11,11,0,0,0-.86-2.53c-.28-.5-.54-.72-.77-.66a.44.44,0,0,0-.29.25,1.55,1.55,0,0,0-.11.65,6.78,6.78,0,0,0,.08,1.09c.07.43.18,1,.33,1.6a11.26,11.26,0,0,0,.87,2.56q.44.75.78.66c.23,0,.36-.37.38-1A11.11,11.11,0,0,0,39.19,106.91ZM33,97.35a11.17,11.17,0,0,1,.33,2.21,5.34,5.34,0,0,1-.17,1.63,2.42,2.42,0,0,1-.57,1.08,1.75,1.75,0,0,1-.88.51,1.78,1.78,0,0,1-1,0,2.32,2.32,0,0,1-1-.68,5.24,5.24,0,0,1-.9-1.37,12.94,12.94,0,0,1-1.08-4.43,5.09,5.09,0,0,1,.17-1.61,2.22,2.22,0,0,1,.59-1,2,2,0,0,1,.9-.48,1.83,1.83,0,0,1,1,0,2.42,2.42,0,0,1,1,.66,5.82,5.82,0,0,1,.89,1.36A10.72,10.72,0,0,1,33,97.35Zm3.07-4.48c-.14,1.12-.27,2.37-.4,3.75s-.26,2.89-.38,4.5-.24,3.32-.34,5.14-.2,3.71-.28,5.69l-.77,0h-.67a2.88,2.88,0,0,0-.59.1c.14-.93.28-2,.41-3.08s.24-2.27.36-3.46.21-2.38.3-3.58.16-2.35.22-3.45.1-2.13.13-3.07,0-1.76,0-2.44Zm-4.73,4.88a10.6,10.6,0,0,0-.87-2.53c-.29-.5-.54-.72-.76-.66a.44.44,0,0,0-.29.25,1.59,1.59,0,0,0-.12.63,8.59,8.59,0,0,0,.09,1.1c.07.44.18,1,.33,1.61a10.66,10.66,0,0,0,.87,2.56c.29.51.55.74.78.68s.36-.38.37-1A10.85,10.85,0,0,0,31.38,97.75Zm9.48,8.76a9.78,9.78,0,0,1,.33,2.21,5.39,5.39,0,0,1-.16,1.64,2.46,2.46,0,0,1-.58,1.06,1.83,1.83,0,0,1-.89.51,1.78,1.78,0,0,1-1-.05,2.36,2.36,0,0,1-1-.66,5.42,5.42,0,0,1-.9-1.37,11.07,11.07,0,0,1-.73-2.14,10.76,10.76,0,0,1-.35-2.28,5.44,5.44,0,0,1,.17-1.61,2.37,2.37,0,0,1,.59-1,2,2,0,0,1,.9-.49,1.87,1.87,0,0,1,1,0,2.42,2.42,0,0,1,1,.66,4.93,4.93,0,0,1,.89,1.36A10.12,10.12,0,0,1,40.86,106.51Z" transform="translate(0 -12.33)"/>
                  <path d="M39.25,106.85a11.16,11.16,0,0,0-.86-2.54c-.28-.5-.54-.72-.77-.66a.43.43,0,0,0-.29.26,1.5,1.5,0,0,0-.11.64,6.7,6.7,0,0,0,.08,1.09c.07.44.18,1,.33,1.61a10.69,10.69,0,0,0,.88,2.56c.28.5.54.73.77.67s.36-.38.38-1A11.11,11.11,0,0,0,39.25,106.85Zm-6.16-9.58a10.48,10.48,0,0,1,.33,2.21,5.4,5.4,0,0,1-.17,1.64,2.33,2.33,0,0,1-.57,1.07,1.7,1.7,0,0,1-.88.52,1.82,1.82,0,0,1-1,0,2.38,2.38,0,0,1-1-.68,5.6,5.6,0,0,1-.9-1.37,13.05,13.05,0,0,1-1.08-4.45A5.09,5.09,0,0,1,28,94.56a2.22,2.22,0,0,1,.59-1,2,2,0,0,1,.9-.48,1.87,1.87,0,0,1,1,0,2.46,2.46,0,0,1,1,.66,5.53,5.53,0,0,1,.9,1.36A11.07,11.07,0,0,1,33.09,97.27Zm3.07-4.49c-.13,1.12-.26,2.37-.39,3.76s-.26,2.89-.39,4.5-.23,3.33-.34,5.15-.19,3.72-.28,5.7l-.77,0c-.21,0-.43,0-.67,0a2.88,2.88,0,0,0-.59.1c.14-.93.28-2,.41-3.09s.25-2.27.36-3.46.21-2.39.3-3.59.16-2.35.22-3.46.11-2.13.14-3.08,0-1.76,0-2.44Zm-4.74,4.89a10.64,10.64,0,0,0-.86-2.54c-.29-.5-.55-.72-.77-.66a.46.46,0,0,0-.29.25,1.47,1.47,0,0,0-.11.64,6.78,6.78,0,0,0,.08,1.09q.11.67.33,1.62a11,11,0,0,0,.88,2.56c.29.52.55.74.78.69s.36-.38.37-1A11,11,0,0,0,31.42,97.67Zm9.51,8.77a10.55,10.55,0,0,1,.33,2.23,5.66,5.66,0,0,1-.16,1.63,2.4,2.4,0,0,1-.58,1.06,1.81,1.81,0,0,1-1.92.47,2.3,2.3,0,0,1-1-.67,5.24,5.24,0,0,1-.9-1.37,10.23,10.23,0,0,1-.73-2.14,11,11,0,0,1-.35-2.28,5.09,5.09,0,0,1,.17-1.61,2.26,2.26,0,0,1,.59-1,2,2,0,0,1,.9-.49,1.87,1.87,0,0,1,1,0,2.36,2.36,0,0,1,1,.66,5.34,5.34,0,0,1,.9,1.36A10.72,10.72,0,0,1,40.93,106.44Z" transform="translate(0 -12.33)"/>
                  <path d="M39.32,106.79a10.89,10.89,0,0,0-.87-2.54c-.28-.5-.54-.73-.77-.67a.46.46,0,0,0-.29.26,1.52,1.52,0,0,0-.11.65,6.78,6.78,0,0,0,.08,1.09c.07.44.18,1,.33,1.61a10.81,10.81,0,0,0,.88,2.57c.29.5.55.72.78.67s.36-.38.38-1A11.18,11.18,0,0,0,39.32,106.79Zm-6.18-9.6a10,10,0,0,1,.33,2.21,5.73,5.73,0,0,1-.16,1.64,2.42,2.42,0,0,1-.58,1.08,1.7,1.7,0,0,1-.88.52,1.81,1.81,0,0,1-1,0,2.41,2.41,0,0,1-1-.68,5.49,5.49,0,0,1-.9-1.38,11.07,11.07,0,0,1-.73-2.14,10.64,10.64,0,0,1-.35-2.31A5.2,5.2,0,0,1,28,94.47a2.22,2.22,0,0,1,.59-1,2.08,2.08,0,0,1,.9-.48,1.9,1.9,0,0,1,1,0,2.46,2.46,0,0,1,1,.66,5.42,5.42,0,0,1,.9,1.37A10.62,10.62,0,0,1,33.14,97.19Zm3.08-4.5c-.13,1.12-.27,2.38-.4,3.77s-.26,2.89-.38,4.51-.24,3.34-.34,5.16-.2,3.73-.28,5.71l-.77,0c-.22,0-.44,0-.67,0a2.87,2.87,0,0,0-.6.1c.14-.94.28-2,.41-3.09s.25-2.29.36-3.48.21-2.39.3-3.59.16-2.36.23-3.47.1-2.13.13-3.08,0-1.77,0-2.45Zm-4.75,4.9A10.39,10.39,0,0,0,30.6,95c-.29-.49-.54-.71-.76-.66a.44.44,0,0,0-.29.25,1.32,1.32,0,0,0-.12.64,6,6,0,0,0,.09,1.1A14.58,14.58,0,0,0,29.85,98a10.77,10.77,0,0,0,.87,2.57c.29.51.56.74.79.68s.35-.38.37-1A11.11,11.11,0,0,0,31.47,97.59ZM41,106.38a11.25,11.25,0,0,1,.33,2.23,5.37,5.37,0,0,1-.17,1.64,2.31,2.31,0,0,1-.58,1.06,1.93,1.93,0,0,1-.89.52,1.91,1.91,0,0,1-1,0,2.45,2.45,0,0,1-1-.67,5.24,5.24,0,0,1-.9-1.37,10.51,10.51,0,0,1-.74-2.15,11.64,11.64,0,0,1-.35-2.29,5.37,5.37,0,0,1,.18-1.61,2.26,2.26,0,0,1,.59-1,1.94,1.94,0,0,1,1.93-.45,2.38,2.38,0,0,1,1,.66,5.34,5.34,0,0,1,.9,1.36A11.07,11.07,0,0,1,41,106.38Z" transform="translate(0 -12.33)"/>
                  <path d="M39.38,106.73a10.92,10.92,0,0,0-.86-2.55c-.29-.5-.55-.73-.78-.67a.46.46,0,0,0-.29.26,1.55,1.55,0,0,0-.11.65,6.7,6.7,0,0,0,.08,1.09q.11.66.33,1.62a10.81,10.81,0,0,0,.88,2.57c.29.51.55.73.78.67s.36-.37.38-1A11.18,11.18,0,0,0,39.38,106.73ZM33.19,97.1a10.11,10.11,0,0,1,.33,2.23,5.73,5.73,0,0,1-.16,1.64,2.42,2.42,0,0,1-.58,1.08,1.74,1.74,0,0,1-.88.52,1.81,1.81,0,0,1-1,0,2.44,2.44,0,0,1-1-.68,5.78,5.78,0,0,1-.91-1.38,11.19,11.19,0,0,1-.73-2.15A10.73,10.73,0,0,1,27.87,96,5.13,5.13,0,0,1,28,94.39a2.26,2.26,0,0,1,.59-1,2.06,2.06,0,0,1,.91-.48,1.87,1.87,0,0,1,1,0,2.35,2.35,0,0,1,1,.67,5.34,5.34,0,0,1,.9,1.36A11.07,11.07,0,0,1,33.19,97.1Zm3.09-4.5c-.14,1.12-.27,2.38-.4,3.77s-.26,2.9-.39,4.53-.23,3.34-.34,5.17-.19,3.73-.28,5.72l-.77,0c-.21,0-.44,0-.67,0a2.34,2.34,0,0,0-.6.1c.14-.94.28-2,.41-3.1s.25-2.29.36-3.48.21-2.4.3-3.6.17-2.37.23-3.48.1-2.14.13-3.09,0-1.76,0-2.45Zm-4.76,4.91A11.14,11.14,0,0,0,30.65,95c-.29-.5-.55-.72-.77-.67a.46.46,0,0,0-.29.26,1.57,1.57,0,0,0-.12.64,7.17,7.17,0,0,0,.09,1.1q.11.66.33,1.62a11.46,11.46,0,0,0,.88,2.58c.29.51.55.74.79.68s.35-.38.37-1A11.11,11.11,0,0,0,31.52,97.51Zm9.55,8.81a11.25,11.25,0,0,1,.33,2.23,5.37,5.37,0,0,1-.17,1.64,2.44,2.44,0,0,1-.58,1.07,2,2,0,0,1-.9.52,1.91,1.91,0,0,1-1,0,2.45,2.45,0,0,1-1-.67,5.59,5.59,0,0,1-.91-1.38,13.07,13.07,0,0,1-1.08-4.44,5.13,5.13,0,0,1,.17-1.62,2.33,2.33,0,0,1,.6-1,1.94,1.94,0,0,1,1.93-.45,2.24,2.24,0,0,1,1,.66,5.24,5.24,0,0,1,.9,1.37A10.8,10.8,0,0,1,41.07,106.32Z" transform="translate(0 -12.33)"/>
                  <path d="M39.44,106.67a11.22,11.22,0,0,0-.86-2.56c-.29-.5-.55-.72-.78-.67a.46.46,0,0,0-.29.26,1.55,1.55,0,0,0-.11.65,6.82,6.82,0,0,0,.08,1.1c.07.44.18,1,.33,1.61a11,11,0,0,0,.88,2.59c.29.5.55.72.79.67s.36-.38.38-1A11.38,11.38,0,0,0,39.44,106.67ZM33.24,97a10.82,10.82,0,0,1,.34,2.23,5.81,5.81,0,0,1-.17,1.65,2.54,2.54,0,0,1-.58,1.08,1.74,1.74,0,0,1-.88.52,1.85,1.85,0,0,1-1,0,2.51,2.51,0,0,1-1-.68,5.57,5.57,0,0,1-.9-1.39,10.51,10.51,0,0,1-.74-2.15,10.72,10.72,0,0,1-.35-2.32,5.2,5.2,0,0,1,.17-1.62,2.1,2.1,0,0,1,.6-1,1.94,1.94,0,0,1,1.93-.45,2.42,2.42,0,0,1,1,.67,5.24,5.24,0,0,1,.9,1.37A10.23,10.23,0,0,1,33.24,97Zm3.1-4.51c-.14,1.13-.27,2.39-.4,3.78s-.27,2.91-.39,4.53-.24,3.35-.34,5.18-.2,3.75-.28,5.74l-.78,0-.67,0a2.34,2.34,0,0,0-.6.1c.14-.94.28-2,.41-3.11s.25-2.29.36-3.49.22-2.4.31-3.61.16-2.36.22-3.48.11-2.14.14-3.09,0-1.77,0-2.47Zm-4.77,4.92a10.69,10.69,0,0,0-.88-2.56c-.29-.5-.54-.72-.77-.66a.46.46,0,0,0-.29.25,1.61,1.61,0,0,0-.12.64,8.45,8.45,0,0,0,.09,1.1c.07.45.18,1,.34,1.63a10.22,10.22,0,0,0,.88,2.58c.29.52.55.74.78.69s.36-.39.38-1A11.18,11.18,0,0,0,31.57,97.43Zm9.56,8.83a10.63,10.63,0,0,1,.34,2.23,5.73,5.73,0,0,1-.17,1.65,2.44,2.44,0,0,1-.58,1.07,1.9,1.9,0,0,1-1.94.47,2.38,2.38,0,0,1-1-.68,5.25,5.25,0,0,1-.91-1.37,13.19,13.19,0,0,1-1.08-4.46,5.2,5.2,0,0,1,.17-1.62,2.31,2.31,0,0,1,.59-1,2,2,0,0,1,.91-.49,1.9,1.9,0,0,1,1,0,2.35,2.35,0,0,1,1,.67,5.17,5.17,0,0,1,.91,1.37A11,11,0,0,1,41.13,106.26Z" transform="translate(0 -12.33)"/>
                  <path d="M39.51,106.61a11.45,11.45,0,0,0-.87-2.56c-.29-.51-.55-.73-.78-.68a.45.45,0,0,0-.29.27,1.67,1.67,0,0,0-.12.65,8.32,8.32,0,0,0,.09,1.09q.1.68.33,1.62a11.35,11.35,0,0,0,.88,2.59c.29.51.56.73.79.67s.36-.37.38-1A11.24,11.24,0,0,0,39.51,106.61Zm-6.22-9.67a10.82,10.82,0,0,1,.34,2.23,5.73,5.73,0,0,1-.17,1.65,2.52,2.52,0,0,1-.58,1.09,1.73,1.73,0,0,1-.89.52,1.82,1.82,0,0,1-1,0,2.44,2.44,0,0,1-1-.69,5.24,5.24,0,0,1-.91-1.38,10.84,10.84,0,0,1-.74-2.16A10.72,10.72,0,0,1,28,95.84a5.23,5.23,0,0,1,.17-1.63,2.15,2.15,0,0,1,.6-1,1.94,1.94,0,0,1,1.93-.45,2.35,2.35,0,0,1,1,.67,5.25,5.25,0,0,1,.91,1.37A10.33,10.33,0,0,1,33.29,96.94Zm3.1-4.52c-.13,1.13-.27,2.39-.4,3.79s-.26,2.91-.38,4.54-.24,3.36-.35,5.19-.19,3.75-.28,5.75l-.77,0-.68,0a2,2,0,0,0-.6.1c.14-1,.28-2,.41-3.12s.25-2.29.36-3.49.22-2.41.31-3.62.16-2.37.22-3.49.11-2.15.14-3.1,0-1.77,0-2.47Zm-4.78,4.93a10.19,10.19,0,0,0-.87-2.56c-.29-.5-.55-.73-.77-.67a.44.44,0,0,0-.29.25,1.35,1.35,0,0,0-.12.64,6.12,6.12,0,0,0,.09,1.11c.06.45.18,1,.33,1.63a11.4,11.4,0,0,0,.88,2.59c.29.51.56.74.79.68s.36-.38.38-1A11.31,11.31,0,0,0,31.61,97.35Zm9.59,8.84a10.19,10.19,0,0,1,.33,2.24,5.43,5.43,0,0,1-.16,1.65,2.45,2.45,0,0,1-.59,1.07,1.86,1.86,0,0,1-1.93.48,2.51,2.51,0,0,1-1-.68,5.15,5.15,0,0,1-.91-1.38,11,11,0,0,1-.74-2.16,11.72,11.72,0,0,1-.35-2.3,5.2,5.2,0,0,1,.18-1.63,2.31,2.31,0,0,1,.59-1,2,2,0,0,1,.91-.49,1.9,1.9,0,0,1,1,0,2.38,2.38,0,0,1,1,.67,5.42,5.42,0,0,1,.9,1.37A10.51,10.51,0,0,1,41.2,106.19Z" transform="translate(0 -12.33)"/>
                  <path d="M39.57,106.54A10.66,10.66,0,0,0,38.7,104c-.28-.51-.55-.73-.78-.67a.43.43,0,0,0-.29.26,1.67,1.67,0,0,0-.12.65,8.45,8.45,0,0,0,.09,1.1c.07.44.18,1,.33,1.62a10.9,10.9,0,0,0,.89,2.6c.29.5.55.73.78.67s.37-.38.38-1A10.94,10.94,0,0,0,39.57,106.54Zm-6.23-9.68a10.81,10.81,0,0,1,.34,2.24,5.81,5.81,0,0,1-.17,1.65,2.52,2.52,0,0,1-.58,1.09,1.8,1.8,0,0,1-.89.52,1.94,1.94,0,0,1-1,0,2.44,2.44,0,0,1-1-.69,5.39,5.39,0,0,1-.91-1.39,11,11,0,0,1-.74-2.16A10.81,10.81,0,0,1,28,95.76a5.19,5.19,0,0,1,.17-1.63,2.14,2.14,0,0,1,.6-1,1.93,1.93,0,0,1,.91-.49,1.9,1.9,0,0,1,1,0,2.42,2.42,0,0,1,1,.67,5.42,5.42,0,0,1,.91,1.37A10.44,10.44,0,0,1,33.34,96.86Zm3.11-4.53c-.13,1.13-.27,2.39-.4,3.79s-.26,2.92-.39,4.55-.24,3.37-.34,5.21-.2,3.75-.28,5.76l-.78,0c-.22,0-.44,0-.68,0a2,2,0,0,0-.6.1c.14-1,.28-2,.41-3.12s.25-2.31.37-3.51.21-2.41.3-3.62.17-2.38.23-3.5.1-2.15.13-3.1,0-1.78,0-2.48Zm-4.79,4.94a10.81,10.81,0,0,0-.88-2.57c-.29-.5-.54-.72-.77-.67a.46.46,0,0,0-.29.26,1.57,1.57,0,0,0-.12.64A6.12,6.12,0,0,0,29.69,96c.07.45.18,1,.33,1.63a10.67,10.67,0,0,0,.89,2.59c.29.52.55.75.79.69s.36-.38.37-1A11.18,11.18,0,0,0,31.66,97.27Zm9.61,8.86a11.53,11.53,0,0,1,.33,2.25,5.4,5.4,0,0,1-.17,1.65,2.44,2.44,0,0,1-.58,1.07,1.8,1.8,0,0,1-.9.52,1.94,1.94,0,0,1-1,0,2.51,2.51,0,0,1-1-.68,5.5,5.5,0,0,1-.91-1.38,11.39,11.39,0,0,1-.74-2.17,11.11,11.11,0,0,1-.35-2.3,5.19,5.19,0,0,1,.17-1.63,2.4,2.4,0,0,1,.6-1,2.1,2.1,0,0,1,.91-.5,1.9,1.9,0,0,1,1,0,2.38,2.38,0,0,1,1,.67,5.61,5.61,0,0,1,.91,1.37A11,11,0,0,1,41.27,106.13Z" transform="translate(0 -12.33)"/>
                  <path d="M39.63,106.48a10.77,10.77,0,0,0-.87-2.57c-.28-.5-.54-.73-.78-.67a.43.43,0,0,0-.29.26,1.71,1.71,0,0,0-.12.65,8.72,8.72,0,0,0,.09,1.11q.11.66.33,1.62a10.9,10.9,0,0,0,.89,2.6c.29.51.55.73.79.68s.36-.38.38-1A11.07,11.07,0,0,0,39.63,106.48Zm-6.23-9.7A11.44,11.44,0,0,1,33.73,99a5.54,5.54,0,0,1-.17,1.66,2.58,2.58,0,0,1-.58,1.09,1.8,1.8,0,0,1-.89.52,1.94,1.94,0,0,1-1,0,2.64,2.64,0,0,1-1-.69,5.87,5.87,0,0,1-.91-1.39A11.39,11.39,0,0,1,28.38,98,10.8,10.8,0,0,1,28,95.67,5.23,5.23,0,0,1,28.2,94a2.14,2.14,0,0,1,.6-1,2,2,0,0,1,.91-.49,1.9,1.9,0,0,1,1,0,2.38,2.38,0,0,1,1,.67,5.78,5.78,0,0,1,.91,1.38A11,11,0,0,1,33.4,96.78Zm3.11-4.54c-.14,1.13-.27,2.4-.41,3.8s-.26,2.93-.38,4.56-.24,3.37-.35,5.21-.2,3.77-.28,5.78l-.78,0c-.21,0-.44,0-.68,0a2.45,2.45,0,0,0-.6.09c.14-.94.28-2,.41-3.12s.25-2.31.37-3.51.21-2.42.3-3.63.17-2.39.23-3.51.11-2.15.13-3.11,0-1.78,0-2.48Zm-4.8,5a10.76,10.76,0,0,0-.88-2.58c-.29-.5-.55-.72-.77-.67a.47.47,0,0,0-.3.26,1.61,1.61,0,0,0-.12.64A8.72,8.72,0,0,0,29.73,96c.07.45.18,1,.34,1.64a11.52,11.52,0,0,0,.88,2.6c.3.51.56.74.8.69s.36-.39.37-1A11.24,11.24,0,0,0,31.71,97.19Zm9.62,8.88a10.89,10.89,0,0,1,.34,2.25A5.4,5.4,0,0,1,41.5,110a2.34,2.34,0,0,1-.59,1.08,1.87,1.87,0,0,1-.9.52,1.85,1.85,0,0,1-1,0,2.48,2.48,0,0,1-1-.67,5.39,5.39,0,0,1-.91-1.39,10.52,10.52,0,0,1-.74-2.17A11.29,11.29,0,0,1,36,105a5.51,5.51,0,0,1,.18-1.63,2.22,2.22,0,0,1,.6-1,2,2,0,0,1,.91-.5,1.9,1.9,0,0,1,1,0,2.41,2.41,0,0,1,1,.67,5.49,5.49,0,0,1,.9,1.38A10.41,10.41,0,0,1,41.33,106.07Z" transform="translate(0 -12.33)"/>
                  <path d="M39.7,106.42a10.81,10.81,0,0,0-.88-2.57c-.28-.51-.54-.74-.78-.68a.46.46,0,0,0-.29.26,1.76,1.76,0,0,0-.12.66,8.45,8.45,0,0,0,.09,1.1c.07.45.18,1,.33,1.63a11,11,0,0,0,.89,2.61c.29.5.56.73.79.67s.36-.38.38-1A11.44,11.44,0,0,0,39.7,106.42ZM33.45,96.7a10.73,10.73,0,0,1,.33,2.24,5.5,5.5,0,0,1-.17,1.66,2.46,2.46,0,0,1-.58,1.09,1.75,1.75,0,0,1-.89.53,1.94,1.94,0,0,1-1,0,2.5,2.5,0,0,1-1-.69,5.47,5.47,0,0,1-.92-1.4,11.15,11.15,0,0,1-.74-2.17,10.8,10.8,0,0,1-.35-2.33A5.26,5.26,0,0,1,28.24,94a2.14,2.14,0,0,1,.6-1,2,2,0,0,1,.91-.49,1.94,1.94,0,0,1,1,0,2.44,2.44,0,0,1,1,.67,5.78,5.78,0,0,1,.91,1.38A10.92,10.92,0,0,1,33.45,96.7Zm3.12-4.55c-.14,1.13-.27,2.4-.41,3.81s-.26,2.93-.39,4.57-.24,3.38-.34,5.22-.2,3.77-.29,5.79l-.78,0h-.68a3,3,0,0,0-.6.1c.14-.94.28-2,.41-3.13s.26-2.31.37-3.52.22-2.42.31-3.63.16-2.39.22-3.51.11-2.17.14-3.13,0-1.78,0-2.48Zm-4.81,5a10.67,10.67,0,0,0-.89-2.58c-.29-.51-.54-.73-.77-.67a.44.44,0,0,0-.29.25,1.36,1.36,0,0,0-.12.65,6.12,6.12,0,0,0,.09,1.11c.06.45.18,1,.33,1.64a11.25,11.25,0,0,0,.89,2.6c.29.52.56.75.79.69s.36-.38.38-1A11.31,11.31,0,0,0,31.76,97.11ZM41.4,106a10.89,10.89,0,0,1,.34,2.25,5.47,5.47,0,0,1-.17,1.66A2.55,2.55,0,0,1,41,111a1.85,1.85,0,0,1-1.95.47,2.41,2.41,0,0,1-1-.68,5.08,5.08,0,0,1-.91-1.38,10.81,10.81,0,0,1-.75-2.18,11.92,11.92,0,0,1-.35-2.31,5,5,0,0,1,.18-1.64,2.22,2.22,0,0,1,.6-1,1.95,1.95,0,0,1,2-.46,2.38,2.38,0,0,1,1,.67,5.5,5.5,0,0,1,.91,1.38A10.92,10.92,0,0,1,41.4,106Z" transform="translate(0 -12.33)"/>
                  <path d="M39.76,106.36a11.19,11.19,0,0,0-.87-2.58c-.29-.51-.55-.74-.79-.68a.46.46,0,0,0-.29.26,1.76,1.76,0,0,0-.12.66,8.72,8.72,0,0,0,.09,1.11c.07.44.18,1,.34,1.63a11.11,11.11,0,0,0,.88,2.61c.3.51.56.73.79.68s.37-.38.39-1A11.13,11.13,0,0,0,39.76,106.36ZM33.5,96.61a10.35,10.35,0,0,1,.33,2.25,5.57,5.57,0,0,1-.17,1.67,2.52,2.52,0,0,1-.58,1.09,1.75,1.75,0,0,1-.89.53,2,2,0,0,1-1,0,2.64,2.64,0,0,1-1-.69,5.65,5.65,0,0,1-.91-1.4,12.79,12.79,0,0,1-1.1-4.52,5.3,5.3,0,0,1,.17-1.64,2.14,2.14,0,0,1,.6-1,2.11,2.11,0,0,1,.92-.49,1.81,1.81,0,0,1,1,0,2.38,2.38,0,0,1,1,.67,5.51,5.51,0,0,1,.92,1.38A11.39,11.39,0,0,1,33.5,96.61Zm3.12-4.55c-.13,1.13-.27,2.41-.4,3.82s-.27,2.93-.39,4.57-.24,3.39-.35,5.24-.2,3.78-.28,5.8l-.78,0c-.22,0-.45,0-.68,0a3,3,0,0,0-.61.1c.14-.95.28-2,.41-3.13s.26-2.32.37-3.53.22-2.43.31-3.65.16-2.39.22-3.51.11-2.17.14-3.13,0-1.79,0-2.49ZM31.8,97a10.44,10.44,0,0,0-.88-2.59c-.29-.5-.55-.73-.78-.67a.44.44,0,0,0-.29.25,1.67,1.67,0,0,0-.12.65,6.22,6.22,0,0,0,.09,1.12c.07.45.18,1,.34,1.64a10.47,10.47,0,0,0,.89,2.61c.29.52.55.75.79.69s.36-.39.38-1A10.94,10.94,0,0,0,31.8,97Zm9.67,8.91a11.08,11.08,0,0,1,.34,2.26,5.88,5.88,0,0,1-.17,1.67,2.55,2.55,0,0,1-.59,1.08,2,2,0,0,1-.91.52,1.85,1.85,0,0,1-1,0,2.38,2.38,0,0,1-1-.68,5.4,5.4,0,0,1-.92-1.39,13.11,13.11,0,0,1-1.09-4.5,5.3,5.3,0,0,1,.17-1.64,2.4,2.4,0,0,1,.6-1,2,2,0,0,1,.91-.5,2,2,0,0,1,1,0,2.38,2.38,0,0,1,1,.67,5.51,5.51,0,0,1,.92,1.38A11.39,11.39,0,0,1,41.47,105.94Z" transform="translate(0 -12.33)"/>
                  <path d="M39.82,106.3a10.68,10.68,0,0,0-.87-2.59c-.29-.51-.55-.74-.79-.68a.45.45,0,0,0-.29.27,1.67,1.67,0,0,0-.12.65,8.45,8.45,0,0,0,.09,1.11c.07.45.18,1,.34,1.64a10.43,10.43,0,0,0,.89,2.61c.29.51.55.74.79.68s.36-.38.38-1A11.13,11.13,0,0,0,39.82,106.3Zm-6.27-9.77a10.35,10.35,0,0,1,.33,2.26,5.5,5.5,0,0,1-.17,1.66,2.4,2.4,0,0,1-.58,1.1,1.74,1.74,0,0,1-.9.53,1.85,1.85,0,0,1-1,0,2.38,2.38,0,0,1-1-.68,5.46,5.46,0,0,1-.92-1.41,10.59,10.59,0,0,1-.75-2.18,10.88,10.88,0,0,1-.35-2.34,5.26,5.26,0,0,1,.17-1.64,2.25,2.25,0,0,1,.6-1,2.11,2.11,0,0,1,.92-.49,1.85,1.85,0,0,1,1,0,2.38,2.38,0,0,1,1,.67,5.15,5.15,0,0,1,.91,1.39A10.48,10.48,0,0,1,33.55,96.53ZM36.68,92c-.14,1.14-.27,2.42-.41,3.83s-.26,2.94-.39,4.59-.24,3.39-.34,5.24-.2,3.79-.29,5.81l-.78,0c-.22,0-.44,0-.68,0a3.1,3.1,0,0,0-.61.1c.14-1,.28-2,.41-3.14s.26-2.32.37-3.54.22-2.43.31-3.65.17-2.4.23-3.52.11-2.17.13-3.14,0-1.79,0-2.49Zm-4.83,5a11,11,0,0,0-.88-2.6c-.3-.5-.56-.72-.78-.67a.5.5,0,0,0-.3.26,1.63,1.63,0,0,0-.12.65,8.72,8.72,0,0,0,.09,1.11c.07.46.18,1,.34,1.65a11.37,11.37,0,0,0,.89,2.61c.3.52.56.75.8.7s.36-.39.38-1A11,11,0,0,0,31.85,97Zm9.69,8.93a10.9,10.9,0,0,1,.33,2.26,5.5,5.5,0,0,1-.17,1.67,2.34,2.34,0,0,1-.59,1.08,1.89,1.89,0,0,1-.9.53,2,2,0,0,1-1.05,0,2.38,2.38,0,0,1-1-.68,5.47,5.47,0,0,1-.92-1.4,11,11,0,0,1-.74-2.18,11.37,11.37,0,0,1-.36-2.32,5.3,5.3,0,0,1,.18-1.65,2.22,2.22,0,0,1,.6-1,2,2,0,0,1,.91-.5,2,2,0,0,1,1,0,2.47,2.47,0,0,1,1,.67,5.39,5.39,0,0,1,.91,1.39A11.11,11.11,0,0,1,41.54,105.88Z" transform="translate(0 -12.33)"/>
                  <path d="M39.89,106.24a11,11,0,0,0-.88-2.59c-.29-.52-.55-.74-.79-.69a.45.45,0,0,0-.29.27,1.68,1.68,0,0,0-.12.66A8.72,8.72,0,0,0,37.9,105c.07.45.18,1,.34,1.64a10.69,10.69,0,0,0,.89,2.62c.29.51.56.74.79.68s.37-.38.39-1A11.13,11.13,0,0,0,39.89,106.24ZM33.6,96.45a11.08,11.08,0,0,1,.34,2.26,5.92,5.92,0,0,1-.17,1.67,2.57,2.57,0,0,1-.59,1.1,1.74,1.74,0,0,1-.9.53,1.89,1.89,0,0,1-1.05-.05,2.43,2.43,0,0,1-1-.69,5.47,5.47,0,0,1-.92-1.4,10.7,10.7,0,0,1-.75-2.19,11.75,11.75,0,0,1-.36-2.34,5.62,5.62,0,0,1,.18-1.65,2.18,2.18,0,0,1,.61-1,2,2,0,0,1,.91-.49,1.84,1.84,0,0,1,1,0,2.41,2.41,0,0,1,1,.67,5.57,5.57,0,0,1,.91,1.39A10.59,10.59,0,0,1,33.6,96.45Zm3.14-4.58c-.14,1.15-.27,2.42-.41,3.84s-.27,3-.39,4.59-.24,3.41-.35,5.26-.2,3.8-.28,5.82l-.79,0c-.21,0-.44,0-.68,0a2.5,2.5,0,0,0-.61.1c.15-1,.28-2,.42-3.15s.25-2.33.37-3.54.21-2.44.3-3.66.17-2.4.23-3.53.11-2.18.14-3.14,0-1.8,0-2.5Zm-4.84,5a10.74,10.74,0,0,0-.89-2.6c-.29-.51-.55-.73-.78-.68a.46.46,0,0,0-.29.26,1.36,1.36,0,0,0-.12.65,6.22,6.22,0,0,0,.09,1.12q.11.67.33,1.65a10.93,10.93,0,0,0,.9,2.62c.29.52.56.75.8.69s.36-.38.38-1A12.07,12.07,0,0,0,31.9,96.87Zm9.7,8.95a11,11,0,0,1,.34,2.27,5.57,5.57,0,0,1-.17,1.67,2.49,2.49,0,0,1-.59,1.08,1.92,1.92,0,0,1-.91.53,2,2,0,0,1-1.05-.05,2.47,2.47,0,0,1-1-.68,5.47,5.47,0,0,1-.92-1.4,11.34,11.34,0,0,1-.75-2.19,12,12,0,0,1-.35-2.33,5,5,0,0,1,.18-1.64,2.21,2.21,0,0,1,.6-1,2,2,0,0,1,.91-.5,1.88,1.88,0,0,1,1.05,0,2.35,2.35,0,0,1,1,.67,5.4,5.4,0,0,1,.92,1.39A11.26,11.26,0,0,1,41.6,105.82Z" transform="translate(0 -12.33)"/>
                  <path d="M40,106.17a10.75,10.75,0,0,0-.88-2.59c-.29-.51-.55-.74-.79-.68a.43.43,0,0,0-.29.26,1.76,1.76,0,0,0-.12.66,6.06,6.06,0,0,0,.09,1.11c.07.45.18,1,.34,1.65a11,11,0,0,0,.89,2.62c.29.52.56.74.8.68s.36-.38.38-1A11.26,11.26,0,0,0,40,106.17Zm-6.3-9.8A11.08,11.08,0,0,1,34,98.63a6,6,0,0,1-.17,1.68,2.57,2.57,0,0,1-.59,1.1,1.78,1.78,0,0,1-.9.53,1.89,1.89,0,0,1-1,0,2.4,2.4,0,0,1-1-.69,5.64,5.64,0,0,1-.92-1.41,11.34,11.34,0,0,1-.75-2.19,11.73,11.73,0,0,1-.36-2.35,5.62,5.62,0,0,1,.18-1.65,2.32,2.32,0,0,1,.61-1,2.06,2.06,0,0,1,.92-.49,1.85,1.85,0,0,1,1,0,2.47,2.47,0,0,1,1,.67,5.65,5.65,0,0,1,.91,1.4A10.39,10.39,0,0,1,33.65,96.37Zm3.15-4.59c-.14,1.15-.28,2.43-.41,3.85s-.27,3-.39,4.6-.25,3.41-.35,5.27-.2,3.8-.29,5.83l-.79,0-.68,0a2.5,2.5,0,0,0-.61.1c.15-1,.29-2,.42-3.16s.25-2.33.37-3.55.21-2.44.3-3.66.17-2.41.23-3.54.11-2.18.14-3.15,0-1.8,0-2.5Zm-4.85,5a11.07,11.07,0,0,0-.89-2.6c-.3-.5-.56-.73-.78-.67a.44.44,0,0,0-.3.25,1.68,1.68,0,0,0-.12.66A6.29,6.29,0,0,0,30,95.54c.07.45.18,1,.34,1.65a11.31,11.31,0,0,0,.89,2.62c.3.53.57.76.8.7s.37-.39.38-1A11.51,11.51,0,0,0,32,96.78Zm9.72,9A11,11,0,0,1,42,108a5.54,5.54,0,0,1-.17,1.67,2.53,2.53,0,0,1-.59,1.09,1.86,1.86,0,0,1-.92.52,1.89,1.89,0,0,1-1,0,2.57,2.57,0,0,1-1-.69,5.3,5.3,0,0,1-.92-1.4,12.93,12.93,0,0,1-1.1-4.52,5.33,5.33,0,0,1,.17-1.65,2.3,2.3,0,0,1,.61-1,2,2,0,0,1,.91-.5,1.88,1.88,0,0,1,1,0,2.34,2.34,0,0,1,1,.67,5.57,5.57,0,0,1,.91,1.39A10.7,10.7,0,0,1,41.67,105.76Z" transform="translate(0 -12.33)"/>
                  <path d="M40,106.11a11.25,11.25,0,0,0-.89-2.6c-.29-.51-.55-.74-.79-.68a.46.46,0,0,0-.29.26,1.76,1.76,0,0,0-.12.66,6.16,6.16,0,0,0,.09,1.12c.07.45.18,1,.34,1.65a11.09,11.09,0,0,0,.89,2.63c.3.51.56.74.8.68s.37-.38.39-1A11.33,11.33,0,0,0,40,106.11ZM33.7,96.29A11.06,11.06,0,0,1,34,98.56a5.57,5.57,0,0,1-.17,1.67,2.55,2.55,0,0,1-.59,1.11,1.78,1.78,0,0,1-.9.53,1.89,1.89,0,0,1-1.05-.05,2.34,2.34,0,0,1-1-.69,5.74,5.74,0,0,1-.93-1.41,12.19,12.19,0,0,1-.75-2.2,11.73,11.73,0,0,1-.36-2.35,5.73,5.73,0,0,1,.18-1.66,2.32,2.32,0,0,1,.61-1A2.11,2.11,0,0,1,30,92,1.89,1.89,0,0,1,31,92a2.32,2.32,0,0,1,1,.68A5.15,5.15,0,0,1,33,94.1,10.7,10.7,0,0,1,33.7,96.29Zm3.15-4.6c-.14,1.15-.27,2.43-.41,3.85s-.26,3-.39,4.62-.24,3.41-.35,5.28-.2,3.81-.28,5.84l-.79,0-.69,0a2.5,2.5,0,0,0-.61.1c.15-1,.29-2,.42-3.16s.25-2.34.37-3.56.22-2.44.31-3.68.16-2.41.23-3.54.1-2.19.13-3.15,0-1.81,0-2.51ZM32,96.7a10.32,10.32,0,0,0-.89-2.6c-.29-.51-.55-.74-.78-.68a.47.47,0,0,0-.3.26,1.67,1.67,0,0,0-.12.65A8.86,8.86,0,0,0,30,95.45c.07.46.19,1,.34,1.66a10.88,10.88,0,0,0,.9,2.63c.29.52.56.76.8.7s.37-.39.38-1A11.19,11.19,0,0,0,32,96.7Zm9.75,9a11.15,11.15,0,0,1,.34,2.28,5.61,5.61,0,0,1-.17,1.68,2.44,2.44,0,0,1-.6,1.09,1.9,1.9,0,0,1-.91.52,1.88,1.88,0,0,1-1,0,2.6,2.6,0,0,1-1-.69,5.47,5.47,0,0,1-.92-1.4,10.81,10.81,0,0,1-.75-2.2,11.54,11.54,0,0,1-.36-2.34,5,5,0,0,1,.18-1.65,2.35,2.35,0,0,1,.6-1,2.15,2.15,0,0,1,.92-.51,2,2,0,0,1,1,0,2.47,2.47,0,0,1,1,.68,5.47,5.47,0,0,1,.92,1.4A10.39,10.39,0,0,1,41.74,105.69Z" transform="translate(0 -12.33)"/>
                  <path d="M40.08,106.05a11.46,11.46,0,0,0-.88-2.61c-.29-.51-.56-.74-.8-.68a.45.45,0,0,0-.29.27,1.68,1.68,0,0,0-.12.66,6.22,6.22,0,0,0,.09,1.12c.07.45.18,1,.34,1.65a11.09,11.09,0,0,0,.89,2.63c.3.52.57.74.8.69s.37-.39.39-1A11.33,11.33,0,0,0,40.08,106.05Zm-6.33-9.84a11.06,11.06,0,0,1,.34,2.27,5.68,5.68,0,0,1-.17,1.68,2.61,2.61,0,0,1-.59,1.11,1.82,1.82,0,0,1-.9.53,1.92,1.92,0,0,1-1.06,0,2.4,2.4,0,0,1-1-.69,5.36,5.36,0,0,1-.92-1.42,10.7,10.7,0,0,1-.75-2.19,11.4,11.4,0,0,1-.37-2.37,5.62,5.62,0,0,1,.18-1.65,2.3,2.3,0,0,1,.61-1A2.11,2.11,0,0,1,30,91.9a1.88,1.88,0,0,1,1,0,2.4,2.4,0,0,1,1,.68A5.32,5.32,0,0,1,33,94,10.6,10.6,0,0,1,33.75,96.21Zm3.16-4.61c-.14,1.15-.27,2.44-.41,3.86s-.27,3-.39,4.62-.25,3.42-.35,5.29-.2,3.82-.29,5.86l-.79,0c-.22,0-.45,0-.69,0a2.1,2.1,0,0,0-.61.1c.15-1,.29-2,.42-3.17s.25-2.34.37-3.56.22-2.45.31-3.69.17-2.41.23-3.55.11-2.19.14-3.16,0-1.81,0-2.51Zm-4.87,5A11,11,0,0,0,31.15,94c-.3-.51-.56-.73-.79-.68a.46.46,0,0,0-.29.26,1.36,1.36,0,0,0-.12.65A6.32,6.32,0,0,0,30,95.37c.07.46.18,1,.34,1.66a11.43,11.43,0,0,0,.89,2.63c.3.53.57.76.81.7s.36-.39.38-1A11.26,11.26,0,0,0,32,96.62Zm9.76,9a11.23,11.23,0,0,1,.35,2.28,5.58,5.58,0,0,1-.18,1.68,2.47,2.47,0,0,1-.59,1.09,1.87,1.87,0,0,1-.92.53,1.8,1.8,0,0,1-1.05,0,2.47,2.47,0,0,1-1-.68,5.13,5.13,0,0,1-.92-1.41,11.18,11.18,0,0,1-.76-2.2,11.45,11.45,0,0,1-.35-2.34,5.11,5.11,0,0,1,.18-1.66,2.26,2.26,0,0,1,.6-1,2.15,2.15,0,0,1,.92-.51,2,2,0,0,1,1.06,0,2.44,2.44,0,0,1,1,.68,5.22,5.22,0,0,1,.92,1.4A10.7,10.7,0,0,1,41.8,105.63Z" transform="translate(0 -12.33)"/>
                  <path d="M40.14,106a11.11,11.11,0,0,0-.88-2.61c-.29-.52-.56-.75-.8-.69a.45.45,0,0,0-.29.27,1.72,1.72,0,0,0-.12.66,6.16,6.16,0,0,0,.09,1.12c.07.45.18,1,.34,1.66a10.83,10.83,0,0,0,.9,2.64c.29.51.56.74.8.68s.37-.38.39-1A11.46,11.46,0,0,0,40.14,106ZM33.8,96.12a10.67,10.67,0,0,1,.34,2.28,5.71,5.71,0,0,1-.17,1.69,2.47,2.47,0,0,1-.59,1.1,1.77,1.77,0,0,1-.9.54,1.92,1.92,0,0,1-1.06,0,2.34,2.34,0,0,1-1-.69,5.63,5.63,0,0,1-.93-1.42,11,11,0,0,1-.75-2.2A11.4,11.4,0,0,1,28.34,95a5.69,5.69,0,0,1,.18-1.66,2.3,2.3,0,0,1,.61-1,2.09,2.09,0,0,1,.93-.49,1.8,1.8,0,0,1,1.05,0,2.4,2.4,0,0,1,1,.68,5.47,5.47,0,0,1,.92,1.4A10.7,10.7,0,0,1,33.8,96.12ZM37,91.51c-.14,1.15-.28,2.44-.41,3.87s-.27,3-.4,4.63-.24,3.43-.35,5.3-.2,3.83-.29,5.87l-.79,0c-.22,0-.45,0-.69,0a2.1,2.1,0,0,0-.61.1c.15-1,.29-2,.42-3.18s.26-2.34.37-3.57.22-2.45.31-3.69.17-2.42.23-3.56.11-2.19.14-3.17,0-1.81,0-2.51Zm-4.88,5a10.61,10.61,0,0,0-.9-2.62c-.29-.51-.55-.73-.78-.68a.45.45,0,0,0-.3.26,1.68,1.68,0,0,0-.12.66,6.39,6.39,0,0,0,.09,1.13c.07.45.18,1,.34,1.66a11.16,11.16,0,0,0,.9,2.64c.3.53.57.76.81.7s.36-.39.38-1A11.26,11.26,0,0,0,32.09,96.54Zm9.78,9a10.5,10.5,0,0,1,.34,2.28,5.64,5.64,0,0,1-.17,1.69,2.53,2.53,0,0,1-.59,1.09,1.89,1.89,0,0,1-2,.48,2.47,2.47,0,0,1-1-.68,5.74,5.74,0,0,1-.93-1.41,13.47,13.47,0,0,1-1.11-4.56,5.73,5.73,0,0,1,.18-1.66,2.36,2.36,0,0,1,.61-1,2.05,2.05,0,0,1,.92-.51,2,2,0,0,1,1.06,0,2.47,2.47,0,0,1,1,.68,5.47,5.47,0,0,1,.92,1.4A10.6,10.6,0,0,1,41.87,105.57Z" transform="translate(0 -12.33)"/>
                  <path d="M40.21,105.93a11.31,11.31,0,0,0-.89-2.62c-.29-.52-.56-.75-.8-.69a.45.45,0,0,0-.29.27,1.76,1.76,0,0,0-.12.66,6.32,6.32,0,0,0,.09,1.13c.07.45.18,1,.34,1.65a10.63,10.63,0,0,0,.9,2.65c.29.52.56.75.8.69s.37-.39.39-1A11.39,11.39,0,0,0,40.21,105.93ZM33.85,96a10.67,10.67,0,0,1,.34,2.29A5.64,5.64,0,0,1,34,100a2.45,2.45,0,0,1-.59,1.11,1.82,1.82,0,0,1-.91.54,1.92,1.92,0,0,1-1.06,0,2.43,2.43,0,0,1-1-.7,5.55,5.55,0,0,1-.93-1.41,11.14,11.14,0,0,1-.75-2.21,11.4,11.4,0,0,1-.37-2.37,5.76,5.76,0,0,1,.18-1.67,2.36,2.36,0,0,1,.61-1,2.09,2.09,0,0,1,.93-.49,1.79,1.79,0,0,1,1,0,2.37,2.37,0,0,1,1,.68,5.75,5.75,0,0,1,.92,1.4A10.81,10.81,0,0,1,33.85,96ZM37,91.42c-.13,1.15-.27,2.44-.41,3.87s-.27,3-.39,4.65-.25,3.43-.35,5.31-.2,3.83-.29,5.88l-.79,0c-.22,0-.45,0-.69,0a2.11,2.11,0,0,0-.62.1c.15-1,.29-2,.42-3.19s.26-2.35.37-3.57.22-2.46.31-3.7.17-2.43.23-3.57S34.92,95,35,94s0-1.82,0-2.53Zm-4.89,5a11,11,0,0,0-.89-2.62c-.3-.51-.56-.74-.79-.68a.47.47,0,0,0-.3.26,1.67,1.67,0,0,0-.12.65,8.86,8.86,0,0,0,.09,1.13c.07.46.19,1,.35,1.67a11.11,11.11,0,0,0,.9,2.65c.29.52.56.76.8.7s.37-.39.39-1A12,12,0,0,0,32.13,96.46Zm9.81,9.05a11.14,11.14,0,0,1,.34,2.29,5.61,5.61,0,0,1-.17,1.68,2.42,2.42,0,0,1-.6,1.1,1.83,1.83,0,0,1-.92.53,1.92,1.92,0,0,1-1.06,0,2.4,2.4,0,0,1-1-.69,5.38,5.38,0,0,1-.93-1.41,10.92,10.92,0,0,1-.75-2.21,11.62,11.62,0,0,1-.36-2.35,5.14,5.14,0,0,1,.18-1.67,2.27,2.27,0,0,1,.61-1,2.05,2.05,0,0,1,.92-.51,2,2,0,0,1,1.06,0,2.47,2.47,0,0,1,1,.68,5.55,5.55,0,0,1,.93,1.41A11.22,11.22,0,0,1,41.94,105.51Z" transform="translate(0 -12.33)"/>
                  <path d="M40.27,105.87a11.43,11.43,0,0,0-.89-2.63c-.29-.51-.56-.74-.8-.69a.45.45,0,0,0-.29.27,1.6,1.6,0,0,0-.12.67,6.22,6.22,0,0,0,.09,1.12c.07.46.18,1,.34,1.66a10.9,10.9,0,0,0,.9,2.66c.3.51.57.74.8.68s.37-.38.39-1A11.45,11.45,0,0,0,40.27,105.87ZM33.9,96a10.75,10.75,0,0,1,.35,2.29,6,6,0,0,1-.18,1.69,2.54,2.54,0,0,1-.58,1.11,1.89,1.89,0,0,1-.92.54,1.92,1.92,0,0,1-1.06,0,2.46,2.46,0,0,1-1-.7,5.63,5.63,0,0,1-.93-1.42,10.92,10.92,0,0,1-.75-2.21,11.38,11.38,0,0,1-.37-2.38,5.8,5.8,0,0,1,.18-1.67,2.09,2.09,0,0,1,1.54-1.54,1.92,1.92,0,0,1,1.06,0,2.5,2.5,0,0,1,1,.68,5.38,5.38,0,0,1,.93,1.41A10.6,10.6,0,0,1,33.9,96Zm3.18-4.63c-.14,1.15-.27,2.45-.41,3.88s-.27,3-.4,4.65-.24,3.44-.35,5.32-.2,3.85-.29,5.9l-.79,0c-.22,0-.45,0-.69,0a3.09,3.09,0,0,0-.62.1q.22-1.44.42-3.18c.13-1.16.26-2.36.38-3.59s.22-2.46.31-3.7.17-2.44.23-3.58.11-2.2.14-3.18,0-1.82,0-2.53Zm-4.9,5a11.09,11.09,0,0,0-.89-2.63c-.3-.51-.56-.74-.79-.68a.45.45,0,0,0-.3.26,1.38,1.38,0,0,0-.12.66,6.39,6.39,0,0,0,.09,1.13c.07.46.18,1,.34,1.67a11.11,11.11,0,0,0,.9,2.65c.3.53.57.76.81.7s.37-.39.39-1A12,12,0,0,0,32.18,96.38ZM42,105.44a11.32,11.32,0,0,1,.34,2.3,5.68,5.68,0,0,1-.17,1.69,2.48,2.48,0,0,1-.6,1.1,2,2,0,0,1-.92.53,1.92,1.92,0,0,1-1.06,0,2.46,2.46,0,0,1-1-.69,5.55,5.55,0,0,1-.93-1.41,11,11,0,0,1-.75-2.22,10.44,10.44,0,0,1-.36-2.36,5.4,5.4,0,0,1,.17-1.66,2.26,2.26,0,0,1,.62-1,2,2,0,0,1,.92-.51,2,2,0,0,1,1.06,0,2.41,2.41,0,0,1,1,.68,5.74,5.74,0,0,1,.93,1.41A11.42,11.42,0,0,1,42,105.44Z" transform="translate(0 -12.33)"/>
                  <path d="M40.33,105.8a10.85,10.85,0,0,0-.89-2.62c-.29-.52-.56-.75-.8-.69a.46.46,0,0,0-.29.26,1.49,1.49,0,0,0-.12.67,6.32,6.32,0,0,0,.09,1.13c.07.45.18,1,.34,1.66a11.18,11.18,0,0,0,.9,2.66q.45.78.81.69t.39-1A11.22,11.22,0,0,0,40.33,105.8ZM34,95.88a11.34,11.34,0,0,1,.34,2.29,5.76,5.76,0,0,1-.18,1.7,2.6,2.6,0,0,1-.58,1.11,2,2,0,0,1-.92.54,1.92,1.92,0,0,1-1.06,0,2.4,2.4,0,0,1-1-.7,5.92,5.92,0,0,1-.94-1.42,11,11,0,0,1-.75-2.22,11.48,11.48,0,0,1-.37-2.38,5.76,5.76,0,0,1,.18-1.67,2.26,2.26,0,0,1,.62-1,2.22,2.22,0,0,1,.93-.5,1.89,1.89,0,0,1,1,0,2.47,2.47,0,0,1,1,.68,5.74,5.74,0,0,1,.93,1.41A11.3,11.3,0,0,1,34,95.88Zm3.18-4.64c-.14,1.15-.28,2.45-.41,3.89s-.27,3-.4,4.66-.25,3.45-.35,5.33-.21,3.85-.29,5.9l-.8,0c-.22,0-.45,0-.69,0a3.21,3.21,0,0,0-.62.1c.15-1,.29-2,.42-3.19s.26-2.36.38-3.59.22-2.47.31-3.72.17-2.43.23-3.58.11-2.21.14-3.18,0-1.83,0-2.54ZM32.23,96.3a10.57,10.57,0,0,0-.9-2.63c-.3-.52-.56-.75-.79-.69a.5.5,0,0,0-.3.26,1.68,1.68,0,0,0-.12.66A6.43,6.43,0,0,0,30.21,95c.07.46.18,1,.34,1.67a11.61,11.61,0,0,0,.91,2.66c.3.53.57.76.81.7s.37-.39.38-1A11.32,11.32,0,0,0,32.23,96.3Zm9.84,9.08a11.51,11.51,0,0,1,.35,2.3,5.61,5.61,0,0,1-.18,1.69,2.46,2.46,0,0,1-.6,1.11,1.89,1.89,0,0,1-2,.48,2.63,2.63,0,0,1-1-.69,5.63,5.63,0,0,1-.93-1.42,11.66,11.66,0,0,1-.76-2.22,11.81,11.81,0,0,1-.36-2.36,5.43,5.43,0,0,1,.18-1.67,2.34,2.34,0,0,1,.61-1,2,2,0,0,1,.93-.51,1.92,1.92,0,0,1,1.06,0,2.49,2.49,0,0,1,1,.68,5.74,5.74,0,0,1,.93,1.41A10.71,10.71,0,0,1,42.07,105.38Z" transform="translate(0 -12.33)"/>
                  <path d="M40.4,105.74a11.43,11.43,0,0,0-.89-2.63c-.3-.52-.56-.75-.81-.69a.45.45,0,0,0-.29.27,1.43,1.43,0,0,0-.12.67,6.39,6.39,0,0,0,.09,1.13c.07.45.18,1,.34,1.66a10.77,10.77,0,0,0,.91,2.67c.29.51.56.74.8.69s.37-.39.39-1A11.59,11.59,0,0,0,40.4,105.74ZM34,95.8a11.34,11.34,0,0,1,.34,2.29,5.75,5.75,0,0,1-.17,1.7,2.77,2.77,0,0,1-.59,1.12,1.88,1.88,0,0,1-2,.49,2.55,2.55,0,0,1-1-.7,5.7,5.7,0,0,1-.93-1.43,11,11,0,0,1-.76-2.22,11.46,11.46,0,0,1-.37-2.39A5.8,5.8,0,0,1,28.68,93a2.26,2.26,0,0,1,.62-1,2.22,2.22,0,0,1,.93-.5,2,2,0,0,1,1.06,0,2.67,2.67,0,0,1,1,.69,5.74,5.74,0,0,1,.93,1.41A11.66,11.66,0,0,1,34,95.8Zm3.19-4.66c-.14,1.17-.28,2.46-.42,3.9s-.27,3-.4,4.67-.24,3.46-.35,5.35-.2,3.86-.29,5.91l-.8,0c-.22,0-.45,0-.69,0a3.21,3.21,0,0,0-.62.1c.15-1,.29-2,.42-3.2s.26-2.36.38-3.6.22-2.47.31-3.72S34.91,98.1,35,97s.11-2.21.14-3.19,0-1.83,0-2.54Zm-4.92,5.08a11.41,11.41,0,0,0-.9-2.64c-.3-.51-.57-.74-.8-.69a.5.5,0,0,0-.3.26,1.78,1.78,0,0,0-.12.67A9.13,9.13,0,0,0,30.25,95c.07.46.19,1,.35,1.68a11.22,11.22,0,0,0,.9,2.66c.3.53.57.77.82.71s.36-.4.38-1A11.39,11.39,0,0,0,32.28,96.22Zm9.86,9.1a10.75,10.75,0,0,1,.34,2.3,5.4,5.4,0,0,1-.17,1.7,2.42,2.42,0,0,1-.6,1.1,2,2,0,0,1-.92.54,2,2,0,0,1-1.07,0,2.55,2.55,0,0,1-1-.7,5.29,5.29,0,0,1-.93-1.42,11,11,0,0,1-.76-2.22,11.79,11.79,0,0,1-.36-2.37,5.18,5.18,0,0,1,.18-1.67,2.25,2.25,0,0,1,.61-1,2,2,0,0,1,2-.47,2.47,2.47,0,0,1,1,.68,5.74,5.74,0,0,1,.93,1.41A11,11,0,0,1,42.14,105.32Z" transform="translate(0 -12.33)"/>
                  <path d="M40.46,105.68a11.38,11.38,0,0,0-.89-2.64c-.3-.52-.56-.75-.81-.69a.45.45,0,0,0-.29.27,1.46,1.46,0,0,0-.12.67,6.32,6.32,0,0,0,.09,1.13c.07.46.18,1,.34,1.67a11.21,11.21,0,0,0,.91,2.67q.45.78.81.69t.39-1A11.28,11.28,0,0,0,40.46,105.68Zm-6.4-10A11.32,11.32,0,0,1,34.4,98a5.78,5.78,0,0,1-.17,1.7,2.65,2.65,0,0,1-.59,1.12,1.88,1.88,0,0,1-2,.49,2.55,2.55,0,0,1-1-.7,5.45,5.45,0,0,1-.94-1.43A11.11,11.11,0,0,1,28.91,97a11.46,11.46,0,0,1-.37-2.39,5.5,5.5,0,0,1,.18-1.68,2.18,2.18,0,0,1,.62-1,2.13,2.13,0,0,1,.93-.51,2,2,0,0,1,1.06,0,2.7,2.7,0,0,1,1,.69,5.63,5.63,0,0,1,.93,1.42A11.19,11.19,0,0,1,34.06,95.72Zm3.19-4.67c-.14,1.17-.27,2.47-.41,3.91s-.27,3-.4,4.68-.24,3.46-.35,5.35-.21,3.87-.29,5.93l-.8,0-.7,0a2.59,2.59,0,0,0-.62.1q.23-1.45.42-3.21c.14-1.16.26-2.37.38-3.6s.22-2.48.31-3.73S35,98,35,96.87s.11-2.21.13-3.19,0-1.83,0-2.55Zm-4.93,5.09a10.79,10.79,0,0,0-.9-2.65c-.3-.51-.56-.74-.79-.68a.43.43,0,0,0-.3.26,1.38,1.38,0,0,0-.12.66,6.43,6.43,0,0,0,.09,1.14c.07.46.18,1,.34,1.68a11.55,11.55,0,0,0,.91,2.67c.3.53.57.76.81.71s.37-.4.39-1A11.09,11.09,0,0,0,32.32,96.14Zm9.89,9.11a11.6,11.6,0,0,1,.34,2.32,5.78,5.78,0,0,1-.17,1.7,2.48,2.48,0,0,1-.6,1.1,1.9,1.9,0,0,1-.93.53,2,2,0,0,1-1.07,0,2.55,2.55,0,0,1-1-.7,5.45,5.45,0,0,1-.93-1.42,10.89,10.89,0,0,1-.76-2.23,11.2,11.2,0,0,1-.37-2.37,5.83,5.83,0,0,1,.18-1.68,2.35,2.35,0,0,1,.62-1,2,2,0,0,1,.93-.51,1.86,1.86,0,0,1,1.07,0,2.49,2.49,0,0,1,1,.68,5.63,5.63,0,0,1,.93,1.42A11.3,11.3,0,0,1,42.21,105.25Z" transform="translate(0 -12.33)"/>
                  <path d="M40.53,105.62a11.78,11.78,0,0,0-.9-2.64c-.29-.53-.56-.76-.81-.7a.45.45,0,0,0-.29.27,1.46,1.46,0,0,0-.12.67,6.43,6.43,0,0,0,.09,1.14c.07.45.18,1,.34,1.67a11.21,11.21,0,0,0,.91,2.67c.3.53.57.76.81.7s.37-.39.39-1A11.65,11.65,0,0,0,40.53,105.62Zm-6.42-10a10.92,10.92,0,0,1,.34,2.31,5.78,5.78,0,0,1-.17,1.7,2.63,2.63,0,0,1-.59,1.13,2,2,0,0,1-.93.54,2,2,0,0,1-1.07,0,2.55,2.55,0,0,1-1-.7,6,6,0,0,1-.94-1.44A10.89,10.89,0,0,1,29,96.89a11.56,11.56,0,0,1-.37-2.39,5.5,5.5,0,0,1,.18-1.68,2.35,2.35,0,0,1,.62-1,2.17,2.17,0,0,1,.94-.51,2,2,0,0,1,1.06,0,2.6,2.6,0,0,1,1,.69,5.38,5.38,0,0,1,.94,1.42A11.66,11.66,0,0,1,34.11,95.63ZM37.31,91c-.14,1.17-.28,2.47-.42,3.92s-.27,3-.39,4.69-.25,3.47-.36,5.36-.2,3.88-.29,5.94l-.8,0-.7,0a2.59,2.59,0,0,0-.62.1c.15-1,.29-2,.43-3.21s.26-2.38.37-3.62.22-2.48.32-3.73.17-2.45.23-3.61.11-2.22.14-3.2,0-1.83,0-2.55Zm-4.94,5.1a10.63,10.63,0,0,0-.9-2.65c-.3-.52-.57-.75-.8-.69a.5.5,0,0,0-.3.26,1.55,1.55,0,0,0-.12.66,6.6,6.6,0,0,0,.09,1.15,17,17,0,0,0,.35,1.68,10.66,10.66,0,0,0,.91,2.67c.3.53.57.77.81.71s.37-.39.39-1A11.65,11.65,0,0,0,32.37,96.06Zm9.9,9.13a11,11,0,0,1,.35,2.32,5.71,5.71,0,0,1-.17,1.7,2.57,2.57,0,0,1-.61,1.11,1.92,1.92,0,0,1-.92.53,2,2,0,0,1-1.08,0,2.55,2.55,0,0,1-1-.7,5.8,5.8,0,0,1-.94-1.43,11.53,11.53,0,0,1-.76-2.23,11.88,11.88,0,0,1-.36-2.38,5.21,5.21,0,0,1,.18-1.68,2.26,2.26,0,0,1,.62-1,2,2,0,0,1,2-.48,2.63,2.63,0,0,1,1,.69,5.63,5.63,0,0,1,.93,1.42A10.41,10.41,0,0,1,42.27,105.19Z" transform="translate(0 -12.33)"/>
                  <path d="M40.59,105.56a10.79,10.79,0,0,0-.9-2.65c-.29-.52-.56-.76-.8-.7a.44.44,0,0,0-.3.27,1.5,1.5,0,0,0-.12.68,6.32,6.32,0,0,0,.09,1.13c.07.46.18,1,.34,1.68a11.33,11.33,0,0,0,.91,2.68q.45.78.81.69c.25-.06.38-.39.4-1A11.28,11.28,0,0,0,40.59,105.56Zm-6.43-10a10.92,10.92,0,0,1,.34,2.31,5.82,5.82,0,0,1-.17,1.71,2.59,2.59,0,0,1-.59,1.12,1.88,1.88,0,0,1-2,.5,2.58,2.58,0,0,1-1-.71,6,6,0,0,1-.94-1.43A11.9,11.9,0,0,1,29,96.81a11.64,11.64,0,0,1-.37-2.4,5.5,5.5,0,0,1,.18-1.68,2.35,2.35,0,0,1,.62-1,2.22,2.22,0,0,1,.94-.51,2,2,0,0,1,1.06,0,2.55,2.55,0,0,1,1,.7,5.46,5.46,0,0,1,.94,1.42A11.42,11.42,0,0,1,34.16,95.55Zm3.21-4.68c-.14,1.17-.28,2.48-.42,3.92s-.27,3-.4,4.7-.24,3.48-.35,5.38-.21,3.88-.3,5.95l-.8,0c-.22,0-.45,0-.7,0a2.59,2.59,0,0,0-.62.1c.15-1,.29-2,.43-3.22s.26-2.38.37-3.62.23-2.49.32-3.74.17-2.46.23-3.62.11-2.22.14-3.21,0-1.83,0-2.55ZM32.42,96a11.09,11.09,0,0,0-.91-2.66c-.3-.52-.56-.75-.79-.69a.49.49,0,0,0-.31.26,1.78,1.78,0,0,0-.12.67,9.13,9.13,0,0,0,.09,1.14c.07.47.19,1,.35,1.69a11.37,11.37,0,0,0,.91,2.68c.3.53.58.77.82.71s.37-.4.39-1A12.19,12.19,0,0,0,32.42,96Zm9.92,9.15a10.9,10.9,0,0,1,.35,2.32,5.47,5.47,0,0,1-.18,1.71,2.57,2.57,0,0,1-.6,1.11,1.9,1.9,0,0,1-.93.53,1.87,1.87,0,0,1-1.07,0,2.49,2.49,0,0,1-1-.69,6,6,0,0,1-.94-1.43A13.5,13.5,0,0,1,36.8,104a5.21,5.21,0,0,1,.18-1.68,2.24,2.24,0,0,1,.61-1.06,2.14,2.14,0,0,1,.94-.52,2.05,2.05,0,0,1,1.07,0,2.43,2.43,0,0,1,1,.69,5.38,5.38,0,0,1,.94,1.42A10.89,10.89,0,0,1,42.34,105.13Z" transform="translate(0 -12.33)"/>
                  <path d="M40.65,105.5a11.06,11.06,0,0,0-.9-2.66c-.29-.52-.56-.76-.8-.7a.47.47,0,0,0-.3.27,1.5,1.5,0,0,0-.12.68,6.43,6.43,0,0,0,.09,1.14,16.65,16.65,0,0,0,.34,1.68,11.33,11.33,0,0,0,.91,2.68c.3.53.58.76.82.7s.37-.39.39-1A11.28,11.28,0,0,0,40.65,105.5Zm-6.44-10a10.91,10.91,0,0,1,.34,2.32,5.89,5.89,0,0,1-.17,1.71,2.59,2.59,0,0,1-.59,1.12,1.88,1.88,0,0,1-2,.5,2.45,2.45,0,0,1-1.05-.71A5.36,5.36,0,0,1,29.8,99,11,11,0,0,1,29,96.73a11.64,11.64,0,0,1-.37-2.4,5.57,5.57,0,0,1,.18-1.69,2.35,2.35,0,0,1,.62-1,2.22,2.22,0,0,1,.94-.51,2.05,2.05,0,0,1,1.07,0,2.62,2.62,0,0,1,1,.7,5.92,5.92,0,0,1,.94,1.42A11.53,11.53,0,0,1,34.21,95.47Zm3.22-4.69c-.15,1.17-.28,2.48-.42,3.93s-.27,3-.4,4.71-.25,3.48-.36,5.38-.2,3.89-.29,6l-.8,0c-.23,0-.46,0-.71,0a2.59,2.59,0,0,0-.62.1c.15-1,.29-2.06.43-3.23s.26-2.38.38-3.63.22-2.49.31-3.75.17-2.46.23-3.62.11-2.22.14-3.21,0-1.84,0-2.56Zm-5,5.12a10.93,10.93,0,0,0-.91-2.66c-.3-.52-.57-.75-.8-.7a.44.44,0,0,0-.3.27,1.5,1.5,0,0,0-.13.66,7.87,7.87,0,0,0,.1,1.15c.07.47.18,1,.34,1.69A11.12,11.12,0,0,0,31.69,99c.3.54.57.77.81.72s.38-.4.39-1A11.52,11.52,0,0,0,32.47,95.9Zm9.94,9.17a11.58,11.58,0,0,1,.35,2.32,5.79,5.79,0,0,1-.18,1.71,2.46,2.46,0,0,1-.6,1.11,1.84,1.84,0,0,1-.94.54,1.87,1.87,0,0,1-1.07,0,2.43,2.43,0,0,1-1-.7,5.8,5.8,0,0,1-.94-1.43,11,11,0,0,1-.76-2.24,11.37,11.37,0,0,1-.37-2.39,5.83,5.83,0,0,1,.18-1.68,2.48,2.48,0,0,1,.62-1.07,2.22,2.22,0,0,1,.94-.51,2.05,2.05,0,0,1,1.07,0,2.46,2.46,0,0,1,1.05.69,6,6,0,0,1,.94,1.43A11.53,11.53,0,0,1,42.41,105.07Z" transform="translate(0 -12.33)"/>
                  <path d="M40.72,105.43a12.23,12.23,0,0,0-.9-2.66q-.45-.78-.81-.69a.44.44,0,0,0-.3.27,1.58,1.58,0,0,0-.13.67,7.75,7.75,0,0,0,.1,1.14,16.77,16.77,0,0,0,.34,1.69,10.91,10.91,0,0,0,.92,2.69c.3.52.57.75.81.7s.38-.4.4-1A12,12,0,0,0,40.72,105.43Zm-6.46-10a11,11,0,0,1,.35,2.32,5.79,5.79,0,0,1-.18,1.71,2.58,2.58,0,0,1-.59,1.13,1.94,1.94,0,0,1-.93.55,2,2,0,0,1-1.08,0,2.58,2.58,0,0,1-1-.71,5.79,5.79,0,0,1-.94-1.44,11.3,11.3,0,0,1-.77-2.25,11.63,11.63,0,0,1-.37-2.41,5.31,5.31,0,0,1,.18-1.69,2.35,2.35,0,0,1,.62-1,2.2,2.2,0,0,1,.95-.51,2,2,0,0,1,1.06,0,2.65,2.65,0,0,1,1.05.7,5.92,5.92,0,0,1,.94,1.42A11.65,11.65,0,0,1,34.26,95.39Zm3.22-4.7c-.14,1.17-.28,2.48-.42,3.94s-.27,3-.4,4.72-.24,3.49-.35,5.39-.21,3.9-.3,6l-.8,0c-.22,0-.46,0-.7,0a2.19,2.19,0,0,0-.63.1c.15-1,.29-2.06.43-3.24s.26-2.38.38-3.63.22-2.5.31-3.76.17-2.47.24-3.62.11-2.24.14-3.23,0-1.84,0-2.56Zm-5,5.12a10.82,10.82,0,0,0-.91-2.66c-.3-.52-.56-.75-.8-.69a.5.5,0,0,0-.3.26,1.57,1.57,0,0,0-.12.67,6.6,6.6,0,0,0,.09,1.15c.07.46.19,1,.35,1.69a11.32,11.32,0,0,0,.91,2.69c.31.53.58.77.82.71s.38-.4.39-1A11.34,11.34,0,0,0,32.51,95.81Zm10,9.19a11,11,0,0,1,.34,2.33,5.85,5.85,0,0,1-.17,1.72,2.47,2.47,0,0,1-.61,1.11,2,2,0,0,1-.93.54,1.9,1.9,0,0,1-1.08,0A2.65,2.65,0,0,1,39,110a5.71,5.71,0,0,1-.94-1.43,13.32,13.32,0,0,1-1.13-4.64,5.27,5.27,0,0,1,.18-1.69,2.39,2.39,0,0,1,.62-1.07,2.17,2.17,0,0,1,.94-.51,2.05,2.05,0,0,1,1.07,0,2.4,2.4,0,0,1,1.05.69,5.45,5.45,0,0,1,.94,1.43A11.74,11.74,0,0,1,42.48,105Z" transform="translate(0 -12.33)"/>
                  <path d="M40.78,105.37a11.35,11.35,0,0,0-.9-2.66c-.3-.53-.57-.76-.81-.7a.44.44,0,0,0-.3.27,1.63,1.63,0,0,0-.13.68,7.75,7.75,0,0,0,.1,1.14c.06.46.18,1,.34,1.69a11.19,11.19,0,0,0,.92,2.69c.3.53.57.76.82.7s.37-.39.39-1A11.47,11.47,0,0,0,40.78,105.37ZM34.31,95.31a11,11,0,0,1,.35,2.32,5.58,5.58,0,0,1-.18,1.72,2.63,2.63,0,0,1-.59,1.13A1.94,1.94,0,0,1,33,101a2,2,0,0,1-1.08,0,2.64,2.64,0,0,1-1.06-.71,5.86,5.86,0,0,1-.94-1.45,10.87,10.87,0,0,1-.77-2.25,11.63,11.63,0,0,1-.37-2.41,5.27,5.27,0,0,1,.18-1.69,2.26,2.26,0,0,1,.63-1.06,2.17,2.17,0,0,1,.94-.51,2.05,2.05,0,0,1,1.07,0,2.55,2.55,0,0,1,1,.7,5.29,5.29,0,0,1,.94,1.43A11,11,0,0,1,34.31,95.31Zm3.23-4.71c-.14,1.17-.28,2.49-.42,3.94s-.27,3-.4,4.73-.25,3.5-.36,5.41-.2,3.9-.29,6l-.81,0c-.22,0-.46,0-.7,0a2.56,2.56,0,0,0-.63.11c.15-1,.29-2.07.43-3.24s.26-2.4.38-3.65.22-2.5.32-3.76.17-2.47.23-3.63.11-2.24.14-3.23,0-1.85,0-2.57Zm-5,5.13a11.21,11.21,0,0,0-.91-2.67c-.3-.52-.57-.75-.8-.69a.49.49,0,0,0-.31.26,1.78,1.78,0,0,0-.12.67,7.66,7.66,0,0,0,.09,1.15c.07.47.19,1,.35,1.7a11.07,11.07,0,0,0,.92,2.69c.3.54.58.78.82.72s.37-.4.39-1A11.34,11.34,0,0,0,32.56,95.73Zm10,9.21a11.07,11.07,0,0,1,.35,2.34,5.82,5.82,0,0,1-.17,1.71,2.61,2.61,0,0,1-.61,1.12,1.93,1.93,0,0,1-2,.49,2.65,2.65,0,0,1-1.05-.7,5.61,5.61,0,0,1-.94-1.44A13.3,13.3,0,0,1,37,103.81a5.31,5.31,0,0,1,.18-1.69,2.3,2.3,0,0,1,.62-1.07,2.17,2.17,0,0,1,.94-.51,2,2,0,0,1,1.08,0,2.52,2.52,0,0,1,1.05.69,6,6,0,0,1,.94,1.43A11,11,0,0,1,42.54,104.94Z" transform="translate(0 -12.33)"/>
                  <path d="M40.84,105.31a11.17,11.17,0,0,0-.9-2.67c-.3-.53-.57-.76-.81-.7a.44.44,0,0,0-.3.27,1.63,1.63,0,0,0-.13.68,8,8,0,0,0,.1,1.15c.06.46.18,1,.34,1.69a11.47,11.47,0,0,0,.92,2.7c.3.52.58.76.82.7s.38-.4.4-1A11.61,11.61,0,0,0,40.84,105.31ZM34.36,95.23a11,11,0,0,1,.35,2.33,5.58,5.58,0,0,1-.18,1.72,2.69,2.69,0,0,1-.59,1.13A1.94,1.94,0,0,1,33,101a2,2,0,0,1-1.09,0,2.61,2.61,0,0,1-1.05-.71,5.87,5.87,0,0,1-.95-1.45,13.57,13.57,0,0,1-1.14-4.67,5.3,5.3,0,0,1,.18-1.7,2.26,2.26,0,0,1,.63-1.06,2.17,2.17,0,0,1,.94-.51,2.09,2.09,0,0,1,1.08,0,2.55,2.55,0,0,1,1,.7A5.45,5.45,0,0,1,33.59,93,10.87,10.87,0,0,1,34.36,95.23Zm3.24-4.72c-.14,1.17-.28,2.49-.42,3.95s-.28,3-.41,4.74-.24,3.5-.35,5.42-.21,3.91-.3,6l-.81,0c-.22,0-.46,0-.7,0a2.56,2.56,0,0,0-.63.11c.15-1,.3-2.07.43-3.25s.26-2.4.38-3.65.22-2.51.32-3.77.17-2.48.23-3.64.11-2.25.14-3.24,0-1.85,0-2.57Zm-5,5.14A11.21,11.21,0,0,0,31.7,93c-.31-.52-.57-.76-.81-.7a.46.46,0,0,0-.3.27,1.51,1.51,0,0,0-.13.67,8,8,0,0,0,.1,1.15,17.29,17.29,0,0,0,.35,1.7,11.43,11.43,0,0,0,.91,2.7c.31.54.58.78.83.72s.37-.4.39-1A11.92,11.92,0,0,0,32.61,95.65Zm10,9.23a11.07,11.07,0,0,1,.35,2.34,5.54,5.54,0,0,1-.18,1.72,2.56,2.56,0,0,1-.6,1.12,2.09,2.09,0,0,1-.94.54,2,2,0,0,1-1.08,0,2.61,2.61,0,0,1-1.06-.7,5.79,5.79,0,0,1-.94-1.44,11.19,11.19,0,0,1-.77-2.26,11.45,11.45,0,0,1-.37-2.4,5.34,5.34,0,0,1,.18-1.7,2.48,2.48,0,0,1,.62-1.07,2.15,2.15,0,0,1,1-.51,2,2,0,0,1,1.08,0,2.52,2.52,0,0,1,1,.69,5.61,5.61,0,0,1,.94,1.44A11,11,0,0,1,42.61,104.88Z" transform="translate(0 -12.33)"/>
                  <path d="M40.91,105.25a11.5,11.5,0,0,0-.91-2.68c-.3-.52-.57-.76-.81-.7a.44.44,0,0,0-.3.27,1.63,1.63,0,0,0-.13.68,7.76,7.76,0,0,0,.1,1.15,16.77,16.77,0,0,0,.34,1.69,11.42,11.42,0,0,0,.92,2.71c.31.53.58.76.82.7s.38-.39.4-1A11.47,11.47,0,0,0,40.91,105.25Zm-6.5-10.11a11.25,11.25,0,0,1,.35,2.34,5.89,5.89,0,0,1-.17,1.72,2.8,2.8,0,0,1-.6,1.14,1.93,1.93,0,0,1-.94.55,2,2,0,0,1-1.08,0,2.57,2.57,0,0,1-1.06-.72A6,6,0,0,1,30,98.67,13.55,13.55,0,0,1,28.82,94a5.34,5.34,0,0,1,.18-1.7,2.31,2.31,0,0,1,.63-1.06,2.2,2.2,0,0,1,.95-.51,2,2,0,0,1,1.07,0,2.65,2.65,0,0,1,1.05.7,5.71,5.71,0,0,1,.94,1.43A10.7,10.7,0,0,1,34.41,95.14Zm3.24-4.72q-.21,1.77-.42,4c-.14,1.46-.27,3-.4,4.74s-.25,3.52-.36,5.43-.2,3.92-.29,6l-.81,0c-.23,0-.46,0-.71,0a3.2,3.2,0,0,0-.63.1c.15-1,.3-2.07.43-3.25s.26-2.4.38-3.66.23-2.51.32-3.78.17-2.48.24-3.64.11-2.25.14-3.24,0-1.86,0-2.58Zm-5,5.15a11.24,11.24,0,0,0-.92-2.68c-.3-.52-.57-.75-.8-.7a.48.48,0,0,0-.31.27,1.57,1.57,0,0,0-.12.67,6.7,6.7,0,0,0,.09,1.16c.07.47.19,1,.35,1.7a11.65,11.65,0,0,0,.92,2.7c.31.54.58.78.82.72s.38-.4.4-1A12,12,0,0,0,32.66,95.57Zm10,9.25a11.76,11.76,0,0,1,.35,2.34,5.5,5.5,0,0,1-.18,1.72,2.46,2.46,0,0,1-.61,1.12,1.93,1.93,0,0,1-.94.55,2,2,0,0,1-1.08,0,2.64,2.64,0,0,1-1.06-.71,5.61,5.61,0,0,1-.94-1.44,11.16,11.16,0,0,1-.78-2.26,12.16,12.16,0,0,1-.36-2.4,5.4,5.4,0,0,1,.18-1.71,2.48,2.48,0,0,1,.62-1.07,2.1,2.1,0,0,1,.95-.51,1.9,1.9,0,0,1,1.08,0,2.4,2.4,0,0,1,1.05.69,5.79,5.79,0,0,1,.95,1.44A11.49,11.49,0,0,1,42.68,104.82Z" transform="translate(0 -12.33)"/>
                  <path d="M41,105.19a11,11,0,0,0-.91-2.68c-.3-.53-.57-.77-.81-.71a.44.44,0,0,0-.3.28,1.6,1.6,0,0,0-.13.68,8,8,0,0,0,.1,1.15,16.77,16.77,0,0,0,.34,1.69,11.54,11.54,0,0,0,.92,2.72c.31.52.58.76.83.7s.37-.4.39-1A11.12,11.12,0,0,0,41,105.19ZM34.46,95.06a10.62,10.62,0,0,1,.35,2.34,6,6,0,0,1-.17,1.73,2.8,2.8,0,0,1-.6,1.14,1.93,1.93,0,0,1-.94.55,2,2,0,0,1-1.08,0,2.51,2.51,0,0,1-1.06-.72A5.43,5.43,0,0,1,30,98.6a11.38,11.38,0,0,1-.78-2.26,11.89,11.89,0,0,1-.37-2.43A5.4,5.4,0,0,1,29,92.2a2.31,2.31,0,0,1,.63-1.06,2.2,2.2,0,0,1,.95-.51,2,2,0,0,1,1.08,0,2.65,2.65,0,0,1,1.05.7,5.61,5.61,0,0,1,.94,1.44A10.5,10.5,0,0,1,34.46,95.06Zm3.25-4.73q-.21,1.77-.42,4c-.14,1.47-.27,3-.4,4.76s-.25,3.52-.36,5.44-.21,3.93-.3,6l-.81,0c-.23,0-.46,0-.71,0a3.2,3.2,0,0,0-.63.1c.15-1,.3-2.07.43-3.26s.27-2.4.38-3.66.23-2.52.32-3.79.17-2.48.24-3.65.11-2.25.14-3.25,0-1.86,0-2.59Zm-5,5.16a11.44,11.44,0,0,0-.91-2.69c-.31-.52-.57-.75-.81-.69a.49.49,0,0,0-.31.26,1.78,1.78,0,0,0-.12.67,6.63,6.63,0,0,0,.09,1.16c.07.47.19,1,.35,1.71a11.22,11.22,0,0,0,.93,2.71c.3.54.58.78.82.72s.38-.4.4-1A12.13,12.13,0,0,0,32.7,95.49Zm10,9.26a12,12,0,0,1,.35,2.35,5.89,5.89,0,0,1-.18,1.73,2.51,2.51,0,0,1-.61,1.12,1.88,1.88,0,0,1-.94.54,1.93,1.93,0,0,1-1.09,0,2.64,2.64,0,0,1-1.06-.71,5.77,5.77,0,0,1-.95-1.45A11.85,11.85,0,0,1,37.5,106a11.63,11.63,0,0,1-.37-2.41,5.57,5.57,0,0,1,.19-1.7,2.37,2.37,0,0,1,.62-1.08,2,2,0,0,1,1-.51,1.9,1.9,0,0,1,1.08,0,2.48,2.48,0,0,1,1.06.69A6,6,0,0,1,42,102.5,11.27,11.27,0,0,1,42.75,104.75Z" transform="translate(0 -12.33)"/>
                  <path d="M41,105.13a12.12,12.12,0,0,0-.91-2.69c-.3-.53-.58-.77-.82-.71A.49.49,0,0,0,39,102a1.84,1.84,0,0,0-.12.68,7.87,7.87,0,0,0,.1,1.15,16.36,16.36,0,0,0,.34,1.7,11,11,0,0,0,.93,2.72c.3.53.58.76.82.7s.38-.39.4-1A11.6,11.6,0,0,0,41,105.13ZM34.52,95a11.17,11.17,0,0,1,.34,2.34,6,6,0,0,1-.17,1.74,2.69,2.69,0,0,1-.6,1.13,1.87,1.87,0,0,1-.94.56,2,2,0,0,1-1.09,0A2.57,2.57,0,0,1,31,100a5.5,5.5,0,0,1-.95-1.46,11.16,11.16,0,0,1-.78-2.26,11.88,11.88,0,0,1-.37-2.44,5.34,5.34,0,0,1,.18-1.7,2.3,2.3,0,0,1,.63-1.07,2.26,2.26,0,0,1,.95-.51,2,2,0,0,1,1.08,0,2.52,2.52,0,0,1,1.05.7,5.71,5.71,0,0,1,1,1.44A11.16,11.16,0,0,1,34.52,95Zm3.25-4.75c-.14,1.19-.28,2.51-.42,4s-.28,3.06-.41,4.77-.25,3.52-.36,5.45-.21,3.93-.29,6l-.82,0-.71,0a2.68,2.68,0,0,0-.63.1c.15-1,.3-2.08.43-3.26s.27-2.42.39-3.67.22-2.53.31-3.8.18-2.49.24-3.66.11-2.26.14-3.26,0-1.86,0-2.59Zm-5,5.18a11.19,11.19,0,0,0-.92-2.69c-.3-.53-.57-.76-.81-.7a.47.47,0,0,0-.3.26,1.63,1.63,0,0,0-.13.68,8.1,8.1,0,0,0,.1,1.16A17.41,17.41,0,0,0,31,95.83,11.77,11.77,0,0,0,32,98.54c.31.55.58.79.83.73s.38-.41.39-1A11.47,11.47,0,0,0,32.75,95.41Zm10.06,9.28a10.62,10.62,0,0,1,.35,2.35,6,6,0,0,1-.17,1.74,2.58,2.58,0,0,1-.62,1.12,1.84,1.84,0,0,1-.94.54,2,2,0,0,1-1.09,0,2.64,2.64,0,0,1-1.06-.71,6.17,6.17,0,0,1-1-1.45,12,12,0,0,1-.77-2.27,11.63,11.63,0,0,1-.37-2.41,5.4,5.4,0,0,1,.18-1.71,2.38,2.38,0,0,1,.63-1.08,2.12,2.12,0,0,1,1-.52,2.09,2.09,0,0,1,1.08,0,2.61,2.61,0,0,1,1.06.7,6,6,0,0,1,.95,1.44A11.19,11.19,0,0,1,42.81,104.69Z" transform="translate(0 -12.33)"/>
                  <path d="M41.1,105.06a11.62,11.62,0,0,0-.91-2.69c-.3-.53-.58-.76-.82-.7a.48.48,0,0,0-.31.27,1.84,1.84,0,0,0-.12.68,7.78,7.78,0,0,0,.09,1.16c.07.47.19,1,.35,1.7a11.28,11.28,0,0,0,.93,2.72c.3.53.58.77.82.71s.38-.4.4-1A11.73,11.73,0,0,0,41.1,105.06ZM34.57,94.9a12,12,0,0,1,.35,2.35A6.34,6.34,0,0,1,34.74,99a2.8,2.8,0,0,1-.6,1.14,1.9,1.9,0,0,1-.94.55,1.93,1.93,0,0,1-1.09,0A2.6,2.6,0,0,1,31,99.91a6.25,6.25,0,0,1-.95-1.46,11.27,11.27,0,0,1-.78-2.27,12,12,0,0,1-.37-2.44A5.4,5.4,0,0,1,29.12,92,2.35,2.35,0,0,1,29.75,91a2.24,2.24,0,0,1,1-.51,2,2,0,0,1,1.08,0,2.65,2.65,0,0,1,1.05.7,5.6,5.6,0,0,1,.95,1.45A10.94,10.94,0,0,1,34.57,94.9Zm3.26-4.76c-.15,1.19-.29,2.52-.43,4s-.27,3.06-.4,4.77-.25,3.54-.36,5.46-.21,4-.3,6l-.82,0c-.22,0-.46,0-.71,0a2.68,2.68,0,0,0-.63.1c.15-1,.3-2.08.43-3.27s.27-2.42.39-3.68.22-2.53.32-3.8.17-2.5.23-3.67.12-2.26.15-3.26,0-1.87,0-2.6Zm-5,5.19a11.47,11.47,0,0,0-.92-2.7c-.31-.52-.58-.76-.81-.7a.48.48,0,0,0-.31.27,1.57,1.57,0,0,0-.12.67A6.74,6.74,0,0,0,30.73,94c.07.47.19,1,.35,1.71A11.33,11.33,0,0,0,32,98.47c.3.54.58.78.83.72s.38-.4.39-1A11.54,11.54,0,0,0,32.8,95.33Zm10.08,9.3a11.24,11.24,0,0,1,.35,2.36,5.92,5.92,0,0,1-.17,1.73,2.66,2.66,0,0,1-.62,1.13,1.94,1.94,0,0,1-2,.49,2.48,2.48,0,0,1-1.07-.71,5.77,5.77,0,0,1-1-1.45,11.27,11.27,0,0,1-.78-2.27,11.62,11.62,0,0,1-.36-2.42,5.4,5.4,0,0,1,.18-1.71,2.38,2.38,0,0,1,.63-1.08,2.07,2.07,0,0,1,.95-.52,2.09,2.09,0,0,1,1.08,0,2.55,2.55,0,0,1,1.06.7,5.88,5.88,0,0,1,1,1.45A11.85,11.85,0,0,1,42.88,104.63Z" transform="translate(0 -12.33)"/>
                  <path d="M41.16,105a11.62,11.62,0,0,0-.91-2.69c-.3-.54-.58-.77-.82-.71a.48.48,0,0,0-.31.27,1.86,1.86,0,0,0-.12.69,7.66,7.66,0,0,0,.09,1.15c.07.47.19,1,.35,1.71a11.87,11.87,0,0,0,.93,2.73c.31.53.58.77.83.71s.38-.4.4-1A11.87,11.87,0,0,0,41.16,105ZM34.62,94.82A12,12,0,0,1,35,97.17a6,6,0,0,1-.18,1.74,2.68,2.68,0,0,1-.6,1.14,1.9,1.9,0,0,1-.94.55,2,2,0,0,1-1.1,0,2.57,2.57,0,0,1-1.06-.72,6,6,0,0,1-1-1.46,11.6,11.6,0,0,1-.78-2.28A12.08,12.08,0,0,1,29,93.66a5.43,5.43,0,0,1,.18-1.72,2.35,2.35,0,0,1,.63-1.07,2.24,2.24,0,0,1,1-.51,2,2,0,0,1,1.08,0,2.61,2.61,0,0,1,1.06.7,5.87,5.87,0,0,1,1,1.45A11.27,11.27,0,0,1,34.62,94.82Zm3.26-4.77c-.14,1.19-.28,2.52-.42,4s-.28,3.06-.41,4.78-.25,3.54-.36,5.47-.21,4-.3,6.06l-.81,0c-.23,0-.47,0-.71,0a2.77,2.77,0,0,0-.64.1c.15-1,.3-2.09.44-3.28s.26-2.42.38-3.68.23-2.54.32-3.81.17-2.5.24-3.68.11-2.26.14-3.27,0-1.87,0-2.6Zm-5,5.2a11.06,11.06,0,0,0-.93-2.7c-.3-.53-.57-.76-.81-.71a.44.44,0,0,0-.3.27,1.6,1.6,0,0,0-.13.68A6.7,6.7,0,0,0,30.77,94a17.34,17.34,0,0,0,.36,1.72,12.19,12.19,0,0,0,.92,2.73c.31.54.59.78.83.72s.38-.4.4-1A12,12,0,0,0,32.85,95.25ZM43,104.57a12,12,0,0,1,.35,2.36,5.67,5.67,0,0,1-.18,1.74,2.61,2.61,0,0,1-.61,1.13,2.07,2.07,0,0,1-.95.54,1.93,1.93,0,0,1-1.09,0,2.57,2.57,0,0,1-1.07-.71,6,6,0,0,1-.95-1.45,11.38,11.38,0,0,1-.78-2.28,11.71,11.71,0,0,1-.37-2.42,5.41,5.41,0,0,1,.19-1.72,2.37,2.37,0,0,1,.62-1.08,2.15,2.15,0,0,1,1-.52,2,2,0,0,1,1.09,0,2.61,2.61,0,0,1,1.06.7,5.87,5.87,0,0,1,1,1.45A11.27,11.27,0,0,1,43,104.57Z" transform="translate(0 -12.33)"/>
                  <path d="M41.23,104.94a11.47,11.47,0,0,0-.92-2.7c-.3-.53-.57-.77-.82-.71a.48.48,0,0,0-.31.27,2,2,0,0,0-.12.69,7.78,7.78,0,0,0,.09,1.16c.07.47.19,1,.35,1.71a11.87,11.87,0,0,0,.93,2.73c.31.54.59.77.83.71s.38-.4.4-1A11.79,11.79,0,0,0,41.23,104.94Zm-6.56-10.2A11.24,11.24,0,0,1,35,97.09a5.67,5.67,0,0,1-.18,1.74,2.67,2.67,0,0,1-.6,1.15,1.88,1.88,0,0,1-1,.55,1.93,1.93,0,0,1-1.09,0,2.6,2.6,0,0,1-1.07-.72,5.84,5.84,0,0,1-1-1.47A12.3,12.3,0,0,1,29.39,96,12.06,12.06,0,0,1,29,93.57a5.4,5.4,0,0,1,.18-1.71,2.31,2.31,0,0,1,.64-1.08,2.2,2.2,0,0,1,.95-.51,2,2,0,0,1,1.09,0,2.6,2.6,0,0,1,1.06.71,5.88,5.88,0,0,1,1,1.44A11.16,11.16,0,0,1,34.67,94.74ZM37.94,90c-.14,1.19-.28,2.53-.42,4s-.28,3.08-.41,4.8-.25,3.54-.36,5.48-.21,4-.3,6.07l-.82,0c-.23,0-.46,0-.71,0a2.77,2.77,0,0,0-.64.1c.15-1,.3-2.09.44-3.29s.26-2.42.38-3.69.23-2.54.32-3.82.18-2.5.24-3.68.11-2.27.14-3.27,0-1.88,0-2.61Zm-5,5.21A11.42,11.42,0,0,0,32,92.46c-.31-.53-.58-.76-.81-.7a.49.49,0,0,0-.31.26,1.63,1.63,0,0,0-.13.68,8.11,8.11,0,0,0,.1,1.17c.07.47.19,1,.35,1.72a11.28,11.28,0,0,0,.93,2.73c.31.55.59.79.83.73s.38-.41.4-1A11.73,11.73,0,0,0,32.89,95.17ZM43,104.5a11.59,11.59,0,0,1,.36,2.37,5.64,5.64,0,0,1-.18,1.74,2.51,2.51,0,0,1-.62,1.13,1.94,1.94,0,0,1-2,.5,2.67,2.67,0,0,1-1.07-.71,6,6,0,0,1-1-1.46,11.16,11.16,0,0,1-.78-2.28,11.7,11.7,0,0,1-.37-2.43,5.47,5.47,0,0,1,.18-1.72,2.38,2.38,0,0,1,.63-1.08,2.15,2.15,0,0,1,1-.52,2,2,0,0,1,1.09,0,2.61,2.61,0,0,1,1.06.7,5.88,5.88,0,0,1,1,1.45A12,12,0,0,1,43,104.5Z" transform="translate(0 -12.33)"/>
                  <path d="M41.29,104.88a11.77,11.77,0,0,0-.92-2.71c-.3-.53-.57-.77-.82-.71a.47.47,0,0,0-.31.28,1.84,1.84,0,0,0-.12.68,6.74,6.74,0,0,0,.09,1.17c.07.47.19,1,.35,1.71A11.6,11.6,0,0,0,40.5,108c.3.53.58.77.83.71s.38-.4.4-1A11.93,11.93,0,0,0,41.29,104.88ZM34.72,94.65A11.51,11.51,0,0,1,35.07,97a5.67,5.67,0,0,1-.18,1.74,2.62,2.62,0,0,1-.6,1.15,1.88,1.88,0,0,1-.95.55,1.93,1.93,0,0,1-1.09,0,2.48,2.48,0,0,1-1.07-.73,6,6,0,0,1-1-1.46,14.06,14.06,0,0,1-1.16-4.74,5.43,5.43,0,0,1,.18-1.72,2.4,2.4,0,0,1,.64-1.08,2.24,2.24,0,0,1,1-.51,2,2,0,0,1,1.08,0,2.54,2.54,0,0,1,1.06.71,5.69,5.69,0,0,1,1,1.45A11.27,11.27,0,0,1,34.72,94.65ZM38,89.87c-.15,1.19-.29,2.53-.43,4s-.28,3.08-.41,4.8-.25,3.55-.36,5.49-.21,4-.3,6.09l-.82,0c-.22,0-.46,0-.71,0a2.74,2.74,0,0,0-.64.11c.15-1,.3-2.1.44-3.29s.26-2.43.38-3.7.23-2.55.32-3.83.18-2.51.24-3.69.12-2.27.14-3.28,0-1.88,0-2.61Zm-5.06,5.22A11,11,0,0,0,32,92.37c-.3-.52-.57-.76-.81-.7a.48.48,0,0,0-.31.27,1.45,1.45,0,0,0-.12.68,6.87,6.87,0,0,0,.09,1.17c.07.47.19,1,.35,1.72a12,12,0,0,0,.94,2.74c.3.54.58.78.83.72s.38-.4.4-1A11.8,11.8,0,0,0,32.94,95.09Zm10.14,9.35a11.59,11.59,0,0,1,.36,2.37,6.4,6.4,0,0,1-.18,1.75,2.56,2.56,0,0,1-.62,1.13,2,2,0,0,1-1,.55,2,2,0,0,1-1.1,0,2.58,2.58,0,0,1-1.06-.71,6,6,0,0,1-1-1.46,11.49,11.49,0,0,1-.78-2.29,12,12,0,0,1-.38-2.43,5.71,5.71,0,0,1,.19-1.72,2.37,2.37,0,0,1,.63-1.09,2.15,2.15,0,0,1,1-.52,2,2,0,0,1,1.09,0,2.48,2.48,0,0,1,1.07.71,5.27,5.27,0,0,1,.95,1.45A11.27,11.27,0,0,1,43.08,104.44Z" transform="translate(0 -12.33)"/>
                  <path d="M41.35,104.82a11.8,11.8,0,0,0-.91-2.72c-.31-.53-.58-.77-.83-.71a.49.49,0,0,0-.31.28,1.86,1.86,0,0,0-.12.69,6.7,6.7,0,0,0,.09,1.16c.07.47.19,1,.35,1.72a11.43,11.43,0,0,0,.94,2.74c.3.54.58.77.83.71s.38-.4.4-1A11.43,11.43,0,0,0,41.35,104.82ZM34.77,94.57a10.86,10.86,0,0,1,.35,2.37,5.78,5.78,0,0,1-.18,1.75,2.62,2.62,0,0,1-.6,1.15,1.92,1.92,0,0,1-1,.55,1.89,1.89,0,0,1-1.1,0,2.6,2.6,0,0,1-1.07-.72,5.84,5.84,0,0,1-1-1.47A14,14,0,0,1,29.1,93.4a5.47,5.47,0,0,1,.18-1.72,2.4,2.4,0,0,1,.64-1.08,2.24,2.24,0,0,1,1-.51,1.93,1.93,0,0,1,1.09,0,2.54,2.54,0,0,1,1.06.71,5.69,5.69,0,0,1,1,1.45A11.16,11.16,0,0,1,34.77,94.57Zm3.29-4.79c-.15,1.2-.29,2.53-.43,4s-.28,3.08-.41,4.81-.25,3.56-.36,5.5-.21,4-.3,6.1l-.82,0c-.23,0-.47,0-.72,0a2.74,2.74,0,0,0-.64.11c.15-1,.3-2.1.44-3.3s.26-2.44.38-3.71.23-2.55.33-3.83.17-2.52.24-3.7.11-2.28.14-3.29,0-1.88,0-2.61ZM33,95a10.86,10.86,0,0,0-.93-2.72c-.31-.53-.58-.77-.82-.71a.46.46,0,0,0-.3.27,1.6,1.6,0,0,0-.13.68,6.74,6.74,0,0,0,.09,1.17c.08.48.19,1,.36,1.73a11.39,11.39,0,0,0,.93,2.74c.31.55.59.79.84.73s.38-.41.4-1A12.33,12.33,0,0,0,33,95Zm10.16,9.37a10.86,10.86,0,0,1,.35,2.37,6.07,6.07,0,0,1-.17,1.75,2.7,2.7,0,0,1-.62,1.14,2,2,0,0,1-1,.55,1.94,1.94,0,0,1-1.09,0,2.54,2.54,0,0,1-1.07-.72,5.36,5.36,0,0,1-1-1.46,11.49,11.49,0,0,1-.78-2.29,11.88,11.88,0,0,1-.37-2.44,5.13,5.13,0,0,1,.19-1.72,2.42,2.42,0,0,1,.63-1.09,2.17,2.17,0,0,1,1-.52,2,2,0,0,1,1.1,0,2.48,2.48,0,0,1,1.07.71,5.69,5.69,0,0,1,1,1.45A11.16,11.16,0,0,1,43.15,104.38Z" transform="translate(0 -12.33)"/>
                  <path d="M41.42,104.76A11.54,11.54,0,0,0,40.5,102c-.31-.54-.58-.78-.83-.72a.49.49,0,0,0-.31.28,1.86,1.86,0,0,0-.12.69,6.74,6.74,0,0,0,.09,1.17c.07.47.19,1,.35,1.72a11.71,11.71,0,0,0,.94,2.75c.31.53.59.77.83.71s.39-.4.41-1A12,12,0,0,0,41.42,104.76Zm-6.6-10.27a10.86,10.86,0,0,1,.35,2.37A6.1,6.1,0,0,1,35,98.61a2.78,2.78,0,0,1-.61,1.16,1.92,1.92,0,0,1-1,.55,2,2,0,0,1-1.1,0,2.63,2.63,0,0,1-1.08-.72,5.84,5.84,0,0,1-1-1.47,14.17,14.17,0,0,1-1.16-4.76,5.54,5.54,0,0,1,.18-1.73A2.49,2.49,0,0,1,30,90.51a2.24,2.24,0,0,1,1-.51A1.93,1.93,0,0,1,32,90a2.57,2.57,0,0,1,1.07.71,5.77,5.77,0,0,1,1,1.46A11.16,11.16,0,0,1,34.82,94.49Zm3.29-4.8q-.21,1.8-.42,4c-.15,1.49-.28,3.09-.41,4.82s-.26,3.57-.37,5.52-.21,4-.3,6.1l-.82,0c-.23,0-.47,0-.72,0a2.74,2.74,0,0,0-.64.11c.16-1,.3-2.11.44-3.31s.27-2.44.39-3.71.22-2.56.32-3.84.17-2.52.24-3.71.11-2.28.14-3.29,0-1.89,0-2.62ZM33,94.93a11.87,11.87,0,0,0-.93-2.73c-.31-.53-.58-.76-.82-.71a.54.54,0,0,0-.31.27,1.65,1.65,0,0,0-.13.69,8.34,8.34,0,0,0,.1,1.17c.07.48.19,1,.35,1.73a12.07,12.07,0,0,0,.94,2.75c.31.54.59.79.83.73s.39-.41.4-1A11.67,11.67,0,0,0,33,94.93Zm10.18,9.39a12.11,12.11,0,0,1,.35,2.38,5.74,5.74,0,0,1-.18,1.75,2.5,2.5,0,0,1-.62,1.14,2,2,0,0,1-1,.55,2.06,2.06,0,0,1-1.1,0,2.54,2.54,0,0,1-1.07-.72,5.52,5.52,0,0,1-1-1.46,11.6,11.6,0,0,1-.78-2.3,11.88,11.88,0,0,1-.37-2.44,5.5,5.5,0,0,1,.18-1.73,2.42,2.42,0,0,1,.63-1.09,2.16,2.16,0,0,1,1-.52,2,2,0,0,1,1.1,0,2.42,2.42,0,0,1,1.07.71,5.44,5.44,0,0,1,1,1.45A12.13,12.13,0,0,1,43.22,104.32Z" transform="translate(0 -12.33)"/>
                  <path d="M41.48,104.69a11.89,11.89,0,0,0-.92-2.72c-.3-.54-.58-.78-.83-.71a.48.48,0,0,0-.31.27,2,2,0,0,0-.12.7,6.7,6.7,0,0,0,.09,1.16c.07.48.19,1,.35,1.73a11.55,11.55,0,0,0,.94,2.75q.47.81.84.72c.25-.06.38-.41.4-1A11.62,11.62,0,0,0,41.48,104.69ZM34.87,94.41a11.59,11.59,0,0,1,.36,2.37,6.53,6.53,0,0,1-.18,1.76,2.78,2.78,0,0,1-.61,1.16,1.92,1.92,0,0,1-.95.55,2,2,0,0,1-1.1,0,2.56,2.56,0,0,1-1.08-.72,6.12,6.12,0,0,1-1-1.48,11.38,11.38,0,0,1-.78-2.3,11.57,11.57,0,0,1-.38-2.46,5.5,5.5,0,0,1,.18-1.73A2.47,2.47,0,0,1,30,90.42a2.17,2.17,0,0,1,1-.51,1.93,1.93,0,0,1,1.09,0,2.63,2.63,0,0,1,1.07.71,5.77,5.77,0,0,1,1,1.46A11.49,11.49,0,0,1,34.87,94.41Zm3.3-4.81c-.14,1.2-.29,2.54-.43,4s-.28,3.1-.41,4.83S37.08,102,37,104s-.21,4-.3,6.11l-.83,0c-.23,0-.47,0-.72,0a2.74,2.74,0,0,0-.64.11c.16-1,.3-2.11.44-3.32s.27-2.44.39-3.72.23-2.56.32-3.84.18-2.53.24-3.72.11-2.28.14-3.3,0-1.89,0-2.62Zm-5.09,5.24a11,11,0,0,0-.93-2.72c-.31-.54-.58-.77-.82-.71a.48.48,0,0,0-.31.27,1.45,1.45,0,0,0-.12.68A6.91,6.91,0,0,0,31,93.54c.07.47.19,1,.36,1.73A11.51,11.51,0,0,0,32.28,98c.31.55.59.79.84.73s.38-.4.4-1A12,12,0,0,0,33.08,94.84Zm10.2,9.41a11.66,11.66,0,0,1,.36,2.39,5.71,5.71,0,0,1-.18,1.75,2.6,2.6,0,0,1-.62,1.14,2,2,0,0,1-2.06.51,2.6,2.6,0,0,1-1.07-.72,5.59,5.59,0,0,1-1-1.47,11.6,11.6,0,0,1-.78-2.3,12.06,12.06,0,0,1-.38-2.45,5.82,5.82,0,0,1,.19-1.73,2.42,2.42,0,0,1,.63-1.09,2.06,2.06,0,0,1,1-.52,2,2,0,0,1,1.1,0,2.45,2.45,0,0,1,1.08.71,5.59,5.59,0,0,1,1,1.46A11.16,11.16,0,0,1,43.28,104.25Z" transform="translate(0 -12.33)"/>
                  <path d="M41.55,104.63a12.24,12.24,0,0,0-.93-2.73c-.3-.53-.58-.77-.83-.71a.47.47,0,0,0-.31.28,1.86,1.86,0,0,0-.12.69,6.74,6.74,0,0,0,.09,1.17c.07.47.19,1,.35,1.73a12.14,12.14,0,0,0,.94,2.76c.31.53.59.77.84.71s.39-.4.41-1A12.13,12.13,0,0,0,41.55,104.63Zm-6.63-10.3a11.58,11.58,0,0,1,.36,2.38,6.57,6.57,0,0,1-.18,1.76,2.74,2.74,0,0,1-.61,1.15,1.94,1.94,0,0,1-1,.56,2,2,0,0,1-1.11-.05,2.69,2.69,0,0,1-1.08-.72,6.43,6.43,0,0,1-1-1.48,14.29,14.29,0,0,1-1.16-4.78,5.2,5.2,0,0,1,.19-1.73A2.28,2.28,0,0,1,30,90.34a2.14,2.14,0,0,1,1-.52,2,2,0,0,1,1.1,0,2.51,2.51,0,0,1,1.06.71,5.69,5.69,0,0,1,1,1.46A11.38,11.38,0,0,1,34.92,94.33Zm3.31-4.82c-.15,1.2-.29,2.55-.43,4s-.28,3.1-.41,4.84-.26,3.58-.37,5.53-.21,4-.3,6.13l-.83,0-.72,0a2.77,2.77,0,0,0-.64.1c.16-1,.3-2.11.44-3.31s.27-2.45.39-3.73.23-2.57.32-3.86.18-2.53.24-3.72.12-2.29.15-3.3,0-1.9,0-2.63Zm-5.1,5.25A11.4,11.4,0,0,0,32.2,92c-.31-.53-.58-.77-.82-.71a.46.46,0,0,0-.31.27,1.63,1.63,0,0,0-.13.68A6.84,6.84,0,0,0,31,93.45c.08.48.19,1.06.36,1.74A11.54,11.54,0,0,0,32.33,98c.31.55.59.79.84.73s.38-.41.4-1A12,12,0,0,0,33.13,94.76Zm10.22,9.43a11.66,11.66,0,0,1,.36,2.39,5.77,5.77,0,0,1-.18,1.76,2.7,2.7,0,0,1-.62,1.14,2,2,0,0,1-1,.55,1.92,1.92,0,0,1-1.11,0,2.67,2.67,0,0,1-1.07-.71,5.5,5.5,0,0,1-1-1.48A13.58,13.58,0,0,1,37.64,103a5.6,5.6,0,0,1,.18-1.74,2.53,2.53,0,0,1,.64-1.09,2.17,2.17,0,0,1,1-.53,2.11,2.11,0,0,1,1.11,0,2.48,2.48,0,0,1,1.07.71,5.6,5.6,0,0,1,1,1.46A11.49,11.49,0,0,1,43.35,104.19Z" transform="translate(0 -12.33)"/>
                  <path d="M41.61,104.57a11.28,11.28,0,0,0-.93-2.73c-.3-.54-.58-.78-.83-.72a.47.47,0,0,0-.31.28,1.67,1.67,0,0,0-.12.69,6.91,6.91,0,0,0,.09,1.18c.07.47.19,1,.36,1.73a11.22,11.22,0,0,0,.94,2.76c.31.54.59.78.83.72s.39-.41.41-1A12.13,12.13,0,0,0,41.61,104.57ZM35,94.25a11.58,11.58,0,0,1,.36,2.38,5.77,5.77,0,0,1-.18,1.76,2.72,2.72,0,0,1-.61,1.16,1.93,1.93,0,0,1-1,.56,2,2,0,0,1-1.1,0,2.5,2.5,0,0,1-1.08-.73,5.5,5.5,0,0,1-1-1.48,11,11,0,0,1-.79-2.3,11.82,11.82,0,0,1-.38-2.48,5.29,5.29,0,0,1,.19-1.74,2.33,2.33,0,0,1,.63-1.08,2.14,2.14,0,0,1,1-.52,2,2,0,0,1,1.1,0,2.48,2.48,0,0,1,1.07.71,5.85,5.85,0,0,1,1,1.47A11.38,11.38,0,0,1,35,94.25Zm3.31-4.83c-.14,1.2-.28,2.55-.43,4s-.28,3.11-.41,4.85-.25,3.59-.36,5.55-.21,4-.31,6.14L36,110c-.23,0-.47,0-.72,0a2.78,2.78,0,0,0-.65.1c.16-1,.3-2.11.44-3.32s.27-2.45.39-3.74.23-2.57.33-3.86.17-2.53.24-3.73.11-2.29.14-3.31,0-1.89,0-2.63Zm-5.1,5.26a11.6,11.6,0,0,0-.94-2.74c-.31-.53-.58-.77-.82-.71a.48.48,0,0,0-.31.27,1.65,1.65,0,0,0-.13.69,8.35,8.35,0,0,0,.1,1.18c.07.48.19,1.06.35,1.74a12,12,0,0,0,.94,2.76c.32.55.6.8.85.74s.38-.41.4-1A12.06,12.06,0,0,0,33.18,94.68Zm10.24,9.45a10.94,10.94,0,0,1,.35,2.39,6.21,6.21,0,0,1-.17,1.77,2.61,2.61,0,0,1-.63,1.14,2,2,0,0,1-1,.55,2,2,0,0,1-1.1,0,2.56,2.56,0,0,1-1.08-.72,5.59,5.59,0,0,1-1-1.47,11.46,11.46,0,0,1-.79-2.31A11.3,11.3,0,0,1,37.7,103a5.5,5.5,0,0,1,.18-1.73,2.41,2.41,0,0,1,.64-1.1,2.17,2.17,0,0,1,1-.53,2.1,2.1,0,0,1,1.11,0,2.69,2.69,0,0,1,1.08.72,5.77,5.77,0,0,1,1,1.46A12.25,12.25,0,0,1,43.42,104.13Z" transform="translate(0 -12.33)"/>
                  <path d="M41.67,104.51a11.23,11.23,0,0,0-.93-2.74c-.3-.54-.58-.78-.83-.72a.49.49,0,0,0-.31.28,1.73,1.73,0,0,0-.12.7,6.74,6.74,0,0,0,.09,1.17c.07.48.19,1,.36,1.73a11,11,0,0,0,.94,2.77q.47.81.84.72c.25-.06.38-.4.41-1A11.82,11.82,0,0,0,41.67,104.51ZM35,94.16a11.86,11.86,0,0,1,.36,2.39,5.88,5.88,0,0,1-.18,1.77,2.72,2.72,0,0,1-.61,1.16,2,2,0,0,1-1,.56,2,2,0,0,1-1.11-.05,2.56,2.56,0,0,1-1.08-.73,5.92,5.92,0,0,1-1-1.48A14,14,0,0,1,29.3,93a5.32,5.32,0,0,1,.19-1.75,2.31,2.31,0,0,1,.64-1.08,2,2,0,0,1,1-.52,2,2,0,0,1,1.1,0,2.53,2.53,0,0,1,1.07.71,6.13,6.13,0,0,1,1,1.47A11.6,11.6,0,0,1,35,94.16Zm3.32-4.84c-.14,1.21-.29,2.56-.43,4.06s-.28,3.12-.41,4.86-.26,3.59-.37,5.56-.21,4-.3,6.15l-.83,0c-.23,0-.47,0-.72,0a2.78,2.78,0,0,0-.65.1c.16-1,.3-2.12.44-3.33s.27-2.46.39-3.74.23-2.58.33-3.87.17-2.54.24-3.73.11-2.3.14-3.32,0-1.9,0-2.65ZM33.22,94.6a11.08,11.08,0,0,0-.93-2.74c-.31-.54-.59-.77-.83-.72a.52.52,0,0,0-.31.28,1.56,1.56,0,0,0-.13.68,8.47,8.47,0,0,0,.1,1.19q.11.72.36,1.74a11.65,11.65,0,0,0,.94,2.77c.31.55.59.79.84.73s.39-.41.41-1A11.75,11.75,0,0,0,33.22,94.6Zm10.26,9.47a11,11,0,0,1,.36,2.4,5.77,5.77,0,0,1-.18,1.76,2.54,2.54,0,0,1-.62,1.15,2,2,0,0,1-1,.55,2,2,0,0,1-1.11-.05,2.56,2.56,0,0,1-1.08-.72,5.5,5.5,0,0,1-1-1.48,10.87,10.87,0,0,1-.79-2.31,12.24,12.24,0,0,1-.38-2.46,5.5,5.5,0,0,1,.19-1.74,2.38,2.38,0,0,1,.64-1.1,2.17,2.17,0,0,1,1-.53,2.1,2.1,0,0,1,1.11,0,2.56,2.56,0,0,1,1.08.72,6,6,0,0,1,1,1.46A11.5,11.5,0,0,1,43.48,104.07Z" transform="translate(0 -12.33)"/>
                  <path d="M41.74,104.45a12.49,12.49,0,0,0-.93-2.75q-.47-.81-.84-.72a.49.49,0,0,0-.31.28,1.6,1.6,0,0,0-.12.7,6.91,6.91,0,0,0,.09,1.18c.07.47.19,1,.36,1.73a11.73,11.73,0,0,0,.94,2.78q.47.81.84.72c.25-.06.39-.41.41-1A12.26,12.26,0,0,0,41.74,104.45ZM35.07,94.08a11.18,11.18,0,0,1,.36,2.4,5.88,5.88,0,0,1-.18,1.77,2.78,2.78,0,0,1-.61,1.16,2,2,0,0,1-1,.56,2,2,0,0,1-1.11,0,2.59,2.59,0,0,1-1.09-.73,6,6,0,0,1-1-1.49,11.46,11.46,0,0,1-.79-2.31,11.81,11.81,0,0,1-.38-2.49,5.26,5.26,0,0,1,.19-1.74,2.3,2.3,0,0,1,.64-1.09,2.09,2.09,0,0,1,1-.52,2,2,0,0,1,1.1,0,2.56,2.56,0,0,1,1.08.71,6.21,6.21,0,0,1,1,1.48A11.38,11.38,0,0,1,35.07,94.08Zm3.33-4.85c-.15,1.21-.29,2.57-.43,4.07s-.28,3.12-.42,4.86-.25,3.61-.36,5.57-.22,4-.31,6.17l-.83,0c-.23,0-.47,0-.72,0a2.87,2.87,0,0,0-.65.1c.16-1,.31-2.12.44-3.34s.27-2.46.4-3.75.23-2.57.32-3.87.18-2.55.24-3.74S36.2,93,36.23,92s0-1.9,0-2.65Zm-5.13,5.29a11.11,11.11,0,0,0-.94-2.75c-.31-.53-.58-.77-.82-.71a.46.46,0,0,0-.31.27,1.5,1.5,0,0,0-.13.69,6.91,6.91,0,0,0,.09,1.18c.08.48.2,1.07.36,1.75a11.41,11.41,0,0,0,.95,2.77c.31.56.59.8.84.74s.39-.41.41-1A12.26,12.26,0,0,0,33.27,94.52ZM43.55,104a11.84,11.84,0,0,1,.36,2.41,5.88,5.88,0,0,1-.18,1.77,2.61,2.61,0,0,1-.63,1.14,2,2,0,0,1-1,.56,2,2,0,0,1-1.11,0,2.56,2.56,0,0,1-1.08-.72,5.93,5.93,0,0,1-1-1.48,12.49,12.49,0,0,1-.79-2.32,12.13,12.13,0,0,1-.37-2.47A5.6,5.6,0,0,1,38,101.1a2.57,2.57,0,0,1,.64-1.1,2.26,2.26,0,0,1,1-.53,2.09,2.09,0,0,1,1.11,0,2.56,2.56,0,0,1,1.08.72,5.59,5.59,0,0,1,1,1.47A11.57,11.57,0,0,1,43.55,104Z" transform="translate(0 -12.33)"/>
                  <path d="M41.8,104.39a11.8,11.8,0,0,0-.93-2.75c-.31-.55-.59-.79-.84-.73a.49.49,0,0,0-.31.28,1.6,1.6,0,0,0-.12.7,6.84,6.84,0,0,0,.09,1.18q.11.72.36,1.74a11.73,11.73,0,0,0,.94,2.78c.31.55.6.79.85.73s.38-.41.4-1A11.28,11.28,0,0,0,41.8,104.39ZM35.13,94a11.11,11.11,0,0,1,.35,2.4,5.88,5.88,0,0,1-.18,1.77,2.71,2.71,0,0,1-.61,1.17,2,2,0,0,1-1,.56,2,2,0,0,1-1.11-.05,2.53,2.53,0,0,1-1.09-.73,6,6,0,0,1-1-1.49,11.8,11.8,0,0,1-.79-2.32,12,12,0,0,1-.38-2.49,5.32,5.32,0,0,1,.19-1.75A2.3,2.3,0,0,1,30.21,90a2.21,2.21,0,0,1,1-.53,2.1,2.1,0,0,1,1.11,0,2.42,2.42,0,0,1,1.07.72,5.59,5.59,0,0,1,1,1.47A11.43,11.43,0,0,1,35.13,94Zm3.33-4.86c-.15,1.21-.29,2.57-.44,4.07s-.28,3.13-.41,4.88-.26,3.61-.37,5.58-.21,4-.3,6.18l-.84,0c-.22,0-.47,0-.72,0a2.87,2.87,0,0,0-.65.1c.16-1,.31-2.13.45-3.34s.26-2.47.39-3.76.23-2.58.32-3.89.18-2.54.24-3.74.12-2.31.15-3.34,0-1.9,0-2.65Zm-5.14,5.3a11.66,11.66,0,0,0-.94-2.76c-.31-.53-.59-.77-.83-.71a.48.48,0,0,0-.31.27,1.65,1.65,0,0,0-.13.69,7.18,7.18,0,0,0,.1,1.19c.07.48.19,1.06.36,1.75a11.6,11.6,0,0,0,.94,2.78c.32.55.6.8.85.74s.39-.41.4-1A12.19,12.19,0,0,0,33.32,94.44Zm10.3,9.5a11.84,11.84,0,0,1,.36,2.41,5.81,5.81,0,0,1-.18,1.77,2.59,2.59,0,0,1-.63,1.15,2,2,0,0,1-1,.56,2,2,0,0,1-1.11,0,2.5,2.5,0,0,1-1.08-.73,5.75,5.75,0,0,1-1-1.48,11.57,11.57,0,0,1-.79-2.32,12.33,12.33,0,0,1-.38-2.47,5.92,5.92,0,0,1,.19-1.75,2.47,2.47,0,0,1,.64-1.1,2.16,2.16,0,0,1,1-.53,2,2,0,0,1,1.11,0,2.56,2.56,0,0,1,1.09.72,5.85,5.85,0,0,1,1,1.47A11.46,11.46,0,0,1,43.62,103.94Z" transform="translate(0 -12.33)"/>
                </g>
                <path class="e006935c-8f8e-427d-a7eb-9a12f67b022f" d="M35.13,94a11.11,11.11,0,0,1,.35,2.4,5.88,5.88,0,0,1-.18,1.77,2.71,2.71,0,0,1-.61,1.17,2,2,0,0,1-1,.56,2,2,0,0,1-1.11-.05,2.53,2.53,0,0,1-1.09-.73,6,6,0,0,1-1-1.49,11.8,11.8,0,0,1-.79-2.32,12,12,0,0,1-.38-2.49,5.32,5.32,0,0,1,.19-1.75A2.3,2.3,0,0,1,30.21,90a2.21,2.21,0,0,1,1-.53,2.1,2.1,0,0,1,1.11,0,2.42,2.42,0,0,1,1.07.72,5.59,5.59,0,0,1,1,1.47A11.43,11.43,0,0,1,35.13,94Zm3.33-4.86c-.15,1.21-.29,2.57-.44,4.07s-.28,3.13-.41,4.88-.26,3.61-.37,5.58-.21,4-.3,6.18l-.84,0c-.22,0-.47,0-.72,0a2.87,2.87,0,0,0-.65.1c.16-1,.31-2.13.45-3.34s.26-2.47.39-3.76.23-2.58.32-3.89.18-2.54.24-3.74.12-2.31.15-3.34,0-1.9,0-2.65Zm-5.14,5.3a11.66,11.66,0,0,0-.94-2.76c-.31-.53-.59-.77-.83-.71a.48.48,0,0,0-.31.27,1.65,1.65,0,0,0-.13.69,7.18,7.18,0,0,0,.1,1.19c.07.48.19,1.06.36,1.75a11.6,11.6,0,0,0,.94,2.78c.32.55.6.8.85.74s.39-.41.4-1A12.19,12.19,0,0,0,33.32,94.44Zm10.3,9.5a11.84,11.84,0,0,1,.36,2.41,5.81,5.81,0,0,1-.18,1.77,2.59,2.59,0,0,1-.63,1.15,2,2,0,0,1-1,.56,2,2,0,0,1-1.11,0,2.5,2.5,0,0,1-1.08-.73,5.75,5.75,0,0,1-1-1.48,11.57,11.57,0,0,1-.79-2.32,12.33,12.33,0,0,1-.38-2.47,5.92,5.92,0,0,1,.19-1.75,2.47,2.47,0,0,1,.64-1.1,2.16,2.16,0,0,1,1-.53,2,2,0,0,1,1.11,0,2.56,2.56,0,0,1,1.09.72,5.85,5.85,0,0,1,1,1.47A11.46,11.46,0,0,1,43.62,103.94Zm-1.82.45a11.8,11.8,0,0,0-.93-2.75c-.31-.55-.59-.79-.84-.73a.49.49,0,0,0-.31.28,1.6,1.6,0,0,0-.12.7,6.84,6.84,0,0,0,.09,1.18q.11.72.36,1.74a11.73,11.73,0,0,0,.94,2.78c.31.55.6.79.85.73s.38-.41.4-1A11.28,11.28,0,0,0,41.8,104.39Z" transform="translate(0 -12.33)"/>
              </g>
              <g>
                <path class="a11e7103-4e9e-4d55-8873-cee632d38551" d="M224.13,83.85a10.55,10.55,0,0,0,4.36,1.6s5.32-1,9.29-11.84.23-15.32.23-15.32a10.64,10.64,0,0,0-5.17-1.5Z" transform="translate(0 -12.33)"/>
                <ellipse class="b31fe1f1-fc82-4373-9653-f9efab5ad5d2" cx="229.07" cy="70.41" rx="14.32" ry="6.49" transform="translate(83.99 248.82) rotate(-69.83)"/>
                <path class="f287f1fa-95e9-44b9-8a7a-718600c2de0d" d="M236.73,61.33,221.23,77.7s.14,3.42,1.09,4.55l14.4-15.78A15.27,15.27,0,0,0,236.73,61.33Z" transform="translate(0 -12.33)"/>
                <path class="a05e620a-91e0-451e-a178-4b77cbee779f" d="M234.31,72.29c-2.36,6.43-6.54,10.87-9.58,10.31l-.45-.12c-3.05-1.13-3.53-7.51-1.05-14.26s7-11.3,10-10.18a2.3,2.3,0,0,1,.42.2C236.36,59.78,236.67,65.87,234.31,72.29Z" transform="translate(0 -12.33)"/>
                <path class="a2889555-04e5-48a6-98f1-8536a7d3168a" d="M234.31,72.29c-2.36,6.43-6.54,10.87-9.58,10.31-2.68-1.54-3-7.64-.63-14.06s6.54-10.87,9.58-10.3C236.36,59.78,236.67,65.87,234.31,72.29Z" transform="translate(0 -12.33)"/>
                <g>
                  <path class="a8df3acc-1543-4df1-8fc8-c22c4e28f64a" d="M227.12,75.3a.71.71,0,0,1-.33-.22c-.21-.18-.54-2.7-.75-3l1,.35a1.6,1.6,0,0,0,.27.46,2,2,0,0,0,.31.33,2.88,2.88,0,0,0,.35.26.76.76,0,0,0,.59-.15,1.42,1.42,0,0,0,.47-.67,1.93,1.93,0,0,0,.13-.76,2.81,2.81,0,0,0-.14-.7,7.4,7.4,0,0,0-.25-.7,4.83,4.83,0,0,1-.23-.79,3.86,3.86,0,0,1-.07-.92,3.92,3.92,0,0,1,.23-1.12,3.81,3.81,0,0,1,.52-1,2.68,2.68,0,0,1,.63-.63,2.16,2.16,0,0,1,.67-.32c.24-.06-.51-.43-.31-.41l1.29-3.64,1.73.64-1.39,3.5L232,66a2.86,2.86,0,0,1,.3.19,2.45,2.45,0,0,1,.33.32,1.58,1.58,0,0,1,.26.46l-.8,1.92a2.26,2.26,0,0,0-.36-.59,5,5,0,0,0-.39-.4,2.39,2.39,0,0,0-.45-.28,1.13,1.13,0,0,0-.74.75,1.37,1.37,0,0,0-.08.64,5.33,5.33,0,0,0,.15.71c.07.25.15.52.24.8a5.24,5.24,0,0,1,.2.91,4.46,4.46,0,0,1,0,1,4.65,4.65,0,0,1-.27,1.17,3.69,3.69,0,0,1-1,1.54,2,2,0,0,1-1.31.52l-1.23,3.51-1-.35Z" transform="translate(0 -12.33)"/>
                  <path class="e5172f67-6424-4d2f-be35-81a1e40d76e8" d="M226.42,75.15a3,3,0,0,1-.6-.42,6.39,6.39,0,0,1-.63-.64l.85-2a1.65,1.65,0,0,0,.27.47,1.9,1.9,0,0,0,.31.32,4,4,0,0,0,.35.26.72.72,0,0,0,.59-.15,1.44,1.44,0,0,0,.47-.66,2,2,0,0,0,.13-.77,3.45,3.45,0,0,0-.13-.7c-.07-.22-.16-.46-.26-.7a4.83,4.83,0,0,1-.23-.79,3.86,3.86,0,0,1-.07-.92,3.92,3.92,0,0,1,.23-1.12,3.81,3.81,0,0,1,.52-1,2.89,2.89,0,0,1,.63-.63,2.11,2.11,0,0,1,.68-.32,1.86,1.86,0,0,1,.65-.06l1.29-3.64.76.3-1.39,3.49.18.08a1.94,1.94,0,0,1,.3.2,2.34,2.34,0,0,1,.33.31,1.38,1.38,0,0,1,.26.46l-.8,1.93a2.17,2.17,0,0,0-.36-.6,3.57,3.57,0,0,0-.39-.39,1.82,1.82,0,0,0-.45-.29,1.13,1.13,0,0,0-.74.75,1.38,1.38,0,0,0-.08.64,5.33,5.33,0,0,0,.15.71c.07.25.15.52.24.8a5.16,5.16,0,0,1,.2.92,4.36,4.36,0,0,1,0,1,4.65,4.65,0,0,1-.27,1.17,3.69,3.69,0,0,1-1,1.54,1.94,1.94,0,0,1-1.31.52l-1.23,3.51-.76-.3Z" transform="translate(0 -12.33)"/>
                  <polygon class="b1d8df59-3a4b-44ff-aaca-12b36df5c97e" points="231.11 56.16 232.08 56.51 232.88 54.58 231.91 54.23 231.11 56.16"/>
                  <polygon class="b1d8df59-3a4b-44ff-aaca-12b36df5c97e" points="228.09 63.32 227.12 62.97 225.89 66.47 226.86 66.82 228.09 63.32"/>
                  <polygon class="b1d8df59-3a4b-44ff-aaca-12b36df5c97e" points="231.81 53.53 230.84 53.19 232.23 49.69 233.2 50.04 231.81 53.53"/>
                </g>
                <path class="bfb514c0-5c05-4e32-ac63-01bebc26bfa9" d="M236.73,61.33l2.72,1a14.25,14.25,0,0,1-.06,5.12l-2.67-1A15,15,0,0,0,236.73,61.33Z" transform="translate(0 -12.33)"/>
                <path class="bfb514c0-5c05-4e32-ac63-01bebc26bfa9" d="M226.7,83.74l3.13,1.15a10.47,10.47,0,0,0,1.75-1.26L229,82.29A6.7,6.7,0,0,1,226.7,83.74Z" transform="translate(0 -12.33)"/>
                <path class="b25c96bd-ca55-44b5-8af6-13577efec909" d="M229.1,58.53s2.64-.29,3.21-1.69A6.21,6.21,0,0,0,229.1,58.53Z" transform="translate(0 -12.33)"/>
              </g>
              <g>
                <path class="a02a437c-bcf6-4139-b4ec-2ee0886270ee" d="M242.45,60.18a6,6,0,0,0,2,1.72s3,.54,7.26-4.3,3.24-8,3.24-8a6,6,0,0,0-2.4-1.84Z" transform="translate(0 -12.33)"/>
                <ellipse class="f997fc81-abfe-490e-9dad-47348f43a5c3" cx="247.76" cy="54.16" rx="8.03" ry="3.64" transform="translate(43.25 191.81) rotate(-48.59)"/>
                <path class="f287f1fa-95e9-44b9-8a7a-718600c2de0d" d="M253.61,51l-11.43,5.41a6,6,0,0,0-.35,2.6l10.73-5.33A8.51,8.51,0,0,0,253.61,51Z" transform="translate(0 -12.33)"/>
                <path class="fc0f44df-b495-4e60-83a2-2c66410386e4" d="M250.12,56.21c-2.54,2.88-5.63,4.35-7.1,3.44l-.21-.15c-1.37-1.21-.32-4.65,2.34-7.67s5.95-4.49,7.32-3.29l.17.19C253.73,50.08,252.66,53.33,250.12,56.21Z" transform="translate(0 -12.33)"/>
                <path class="e13bc83e-1c0c-45b9-aea3-dbcdf84ebda1" d="M250.12,56.21c-2.54,2.88-5.63,4.35-7.1,3.44-1.09-1.35,0-4.6,2.52-7.48s5.63-4.35,7.1-3.44C253.73,50.08,252.66,53.33,250.12,56.21Z" transform="translate(0 -12.33)"/>
                <g>
                  <path class="a0ee92f6-a1af-4e44-b5c8-78f7eb2a0c39" d="M245.75,56.32a.42.42,0,0,1-.13-.18c-.07-.14.27-1.53.21-1.7l.43.38a.94.94,0,0,0,.05.3,1,1,0,0,0,.1.23,1.07,1.07,0,0,0,.13.21.39.39,0,0,0,.34,0,.87.87,0,0,0,.38-.25,1.2,1.2,0,0,0,.22-.37,1.76,1.76,0,0,0,.07-.4c0-.13,0-.27,0-.42a2.35,2.35,0,0,1,0-.45,2.57,2.57,0,0,1,.15-.5,2.13,2.13,0,0,1,.35-.54,2.41,2.41,0,0,1,.47-.41,1.4,1.4,0,0,1,.46-.2,1,1,0,0,1,.42,0c.13,0-.19-.33-.08-.28l1.41-1.64.77.69-1.43,1.54.07.08a1.11,1.11,0,0,1,.12.16,1.33,1.33,0,0,1,.11.24.66.66,0,0,1,0,.29l-.81.84a1.12,1.12,0,0,0-.07-.38,2.13,2.13,0,0,0-.12-.29,1.46,1.46,0,0,0-.17-.24.64.64,0,0,0-.55.24.74.74,0,0,0-.16.32,1.67,1.67,0,0,0-.07.4c0,.15,0,.31,0,.47a3.28,3.28,0,0,1-.08.52,2.9,2.9,0,0,1-.19.54,2.37,2.37,0,0,1-.39.56,2,2,0,0,1-.83.6,1.16,1.16,0,0,1-.8,0l-1.35,1.58-.44-.38Z" transform="translate(0 -12.33)"/>
                  <path class="ba1db9b6-b126-4884-80ee-897cce014f94" d="M245.41,56.1a1.83,1.83,0,0,1-.23-.34c-.07-.14-.13-.3-.2-.47l.85-.85a1,1,0,0,0,0,.3,1.74,1.74,0,0,0,.1.23,1.93,1.93,0,0,0,.13.21.39.39,0,0,0,.34,0,.74.74,0,0,0,.38-.25,1,1,0,0,0,.22-.37,1.8,1.8,0,0,0,.08-.39c0-.14,0-.28,0-.43a2.32,2.32,0,0,1,0-.45,2.07,2.07,0,0,1,.16-.5,2.38,2.38,0,0,1,.34-.54,2.19,2.19,0,0,1,.48-.41,1.36,1.36,0,0,1,.45-.2,1,1,0,0,1,.42,0,1,1,0,0,1,.36.1l1.41-1.64.34.31L249.68,52a.57.57,0,0,0,.08.08,1.56,1.56,0,0,1,.12.17,1,1,0,0,1,.1.23.88.88,0,0,1,.05.29l-.81.84a1.43,1.43,0,0,0-.07-.38,1.57,1.57,0,0,0-.13-.29.81.81,0,0,0-.17-.23.61.61,0,0,0-.54.23.76.76,0,0,0-.17.32c0,.13,0,.26-.07.4l0,.47a5.06,5.06,0,0,1-.08.52,3.34,3.34,0,0,1-.2.55,2.27,2.27,0,0,1-.38.55,2.06,2.06,0,0,1-.84.6,1.08,1.08,0,0,1-.79,0l-1.36,1.58-.34-.31Z" transform="translate(0 -12.33)"/>
                  <polygon class="b1d8df59-3a4b-44ff-aaca-12b36df5c97e" points="249.22 41.24 249.65 41.62 250.46 40.77 250.03 40.4 249.22 41.24"/>
                  <polygon class="b1d8df59-3a4b-44ff-aaca-12b36df5c97e" points="246.18 44.37 245.75 43.99 244.39 45.57 244.83 45.95 246.18 44.37"/>
                  <polygon class="b1d8df59-3a4b-44ff-aaca-12b36df5c97e" points="250.12 40.01 249.68 39.63 251.12 38.08 251.55 38.46 250.12 40.01"/>
                </g>
                <path class="bfb514c0-5c05-4e32-ac63-01bebc26bfa9" d="M253.61,51,254.83,52a7.92,7.92,0,0,1-1.07,2.67l-1.2-1.06A8.28,8.28,0,0,0,253.61,51Z" transform="translate(0 -12.33)"/>
                <path class="bfb514c0-5c05-4e32-ac63-01bebc26bfa9" d="M243.82,60.65l1.4,1.23a5.25,5.25,0,0,0,1.17-.3l-1.06-1.22A3.93,3.93,0,0,1,243.82,60.65Z" transform="translate(0 -12.33)"/>
                <path class="b25c96bd-ca55-44b5-8af6-13577efec909" d="M250.2,48s1.43.39,2-.23A3.46,3.46,0,0,0,250.2,48Z" transform="translate(0 -12.33)"/>
              </g>
              <g>
                <path class="bf4313d3-dba7-46a6-bd18-c5e61651e8ea" d="M261.62,141.35a12.4,12.4,0,0,1-3.7,17.11,11.53,11.53,0,0,1-1.73.92,12.36,12.36,0,0,1-12.06-1.17h0a12.12,12.12,0,0,1-3.32-3.44,12.36,12.36,0,0,1,3.7-17.11l.06,0,.09-.06A12.29,12.29,0,0,1,255,136.28a11.83,11.83,0,0,1,2.59,1.17A12.35,12.35,0,0,1,261.62,141.35Z" transform="translate(0 -12.33)"/>
                <g class="ff012cbd-1429-4f58-81e4-87603588490a">
                  <path class="b1dc71b7-a1cd-4212-b40c-f3d65c52bb69" d="M261.62,141.35a12.34,12.34,0,0,1,1.39,3,2.6,2.6,0,0,1-1.22.58c-.68.11-1.35.3-2.06.38-1.42.16-1.89-.86-3-1.58a12.49,12.49,0,0,0-1.31-.88c-.49-.26-1.12-.36-1.57-.65-.52.62.77.65,1,.81.55.36.37,1,.52,1.53.3,1.1,1.16,2.09.61,3.2-.2.4-.35.86-.57,1.2s-.68.54-1,.89c-.41.52-.62,2.55-1.49,2.17-.53-.23-.38-1-.7-1.29s-.76-.31-1.08-.73-.56-.75-.84-1.11-.54-.63-.88-1-.52-.81-.84-1.18c-.17-.2-.37-.23-.52-.47s-.08-.49-.22-.69c-.35-.53-.81-.27-.51-1a6.24,6.24,0,0,1,.66-1.07c.26-.26.73-.49,1-.76a4.27,4.27,0,0,1,1.11-.71c.48-.2,1.09-.21,1.53-.45s.74-.49,1.1-.72c-.19-.55-1.4-.41-1.92-.34.59,1.31-1.34.84-1.81,1.13a2.88,2.88,0,0,1,.76-2.64,5.83,5.83,0,0,1,2.38-1.4c.07,1.44,2.64.08,3.3.07a9.8,9.8,0,0,0,1.85-.12l.16,0A12.35,12.35,0,0,1,261.62,141.35Z" transform="translate(0 -12.33)"/>
                  <path class="bc3d6472-354d-42ab-a933-872e82c13c23" d="M259.5,151.76a3.67,3.67,0,0,0-1.75-.36c-.77-.06-1,.28-1.67.56-.37.16-.33.07-.66.12s-.59,0-.86.24c-.59.49-.28,1.1-.31,1.79a12.85,12.85,0,0,1-.17,2.07,7.43,7.43,0,0,0,.74-.22,6,6,0,0,1,1-.05,17.21,17.21,0,0,1,1.75.15c1.43.06,2.08-1.43,2.39-2.62C260.1,153,260.34,151.57,259.5,151.76Z" transform="translate(0 -12.33)"/>
                  <path class="a371df58-0eb2-4b82-9c7e-4f1af5b1404d" d="M242.51,141.83a4.69,4.69,0,0,1-.41,1.83,9.32,9.32,0,0,1-.68,1.85c-.73,1-1.95,3.7-2.56,3.42a12.38,12.38,0,0,1,2.27-8.06C241.73,140.93,242.46,141.32,242.51,141.83Z" transform="translate(0 -12.33)"/>
                </g>
                <path class="e1347fd1-1eca-460b-ab3d-e9772f0fbb63" d="M244.57,137.61s0,.07,0,.11l0-.1Z" transform="translate(0 -12.33)"/>
              </g>
              <g>
                <path class="a0efca72-91f7-4b06-a463-8af834bf0512" d="M3.14,164.58c3.67,0,9.56-3.45,12.47-7.06a.43.43,0,1,0-.68-.54c-3.42,4.24-10.69,7.8-13.19,6.45-1.23-.67-.93-2.5-.47-3.93,2.77-8.52,19.05-11,19.21-11a.43.43,0,0,0-.12-.86c-.69.1-17,2.54-19.92,11.57-1,3.15-.08,4.43.88,5A3.82,3.82,0,0,0,3.14,164.58Z" transform="translate(0 -12.33)"/>
                <polygon class="b1ce08c5-1760-4930-a7cb-da23c4f44600" points="41.09 132.45 31.37 132.71 5.45 137.08 11 137.59 41.09 132.45"/>
                <polygon class="a06f4c84-de19-4c0d-9f4d-7b44bbaa6d88" points="51.72 174.93 41.09 132.45 11 137.59 18.52 182.55 51.72 174.93"/>
                <polygon class="b1ce08c5-1760-4930-a7cb-da23c4f44600" points="18.52 182.55 10.89 180.07 5.45 137.08 12.47 136.28 11 137.59 18.52 182.55"/>
                <polygon class="a06f4c84-de19-4c0d-9f4d-7b44bbaa6d88" points="10.89 180.07 15.9 175.9 18.52 182.55 10.89 180.07"/>
                <polygon class="fc4a7879-1831-4660-b73b-45c06db512cc" points="15.9 175.9 9.89 136.57 12.47 136.28 11 137.59 18.52 182.55 15.9 175.9"/>
                <ellipse class="a54f0a20-2048-4b4b-9330-1b76f4f1464a" cx="32.79" cy="150.38" rx="1.19" ry="1.8" transform="matrix(0.98, -0.2, 0.2, 0.98, -29.27, -2.8)"/>
                <path class="b1ce08c5-1760-4930-a7cb-da23c4f44600" d="M20.38,153.15c.2,1,.88,1.67,1.53,1.54s1-1,.81-2-.89-1.66-1.53-1.53S20.18,152.18,20.38,153.15Z" transform="translate(0 -12.33)"/>
                <path class="a0efca72-91f7-4b06-a463-8af834bf0512" d="M32.28,150.71a11.71,11.71,0,0,0,2.47-2.21,20.45,20.45,0,0,0,1.93-2.61,27.71,27.71,0,0,0,1.53-2.84,19.06,19.06,0,0,0,1.15-3,9.93,9.93,0,0,0,.33-3.31,6.91,6.91,0,0,0-1-3.24A5.61,5.61,0,0,0,36,131.2a5.38,5.38,0,0,0-3.52-.15,5,5,0,0,0-2.83,2.13,11.83,11.83,0,0,0-1.37,3c-.63,2.09-1,4.16-1.57,6.19a24.16,24.16,0,0,1-2.18,5.79,13.35,13.35,0,0,1-4,4.56h0a.44.44,0,0,0-.1.61.43.43,0,0,0,.59.11,14.3,14.3,0,0,0,4.48-4.74,25.32,25.32,0,0,0,2.4-6c.59-2.06,1-4.15,1.61-6.12a10.79,10.79,0,0,1,1.23-2.71,4,4,0,0,1,.94-1,3,3,0,0,1,.56-.36,3.41,3.41,0,0,1,.63-.24,4.1,4.1,0,0,1,2.7.08,4.52,4.52,0,0,1,2.15,1.72,5.69,5.69,0,0,1,1,2.71,3.64,3.64,0,0,1,0,.74,3.76,3.76,0,0,1,0,.75l-.07.75c-.05.25-.11.5-.16.75a11.1,11.1,0,0,1-.44,1.46c-.17.49-.4,1-.6,1.44A25.1,25.1,0,0,1,36,145.45a18.87,18.87,0,0,1-1.83,2.5,10.13,10.13,0,0,1-2.27,2l0,0a.45.45,0,0,0-.14.6.44.44,0,0,0,.6.14Z" transform="translate(0 -12.33)"/>
                <polygon class="e2a9fb11-fe2d-408f-a029-4565b9ab95b8" points="44.64 163.24 42.29 147.91 16.63 151.38 20.85 167.91 44.64 163.24"/>
              </g>
              <g>
                <polygon class="b99e5a73-f848-435d-90a3-3e92b4057de9" points="240.36 109 250.41 80.07 243.59 80.3 236.17 108.06 240.36 109"/>
                <polygon class="b99e5a73-f848-435d-90a3-3e92b4057de9" points="233.47 107.71 239.17 89.3 233.94 89.12 229.87 106.92 233.47 107.71"/>
                <polygon class="b99e5a73-f848-435d-90a3-3e92b4057de9" points="226.09 106.34 228.97 96.78 224.48 96.33 222.48 105.55 226.09 106.34"/>
                <polygon class="ad0b5977-9fc1-4661-91fb-29b930a1dbfa" points="250.41 80.07 253.73 82.14 243.47 109.72 240.36 109 250.41 80.07"/>
                <polygon class="ad0b5977-9fc1-4661-91fb-29b930a1dbfa" points="239.17 89.3 241.12 89.53 236.17 108.06 233.47 107.71 239.17 89.3"/>
                <polygon class="ad0b5977-9fc1-4661-91fb-29b930a1dbfa" points="228.97 96.78 231.97 97.75 229.87 106.92 226.09 106.34 228.97 96.78"/>
                <polygon class="b346f4b8-479e-4b3e-8abc-c374ce44db2f" points="243.47 109.36 219.14 104.33 218.88 105.26 243.3 109.95 243.47 109.36"/>
                <polygon class="b346f4b8-479e-4b3e-8abc-c374ce44db2f" points="243.3 109.95 247.4 112.34 247.79 112.03 243.47 109.36 243.3 109.95"/>
                <polygon class="b79c211a-570e-4681-9a23-192a2c9044e5" points="218.88 105.26 226.31 108.59 247.4 112.34 243.3 109.95 218.88 105.26"/>
              </g>
            </g>
            <g>
              <path class="ef6f8cb8-5b93-4b54-b0c3-08cd6728d0e5" d="M463.37,219H434a66.82,66.82,0,0,0-2-13.43s-8.48-.84-10-1.79c-5-3.11-9.06-10.53-11.1-16a25.06,25.06,0,0,1-1.27-4.41c-.85-4.83,5-15.45,5-25.8s-4.2-25.94-4.2-25.94l3.36-4.08a76.46,76.46,0,0,1-3.21-10.12,170.76,170.76,0,0,1-3.71-20.25l5.78-2.59,4.08-1.83,9.29,28.42,1.09-1.35c.63-8.81-2.52-32.37-2.52-32.37s-1.82-.33-4.24-3.82a31.23,31.23,0,0,1-2.69-6.52c-2.63-8-5.57-20.58-4.55-25.11,1.41-6.29,8.65-7,8.65-7,3.15,10.91,12.8,28.54,13.85,32.2a68.61,68.61,0,0,1,1.58,6.93c.94,7.71,9,28.33,9.91,31.62s3.41,22.41,4.66,32.89,5.88,28.95,7.56,39C460.31,193.23,462,207.52,463.37,219Z" transform="translate(0 -12.33)"/>
              <path class="ff91399d-ab11-4459-868c-a2e9c225902a" d="M430.42,137.19c1.67,7,7.53,18.79,7.53,18.79l-6.09,5.5-3.05,1.58v35a27.45,27.45,0,0,1-17.89-10.35c-.15-.19-.29-.39-.44-.59-4.12-5.65-2.27-40.42.15-69.78.68-8.3,1.41-16.17,2.06-22.83l4.09-1.83,9.28,28.42,1.1-1.35c.63-8.81-2.51-32.37-2.51-32.37s-1.83-.33-4.25-3.82a32.07,32.07,0,0,1-2.69-6.52c2.7,1.89,7.42,5.12,8.3,5.22,1.42.15,4-2.32,4-2.32L428,84.23s8.08,18.7,8.13,31.45h6.8s-8.32,2.23-11.78,5.46C431.1,121.14,428.74,130.19,430.42,137.19Z" transform="translate(0 -12.33)"/>
              <path class="a57ad363-e06b-45f6-879c-4fefdf46876b" d="M418.88,132.78s10.8,3.7,13.16,9.59S438,156,438,156l-7.33,5.09L412,150.47Z" transform="translate(0 -12.33)"/>
              <path class="fa8791ea-e311-44e2-b3a3-4e4325950b94" d="M388.81,69.63c0,3.44-13.22,21-15.53,23.22S350.2,117.71,350,120.77a24.76,24.76,0,0,1-2.21,7.17s1.22,9.95,2,19.27c.42,4.74.72,9.3.72,12.32a21.52,21.52,0,0,1-.12,2.57,16.84,16.84,0,0,1-2,5.33h0c-2.69,4.89-7.56,10.08-12.1,12.3,0,0-.65,12.24-2.72,26.87-.56,4-1.25,8.2-2.05,12.37H295.79c3.56-11.5,8-27.17,10.56-40.42h0a109.57,109.57,0,0,1-18.86-19.9,52.75,52.75,0,0,1-7.52-14.5s-.36-4.88,4.46-10.13a197.49,197.49,0,0,0,5.46-24.66c1.57-11.49,1.25-13,1.89-15.72s3.46-8,5.34-12.82,6.3-20.23,6.85-22.59,16.28-33,17.7-33.52,5.51,1.57,6.14,5.82c.37,2.55-1,12.16-3.66,20.32a44.06,44.06,0,0,1-3.07,7.37,12,12,0,0,1-3.81,4.53s-3.63,11.56-4.57,18.78-1.1,13.4-1.1,13.4h3s11.47-28.62,16.52-39.5S342.44,29.6,343.86,28.8s6,1.42,6.77,4.72S347.16,60,341.81,63.3l-9.55,28.5c1-2.26,16.43-38.54,18.45-43.14S355.18,37.3,356,37.14a6.38,6.38,0,0,1,6,5.51c.79,4.72-3.46,23.49-8.18,27.24L348,96.78l.16,4h3.14L367.19,84.9s1.47-4.74,3.16-6.82,10.48-13.3,12.37-13.88S388.81,66.2,388.81,69.63Z" transform="translate(0 -12.33)"/>
              <path class="b48ad613-5d88-4aeb-b1ae-ab7ff7ae055f" d="M424.65,87.42S427.9,81.87,430,80c0,0-5.77,2.83-8,5.77A11.15,11.15,0,0,0,424.65,87.42Z" transform="translate(0 -12.33)"/>
              <polygon class="f7e26bd2-ff63-43d8-90f9-6bfde7331973" points="410.48 174.83 420.5 175.26 418.32 163.95 410.48 174.83"/>
              <path class="be7e6e06-e58e-40e7-9084-548c47b3e6f8" d="M318,173.74s3.71-2.28,10.79-1.39,8.66,5.56,8.66,5.56S332.5,171.56,318,173.74Z" transform="translate(0 -12.33)"/>
              <path class="b92d1f70-c671-40f5-ad03-8012806c4bcf" d="M348.45,167.4v0c-2.69,4.89-7.56,10.09-12.1,12.29,0,0-.66,12.26-2.72,26.89-3.41-10.77-11.6-29.44-27.27-28.06h0c-.45-.33-12.73-9.16-18.85-19.89l0-.07c.31.16,10.18,5.25,16.17,5.94s19.14-2.33,27.8-2.08a23.79,23.79,0,0,1,14.37,5.6Z" transform="translate(0 -12.33)"/>
              <path class="b48ad613-5d88-4aeb-b1ae-ab7ff7ae055f" d="M294,93.79s8.81,6.49,36.08,5.61l-13.32-3.85-2.15-.61h-3S305.52,96.6,294,93.79Z" transform="translate(0 -12.33)"/>
              <path class="f1c77aad-ffc1-4be2-b554-b3231200649c" d="M388.81,69.63c0,3.44-13.22,21-15.53,23.22-1.5,1.46-10.79,11.51-17.17,19.21h0c-3.45,4.15-6.05,7.63-6.12,8.7a24.12,24.12,0,0,1-2.2,7.16s1.18,9.69,2,18.9l0,.38h0c-22-2.85-34.29-15.45-34.29-15.45l-2.1,5.92-.22-6.46-1.92-12.47.47-4.74,1.67-16.77c-4.26-1.55-17.09-1.7-17.09-1.7l3.42-.63s6.18-7,7.42-12.9a114.94,114.94,0,0,0,2.22-23.56,31.58,31.58,0,0,0,7.29,1.71c3.3-1.26,7.32-9.05,7.45-9.31-1.77,5.44-4.11,10.23-6.88,11.89,0,0-3.61,11.55-4.56,18.78s-1.1,13.41-1.1,13.41h3s11.49-28.62,16.52-39.51,11.33-25.84,12.75-26.63,6,1.42,6.76,4.72S347.16,60,341.81,63.31l-9.55,28.48c1-2.25,16.42-38.53,18.46-43.13S355.19,37.3,356,37.14a6.37,6.37,0,0,1,6,5.51c.79,4.72-3.46,23.48-8.18,27.24L348,96.78l.16,4h3.14L367.2,84.9s1.47-4.74,3.14-6.81,10.49-13.3,12.38-13.88S388.81,66.2,388.81,69.63Z" transform="translate(0 -12.33)"/>
              <path class="aa80f058-790d-4a46-8d2f-c96972e50846" d="M284.43,134c3.59-11.66,10.44-29.27,11.48-39.17,0,0,12.56,1.42,17.52,2.4V120.1Z" transform="translate(0 -12.33)"/>
              <path class="b060923e-ec42-4302-9869-79d20d7883ec" d="M313.21,131.23s9.29,4.21,14,12.21c4.31,7.28,5.14,16.76,5.14,16.76a44.62,44.62,0,0,0-5.31-20.27,31.46,31.46,0,0,0-14.2-13.25Z" transform="translate(0 -12.33)"/>
              <path class="f84114bb-33f2-465c-853e-8c8759260c78" d="M356.11,112.06h0c-3.45,4.15-6.05,7.63-6.12,8.7a24.12,24.12,0,0,1-2.2,7.16s1.18,9.69,2,18.9l0,.38h0c-22-2.85-34.29-15.45-34.29-15.45l-2.1,5.92-.22-6.46-1.92-12.47.47-4.74,4.67-1.11S339.22,108,356.11,112.06Z" transform="translate(0 -12.33)"/>
              <g>
                <path class="acb17c08-c3fc-4b49-bf4b-3a26caf3e41c" d="M423.12,37.37a28.62,28.62,0,0,1,1.61,3.78c.29,1.16-.38,22.37-1.06,23.63a11.38,11.38,0,0,1-1.92,2.41Z" transform="translate(0 -12.33)"/>
                <path class="ef04d281-5d85-4884-a07c-32b7ece2daac" d="M421.73,73.15A15.17,15.17,0,0,1,423,76.64c0,.87-.29,8-.8,8.93a17.73,17.73,0,0,1-1.13,1.85Z" transform="translate(0 -12.33)"/>
                <path class="e8210d44-a99f-4d98-9a52-e242e9e05e3e" d="M322.88,21s1.92-5.55,6.51-6.76c9.78-2.56,84.43-1.93,87.36-1.28a11,11,0,0,1,7.6,7.21Z" transform="translate(0 -12.33)"/>
                <path class="eba70fc0-f836-4eac-93b5-254f7a84cd94" d="M322.09,24.86s5.56,149.22,6.39,152.09,5.55,4.82,8.45,5.09,70,.76,73.18,0,6.53-3.35,7.12-6.64S425,23.84,424.8,21.93a7.8,7.8,0,0,0-6.08-6.59c-3.14-.8-85.86-.38-90.24.59C324.81,16.74,321.94,20.93,322.09,24.86Z" transform="translate(0 -12.33)"/>
                <path class="b79c211a-570e-4681-9a23-192a2c9044e5" d="M324.14,26.6s5.36,145.68,6.16,148.48,5.35,4.71,8.15,5,67.09.74,70.14,0,6.29-3.27,6.86-6.49,7.44-148,7.3-149.82a8,8,0,0,0-5.87-6.43c-3-.79-82.36-.38-86.58.57C326.77,18.67,324,22.77,324.14,26.6Z" transform="translate(0 -12.33)"/>
                <path class="b7c5ee6d-b899-4d23-85c2-7c307d59fe7b" d="M376,174.46c-28.08,0-37.78,0-39.62,0-3.57.06-4.08-2.06-4.52-3C331.19,166.38,327.8,85,325.66,31c-.09-2.39,1.85-5.07,4-5.53,4-.85,18.11-.9,54.49-.9,22.25,0,31.75.18,33.31.35,3.21.72,3.29,2.26,3.76,3.66,0,6.31-7,138.4-7.41,141.62-.35,1.8-1,3.48-4.73,3.92-.74.09-5.31.32-33.07.32Z" transform="translate(0 -12.33)"/>
                <g>
                  <path class="e5dfd208-9124-474e-ad5e-cfd3281a089d" d="M378.44,20.76a2.57,2.57,0,1,1-2.56-2.57A2.56,2.56,0,0,1,378.44,20.76Z" transform="translate(0 -12.33)"/>
                  <circle class="ad95637f-f8c4-4b90-8648-01e483378c8c" cx="375.88" cy="8.43" r="1.36"/>
                  <path class="bc57e0ca-78e2-407a-9935-6d50403ef128" d="M377.24,21.61a.52.52,0,1,1-.52-.52A.51.51,0,0,1,377.24,21.61Z" transform="translate(0 -12.33)"/>
                </g>
                <rect class="ed27aaa1-e96a-4fd9-bbda-556e6360f3b1" x="354.79" y="117.59" width="37.31" height="15.33" rx="7.66"/>
                <path class="a7e92202-a395-41b1-8b9b-a1090d2f7993" d="M386.26,143.14H361a9.12,9.12,0,0,1-9.12-9.12h0A9.12,9.12,0,0,1,361,124.9h25.29a9.12,9.12,0,0,1,9.12,9.12h0A9.12,9.12,0,0,1,386.26,143.14Z" transform="translate(0 -12.33)"/>
                <g>
                  <path class="bad282a8-bb46-4670-b49a-365fef85eec0" d="M371.25,133.08c0,1.1-.83,1.78-2.14,1.78h-1v1.35H367V131.3h2.12C370.42,131.3,371.25,132,371.25,133.08Zm-1.15,0c0-.54-.36-.85-1.05-.85h-.93v1.7h.93C369.74,133.93,370.1,133.62,370.1,133.08Z" transform="translate(0 -12.33)"/>
                  <path class="bad282a8-bb46-4670-b49a-365fef85eec0" d="M375,135.16h-2.28l-.44,1.05h-1.16l2.19-4.91h1.12l2.19,4.91h-1.19Zm-.36-.86-.78-1.88-.78,1.88Z" transform="translate(0 -12.33)"/>
                  <path class="bad282a8-bb46-4670-b49a-365fef85eec0" d="M379.23,134.47v1.74h-1.14v-1.75l-1.9-3.16h1.21l1.31,2.18L380,131.3h1.12Z" transform="translate(0 -12.33)"/>
                </g>
                <path class="f0d52c32-7ed5-4adb-afa5-80cea995ed96" d="M329.37,140l41.91,39.92-32.57-.29s-5.39-.27-7.61-4.65Z" transform="translate(0 -12.33)"/>
                <g>
                  <path class="b5398fd8-1ce1-4c29-a1f0-75ec6de46493" d="M344.46,113.12l-1.81-34.27a3.93,3.93,0,0,1,3.92-4.14l54.84.1a3.93,3.93,0,0,1,3.93,4.13l-1.18,34.17a3.92,3.92,0,0,1-3.92,3.73H348.38A3.92,3.92,0,0,1,344.46,113.12Z" transform="translate(0 -12.33)"/>
                  <path class="adb6c3e7-55f4-4acb-b649-2aa82287cc1d" d="M340.22,110.17,338.15,71a4.5,4.5,0,0,1,4.49-4.73l62.7.12a4.49,4.49,0,0,1,4.49,4.72l-1.34,39.06a4.5,4.5,0,0,1-4.49,4.28H344.71A4.5,4.5,0,0,1,340.22,110.17Z" transform="translate(0 -12.33)"/>
                  <path class="a98dbc93-5d78-4abd-8e86-195dac752a7a" d="M340.22,111l-2.07-39.18a4.5,4.5,0,0,1,4.49-4.73l62.7.12a4.49,4.49,0,0,1,4.49,4.71L408.49,111a4.49,4.49,0,0,1-4.49,4.27H344.71A4.5,4.5,0,0,1,340.22,111Z" transform="translate(0 -12.33)"/>
                  <polygon class="f4099382-ed55-4968-86c2-0a9387f16917" points="338.35 65.15 409.63 64.39 409.33 72.14 338.84 72.88 338.35 65.15"/>
                  <polygon class="a207f40d-f3fe-4fe6-961c-e37ffd5b37dd" points="342.16 75.75 342.16 80.67 384.1 80.44 384.1 75.25 342.16 75.75"/>
                  <polygon class="e64e353c-c8a5-4411-870d-b63feec6100e" points="390.91 75.25 390.91 80.65 406.3 80.56 406.26 74.83 390.91 75.25"/>
                  <polygon class="fa8aa5a2-ea71-41f2-a813-1024b4cfd2c1" points="393.43 89.02 405.45 88.62 405.08 94.13 393.43 93.75 393.43 89.02"/>
                  <circle class="f049c585-e30d-4eb1-ad49-66890cba2f33" cx="393.43" cy="91.26" r="5.17"/>
                </g>
                <polygon class="b1419cad-2508-450f-ab7e-1dcf66d93418" points="359.27 49.06 349.4 50.89 398.27 50.68 389.77 49 359.27 49.06"/>
                <g>
                  <polygon class="b79c211a-570e-4681-9a23-192a2c9044e5" points="376.38 29.6 380.92 29.77 380.92 31 376.19 31.21 376.38 29.6"/>
                  <polygon class="b79c211a-570e-4681-9a23-192a2c9044e5" points="387.73 19.29 388.1 20.82 379.42 30.4 377.23 30.38 385.29 16.38 387.73 19.29"/>
                  <polygon class="fba74e30-00f3-443d-adf7-8926d87fab6b" points="371.58 29.6 385.29 16.38 387.73 19.29 374.04 31 371.58 29.6"/>
                  <polygon class="ad9796e8-4304-400f-a88b-5aadba6e6578" points="358.51 49.98 355.91 31 389.77 31.45 386.95 49.78 358.51 49.98"/>
                  <polygon class="b1419cad-2508-450f-ab7e-1dcf66d93418" points="356.24 33.39 389.1 35.85 389.65 32.24 356.08 32.24 356.24 33.39"/>
                  <polygon class="a59eb5b3-469f-492c-a648-06fdbdd1582b" points="359.03 32.24 361.53 48.54 362.36 48.54 360.77 32.24 359.03 32.24"/>
                  <polygon class="a59eb5b3-469f-492c-a648-06fdbdd1582b" points="366.8 32.24 368.4 48.54 369.37 48.54 368.57 32.24 366.8 32.24"/>
                  <polygon class="a59eb5b3-469f-492c-a648-06fdbdd1582b" points="375.46 32.24 375.14 48.54 376.11 48.54 377.23 32.24 375.46 32.24"/>
                  <polygon class="a59eb5b3-469f-492c-a648-06fdbdd1582b" points="384.25 32.24 382.28 48.54 383.25 48.54 385.69 32.24 384.25 32.24"/>
                  <polygon class="a59eb5b3-469f-492c-a648-06fdbdd1582b" points="354.17 30.18 354.91 32.24 390.98 32.24 391.16 30.5 354.17 30.18"/>
                  <polygon class="adb6c3e7-55f4-4acb-b649-2aa82287cc1d" points="370.52 29.14 370.65 31.68 376.14 31.68 376.19 29.14 370.52 29.14"/>
                  <polygon class="a59eb5b3-469f-492c-a648-06fdbdd1582b" points="391.16 30.5 395.07 31.03 394.79 32.66 390.98 32.24 391.16 30.5"/>
                  <polygon class="a59eb5b3-469f-492c-a648-06fdbdd1582b" points="386.95 49.78 390.88 49.77 393.7 32.24 391.16 32.24 389.65 32.24 386.95 49.78"/>
                </g>
                <path class="f0d52c32-7ed5-4adb-afa5-80cea995ed96" d="M351.94,17.78l66.39,91.59,4-85a8.15,8.15,0,0,0-5.87-6.44C413.37,17.05,351.94,17.78,351.94,17.78Z" transform="translate(0 -12.33)"/>
              </g>
              <path class="a99dccd1-3f8e-4fe9-9a37-390e35c215d9" d="M325.77,119.76a32,32,0,0,0,13.63-8.33,23.93,23.93,0,0,0,6.34-15.13L325.5,112.89Z" transform="translate(0 -12.33)"/>
              <g>
                <path class="ab9a90fa-b50b-4083-9e71-5f4b6c14bf15" d="M345.8,96.26a19.66,19.66,0,0,1-10.45,13.4c-2.65,1.44-10.62,3.8-18.14,4.77l-2.86,1c-1.36,3.47-1.49,14.5-1.49,14.5s.16.48.35,1.28h0c.56,2.3,1.35,7.22-.67,10.95-2.72,5-12.27,14.92-19.51,13.6-4.79-.88-10.75-7.34-11.8-11.65s3.2-10.12,3.2-10.12c6.09-3.36,15.53-20.45,16.16-22.45.58-1.85,1.61-5.22,2.76-6.54l.28-.28c1.25-1,9.23-4,19.72-7.76a77.08,77.08,0,0,0,17.1-8.5C345.48,90.17,345.8,96.26,345.8,96.26Z" transform="translate(0 -12.33)"/>
                <path class="a298ec22-99ea-4d73-9ec5-cc37244bf5f3" d="M303.63,104.75s2.69,5.84,7.62,7.31c0,0,15.08-2.55,23.14-4.9,11.35-3.3,11.41-10.91,11.41-10.91s.82-6.33-5.35-7.76a103.48,103.48,0,0,1-15.72,7.58C315.3,99.84,307.3,102.5,303.63,104.75Z" transform="translate(0 -12.33)"/>
                <g>
                  <path class="eb4d7127-2194-467d-b69b-f92c1bab541f" d="M345.8,96.24v0l-.06,0c-4.19,3.65-10.45,6.77-15.15,6.25a9.83,9.83,0,0,1-3-.81c-2.53-1.18-3.4-3.28-1.67-4.85l.21-.18a38.78,38.78,0,0,1,4.57-2.92l.39-.23c1.09-.62,2.24-1.26,3.34-1.86,3.22-1.75,6.07-3.21,6.07-3.21C348.12,90.23,345.92,96,345.8,96.24Z" transform="translate(0 -12.33)"/>
                  <path class="f94c47bd-5944-480c-9541-c6c76c7ca5b8" d="M338.27,89.62s5.58.22,6.68,7.31l.79-.63s3-5.79-5.29-7.81Z" transform="translate(0 -12.33)"/>
                  <path class="b84db1da-117f-436d-bc82-10387e2581b1" d="M331.82,93.79s5.82-3.62,9.05-4.49C340.87,89.3,335.47,92.93,331.82,93.79Z" transform="translate(0 -12.33)"/>
                  <path class="a6e71904-3572-4cee-87b7-f29dd5e20657" d="M330.59,102.5l-3-.81c-2.53-1.18-3.4-3.28-1.67-4.85l.21-.18.73-.08s3.72-.59,5,.88S330.59,102.5,330.59,102.5Z" transform="translate(0 -12.33)"/>
                  <path class="e3a426b5-a93a-4eb3-add5-6a77d3cfa2bd" d="M345.74,96.3c-4.19,3.65-10.45,6.77-15.15,6.25s-7-3.57-4.72-5.66a34.11,34.11,0,0,1,4.78-3.1c-2.23,1.37-4.62,3.08-4.5,4.09.24,1.89,1.94,4.62,8.24,3.83C340.29,101,345.15,96.76,345.74,96.3Z" transform="translate(0 -12.33)"/>
                </g>
                <path class="e7f19b95-7a69-459d-8477-b0a6f5002412" d="M313.21,131.24c.56,2.3,1.35,7.22-.67,10.95-2.72,5-12.27,14.92-19.51,13.6-4.79-.88-10.75-7.34-11.8-11.65s3.2-10.12,3.2-10.12c6.09-3.36,15.53-20.45,16.16-22.45.58-1.85,1.61-5.22,2.76-6.54l.28-.28c1.63,5.93,10.72,10.7,10.72,10.7-1.36,3.47-1.49,14.5-1.49,14.5s.16.48.35,1.28Z" transform="translate(0 -12.33)"/>
                <path class="b3da5c90-8a47-49ce-861f-d464828af9e0" d="M318.91,114.19l-3.69.21a9.34,9.34,0,0,1-5.51-2s1.82,4.34,4.26,4.34Z" transform="translate(0 -12.33)"/>
                <path class="ba94e3d2-5982-471d-867e-1d28b761a995" d="M281.06,145.36a12.37,12.37,0,0,0,12.27,3.91c6.73-3.85,7.78-15.6,7.78-15.6s-4.2-6.44-9.94-4.84C291.17,128.83,277.37,139.12,281.06,145.36Z" transform="translate(0 -12.33)"/>
                <circle class="a905358e-5822-40f0-bc59-7221e1c1e102" cx="308.21" cy="98.07" r="1.03"/>
              </g>
              <path class="b48ad613-5d88-4aeb-b1ae-ab7ff7ae055f" d="M307.18,56.9a22.61,22.61,0,0,0,10.08,5.85l1.87-1.65S312.2,60.19,307.18,56.9Z" transform="translate(0 -12.33)"/>
              <path class="b48ad613-5d88-4aeb-b1ae-ab7ff7ae055f" d="M431.86,161.48a26.47,26.47,0,0,0,9.67-11s-7.6,8.82-12.19,9.87Z" transform="translate(0 -12.33)"/>
              <path class="b48ad613-5d88-4aeb-b1ae-ab7ff7ae055f" d="M420,124.45s17-7.36,22.88-8.77h-5.8s-4.8,4.19-9.92,4.11l-7.06,2.72Z" transform="translate(0 -12.33)"/>
              <path class="f6ad665e-a7e1-48ab-8af8-b33a2f91cc38" d="M384.59,134.62s1,14.74,8.85,26.86,23.79,13.92,23.79,13.92l2.2-19.42Z" transform="translate(0 -12.33)"/>
              <g>
                <path class="e84ab866-6122-4389-842e-8ed2a822d271" d="M436.08,202.24c-1.89.42-7.87-1.21-11.28-3.93s-7.55-25.5-8.34-27.23-9.54-11.94-9.54-11.94h0c-.48-.12-6.91-1.77-9.71-3.3a0,0,0,0,0,0,0c-3.28-1.81-9.33-11-11.7-17.87h0a14.89,14.89,0,0,1-1-5c.21-6.2,5.45-7.14,7-6.61s12.6,13.53,16.4,17,6.58,5.9,7.63,6.95l0,0c1.19,1.13,12.27,9.42,15.08,10.77a6,6,0,0,0,5.46-.31s5.87,5.66,6.71,18.25S438,201.82,436.08,202.24Z" transform="translate(0 -12.33)"/>
                <g>
                  <path class="f1051b7b-06d8-43cf-947e-6c2b9b0437b0" d="M402.23,140.24a5.92,5.92,0,0,1-4.94,2.64,11.28,11.28,0,0,1-6-1.53,14.42,14.42,0,0,1-5.68-5.8,14.1,14.1,0,0,1-1.13-2.57s0,0,0,0c1.52-6.75,7-6.61,7-6.61l1.4,1.41h0l6.73,6.85.49.49a11,11,0,0,1,2.15,3.51A2.17,2.17,0,0,1,402.23,140.24Z" transform="translate(0 -12.33)"/>
                  <path class="f94c47bd-5944-480c-9541-c6c76c7ca5b8" d="M392.89,127.76c-7.1.43-7.28,7.79-7.28,7.79a13.89,13.89,0,0,1-1.14-2.59c1.52-6.75,7-6.61,7-6.61Z" transform="translate(0 -12.33)"/>
                  <path class="a6e71904-3572-4cee-87b7-f29dd5e20657" d="M402.23,140.24a5.92,5.92,0,0,1-4.94,2.64s-1.11-3.47,1.24-5.15a2.51,2.51,0,0,1,3.73.88A2.17,2.17,0,0,1,402.23,140.24Z" transform="translate(0 -12.33)"/>
                  <path class="e3a426b5-a93a-4eb3-add5-6a77d3cfa2bd" d="M402.23,140.24a5.92,5.92,0,0,1-4.94,2.64,11.28,11.28,0,0,1-6-1.53,14.42,14.42,0,0,1-5.68-5.8,14.1,14.1,0,0,1-1.13-2.57c.17.4,2.75,6.19,7.86,8.26,5.29,2.15,9.4-.78,9.49-2.46.06-1.15-1.32-3.06-2.21-4.17l.49.49a11,11,0,0,1,2.15,3.51A2.17,2.17,0,0,1,402.23,140.24Z" transform="translate(0 -12.33)"/>
                  <path class="b84db1da-117f-436d-bc82-10387e2581b1" d="M393.44,131s2.25,3.19,3.88,3.67A8.17,8.17,0,0,0,393.44,131Z" transform="translate(0 -12.33)"/>
                </g>
                <path class="fc7767f7-dfb1-4852-8b5d-06efcd32f0ec" d="M436.08,202.24c-1.89.42-7.87-1.21-11.28-3.93s-7.55-25.5-8.34-27.23-9.54-11.94-9.54-11.94-6.84-1.72-9.75-3.31c.34.12,6.34,2.24,11,1.7s7.33-7.27,7.33-7.27l0,0c.58.45,9.8,7.73,15.08,10.77a6,6,0,0,0,5.46-.31s5.87,5.66,6.71,18.25S438,201.82,436.08,202.24Z" transform="translate(0 -12.33)"/>
                <path class="f40855c2-1065-4a83-9a53-6bd4815f083b" d="M402.4,151.73c-.34.62,2.22,4.4,6.12,4.88s7.8-5.57,7-6.35-4.76-4.25-6.86-4.11S403.66,149.45,402.4,151.73Z" transform="translate(0 -12.33)"/>
                <path class="f94c47bd-5944-480c-9541-c6c76c7ca5b8" d="M412.32,156a1,1,0,1,1-1.05-1A1,1,0,0,1,412.32,156Z" transform="translate(0 -12.33)"/>
                <path class="bef19b56-8712-4b59-a757-fe11cfa77f5c" d="M406.88,159.13c-.48-.12-6.91-1.77-9.71-3.3a0,0,0,0,0,0,0c-3.28-1.81-9.33-11-11.7-17.87,0,0,8.05,11.49,11.56,15S406.34,158.94,406.88,159.13Z" transform="translate(0 -12.33)"/>
                <path class="f6e05870-5ff4-42cb-ba4a-148e645c49e4" d="M428.67,174.51s4.17,3.21,6.74,3.53,9-1.74,9.23-5.67-9-8.76-13.35-8.24S426.73,173.15,428.67,174.51Z" transform="translate(0 -12.33)"/>
                <polygon class="b48ad613-5d88-4aeb-b1ae-ab7ff7ae055f" points="416.46 158.74 424.95 165 417.76 163.95 416.46 158.74"/>
              </g>
              <path class="faa324cc-9562-4ac9-8e7b-496fa00a5cc9" d="M434,218.4c-1.33-10.15-2-12.85-2-12.85s-8.5-.84-10-1.79c0,0,2.44.65,5.21-3.89,0,0,7.38,1.8,18.08-1.77Z" transform="translate(0 -12.33)"/>
              <path class="b48ad613-5d88-4aeb-b1ae-ab7ff7ae055f" d="M432,205.55s6.87-5.61,13.27-7.45c0,0-11.65,2.46-15.72,7.17Z" transform="translate(0 -12.33)"/>
            </g>
          </g>
        </g>
        <g id="bb8c52d7-9533-4758-afd3-8c1fb59ea29c" data-name="Capa 2">
          <rect x="8.76" y="218.61" width="439.63" height="80.06" rx="11"/>
        </g>
        <g id="bb2f7b8c-bb84-4ac5-bb2a-a83326b82f80" data-name="Texto">
          <text class="a1ab3345-a5c1-4e5a-9720-cc452dcf0ade" transform="translate(49.91 268.44)">Comprar en </text>
        </g>
        <g id="f52a6fcb-f87d-40ad-9ba2-af3a76870364" data-name="Capa 4">
          <image width="1276" height="640" transform="translate(304.73 223.08) scale(0.11)" xlink:href="PROYECYOS/PORTAL%20ORION/ORION/IMG/LOGO-MARCA/logo-orion-claro.png"/>
        </g>
      </g>
    </svg>
  </div>

  </div>


  <div class="  d-flex justify-content-center">
    
   
    <div class="btn-comprar fondo-verde2 d-flex justify-content-center"> <h1> ¡COMPRAR!</h1></div>
  </div>



 
<br>
 <hr>
 <br>
   


      <h3 class="d-flex justify-content-center p-3 fondo-verde2 text-light">Categorias</h3>
      <div class="container  bg-light  p-2">
          <categorias style="overflow-x: scroll ;height:200px;" class="p-2 d-flex ">
          </categorias>
   <!--
   <div class="btn fondo-negro btn-block"><h5>VENDER </h5><span style="font-size:25px; color:yellow;"><i class="fas fa-shield-alt"></i></span> </div>
   <div class="btn fondo-negro btn-block"><h5>DROPSHIPING </h5><span style="font-size:25px; color:yellow;"><i class="fas fa-trophy"></i></span> </div>
-->
   
   </div>

   <br>
<hr>
<br>


<div class="bg-light">
<h3 class="d-flex justify-content-center p-2 fondo-verde2 text-light">Mas vendidos</h3>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
<?php

    for($h=1;$h<39;$h++){

      echo '<li data-target="#carouselExampleCaptions" data-slide-to="'.$h.'"></li>';

    }
         

?>
  </ol>
  <div class="carousel-inner">



    
    <div class="carousel-item active">
    <a style="text-decoration: none;color:white;" href="producto.php?id=<?php echo $productos2[0]['id_producto'] ?>"><img src="<?php echo $productos2[0]['img'] ?>" class="d-block w-100" alt="..."></a>

      <div class="carousel-caption ">
      <a style="text-decoration: none;color:white;" href="producto.php?id=<?php echo $productos2[0]['id_producto'] ?>"> <h5 style="background: rgba(0, 0, 0, 0.650); padding:10px;"><?php echo $productos2[0]['nombre'] ?></h5></a>
      <a style="text-decoration: none;color:white;" href="producto.php?id=<?php echo $productos2[0]['id_producto'] ?>"> <p style="background: rgba(0, 0, 0, 0.650); padding:10px;"><?php echo $productos2[0]['info_corta'] ?></p></a>
      </div>
    </div>

    <?php

        for($f=0;$f<count($productos4);$f++){

          echo '    <div class="carousel-item ">
          <a style="text-decoration: none;color:white;" href="producto.php?id='.$productos4[$f]['id_producto'].'"> <img src="'.$productos4[$f]['img'] .'" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
            <a style="text-decoration: none;color:white;" href="producto.php?id='.$productos4[$f]['id_producto'].'">  <h5 style="background: rgba(0, 0, 0, 0.650); padding:10px;">'.$productos4[$f]['nombre'].'</h5></a>
            <a style="text-decoration: none;color:white;" href="producto.php?id='.$productos4[$f]['id_producto'].'">  <p style="background: rgba(0, 0, 0, 0.650); padding:10px;">'.$productos4[$f]['info_corta'].'></p></a>
            </div>
          </div>';
        }

    ?>


  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>











<br>
<hr>
<br>





<div class="bg-light">
<h3 class="d-flex justify-content-center p-2 fondo-verde2 text-light">Recomendados</h3>
<br>
<div class="  d-flex flex-wrap justify-content-center">
<?php

 for($i=0;$i<count($productos);$i++){

  echo '
 

    <a style="text-decoration:none;color:black;" href="producto.php?id='.$productos[$i]['id_producto'].'"><div class=" card m-2" style="width: 10rem;  box-shadow:3px 3px 4px black;">
      <img src="'.$productos[$i]['img'].'" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">'.$productos[$i]['nombre'].'</p>
        <hr>
        <p class="card-text"><h4>$ '.number_format(floatval($productos[$i]['precio']),0,'.',',').' pesos </p>
      </div>
  </div></a>


  
  ';
 }

?>
<br>
<br>
</div>
</div>


<br>
<hr>
<br>



<div class="principal fondo-verde2 text-light">

<h2>SUPERMERCADO</h2>

</div>

<div  class="container  mi-container p-2 ">

 


  <br>
</div>

















<br>
<br>
  <hr>
  <br>



  <div class="bg-light">

  <div class=" principal bg-light">
   <h1>Tiendas Oficiales</h1>
  </div>

  <hr>
  <div class="container">

<div  class="tiendas d-flex fondo-blanco runalotusArtesanias ">

  <img style="width: 100%;" src="api/assets/img/tienda-ofocial-runalotus.jpg" alt="">

</div>
<br>

<div class="tiendas d-flex fondo-blanco cannabisShop">

  <img class="cannabis" src="api/assets/img/logo-cannabis-shop.png" alt="">
  <a></a><h4 style="color: green;"> Cannabis Shop</h4>

</div>

<br>
</div>
<br>
</div>




<br>
<hr>
<br>



<div class="bg-light">
<h3 class="d-flex justify-content-center p-2 fondo-verde2 text-light">Más Productos</h3>
<br>
<div class="  d-flex flex-wrap justify-content-center">
<?php

 for($i=0;$i<count($productos3);$i++){

  echo '
 

    <a style="text-decoration:none;color:black;" href="producto.php?id='.$productos3[$i]['id_producto'].'"><div class=" card m-2" style="width: 10rem;  box-shadow:3px 3px 4px black;">
      <img src="'.$productos3[$i]['img'].'" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">'.$productos3[$i]['nombre'].'</p>
        <hr>
        <p class="card-text"><h4>$ '.number_format(floatval($productos3[$i]['precio']),0,'.',',').' pesos </p>
      </div>
  </div></a>


  
  ';
 }

?>
<br>
<br>
</div>
</div>








<br>
<hr>
<br>
  <div class="container d-flex flex-wrap justify-content-center">

    <div class="pagos p-3">
      <h2><span class="icon-pay"><i class="fas fa-credit-card"></i> </span>  Formas de Pago</h2>
      <hr>
      <p>  Contra entrega <span class="icon-pay"><i class="fas fa-motorcycle"></i> </span></p><br>
      <p>Efecty- Baloto <span ><img class="icono-pagos" src="api/assets/img/efecty-logo.png" alt=""> </span></p>
      <p>Transferencia Bancaria<span ><img class="icono-pagos" src="api/assets/img/logo-pse.png" alt=""> </span></p>
      <p>Mercado Pago <span class="icon-pay"><i class="fas fa-credit-card"></i> </span></p><br>
      <p>Tajetas credito - Debito <span class="icon-pay"><i class="fas fa-credit-card"></i> </span></p><br>
      <p>Nequi -Daviplata <span ><img class="icono-pagos" src="api/assets/img/nequi-logo.png" alt=""> </span></p>
      <br>
      <a href="pagos.php" class="btn btn-block btn-success"><h3>Consultar metodos de pago</h3></a>


    </div>

    <div class="envios p-3">
      <h2><span class="icon-pay"><i class="fas fa-truck"></i> </span> Formas de Envio</h2>
      <hr>

      <p style="background: black;box-shadow: 50%;"><img class="envios-orion" src="api/assets/img/envios-orion.png" alt=""></p>
      <br>
      <p>Tipos de envíos:</p>
      <hr>
      <p ><span style="font-size:25px; color:green;"><i class="fas fa-trophy"></i></span>
       <strong style="color:green;">Premium:</strong> Pagas cuando recibes el producto, te llega el mismo día.</p>
     
      <hr>
      
      <p> <span style="font-size:25px; color:green;"><i class="fas fa-shield-alt"></i></span> 
      <strong style="color:green;">Express:</strong> Pagas cuando recibes el producto, te llega en menos de 48 horas. </p>
      
      <br>
      <a href="envios.php" class="btn btn-block btn-success"><h3>Consultar tarifa de envíos</h3></a>


    </div>

  </div>



<br>
<hr>
<br>



  <br>
  <?php

require_once 'footer.php';

?>

    

  <?php

   echo ' <script src="librerias/jquery/jquery-3.5.1.js"></script>';

  ?>

  <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
  <script src="librerias/icons/js/all.js"></script>
  <script src="js/navigation.js"></script>
  <script src="js/index.js"></script> 

  <?php

    if(!isset($_SESSION['user'])){

      echo '<script src="js/menuuser.js"></script>';

    }else{

      echo '<script src="js/user.js"></script>';

    }

   

  ?>
  
</body>
</html>
