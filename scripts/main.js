document.addEventListener('DOMContentLoaded', () => {

    const elementosCarousel = document.querySelectorAll('.carousel');
    // Materialize.
    M.Carousel.init(elementosCarousel, {
        duration: 0.5,
        dist: -80,
        shift: 5,
        padding: 5,
        numVisible: 3,
        indicators: true,
        noWrap: false
    });

});