
// intervalo de slider

document.addEventListener("DOMContentLoaded", function() {
    new bootstrap.Carousel(document.getElementById("carouselExampleControls"), {
        interval: 4000, // Ajusta el valor a la cantidad de milisegundos que deseas para la duración de cada diapositiva
        pause: false
    });
});