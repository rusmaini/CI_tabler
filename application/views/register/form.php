<div class="row">
	<div class="col col-login mx-auto">

    	<?=form_open('register/',array('class'=>'card')); ?>
        <div class="card-body p-6">
			<div class="card-title">Buat akaun baru</div>
			<?= $this->session->flashdata('notice');?>
			<div class="form-group">
			  <label class="form-label">Nama Pengguna</label>
			  <input type="text" class="form-control" name="username" id="username" value="<?=set_value('username')?>">
		  	  <?= form_error('username'); ?>
			</div>
			<div class="form-group">
			  <label class="form-label">Emel</label>
			  <input type="text" class="form-control" name="email" id="email" value="<?=set_value('email')?>">
				<?= form_error('email'); ?>
			</div>
			<div class="form-group">
			  <label class="form-label">Kata laluan</label>
			  <input type="password" class="form-control" name="password" id="password" value="<?=set_value('password')?>">
				<?= form_error('password'); ?>
			</div>
			<div class="form-group">
			  <label class="form-label">Ulang kata laluan</label>
			  <input type="password" class="form-control" name="repassword" id="repassword" value="<?=set_value('repassword')?>">
				<?= form_error('repassword'); ?>
			</div>
			<div class="form-group">
			  <label class="custom-control custom-checkbox">
			    <input type="checkbox" class="custom-control-input" />
			    <span class="custom-control-label">Bersetuju dengan <a href="terms.html">terma dan syarat</a></span>
			  </label>
			</div>
			<div class="form-footer">
			  <button type="submit" class="btn btn-primary btn-block">Buat akaun baru</button>
			</div>
		</div>
		<?=form_close(); ?>
		<div class="text-center text-muted">
		Sudah mempunyai akaun? <a href="<?=base_url().'auth/login'?>">Log masuk</a>
		</div>
	</div>
</div>