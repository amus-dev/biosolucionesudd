// import Swiper JS
import Swiper from "swiper";
// import Swiper styles
import "swiper/swiper-bundle.css";

class slideAcreditaciones extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const swiper = new Swiper(".swiper-container", {
      slidesPerView: 1,
      spaceBetween: 30,
      breakpoints: {
        991: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
      },
    });
  }
}
window.customElements.define("slide-acreditaciones", slideAcreditaciones);
