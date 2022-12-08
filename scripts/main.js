document.addEventListener('DOMContentLoaded', () => {

    const elementosCarousel = document.querySelectorAll('.carousel');
    // Materialize.
    M.Carousel.init(elementosCarousel, {
        duration: 150,
        dist: -80,
        shift: 5,
        padding: 5,
        numVisible: 3,
        noWrap: false
    });

});

function showMore(mapa) {
    boton = document.getElementById("Button-"+mapa);
    visibilidad = document.getElementById(mapa);
    if (visibilidad.style.visibility == "visible"){
        visibilidad.style.visibility = "hidden";
        boton.value = "Read More";
        visibilidad.style.position = "absolute";
    }else{
        visibilidad.style.visibility = "visible";
        boton.value = "Read Less";
        visibilidad.style.position = "relative";
    }
}