import { SET_CAMPS_USER, VALIDATE_SHOW_ALERTS, SEND_FORM } from "./functions/index";

class formBuzon extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const btnSendContact = document.getElementById("btnSendContact");

    btnSendContact.addEventListener("click", (e)=> {
      e.preventDefault();
      SET_CAMPS_USER();
      VALIDATE_SHOW_ALERTS();
      if(VALIDATE_SHOW_ALERTS() === true){
        SEND_FORM();
      }
    });
  }
}
window.customElements.define("form-functions", formBuzon);
