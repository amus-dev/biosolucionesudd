<section class="formContainer needs-validation">
     <div class="container">
          <h2 class="formContainer__tile">Formulario de reclamo, felicitaciones o sugerencias</h2>
          <form class="formContainer__form" id="formContact" novalidate>
               <div class="form__block">
                    <label class="form__label" for="inputName">Nombre del usuario: <span>*</span></label>
                    <input type="text" name="inputName" id="inputName" class="form__input form-control" required>
                    <div class="valid-feedback">
                         Looks good!
                    </div>
               </div>
               <div class="form__block">
                    <label class="form__label" for="inputRut">Rut: <span>*</span></label>
                    <input type="text" name="inputRut" id="inputRut" class="form__input form-control" maxlength="12" required />
               </div>
               <div class="form__block">
                    <label class="form__label" for="inputAddress">Dirección: <span>*</span></label>
                    <input type="text" name="inputAddress" id="inputAddress" class="form__input form-control" required />
               </div>
               <div class="form__block">
                    <label class="form__label" for="inputNeighborhood">Comuna - Región: <span>*</span></label>
                    <input type="text" name="inputneighborhood" id="inputneighborhood" class="form__input form-control" required />
               </div>
               <div class="form__block">
                    <label class="form__label" for="inputPhone">Teléfono: <span>*</span></label>
                    <input type="tel" name="inputPhone" id="inputPhone" class="form__input form-control" maxlength="12" required />
               </div>
               <div class="form__block">
                    <label class="form__label" for="inputMail">Correo electrónico: <span>*</span></label>
                    <input type="mail" name="inputMail" id="inputMail" class="form__input form-control" required />
               </div>
               <div class="form__block">
                    <label class="form__label mb-4">¿Es ud. el paciente?: <span>*</span></label>
                    <div class="form-check">
                         <input class="form-check-input" type="radio" name="isPacient" id="optionSi" value="true" checked />
                         <label class="form-check-label" for="optionSi">Sí</label>
                    </div>
                    <div class="form-check">
                         <input class="form-check-input" type="radio" name="isPacient" id="optionNo" value="false" />
                         <label class="form-check-label" for="optionNo">No</label>
                    </div>
               </div>
               <div class="form__block">
                    <label class="form__label" for="inputNamePacient">Nombre del paciente: <span>*</span></label>
                    <input type="text" name="inputNamePacient" id="inputNamePacient" class="form__input form-control" required />
               </div>
               <div class="form__block">
                    <label class="form__label" for="inputRutPacient">Rut del paciente: <span>*</span></label>
                    <input type="text" name="inputRutPacient" id="inputRutPacient" class="form__input form-control" required />
               </div>
               <div class="form__block">
                    <label class="form__label mb-4">Tipo de Reclamo: <span>*</span></label>
                    <div class="form-check">
                         <input class="form-check-input" type="radio" name="typeReclamo" id="optionSi" value="Reclamo" checked />
                         <label class="form-check-label" for="optionSi">Reclamo</label>
                    </div>
                    <div class="form-check">
                         <input class="form-check-input" type="radio" name="typeReclamo" id="optionNo" value="Felicitaciones" />
                         <label class="form-check-label" for="optionNo">Felicitaciones</label>
                    </div>
                    <div class="form-check">
                         <input class="form-check-input" type="radio" name="typeReclamo" id="optionNo" value="Sugerencia" />
                         <label class="form-check-label" for="optionNo">Sugerencia</label>
                    </div>
               </div>
               <div class="form__block">
                    <label class="form__label" for="inputDescription">Descripción del reclamo, felicitaciones o sugerencia: <span>*</span></label>
                    <textarea class="form-control form__area" id="inputDescription" rows="3" required></textarea>
               </div>
               <div class="form__block">
                    <label class="form__label" for="inputPeticion">En caso de reclamo, realice una petición concreta:</label>
                    <textarea class="form-control form__area" id="inputPeticion" rows="3"></textarea>
               </div>
               <div class="form__block">
                    <label class="form__label mb-3">Autorizo respuesta vía correo electrónico:</label>
                    <div class="form-check form-switch">
                         <input class="form-check-input" type="checkbox" id="inputAutorize">
                         <label class="form-check-label" for="inputAutorize">Marque para autorizar</label>
                    </div>
               </div>
               <div class="form__block">
                    <button type="submit" class="btn btn-primary btnContact" id="btnSendContact">Enviar</button>
               </div>
               <div class="form__block">
                    <div class="alert hidden" role="alert" id="messageForm">
                         Revise los campos marcados en rojo.
                    </div>
               </div>
               <form-functions></form-functions>
          </form>
     </div>
</section>