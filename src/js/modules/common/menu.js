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
    });

    const arrowMenu = document.getElementById("arrowMenu");

    arrowMenu.addEventListener("click", () => {
      arrowMenu.classList.toggle("open");

      const dropdown__menu = document.querySelector(".dropdown__menu");
      dropdown__menu.classList.toggle("visible");
    });
  }
}
window.customElements.define("menu-functions", Menu);
