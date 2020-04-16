//VARIABLES 
const mostrarMenu = document.getElementById('mostrar-nav');
const navegador = document.getElementById('navega');


AddeventListener();

//AddeventListener
function AddeventListener(){
//Mostrar el menu
mostrarMenu.addEventListener('click',MostrarMenu);

}


//FUNCIONES
function MostrarMenu(e){
    e.preventDefault();
    navegador.classList.toggle('mostrar');
}






