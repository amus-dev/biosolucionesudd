import { SET_CAMPS_USER, VALIDATE_SHOW_ALERTS } from "./functions/index";

class formBuzon extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const btnSendContact = document.getElementById("btnSendContact");

    btnSendContact.addEventListener("click", function (e) {
      e.preventDefault();
      SET_CAMPS_USER();
      VALIDATE_SHOW_ALERTS();
    });
  }
}
window.customElements.define("form-functions", formBuzon);
