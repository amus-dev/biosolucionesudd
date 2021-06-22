import { user, BASE_PATH } from "./const";
import { validateRut } from "@fdograph/rut-utilities";
const isemail = require("email-format-check");

const SET_CAMPS_USER = () => {
  user.nameUser = document.getElementById("inputName").value;
  user.rutUser = document.getElementById("inputRut").value;
  user.address = document.getElementById("inputAddress").value;
  user.comuna = document.getElementById("inputneighborhood").value;
  user.phone = document.getElementById("inputPhone").value;
  user.emailUser = document.getElementById("inputMail").value;
  user.isPacient = GET_VALUE_RADIOBUTTON(document.getElementsByName("isPacient"));
  user.namePacient = document.getElementById("inputNamePacient").value;
  user.rutPacient = document.getElementById("inputRutPacient").value;
  user.typeReclamo = GET_VALUE_RADIOBUTTON(document.getElementsByName("typeReclamo"));
  user.descriptionReclamo = document.getElementById("inputDescription").value;
  user.reclamoPeticion = document.getElementById("inputPeticion").value;
  user.authorize = document.getElementById("inputAutorize").checked === true ? true : false;
};

const VALIDATE_SHOW_ALERTS = () => {
  const messageForm = document.getElementById("messageForm");
  !user.nameUser
    ? document.getElementById("inputName").classList.add("error")
    : document.getElementById("inputName").classList.remove("error");
  !validateRut(user.rutUser)
    ? document.getElementById("inputRut").classList.add("error")
    : document.getElementById("inputRut").classList.remove("error");
  !user.address
    ? document.getElementById("inputAddress").classList.add("error")
    : document.getElementById("inputAddress").classList.remove("error");
  !user.comuna
    ? document.getElementById("inputneighborhood").classList.add("error")
    : document.getElementById("inputneighborhood").classList.remove("error");
  !user.phone
    ? document.getElementById("inputPhone").classList.add("error")
    : document.getElementById("inputPhone").classList.remove("error");
  !isemail(user.emailUser)
    ? document.getElementById("inputMail").classList.add("error")
    : document.getElementById("inputMail").classList.remove("error");
  !user.namePacient
    ? document.getElementById("inputNamePacient").classList.add("error")
    : document.getElementById("inputNamePacient").classList.remove("error");
  !validateRut(user.rutPacient)
    ? document.getElementById("inputRutPacient").classList.add("error")
    : document.getElementById("inputRutPacient").classList.remove("error");
  !user.descriptionReclamo
    ? document.getElementById("inputDescription").classList.add("error")
    : document.getElementById("inputDescription").classList.remove("error");

  if(user.nameUser && validateRut(user.rutUser)=== true && user.address && user.comuna && user.phone && isemail(user.emailUser) && user.namePacient && validateRut(user.rutPacient)===true && user.descriptionReclamo){
    return true;
  }
  else{
    const messageForm = document.getElementById("messageForm");
    messageForm.classList.remove("alert-success");
    messageForm.classList.add("alert-danger");
    messageForm.classList.remove("hidden");
    messageForm.innerText= "Revise los campos marcados en rojo."
  }
};

const SEND_FORM = async () =>{
  const url = `${BASE_PATH}`;
  const params = {
    method: "POST",
    body: JSON.stringify({data: user}),
    headers: {
      "Content-Type": "application/json",
    },
  };
  const response = await fetch(url, params);
  if(response.status === 200){
    const messageForm = document.getElementById("messageForm");
    messageForm.classList.remove("alert-danger");
    messageForm.classList.add("alert-success");
    messageForm.classList.remove("hidden");
    messageForm.innerText= "Registrado finalizado.";
    const formContact = document.getElementById("formContact")
    formContact.reset();
  }
}

const GET_VALUE_RADIOBUTTON = (radioButton) => {
  for (let i = 0; i < radioButton.length; i++) {
    if (radioButton[i].checked) {
      return radioButton[i].value;
    }
  }
};

export { SET_CAMPS_USER, VALIDATE_SHOW_ALERTS, SEND_FORM };
