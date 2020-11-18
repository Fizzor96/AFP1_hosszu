<div class="container-fluid p-4">
	<form method="POST">
		<input type="hidden" name="id" value="<?=$d['id']?>">
		<div class="form-group">
			<label >Név</label>
			<input name="name" type="text" class="form-control" value="<?=$d['name']?>">
		</div>
		<div class="form-group">
			<label >Szállítási idő</label>
			<input name="szall_ido" type="text" class="form-control" value="<?=$d['szall_ido']?>">
		</div>
		<div class="form-group">
			<label >Szállítási díj</label>
			<input name="szall_dij" type="text" class="form-control" value="<?=$d['szall_dij']?>">
		</div>
		<div class="form-group">
			<label >Értékelés összesen</label>
			<input name="ertekeles_ossz" type="text" class="form-control" value="<?=$d['ertekeles_ossz']?>">
		</div>
		<div class="form-group">
			<label >Értékelők száma</label>
			<input name="ertekelok_szama" type="text" class="form-control" value="<?=$d['ertekelok_szama']?>">
		</div>
		<div class="form-group">
			<label >Város id</label>
			<input name="cityId" type="text" class="form-control" value="<?=$d['cityId']?>">
		</div>
		<button name="edit" type="submit" class="btn btn-primary">Frissítés</button>
	</form>
</div>