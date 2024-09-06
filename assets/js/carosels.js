function initializeCarousel(carouselId) {
  let items = document.querySelectorAll(`#${carouselId} .carousel-item`);
  items.forEach((el) => {
    const minPerSlide = 4;
    let next = el.nextElementSibling;
    for (let i = 1; i < minPerSlide; i++) {
      if (!next) {
        next = items[0]; // Wrap carousel by using the first item
      }
      let cloneChild = next.cloneNode(true);
      el.appendChild(cloneChild.children[0]);
      next = next.nextElementSibling;
    }
  });
}
// Initialize all carousels
initializeCarousel("recipeCarousel1");
initializeCarousel("recipeCarousel2");
initializeCarousel("recipeCarousel3");
