$(window).on('load',function(){

    //click comprar inderx
    $('.btn-comprar').on('click',function(){

        window.location.href="tienda.html";
    });




    //card producto index
    let path_fetch="data/dataIndex.json";

    fetch(path_fetch)
    .then(data=>data.json())
    .then(response=>{

        for(let f=0; f< response.length;f++){


            $('.mi-container').append(`
        
        <div class="micard ">

  
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 360 521">
          <defs>
            <style>
              .a85bd330-b6bb-4be2-b32a-98733b890239 {
                fill: #fff;
              }
        
              .a1da874c-44d2-42b4-8554-6b532893100e {
                fill: #3cb72e;
              }
        
              .a8385eb2-0c5a-47ee-b24c-786afeaf769c {
                font-size: 26px;
                fill: #f7f7f7;
              }
        
              .a8385eb2-0c5a-47ee-b24c-786afeaf769c, .b6191663-da78-4bee-a995-29d4390b7969, .e721114e-c0e6-4216-be68-f41b5fbf85b1, .f77c186c-8b5a-4fe9-a3da-06bd984a6dea {
                font-family: Rockwell;
              }
        
              .a27f7db5-730b-48da-ad79-4fd26c54b2e4 {
                letter-spacing: -0.02em;
              }
        
              .fc31bd19-0c80-413f-a99f-62fcdb66f94c {
                letter-spacing: -0.02em;
              }
        
              .f77c186c-8b5a-4fe9-a3da-06bd984a6dea {
                font-size: 29px;
              }
        
              .b6191663-da78-4bee-a995-29d4390b7969 {
                font-size: 22px;
              }
        
              .b45f39a0-f1fb-474e-8c53-35590c9d3228 {
                letter-spacing: -0.02em;
              }
        
              .e721114e-c0e6-4216-be68-f41b5fbf85b1 {
                font-size: 24px;
                fill: #fcfcfc;
              }
        
              .a4aca007-495c-466d-ac43-2332b4999465 {
                letter-spacing: 0.01em;
              }
            </style>
          </defs>
          <g id="a5638ba0-f29a-484e-8ced-424421023c08" data-name="Card">
            <g id="a48898af-833f-48e2-b849-5408fcc4eb10" data-name="fondo">
              <g>
                <rect class="a85bd330-b6bb-4be2-b32a-98733b890239" x="0.13" y="0.13" width="359.75" height="519.75"/>
                <path d="M359.75.25v519.5H.25V.25h359.5M360,0H0V520H360V0Z" transform="translate(0 0)"/>
              </g>
            </g>
            <rect id="b2456d14-6d0a-4e4a-b610-ded97e7c971a" data-name="Verde2" class="a1da874c-44d2-42b4-8554-6b532893100e" x="24" y="404" width="315" height="96" rx="3"/>
            <g id="b6a25cf4-2c39-4705-a17b-5d4884f73d0f" data-name="Negro2">
              <rect x="0.5" y="454.5" width="359" height="65"/>
              <path d="M359,455v64H1V455H359m1-1H0v66H360V454Z" transform="translate(0 0)"/>
            </g>
            <rect id="f8a9dc0a-bbb1-4adc-a20f-972bc013bdd3" data-name="Verde1" class="a1da874c-44d2-42b4-8554-6b532893100e" x="21" y="31" width="319" height="39" rx="3"/>
            <rect id="e3cba2f1-cb33-4f50-a5c5-2baab29f7fc7" data-name="Negro1" width="360" height="40"/>
          </g>
          <g id="fc47b64f-fbf4-4e9a-b6c5-32c4531be42f" data-name="Producto">
            <image width="824" height="1080" transform="translate(53 71) scale(0.3 0.3)" xlink:href="${response[f].img}"/>
          </g>
          <g id="a6b20de6-42dd-4522-8896-8a1f28ae91ea" data-name="Nombre-producto">
            <text class="a8385eb2-0c5a-47ee-b24c-786afeaf769c" transform="translate(43.24 482.89)">${response[f].nombre}</text>
          </g>
          <g id="b7a27964-140d-4db8-a007-e3cfac17c117" data-name="Precio-producto">
            <text class="f77c186c-8b5a-4fe9-a3da-06bd984a6dea" transform="translate(59.46 437.69)">${response[f].precio}</text>
          </g>
          <g id="fee3a67a-1b33-44df-bd0f-bc2f931311f9" data-name="Promocion-producto">
            <text class="b6191663-da78-4bee-a995-29d4390b7969" transform="translate(65.82 59.9)">${response[f].oferta}</text>
          </g>
          <g id="a5ed5aad-c3f6-4f97-b201-aa495e39ebce" data-name="Tienda-oficial">
            <text class="e721114e-c0e6-4216-be68-f41b5fbf85b1" transform="translate(10.75 28.13)">${response[f].categoria}</text>
          </g>
        </svg>
      
      </div>
      
      <br><hr><br>
        
        
        `);

        }//fina for


        $('.micard').on('click',function(){

            console.log('click')
            window.location.href="tienda.html";
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

})