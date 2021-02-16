'use strict';

let btnCategoria=document.querySelector('.btn-categorias'),
    categorias=document.querySelector('.categorias'),
    flechaCategorias=document.getElementsByClassName('miflecha');

btnCategoria.addEventListener('click', ()=>{

    categorias.classList.toggle('d-none');

    for(let i=0; i<flechaCategorias.length;i++){

        flechaCategorias[i].classList.toggle('d-none');
    }
    


   


    
})