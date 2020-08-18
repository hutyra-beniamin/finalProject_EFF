<button type="button" class="btn btn-secondary mb-4" data-toggle="modal" data-target="#postModal">Post hinzufügen</button>

<!-- Modal -->
<div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="postModalTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="postModalTitle">Termin hinzufügen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="db_insert_general.php" method="POST">
        <input type="hidden" class="form-control" name="table" id="table" value="posts">
        <input type="hidden" class="form-control" name="user" id="user" value="<?php echo $connect->query("SELECT * FROM users WHERE id=" . $_SESSION['user'])->fetch_object()->name ?>">
        <div class="modal-body">
          <div class="form-group">
            <label for="title">Titel</label>
            <input type="text" class="form-control" name="title" id="title">
          </div>
          <div class="form-group">
            <label for="post">Post</label>
            <textarea class="form-control" name="post" id="post" rows="10"></textarea>
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