<button type="button" class="btn btn-secondary mb-4" data-toggle="modal" data-target="#exampleModalLong">Termin hinzufügen</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Termin hinzufügen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="db_insert_general.php" method="POST">
        <input type="hidden" class="form-control" name="table" id="table" value="events">
        <div class="modal-body">
          <div class="form-group">
            <label for="title">Titel</label>
            <input type="text" class="form-control" name="title" id="title">
          </div>
          <div class="form-group">
            <label for="date">Datum</label>
            <input type="date" class="form-control" name="date" id="date">
          </div>
          <div class="form-group">
            <label for="time">Uhrzeit</label>
            <input type="time" class="form-control" name="time" id="time">
          </div>
          <div class="form-group">
            <label for="description">Beschreibung</label>
            <textarea class="form-control" name="description" id="description" rows="10"></textarea>
          </div>
          <div class="form-group">
            <label for="place">Ort</label>
            <input type="text" class="form-control" id="place" name="place">
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Abbrechen</button>
          <button type="submit" class="btn btn-outline-secondary">Speichern</button>
        </div>
      </form>
    </div>
  </div>
</div>