import {
  SET_CAMPS_USER,
  VALIDATE_SHOW_ALERTS,
  SEND_FORM,
  SET_INPUTS_PACIENT,
} from "./functions/index";

class formBuzon extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const btnSendContact = document.getElementById("btnSendContact");
    btnSendContact.addEventListener("click", (e) => {
      e.preventDefault();
      SET_CAMPS_USER();
      VALIDATE_SHOW_ALERTS();
      if (VALIDATE_SHOW_ALERTS() === true) {
        SEND_FORM();
      }
    });

    const handleChangeIsPacient = document.getElementsByName("isPacient");
    handleChangeIsPacient.forEach((handleClick) => {
      handleClick.addEventListener("click", (e) => {
        const { value } = e.target;
        SET_INPUTS_PACIENT(value);
      });
    });
  }
}
window.customElements.define("form-functions", formBuzon);
