<!--Début du modal pour ajout d'un todo -->
<div id="modalAJtodo" class="modal modal-fixed-footer">
  <form action="#" method="post">
    <div class="modal-content">
      <h4>Ajout d'un todo</h4>
      <div class="row">
        <div class="row">
          <div class="input-field col s6">
            <input  id="addtodotitre" type="text" name="titre" class="validate">
            <label class="todotitrelab" for="todotitre">Titre</label>
          </div>
          <div class="input-field col s6">
            <input id="addtododate" name="date" type="date" class="datepicker">
            <label class="tododatelab" for="tododate">Pour le</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="addtododescr"  name="description" class="materialize-textarea"></textarea>
            <label for="tododescr">Description</label>
          </div>
        </div>
        <p class="range-field" style="padding: 0 0.75rem;">Réalisé (%)<input type="range" name="range" min="0" max="100" />
        </p>
      </div>
    </div>
    <div class="modal-footer">
      <button type="submit" name="ajouttodo" class="modal-action modal-close waves-effect waves-green btn-flat" >Confirmer</button>
    </div>
  </form>
</div>
<!--Fin du modal pour ajout d'un todo -->
<!--Début du modal pour la modification d'un todo -->
<div id="modalUpTodo" class="modal modal-fixed-footer">
  <form action="#" method="post">
    <div class="modal-content">
        <h4>Modification du Todo</h4>
        <div class="row">
          <div class="row">
            <div class="input-field col s6">
              <input style="display:none;" id="idtup" type="text" name="idt" class="validate">
              <input  id="todotitre" type="text" name="titre" class="validate">
              <label class="todotitrelab" for="todotitre">Titre</label>
            </div>
            <div class="input-field col s6">
              <input id="tododate" name="date" type="date" class="datepicker">
              <label class="tododatelab" for="tododate">Pour le</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="tododescr" name="description" class="materialize-textarea"></textarea>
              <label for="tododescr">Description</label>
            </div>
          </div>
          <p class="range-field" style="padding: 0 0.75rem;">Réalisé (%)<input type="range" name="range" id="todoreal" min="0" max="100" />
          </p>
        </div>
      </div>
    <div class="modal-footer">
      <button type="submit" name="updatetodo" class="modal-action modal-close waves-effect waves-green btn-flat" >Confirmer</button>
    </div>
  </form>
</div>
<!--Fin du modal pour la modification d'un todo -->
<!--Début du modal pour la modification du % de réalisation d'un todo -->
<div id="modalReal" class="modal">
  <form action="#" method="post">
    <div class="modal-content">
      <h4>Modification du % de réalisation</h4>
      <p class="range-field">
        <input style="display:none;" type="text" id="idtupreal" name="idt" class="validate">
        <input type="range" name="range" id="realrange" min="0" max="100" />
      </p>
    </div>
    <div class="modal-footer">
      <button type="submit" name="updatereal" class="modal-action modal-close waves-effect waves-green btn-flat" >Confirmer</button>
    </div>
  </form>
</div>
<!--Fin du modal pour la modification du % de réalisation d'un todo -->
<div id="modalUpTodoPers" class="modal modal-fixed-footer">
  <form action="#" method="post">
    <div class="modal-content">
      <h4>Modification des personnes concernées</h4>
      
        <div class="row">
          <div class="input-field col s6">
            <a class="waves-effect waves-light btn" style="display: block;" id="ajout_concerner">Ajouter une personne</a>
            <div id="div_ajout"  class="input-field col s6">
                <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                </select>
            </div>
          </div>
          <div class="input-field col s6">
            <a class="waves-effect waves-light btn" style="display: block;" id="delete_concerner">Supprimer une personne</a>
            <div id="div_del" style="display: none;"  class="input-field col s6">
                <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                </select>
            </div>
          </div>
        </div>      
    </div>
    <div class="modal-footer">
      <button type="submit" name="ajouttodo" class="modal-action modal-close waves-effect waves-green btn-flat" >Confirmer</button>
    </div>
  </form>
</div>