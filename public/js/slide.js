/* Composant Slider */
var slide = new Array("public/images/avenger.jpg", "public/images/cerveau-humain.jpg", "public/images/couche-soleil.jpg", "public/images/galaxie.jpg");
var numero = 0;
function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById('slide').src = slide[numero];
}
setInterval("ChangeSlide(1)", 4000);