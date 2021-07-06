// import Swiper JS
import Swiper from "swiper";
// import Swiper styles
import "swiper/swiper-bundle.css";

class Slides extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const swiper = new Swiper(".swiper-container", {
      slidesPerView: 1,
      spaceBetween: 30,
      centeredSlides: true,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        991: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        600: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
      },
    });
  }
}
window.customElements.define("slide-functions", Slides);
