class Team extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const teamClick = document.querySelectorAll("#teamClick");
    teamClick.forEach((click) => {
      click.addEventListener("click", (e) => {
        const { image, name, cargo, information } = e.target.dataset;
        console.log(e.target);
        console.log(name);
        console.log(cargo);
        console.log(information);
      });
    });
  }
}
window.customElements.define("team-modal", Team);
