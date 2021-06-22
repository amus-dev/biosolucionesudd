class Preload extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const loader = document.getElementById("preload");
    setTimeout(() => {
      loader.classList.add("is-hidden");
    }, 1500);
  }
}
window.customElements.define("preload-functions", Preload);
