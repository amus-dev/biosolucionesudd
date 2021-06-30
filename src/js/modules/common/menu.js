class Menu extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const menuDom = document.getElementById("sectionMenu");
    window.addEventListener("scroll", () => {
      const top = window.scrollY;
      top >= 130
        ? menuDom.classList.add("active")
        : menuDom.classList.remove("active");
      console.log(top);
    });
  }
}
window.customElements.define("menu-functions", Menu);
