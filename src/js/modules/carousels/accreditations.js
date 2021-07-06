// import Swiper JS
import Swiper from "swiper";
// import Swiper styles
import "swiper/swiper-bundle.css";

class SlidesAccreditations extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const swiper = new Swiper(".swiper-container", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        991: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
      },
    });
  }
}
window.customElements.define("slide-accreditations", SlidesAccreditations);
