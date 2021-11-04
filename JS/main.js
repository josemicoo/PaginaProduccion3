window.addEventListener("scroll", function (){
    let animacion = document.getElementByIdId("animado");
    let posicionObj1 = animacion .getBoundingClientRect().top();
    console.log(posicionObj1)

let tamañoDePantalla = window.innerHeight/3.5;

if (positionObj1 < tamañoDePantalla){
    animacion.style.animation = "entradaFotos"
}

})