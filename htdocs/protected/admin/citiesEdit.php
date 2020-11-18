<div class="container-fluid p-4">
    <form method="POST">
        <input type="hidden" name="cid" value="<?=$d['cid']?>">
        <div class="form-group">
            <label >Város neve</label>
            <input name="Name" type="text" class="form-control" value="<?=$d['Name']?>">
        </div>
        <button name="edit" type="submit" class="btn btn-primary">Frissítés</button>
    </form>
</div>