//VARIABLES 
const mostrarMenu = document.getElementById('mostrar-nav');
const navegador = document.getElementById('navega');



// AddeventListener();

// //AddeventListener
// function AddeventListener(){

//     //Mostrar el menu
// mostrarMenu.addEventListener('click',MostrarMenu);
        
// }


// //FUNCIONES
// function MostrarMenu(e){
//     e.preventDefault();
//     navegador.classList.toggle('mostrar');
//     // mostrarMenu.style.color = 'white';
// }


const hamburger = document.querySelector('.hamburger-btn');
var hamburgerMenuOpen = false;



hamburger.addEventListener("click", () => {
    
    if(hamburgerMenuOpen){
        hamburgerMenuOpen = !hamburgerMenuOpen;
        hamburger.classList.remove("open");
        navegador.classList.toggle('mostrar');
        
    }else{
        hamburgerMenuOpen = !hamburgerMenuOpen;
        hamburger.classList.add("open");
        navegador.classList.toggle('mostrar');
    }
        // navegador.classList.toggle('mostrar');
});



