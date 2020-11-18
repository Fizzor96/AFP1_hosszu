<div class="container-fluid p-4">
    <form method="POST">
        <input type="hidden" name="id" value="<?=$d['id']?>">
        <div class="form-group">
            <label >Felhasználónév</label>
            <input name="username" type="text" class="form-control" value="<?=$d['username']?>">
        </div>
        <div class="form-group">
            <label >Email</label>
            <input name="email" type="text" class="form-control" value="<?=$d['email']?>">
        </div>
        <div class="form-group">
            <label >Jogok</label>
            <input name="flags" type="text" class="form-control" value="<?=$d['flags']?>">
        </div>
        <button name="edit" type="submit" class="btn btn-primary">Frissítés</button>
    </form>
</div>