class AlertCovid extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const btnClose = document.getElementById("btnClose");
    btnClose.addEventListener("click", () => {
      const alertCovid = document.querySelector(".alertCovid");
      alertCovid.innerHTML = "";
      alertCovid.classList.add("not-visible");
    });
  }
}
window.customElements.define("alertcovid-functions", AlertCovid);
