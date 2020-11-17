
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="POST">
        <div class="modal-header">
          <h5 class="modal-title">Regisztráció</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="registerUsername">Felhasználónév</label>
            <input type="text" class="form-control" id="inputRegisterUsername" name="inputRegisterUsername" aria-describedby="userHelp">            
          </div>
          <div class="form-group">
            <label for="registerEmail">Email cím</label>
            <input type="email" class="form-control" id="inputRegisterEmail" name="inputRegisterEmail" aria-describedby="emailHelp">            
            <label for="registerEmail1">Email cím mégegyszer</label>
            <input type="email" class="form-control" id="inputRegisterEmail1" name="inputRegisterEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="registerPassword">Jelszó</label>
            <input type="password" class="form-control" id="inputRegisterPassword" name="inputRegisterPassword">
            <label for="registerPassword1">Jelszó mégegyszer</label>
            <input type="password" class="form-control" id="inputRegisterPassword1" name="inputRegisterPassword1">
          </div>

          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input"value="true" name="yes">
            <label class="form-check-label">Elolvastam és elfogadom a felhasználási feltételeket!</label>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Mégsem</button>
          <button type="submit" name="regisztracio" class="btn btn-primary" id="elkuldes">Regisztráció</button>
        </div>
      </form>
    </div>
  </div>
</div>


