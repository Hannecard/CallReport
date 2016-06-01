<!--Début du modal pour l'ajout d'un pense bête -->
<div id="modalAJpb" class="modal modal-fixed-footer">
  <form action="#" method="post">
    <div class="modal-content">
      <h4>Ajout d'un todo</h4>
      <div class="row">
        <div class="row">
          <div class="input-field col s6">
            <input  id="addpbtitre" type="text" name="titre" class="validate">
            <label class="todotitrelab" for="todotitre">Titre</label>
          </div>
          <div class="input-field col s6">
            <input id="addpbdate" name="date" type="date" class="datepicker">
            <label class="addpbdatelab" for="tododate">Pour le</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="addpbdescr"  name="description" class="materialize-textarea"></textarea>
            <label for="addpbdescr">Description</label>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button type="submit" name="ajoutpb" class=" modal-action modal-close waves-effect waves-green btn-flat" >Confirmer</button>
    </div>
  </form>
</div>
<!--Fin du modal pour l'ajout d'un pense bête -->
<!--Début du modal pour la modification d'un pense bête -->
<div id="modalUpPenseBete" class="modal modal-fixed-footer">
  <form action="#" method="post">
    <div class="modal-content">
      <h4>Modification du Pense-Bête</h4>
      <div class="row">
        <div class="row">
          <div class="input-field col s6">
            <input style="display:none;" id="idpbup" type="text" name="idpb" class="validate">
            <input  id="pbtitre" type="text" name="titre" class="validate">
            <label class="pbtitrelab" for="pbtitre">Titre</label>
          </div>
          <div class="input-field col s6">
            <input id="pbdate" name="date" type="date" class="datepicker">
            <label class="pbdatelab" for="pbdate">Pour le</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="pbdescr" name="description" class="materialize-textarea"></textarea>
            <label class="pbdescrlab" for="pbdescr">Description</label>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button type="submit" name="updatepb" class=" modal-action modal-close waves-effect waves-green btn-flat" >Confirmer</button>
    </div>
  </form>
</div>
<!--Fin du modal pour la modification d'un pense bête -->
